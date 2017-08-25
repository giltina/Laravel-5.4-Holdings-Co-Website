<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Sliders;
use App\Http\Requests\CreateSlidersRequest;
use App\Http\Requests\UpdateSlidersRequest;
use Illuminate\Http\Request;



class SlidersController extends Controller {

	/**
	 * Display a listing of sliders
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $sliders = Sliders::all();

		return view('admin.sliders.index', compact('sliders'));
	}

	/**
	 * Show the form for creating a new sliders
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.sliders.create');
	}

	/**
	 * Store a newly created sliders in storage.
	 *
     * @param CreateSlidersRequest|Request $request
	 */
	public function store(CreateSlidersRequest $request)
	{
	    
		Sliders::create($request->all());

		return redirect()->route(config('quickadmin.route').'.sliders.index');
	}

	/**
	 * Show the form for editing the specified sliders.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$sliders = Sliders::find($id);
	    
	    
		return view('admin.sliders.edit', compact('sliders'));
	}

	/**
	 * Update the specified sliders in storage.
     * @param UpdateSlidersRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSlidersRequest $request)
	{
		$sliders = Sliders::findOrFail($id);

        

		$sliders->update($request->all());

		return redirect()->route(config('quickadmin.route').'.sliders.index');
	}

	/**
	 * Remove the specified sliders from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Sliders::destroy($id);

		return redirect()->route(config('quickadmin.route').'.sliders.index');
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
            Sliders::destroy($toDelete);
        } else {
            Sliders::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.sliders.index');
    }

}
