<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Likes;
use App\Http\Requests\CreateLikesRequest;
use App\Http\Requests\UpdateLikesRequest;
use Illuminate\Http\Request;



class LikesController extends Controller {

	/**
	 * Display a listing of likes
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $likes = Likes::all();

		return view('admin.likes.index', compact('likes'));
	}

	/**
	 * Show the form for creating a new likes
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.likes.create');
	}

	/**
	 * Store a newly created likes in storage.
	 *
     * @param CreateLikesRequest|Request $request
	 */
	public function store(CreateLikesRequest $request)
	{
	    
		Likes::create($request->all());

		return redirect()->route(config('quickadmin.route').'.likes.index');
	}

	/**
	 * Show the form for editing the specified likes.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$likes = Likes::find($id);
	    
	    
		return view('admin.likes.edit', compact('likes'));
	}

	/**
	 * Update the specified likes in storage.
     * @param UpdateLikesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateLikesRequest $request)
	{
		$likes = Likes::findOrFail($id);

        

		$likes->update($request->all());

		return redirect()->route(config('quickadmin.route').'.likes.index');
	}

	/**
	 * Remove the specified likes from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Likes::destroy($id);

		return redirect()->route(config('quickadmin.route').'.likes.index');
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
            Likes::destroy($toDelete);
        } else {
            Likes::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.likes.index');
    }

}
