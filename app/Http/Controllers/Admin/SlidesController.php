<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Slides;
use App\Http\Requests\CreateSlidesRequest;
use App\Http\Requests\UpdateSlidesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class SlidesController extends Controller {

	/**
	 * Display a listing of slides
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $slides = Slides::all();

		return view('admin.slides.index', compact('slides'));
	}

	/**
	 * Show the form for creating a new slides
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.slides.create');
	}

	/**
	 * Store a newly created slides in storage.
	 *
     * @param CreateSlidesRequest|Request $request
	 */
	public function store(CreateSlidesRequest $request)
	{
	    $request = $this->saveFiles($request);
		Slides::create($request->all());

		return redirect()->route(config('quickadmin.route').'.slides.index');
	}

	/**
	 * Show the form for editing the specified slides.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$slides = Slides::find($id);
	    
	    
		return view('admin.slides.edit', compact('slides'));
	}

	/**
	 * Update the specified slides in storage.
     * @param UpdateSlidesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSlidesRequest $request)
	{
		$slides = Slides::findOrFail($id);

        $request = $this->saveFiles($request);

		$slides->update($request->all());

		return redirect()->route(config('quickadmin.route').'.slides.index');
	}

	/**
	 * Remove the specified slides from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Slides::destroy($id);

		return redirect()->route(config('quickadmin.route').'.slides.index');
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
            Slides::destroy($toDelete);
        } else {
            Slides::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.slides.index');
    }

}
