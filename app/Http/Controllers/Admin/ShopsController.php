<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Shops;
use App\Http\Requests\CreateShopsRequest;
use App\Http\Requests\UpdateShopsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class ShopsController extends Controller {

	/**
	 * Display a listing of shops
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $shops = Shops::all();

		return view('admin.shops.index', compact('shops'));
	}

	/**
	 * Show the form for creating a new shops
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.shops.create');
	}

	/**
	 * Store a newly created shops in storage.
	 *
     * @param CreateShopsRequest|Request $request
	 */
	public function store(CreateShopsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Shops::create($request->all());

		return redirect()->route(config('quickadmin.route').'.shops.index');
	}

	/**
	 * Show the form for editing the specified shops.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$shops = Shops::find($id);
	    
	    
		return view('admin.shops.edit', compact('shops'));
	}

	/**
	 * Update the specified shops in storage.
     * @param UpdateShopsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateShopsRequest $request)
	{
		$shops = Shops::findOrFail($id);

        $request = $this->saveFiles($request);

		$shops->update($request->all());

		return redirect()->route(config('quickadmin.route').'.shops.index');
	}

	/**
	 * Remove the specified shops from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Shops::destroy($id);

		return redirect()->route(config('quickadmin.route').'.shops.index');
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
            Shops::destroy($toDelete);
        } else {
            Shops::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.shops.index');
    }

}
