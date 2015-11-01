<?php

	class SessionController extends BaseController {

		public function auth(){
			$uname = Input::get('uname');
			$pass = Input::get('password');

			if(Auth::attempt(array('uname' => $uname , 'password' => $pass))){
				return Redirect::to('/home');
			} else {
				Session::flash('error','Invalid username or password');
				return Redirect::to('/');
			}
		}

		public function logout(){
			Auth::logout();
			Session::flash('info' , 'You have successfully logged out.');
			return Redirect::to('/');
		}

	}

?>