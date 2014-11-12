<?php

class BugsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /bugs
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function buglist() {
		$bugs=Bug::all();
		$languages=Llang::all();
		return View::make(
			'buglist',
			compact(
				'bugs',
				'languages'
				)
			)
		;
	}

	public function deleted () {
		$bugs=Bug::onlyTrashed()->get();
		return View::make(
			'softdeleted',
			compact(
				'bugs'/*,
				'languages'*/
				)
			)
		;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /bugs/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /bugs
	 *
	 * @return Response
	 */
	public function store()
	{
		$description=Input::get('description');
		$language=Input::get('language');
		$solution=Input::get('solution');

		$b=new Bug;
		$b->description=$description;
		$b->solution=$solution;
		$b->save();

		$l=Bug::find($b->id);
		$language=explode(',', $language);

		foreach ($language as  $lg) {
			$l->llangs()->attach($lg);
			$l->save();
		}

		return 1;
	}

	/**
	 * Display the specified resource.
	 * GET /bugs/{id}
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
	 * GET /bugs/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$bug=Bug::whereId($id)->withTrashed()->first();
		$languages=Llang::all();
		return View::make(
			'bugs.edit',
			compact(
				'id',
				'bug',
				'languages'
				)
			)
		;
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /bugs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$description=Input::get('description');
		$language=Input::get('language');
		$solution=Input::get('solution');
		//
		$b=Bug::find($id);
		$b->llangs()->detach();
		$b->description=$description;
		$b->solution=$solution;
		$b->save();
		//
		$language=explode(',',$language);

		foreach ($language as  $lg) {
			$b->llangs()->attach($lg);
			$b->save();
		}
		return Redirect::to('/');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /bugs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function restore ($id) {
		$bug=Bug::whereId($id)->withTrashed()->first()->restore();
		return Redirect::to('/del');
	}

}