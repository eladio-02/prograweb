<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\User;
use Mail;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
       /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */

    public function sendContact()
    {
        $data = Input::all();
        Mail::send('emails.contactuser', ['data' => $data], function ($m) {
            $data2 = Input::all();
            $m->from('hello@app.com', 'Información');

            $m->to('prograweb2017@gmail.com', $data2['name'])->subject("Información");
        });
        return redirect('/cupones');
    }

    public function show()
    {
        return view('pages/usuarios', ['usuarios' => User::simplePaginate(10) ] );
    }
    public function destroy($id)
    {
        if(User::find($id)){
            
            DB::table('users')->where('id', '=', $id)->delete();
            
            return redirect('/usuarios');
            //return view('pages/usuarios', ['usuarios' => User::simplePaginate(10) ] );
        } else {
            return redirect('/usuarios');
            //return view('pages/usuarios', ['usuarios' => User::simplePaginate(10) ] );
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store()///array $data)
   {
       $data = Input::all();
       $tipo=0;
       if($data['Tipo']=="Administrador"){
           $tipo = 1;

       }

       User::create([
           'name' => $data['name'],
           'email' => $data['email'],
           'password' => bcrypt($data['password']),
           'Tipo' => $tipo,
           'active' => 1,
       ]);
       return redirect('/usuarios'); 
   }

    public function createUser()
    {
        return view('pages/createuser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function contact()
    {
        return view('pages/contact');
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages/edituser', ['user' => User::find($id)]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        $data = Input::all();
        $user = User::find($id);
        $tipo=0;
        if($data['Tipo']=="Administrador"){
            $tipo = 1;

        }

        if(!is_null($user)){ 
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->Tipo = $tipo;
            $user->active = 1;
            $user->save();
        }

        return redirect('/usuarios');
    }
}
