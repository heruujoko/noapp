<?php
	
	class UserController extends HomeController{

		public function data(){
			$active = 'users';
			$users = User::all();
			return View::make('users.list')
			->with('users' , $users)
			->with('active' , $active);
		}

		public function submit(){
			$user = new User;
			$user->uname = Input::get('uname');
			$user->password = Hash::make(Input::get('password'));
			$user->status = 'admin';
			$user->save();

			Session::flash('success' , 'User has been created');
			return Redirect::to('/users');
		}

		public function edit($id){
			$user = User::find($id);
			$active = 'users';
			return View::make('users.edit')
			->with('user' , $user)
			->with('active' , $active);
		}

		public function update($id){
			$user = User::find($id);
			$user->uname = Input::get('uname');
			if(Input::get('password') != ''){
				$user->password = Hash::make(Input::get('password'));
			}
			$user->status = 'admin';
			$user->save();

			Session::flash('success' , 'User has been updated');
			return Redirect::to('/users');
		}

		public function delete($id){
			$user = User::find($id);
			$user->delete();

			Session::flash('success' , 'User has been deleted');
			return Redirect::to('/users');
		}


	}

?>