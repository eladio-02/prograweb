<?php

namespace App\Http\Controllers;

use App\Cupones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       // $cuponesDB = Cupones::where('active', '=', 1);//->paginate(16);
       //Cupones::where('active', '=', 1)->paginate(15)
        return view('pages/home', ['cupones' => Cupones::simplePaginate(16) ] );
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
     * @param  int  $cupones
     * @return \Illuminate\Http\Response
     */
    public function show($cupon)
    {
        $cupon = Cupones::where('pageid', $cupon)->first();;
        return view('pages/infocupon', ['cupon' => $cupon] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cupones  $cupones
     * @return \Illuminate\Http\Response
     */
    public function edit(Cupones $cupones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cupones  $cupones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cupones $cupones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cupones  $cupones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cupones $cupones)
    {
        //
    }
}
