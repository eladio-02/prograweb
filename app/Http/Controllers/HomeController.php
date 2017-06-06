<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;

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
    * Create a new user instance after a valid registration.
    *
    * @param  array  $data
    * @return User
    */
   public function store()///array $data)
   {
       $data = Input::all();
       print_r($data);
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
}
