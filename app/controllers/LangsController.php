<?php

class LangsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /langs
	 *
	 * @return Response
	 */
	public function index()
	{
		$langs=Llang::all();
		return View::make(
			'langs.index',
			compact(
				'langs'
				)
			)
		;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /langs/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('langs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /langs
	 *
	 * @return Response
	 */
	public function store()
	{
		if (trim(Input::get('name'))!='') {
			$l=new Llang;
			$l->name=Input::get('name');
			$l->description=Input::get('description');
			$l->save();
			return Redirect::to('lang');
		} else {
			return View::make('langs.create');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /langs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /langs/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /langs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /langs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}