<?php

class MembersController extends \BaseController {

	/**
	 * Create Member
	 *
	 * @return Response
	 */

	public function index()
	{
		// get all the Members
		$members = Members::all();

		// load the view and pass the nerds
		return View::make('members.index')
			->with('members', $members);
	}

	public function create()
	{
		// load the create form (app/views/nerds/create.blade.php)
		return View::make('members.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
			'phone'       => 'required',
			'address'       => 'required',
			'pincode' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('members/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$members = new Members;
			$members->name       = Input::get('name');
			$members->email      = Input::get('email');
			$members->phone      = Input::get('phone');
			$members->address      = Input::get('address');
			$members->pincode      = Input::get('pincode');
			$members->save();

			// redirect
			Session::flash('message', 'Successfully created Member!');
			return Redirect::to('members/create');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the nerd
		$members = Members::find($id);

		// show the view and pass the nerd to it
		return View::make('members.show')
			->with('members', $members);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
		$members = Members::find($id);

		// show the edit form and pass the nerd
		return View::make('members.edit')
			->with('members', $members);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
			'phone'      => 'required',
			'address'    => 'required',
			'pincode'    => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('members/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$members = Members::find($id);
			$members->name       = Input::get('name');
			$members->email      = Input::get('email');
			$members->phone      = Input::get('phone');
			$members->address    = Input::get('address');
			$members->pincode    = Input::get('pincode');
			$members->save();

			// redirect
			Session::flash('message', 'Successfully updated members!');
			return Redirect::to('members');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$nerd = Nerd::find($id);
		$nerd->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the nerd!');
		return Redirect::to('nerds');
	}

}