<?php
	
	class ImportController extends HomeController {

		public function forms(){
			$active = 'import';
			return View::make('import.forms')
			->with('active', $active);
		}

		public function postsitedata(){
			$file = Input::file('sitedata');
			$destinationPath = 'importdata';
			// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
			$filename = 'imported-sitedata';
			//$filename = $file->getClientOriginalName();
			//$extension =$file->getClientOriginalExtension(); 
			$upload_success = Input::file('sitedata')->move($destinationPath, $filename.'.'.$file->getClientOriginalExtension());

			if( $upload_success ) {
				$importedFile = public_path().'/importdata/'.$filename.'.'.$file->getClientOriginalExtension();
			   Excel::load($importedFile, function($r){
					$res = $r->all()->toArray();
					foreach($res as $data){
						if($data['site'] != '' && $data['site_id'] != ''){
							$d = new Mastertp;
							$d->sitelocation = $data['site'];
							$d->btsnameoss = $data['site_id'];
							$d->save();
						}
					}
				});
			   Session::flash('success' , 'Data imported to database');
			   return Redirect::to('/import');
			} else {
			   Session::flash('error' , 'Error uploading files');
			   return Redirect::to('/import');
			}
		}

		public function postshopdata(){
			$file = Input::file('shopdata');
			$destinationPath = 'importdata';
			// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
			$filename = 'imported-shoppinglistdata';
			//$filename = $file->getClientOriginalName();
			//$extension =$file->getClientOriginalExtension(); 
			$upload_success = Input::file('shopdata')->move($destinationPath, $filename.'.'.$file->getClientOriginalExtension());

			if( $upload_success ) {
				$importedFile = public_path().'/importdata/'.$filename.'.'.$file->getClientOriginalExtension();
			   Excel::load($importedFile, function($r){
					$res = $r->all()->toArray();
					foreach($res as $data){
						if($data['kode'] != '' && $data['deskripsi'] != '' && $data['satuan'] != '' && $data['harga'] != ''){
							$d = new ShoppingList;
							$d->kode_sl = $data['kode'];
							$d->deskripsi_pekerjaan = $data['deskripsi'];
							$d->satuan = $data['satuan'];
							$d->harga = $data['harga'];
							$d->save();
						}
					}
				});
			   Session::flash('success' , 'Shoppinglist Data imported to database');
			   return Redirect::to('/import');
			} else {
			   Session::flash('error' , 'Error uploading files');
			   return Redirect::to('/import');
			}
		}

	}

?>