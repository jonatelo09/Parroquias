<?php

namespace App\Http\Controllers;

use App\Category;
use App\Prop;
use App\Temple;
use Illuminate\Http\Request;

class PropController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$props = Prop::paginate(10);
		return view('props.index')->with(compact('props'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$temples = Temple::orderBy('name_temple')->get();
		$categories = Category::orderBy('name_cat')->get();
		return view('props.create')->with(compact('temples', 'categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$props = new Prop();
		$props->name_props = $request->input('name_props');
		$props->description_props = $request->input('description_props');
		$props->quantity = $request->input('quantity');
		$props->is_reliquia = $request->input('is_reliquia');
		$props->price = $request->input('price');
		$props->category_id = $request->category_id;
		$props->temple_id = $request->temple_id;
		$props->save();

		return redirect()->route('props.index')->with('info', 'Utileria Guardado con Éxito!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Prop  $prop
	 * @return \Illuminate\Http\Response
	 */
	public function show(Prop $prop) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Prop  $prop
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Prop $prop) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Prop  $prop
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Prop $prop) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Prop  $prop
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Prop $prop) {
		//
	}
}
