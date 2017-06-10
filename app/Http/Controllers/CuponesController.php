<?php

namespace App\Http\Controllers;

use App\Cupones;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Mail;


class CuponesController extends Controller
{
        /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */

    public function sendEmailReminder($id)
    {
        $user = User::findOrFail($id);

        Mail::send('emails.contact', ['user' => $user], function ($m) use ($user) {
            
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
        return redirect('/cupones');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/cupones', ['cupones' => Cupones::simplePaginate(16) ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::guest() && Auth::user()->Tipo==1){
            return view('pages/createcupon');
        }
        else{
            return redirect('/cupones');
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
        Cupones::create([
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
            'imgsrc' => $data['imgsrc'],
            'price' => $data['price'],
            'normalprice' => $data['normalprice'],
            'save' => $data['save'],
            'sold' => $data['sold'],
            'city' => $data['city'],
            'period' => $data['period'],
            'category' => $data['category'],
            'websitesrc' => $data['websitesrc'],
            'active' => 1,
        ]);
        return redirect('/cupones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cupones
     * @return \Illuminate\Http\Response
     */
    public function show($cupon)
    {
        $cupon = Cupones::where('id', $cupon)->first();;
        return view('pages/infocupon', ['cupon' => $cupon] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cupones  $cupones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages/editcupon', ['cupon' => Cupones::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cupones  $cupones
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = Input::all();

        $cupon = Cupones::find($id);
        if(!is_null($cupon)){ 
            $cupon->title = $data['title'];
            $cupon->subtitle = $data['subtitle'];
            $cupon->imgsrc = $data['imgsrc'];
            $cupon->price = $data['price'];
            $cupon->normalprice = $data['normalprice'];
            $cupon->save = $data['save'];
            $cupon->sold = $data['sold'];
            $cupon->city = $data['city'];
            $cupon->period = $data['period'];
            $cupon->category = $data['category'];
            $cupon->websitesrc = $data['websitesrc'];
            $cupon->active = 1;
            $cupon->save();
            return redirect('/cupones'); 
        }
        return redirect('/cupones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cupones  $cupones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cupon = Cupones::find($id);
        if(!is_null($cupon)){
            if($cupon->active == 1){
                $cupon->active = 0;
            }
            else{
                $cupon->active = 1;
            }
            $cupon->save();
        }
        return redirect('/cupones');
    }
}
