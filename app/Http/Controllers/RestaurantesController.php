<?php

namespace App\Http\Controllers;

use App\Models\Restaurantes;
use Illuminate\Http\Request;

class RestaurantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $place = Restaurantes::find(1);
        $restaurantes = Restaurantes::whereNotIn('id',[1])->get();

        return view('restaurantes', compact('place','restaurantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $place = Restaurantes::find($id);
        $restaurantes = Restaurantes::whereNotIn('id',[$id])->get();

        return view('restaurantes', compact('place', 'restaurantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurantes $restaurantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurantes $restaurantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurantes $restaurantes)
    {
        //
    }
}
