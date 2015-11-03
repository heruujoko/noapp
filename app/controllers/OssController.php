<?php

    class OssController extends HomeController {

        public function data(){
            $active = "oss";
            $approvals = ApprovalPerson::all();

            $dataoss = Oss::all();				
            $max = 1;
			$nomax = DB::table ('oss')
						-> orderBy ('no_oss', 'desc')
						-> take (1)
						-> get();	
			foreach ($nomax as $nomax) {
					$max = $nomax->no_oss;
					$max = $max+1;
			}

            return View::make('oss.list')
            ->with('active' ,$active)
            ->with('dataoss', $dataoss)
			->with('max', $max)
            ->with('approvals' , $approvals);
        }

        public function submit_bantek(){
        	$oss = new Oss;
        	$oss->tanggal_oss = Carbon::createFromFormat('d/m/Y' , Input::get('tanggal_oss'));			
			$oss->no_oss = Input::get('no_oss');	
			$oss->mitra_oss = Input::get('mitra_oss');						
			$oss->nama_bantek_oss = Input::get('nama_bantek');
			$oss->id_site = Input::get('id_site');				
			$oss->nama_site = Input::get('nama_site');				
			$oss->tanggal_mulai_oss = Carbon::createFromFormat('d/m/Y' , Input::get('tanggal_mulai'));	
			$oss->tanggal_selesai_oss = Carbon::createFromFormat('d/m/Y' , Input::get('tanggal_selesai'));		
			$oss->permasalahan_oss = Input::get('masalah');	
			$oss->action_oss = Input::get('action');	
			$oss->rincian_jasa_material_oss = Input::get('rincian');	
			$oss->kode_shopping_list = Input::get('shopping_list');	
			$oss->harga_oss = Input::get('harga');	
			$oss->req_oleh= Input::get('request');	
			$oss->diketahui_oleh = Input::get('approval');
			$oss->save();

			Session::flash('success' , 'Data has been saved');
			return Redirect::to('/oss');
        }

        public function submit_material(){
    		$oss = new Oss;
        	$oss->tanggal_oss = Carbon::createFromFormat('d/m/Y' , Input::get('tanggal_oss'));			
			$oss->no_oss = Input::get('no_oss');	
			$oss->mitra_oss = Input::get('mitra_oss');						
			
			$oss->id_site = Input::get('id_site');				
			$oss->nama_site = Input::get('nama_site');				
			
			$oss->permasalahan_oss = Input::get('masalah');	
			$oss->action_oss = Input::get('action');	
			
			$oss->req_oleh= Input::get('request');	
			$oss->diketahui_oleh = Input::get('approval');
			$oss->save();

			Session::flash('success' , 'Data has been saved');
			return Redirect::to('/oss');
    	}

    	public function edit($id){
    		$current_oss = Oss::find($id);
    		$approvals = ApprovalPerson::all();
    		$active = 'oss';
    		$mitra = MitraOss::all();
    		return View::make('oss.edit')
            ->with('active' ,$active)
            ->with('oss' , $current_oss)
            ->with('mitra' , $mitra)
            ->with('approvals' , $approvals);
    	}

    	public function update($id){
    		$oss = Oss::find($id);
        	$oss->tanggal_oss = Carbon::createFromFormat('d/m/Y' , Input::get('tanggal_oss'));			
			$oss->no_oss = Input::get('no_oss');	
			$oss->mitra_oss = Input::get('mitra_oss');
			if(Input::get('nama_bantek') != ''){
				$oss->nama_bantek_oss = Input::get('nama_bantek');
			}
			$oss->id_site = Input::get('id_site');				
			$oss->nama_site = Input::get('nama_site');
			if(Input::get('tanggal_mulai') != ''){
				$oss->tanggal_mulai_oss = Carbon::createFromFormat('d/m/Y' , Input::get('tanggal_mulai'));
			}
			if(Input::get('tanggal_selesai')!= ''){
				$oss->tanggal_selesai_oss = Carbon::createFromFormat('d/m/Y' , Input::get('tanggal_selesai'));
			}		
			$oss->permasalahan_oss = Input::get('masalah');	
			$oss->action_oss = Input::get('action');
			if(Input::get('rincian')!= ''){
				$oss->rincian_jasa_material_oss = Input::get('rincian');
			}
			if(Input::get('shopping_list')!= ''){
				$oss->kode_shopping_list = Input::get('shopping_list');
			}	
			$oss->harga_oss = Input::get('harga');	
			$oss->req_oleh= Input::get('request');	
			$oss->diketahui_oleh = Input::get('approval');
			$oss->save();

			Session::flash('success' , 'Data has been saved');
			return Redirect::to('/oss');
    	}

    	public function delete($id){
    		$oss = Oss::find($id);
    		$oss->delete();

    		Session::flash('success' , 'Data has been removed');
			return Redirect::to('/oss');
    	}

    }

?>