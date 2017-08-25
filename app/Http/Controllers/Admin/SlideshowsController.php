<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Slideshows;
use App\Http\Requests\CreateSlideshowsRequest;
use App\Http\Requests\UpdateSlideshowsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class SlideshowsController extends Controller {

	/**
	 * Display a listing of slideshows
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $slideshows = Slideshows::all();

		return view('admin.slideshows.index', compact('slideshows'));
	}

	/**
	 * Show the form for creating a new slideshows
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.slideshows.create');
	}

	/**
	 * Store a newly created slideshows in storage.
	 *
     * @param CreateSlideshowsRequest|Request $request
	 */
	public function store(CreateSlideshowsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Slideshows::create($request->all());

		return redirect()->route(config('quickadmin.route').'.slideshows.index');
	}

	/**
	 * Show the form for editing the specified slideshows.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$slideshows = Slideshows::find($id);
	    
	    
		return view('admin.slideshows.edit', compact('slideshows'));
	}

	/**
	 * Update the specified slideshows in storage.
     * @param UpdateSlideshowsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSlideshowsRequest $request)
	{
		$slideshows = Slideshows::findOrFail($id);

        $request = $this->saveFiles($request);

		$slideshows->update($request->all());

		return redirect()->route(config('quickadmin.route').'.slideshows.index');
	}

	/**
	 * Remove the specified slideshows from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Slideshows::destroy($id);

		return redirect()->route(config('quickadmin.route').'.slideshows.index');
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
            Slideshows::destroy($toDelete);
        } else {
            Slideshows::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.slideshows.index');
    }

}
