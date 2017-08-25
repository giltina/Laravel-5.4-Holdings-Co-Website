<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Deals;
use App\Http\Requests\CreateDealsRequest;
use App\Http\Requests\UpdateDealsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class DealsController extends Controller {

	/**
	 * Display a listing of deals
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $deals = Deals::all();

		return view('admin.deals.index', compact('deals'));
	}

	/**
	 * Show the form for creating a new deals
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.deals.create');
	}

	/**
	 * Store a newly created deals in storage.
	 *
     * @param CreateDealsRequest|Request $request
	 */
	public function store(CreateDealsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Deals::create($request->all());

		return redirect()->route(config('quickadmin.route').'.deals.index');
	}

	/**
	 * Show the form for editing the specified deals.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$deals = Deals::find($id);
	    
	    
		return view('admin.deals.edit', compact('deals'));
	}

	/**
	 * Update the specified deals in storage.
     * @param UpdateDealsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDealsRequest $request)
	{
		$deals = Deals::findOrFail($id);

        $request = $this->saveFiles($request);

		$deals->update($request->all());

		return redirect()->route(config('quickadmin.route').'.deals.index');
	}

	/**
	 * Remove the specified deals from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Deals::destroy($id);

		return redirect()->route(config('quickadmin.route').'.deals.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Deals::destroy($toDelete);
        } else {
            Deals::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.deals.index');
    }

}
