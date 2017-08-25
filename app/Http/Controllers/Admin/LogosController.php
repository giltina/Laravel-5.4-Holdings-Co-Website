<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Logos;
use App\Http\Requests\CreateLogosRequest;
use App\Http\Requests\UpdateLogosRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class LogosController extends Controller {

	/**
	 * Display a listing of logos
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $logos = Logos::all();

		return view('admin.logos.index', compact('logos'));
	}

	/**
	 * Show the form for creating a new logos
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.logos.create');
	}

	/**
	 * Store a newly created logos in storage.
	 *
     * @param CreateLogosRequest|Request $request
	 */
	public function store(CreateLogosRequest $request)
	{
	    $request = $this->saveFiles($request);
		Logos::create($request->all());

		return redirect()->route(config('quickadmin.route').'.logos.index');
	}

	/**
	 * Show the form for editing the specified logos.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$logos = Logos::find($id);
	    
	    
		return view('admin.logos.edit', compact('logos'));
	}

	/**
	 * Update the specified logos in storage.
     * @param UpdateLogosRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateLogosRequest $request)
	{
		$logos = Logos::findOrFail($id);

        $request = $this->saveFiles($request);

		$logos->update($request->all());

		return redirect()->route(config('quickadmin.route').'.logos.index');
	}

	/**
	 * Remove the specified logos from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Logos::destroy($id);

		return redirect()->route(config('quickadmin.route').'.logos.index');
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
            Logos::destroy($toDelete);
        } else {
            Logos::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.logos.index');
    }

}
