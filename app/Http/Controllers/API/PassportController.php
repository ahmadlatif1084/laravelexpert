<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;
use Validator;

class PassportController extends Controller
{
	public $successStatus=200;

	public function login(Request $request){
	if(Auth::attempt(array('email' => request('email'), 'password' => request('password')))) {

        $user=Auth::user();
        	$success['token']=$user->createToken('Myapp')->accessToken;
                   return response()->json(['success'=>$success],$this->successStatus);
             } 
            else
            {
                 return response()->json(['error'=>'Unauthorized'],401);
            }
        }
	public function register(Request $request, Passport $passport){
		$Validator=Validator::make($request->all(),[

			'name'=>'required',
			'email'=>'required|email',
			'password'=>'required',
			'c_password'=>'required|same:password',
		]);
		if($Validator->fails()){
			return response()->json(['error'=>$Validator->errors()],401);
		}
		$input=$request->all();
		$input['password']=bcrypt($input['password']);
		$user=User::create($input);
		$success['token']=$user->createToken('MyApp')->accessToken;
		$success['name']=$user->name;
		return response()->json(['success'=>$success],$this->successStatus);
	}
   
    public function getDetails()
	{
		$user=Auth::user();
		return response()->json(['success'=>'123']);
		# code...
	}
}
