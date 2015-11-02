<?php

    class OssController extends HomeController {

        public function data(){
            $active = "oss";
            $approvals = ApprovalPerson::all();

            $dataoss = oss::all();				
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

    }

?>