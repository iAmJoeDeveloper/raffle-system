<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
     * @var string
     */
    // Redireccion por defecto
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'bornDate' => ['string', 'max:10'],
            'sex' => ['string', 'max:10'],
            'documentType' => ['required', 'string'],
            'documentNumber' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'min:10'],
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
//        return User::create([
//            'name' => $data['name'],
//            'lastName' => $data['lastName'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//            'bornDate' => $data['bornDate'],
//            'sex' => $data['sex'],
//            'documentType' => $data['documentType'],
//            'documentNumber' => $data['documentNumber'],
//            'phone' => $data['phone'],
//        ])->asignarRol(4);

        $register = new User();
        $register->name = $data['name'];
        $register->lastName = $data['lastName'];
        $register->email = $data['email'];
        $register->password = bcrypt($data['password']);
        $register->bornDate = $data['bornDate'];
        $register->sex = $data['sex'];
        $register->documentType = $data['documentType'];
        $register->documentNumber = $data['documentNumber'];
        $register->phone = $data['phone'];
        $register->save();

        $register->asignarRol(4);

        Mail::send('emails.e-client-register', ['msg' => $register], function($m) use($register){
            $m->to($register->email)->subject('Datos de tu Cuenta');
        });

        return $register;
    }
}
