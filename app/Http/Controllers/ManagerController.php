<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$managers = Manager::paginate(10);
		return view('managers.index')->with(compact('managers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('managers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$managers = Manager::create($request->only('firstname', 'lastname', 'phone', 'email', 'type'));
		//dd($managers);

		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$path = public_path() . '/images/managers';
			$fileName = uniqid() . '-' . $file->getClientOriginalName();
			$moved = $file->move($path, $fileName);

			//update category
			if ($moved) {
				$managers->image = $fileName;
				$managers->save(); //update
			}
		}

		return redirect()->route('managers.index')->with('info', 'ManagerGuardado con Éxito!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Manager  $manager
	 * @return \Illuminate\Http\Response
	 */
	public function show(Manager $manager) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Manager  $manager
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Manager $manager) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Manager  $manager
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Manager $manager) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Manager  $manager
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Manager $manager) {
		//
	}
}
