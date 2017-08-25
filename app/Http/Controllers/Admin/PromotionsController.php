<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Promotions;
use App\Http\Requests\CreatePromotionsRequest;
use App\Http\Requests\UpdatePromotionsRequest;
use Illuminate\Http\Request;



class PromotionsController extends Controller {

	/**
	 * Display a listing of promotions
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $promotions = Promotions::all();

		return view('admin.promotions.index', compact('promotions'));
	}

	/**
	 * Show the form for creating a new promotions
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.promotions.create');
	}

	/**
	 * Store a newly created promotions in storage.
	 *
     * @param CreatePromotionsRequest|Request $request
	 */
	public function store(CreatePromotionsRequest $request)
	{
	    
		Promotions::create($request->all());

		return redirect()->route(config('quickadmin.route').'.promotions.index');
	}

	/**
	 * Show the form for editing the specified promotions.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$promotions = Promotions::find($id);
	    
	    
		return view('admin.promotions.edit', compact('promotions'));
	}

	/**
	 * Update the specified promotions in storage.
     * @param UpdatePromotionsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePromotionsRequest $request)
	{
		$promotions = Promotions::findOrFail($id);

        

		$promotions->update($request->all());

		return redirect()->route(config('quickadmin.route').'.promotions.index');
	}

	/**
	 * Remove the specified promotions from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Promotions::destroy($id);

		return redirect()->route(config('quickadmin.route').'.promotions.index');
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
            Promotions::destroy($toDelete);
        } else {
            Promotions::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.promotions.index');
    }

}
