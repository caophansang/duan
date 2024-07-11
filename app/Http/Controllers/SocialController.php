<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Validator,Redirect,Response,File;
 use Socialite;
 use App\Models\User;

 class SocialController extends Controller
 {
	 public function redirect($provider)
	 {
	     return Socialite::driver($provider)->redirect();
	 }

	 public function callback($provider)
	 {
	   $getInfo = Socialite::driver($provider)->user(); 
	   $user = $this->createUser($getInfo,$provider); 
	   auth()->login($user); 
	   return redirect()->to('/');
	 }
	 
	function createUser($getInfo,$provider){
	 $user = User::where('provider_id', $getInfo->id)->first();
	 if (!$user) {
	      $user = User::create([
	         'name'     => $getInfo->name,
	         'email'    => $getInfo->email,
	         'provider' => $provider,
	         'profile_picture' => $getInfo->avatar,
	         'provider_id' => $getInfo->id,
	         'role' => 1,
	     ]);
	   }
	   return $user;
	 }
 }