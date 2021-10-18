<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use League\CommonMark\Inline\Element\Code;

class RegisterController extends Controller
{
    use RegistersUsers;

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
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    protected function registered(Request $request, User $user)
    {
        if ($user instanceof MustVerifyEmail) {
            return response()->json(['status' => trans('verification.sent')]);
        }

        return response()->json($user);
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
            'name' => 'required|max:255',
            'email' => 'required|email:filter|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'jenis' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|max:255',
            'provinsi' => 'required|max:255',
            'kota' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kelurahan' => 'required|max:255',

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
        
      $id = '';
      if($data['role'] == 'consumer'){
        $response = Http::asForm()->withHeaders([
            'app-origins'=>"yes",
            'content-type'=>'application/json'
           
        ])->post('127.0.0.1:8000/consumer/', [
            'jenis' => 'aaa',
            'nama' => $data['name'],
            'alamat' => $data['alamat'],
            'provinsi' => $data['provinsi'],
            'kab_kota' => $data['kota'],
            'kecamatan' => $data['kecamatan'],
            'kelurahan' => $data['kelurahan'],
            'no_telp' => $data['no_telp'],
        ]);
            
        $stream = json_decode($response->getBody());
        $code = $stream->message->statusCode;
        if($code == 400){
            $res =  Http::withHeaders([
                'app-origins'=>"yes",
                'content-type'=>'application/json'
               
            ])->get('127.0.0.1:8000/consumer/name/'.$data['name'], [
                
            ]);
            $id = json_decode($res->getBody()->getContents())->data->data[0]->id;
        }
        elseif ($code == 200) {
            $id = $stream->message->data[0]->id;
        }
        
        

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'id_user' => $id,
            'password' => bcrypt($data['password']),
        ]);
        
      }
    }
    protected function registerConsumer(array $data)
    {
        
       
            

        
        
    }
}
