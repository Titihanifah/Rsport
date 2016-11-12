<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
            'nama_depan' => 'required|max:255',
            'nama_belakang' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'tempat_lahir'=> 'required',
            'tgl_lahir' =>'required',
            'jenis_kelamin' =>'required',
            'alamat'=>'required',
            'bb'=>'required',
            'tb'=>'required',
            'telepon'=>'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nama_depan' => $data['nama_depan'],
            'nama_belakang' => $data['nama_belakang'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'tempat_lahir'=> $data['tempat_lahir'],
            'tgl_lahir' =>$data['tgl_lahir'],
            'jenis_kelamin' =>$data['jenis_kelamin'],
            'alamat'=>$data['alamat'],
            'bb'=>$data['bb'],
            'tb'=>$data['tb'],
            'telepon'=>$data['telepon'],
        ]);
    }
}
