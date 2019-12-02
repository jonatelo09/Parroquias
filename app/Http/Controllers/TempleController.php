<?php

namespace App\Http\Controllers;
use App\Manager;
use App\StatusLegal;
use App\Temple;
use Illuminate\Http\Request;

class TempleController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$temples = Temple::paginate(10);
		return view('temples.index', compact('temples'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$status = StatusLegal::orderBy('name_sta')->get();
		$managers = Manager::orderBy('firstname')->get();
		return view('temples.create')->with(compact('status', 'managers'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$temples = new Temple();

		$temples->name_temple = $request->input('name_temple');
		$temples->address = $request->input('address');
		$temples->email = $request->input('email');
		$temples->phone = $request->input('phone');
		$temples->length = $request->input('length');
		$temples->latitude = $request->input('latitude');
		$temples->description = $request->input('description');
		$temples->type = $request->input('type');
		$temples->status_id = $request->status_id;
		$temples->manager_id = $request->manager_id;
		$temples->save();

		return redirect()->route('temples')->with('info', 'Templo Guardado con Éxito!');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Temple  $temple
	 * @return \Illuminate\Http\Response
	 */
	public function show(Temple $temple) {
		return view('temples.show', compact('temple'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Temple  $temple
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Temple $temple) {
		$status = StatusLegal::orderBy('name_sta')->get();
		$managers = Manager::orderBy('firstname')->get();
		return view('temples.edit', compact('temple', 'status', 'managers'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Temple  $temple
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Temple $temple) {
		$temple->update($request->all());
		return redirect()->route('temples', $temple->id)->with('info', 'Templo actualizado con éxito!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Temple  $temple
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Temple $temple) {
		$temple->delete();
		return back()->with('info', 'Eliminado con exito');
	}
}
