<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$folders = Folder::paginate(10);
		return view('folders.index')->with(compact('folders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('folders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$folders = new Folder();
		$folders->name_fol = $request->input('name_fol');
		$folders->description_fol = $request->input('description_fol');
		$folders->save();

		return redirect()->route('folders.index')->with('info', 'Folder guardado con éxito!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Folder  $folder
	 * @return \Illuminate\Http\Response
	 */
	public function show(Folder $folder) {
		return view('folders.show', compact('folder'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Folder  $folder
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Folder $folder) {
		return view('folders.edit', compact('folder'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Folder  $folder
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Folder $folder) {
		$folder->update($request->all());

		return redirect()->route('folders.index', $folder->id)->with('info', 'Folder Actualizado con éxito!!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Folder  $folder
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Folder $folder) {
		$folder->delete();
		return back()->with('info', 'Folder Eliminado con Éxito');
	}
}
