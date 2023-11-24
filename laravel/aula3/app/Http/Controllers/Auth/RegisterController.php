<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
//importar

use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
   
     */
    // protected $redirectTo = '/produtos-total';

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function store(Request $request)
    {
        

    
    $user = new User();
    
   
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->cep = $request->input('cep');
    $user->logradouro = $request->input('logradouro');
    $user->bairro = $request->input('bairro');
    $user->cidade = $request->input('cidade');
    $user->estado = $request->input('estado');



    // Set created_at and updated_at
    // $user->created_at = now();
    // $user->updated_at = now();        

    // Save the user to the database
    $user->save();

    
    return redirect('/login')->with('mensagem', 'Usuário adicionado com sucesso!');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function verifyUser(Request $request){        

        if(!Auth::attempt($request->only(['name','password']))){        
            return redirect('/login');
        }        
        else{
            return redirect('/index');        
        }
    }

    public function logoutUser(Request $request){
        Auth::logout();
        return redirect('/login');  
    }
}
