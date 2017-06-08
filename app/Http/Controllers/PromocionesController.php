<?php

namespace App\Http\Controllers;

use App\Promociones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PromocionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/promociones', ['promociones' => Promociones::simplePaginate(16) ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::guest() && Auth::user()->Tipo==1){
            return view('pages/createpromocion');
        }
        else{
            return redirect('/promociones');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = Input::all();
        Promociones::create([
            'title' => $data['title'],
            'discount' => $data['discount'],
            'img' => $data['img'],
            'price' => $data['price'],
            'normalprice' => $data['normalprice'],
            'save' => $data['save'],
            'sold_amount' => $data['sold_amount'],
            'location' => $data['location'],
            'period' => $data['period'],
            'info' => $data['info'],
            'active' => 1,
        ]);
        return redirect('/promocion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promocion = Promociones::where('id', $id)->first();;
        return view('pages/infopromocion', ['promocion' => $promocion] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages/editpromocion', ['promocion' => Promociones::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = Input::all();
        
        $promocion = Promociones::find($id);
        if(!is_null($promocion)){ 
            $promocion->title = $data['title'];
            $promocion->discount = $data['discount'];
            $promocion->img = $data['img'];
            $promocion->price = $data['price'];
            $promocion->normalprice = $data['normalprice'];
            $promocion->save = $data['save'];
            $promocion->sold_amount = $data['sold_amount'];
            $promocion->location = $data['location'];
            $promocion->period = $data['period'];
            $promocion->info = $data['info'];
            $promocion->active = 1;
            $promocion->save();
            return redirect('/promocion'); 
        }
        return redirect('/promocion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promocion = Promociones::find($id);
        if(!is_null($promocion)){
            if($promocion->active == 1){
                $promocion->active = 0;
            }
            else{
                $promocion->active = 1;
            }
            $promocion->save();
        }
        return redirect('/promocion');
    }
}
