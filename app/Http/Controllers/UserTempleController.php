<?php

namespace App\Http\Controllers;

use App\Temple;
use App\User;
use App\UsersTemple;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTempleController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$userstemples = DB::table('users_temples')
			->join('temples as t', 'users_temples.temple_id', '=', 't.id')
			->join('users as us', 'users_temples.user_id', '=', 'us.id')
			->select('users_temples.id', 't.name_temple', 'us.username')
			->paginate(10);
		return view('userstemples.index', compact('userstemples'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$temples = Temple::orderBy('name_temple')->get();
		$users = User::orderBy('username')->get();

		return view('userstemples.create', compact('temples', 'users'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$usertemple = new UsersTemple();

		$usertemple->user_id = $request->user_id;
		$usertemple->temple_id = $request->temple_id;
		$usertemple->save();

		return redirect()->route('userstemples.index')->with('info', 'Templo Asignado con exito!!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(UsersTemple $userstemple) {
		$temples = Temple::orderBy('name_temple')->get();
		$users = User::orderBy('username')->get();

		return view('userstemples.edit', compact('temples', 'users', 'userstemple'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, UsersTemple $userstemple) {
		dd($userstemple);
		$userstemple->update($request->all());

		return redirect()->route('userstemples.index', $userstemple->id)->with('info', 'Se a actualizado la asignacion correctamente!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(UserTemple $userstemple) {
		//
	}
}
