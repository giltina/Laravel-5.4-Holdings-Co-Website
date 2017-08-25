<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Announcements;
use App\Http\Requests\CreateAnnouncementsRequest;
use App\Http\Requests\UpdateAnnouncementsRequest;
use Illuminate\Http\Request;



class AnnouncementsController extends Controller {

	/**
	 * Display a listing of announcements
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $announcements = Announcements::all();

		return view('admin.announcements.index', compact('announcements'));
	}

	/**
	 * Show the form for creating a new announcements
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.announcements.create');
	}

	/**
	 * Store a newly created announcements in storage.
	 *
     * @param CreateAnnouncementsRequest|Request $request
	 */
	public function store(CreateAnnouncementsRequest $request)
	{
	    
		Announcements::create($request->all());

		return redirect()->route(config('quickadmin.route').'.announcements.index');
	}

	/**
	 * Show the form for editing the specified announcements.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$announcements = Announcements::find($id);
	    
	    
		return view('admin.announcements.edit', compact('announcements'));
	}

	/**
	 * Update the specified announcements in storage.
     * @param UpdateAnnouncementsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateAnnouncementsRequest $request)
	{
		$announcements = Announcements::findOrFail($id);

        

		$announcements->update($request->all());

		return redirect()->route(config('quickadmin.route').'.announcements.index');
	}

	/**
	 * Remove the specified announcements from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Announcements::destroy($id);

		return redirect()->route(config('quickadmin.route').'.announcements.index');
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
            Announcements::destroy($toDelete);
        } else {
            Announcements::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.announcements.index');
    }

}
