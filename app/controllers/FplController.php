<?php
	
	class FplController extends HomeController {

		public function data(){
			$active = 'fpl';
			$fpldata = Fpl::all();
			return View::make('fpl.list')
			->with('fpldata' , $fpldata)
			->with('active' , $active);
		}

		public function submit(){
			$fpl = new Fpl;
			$fpl->nama_pemohon = Input::get('nama_pemohon');
			$fpl->tanggal_permintaan = Carbon::createFromFormat('d/m/Y' , Input::get('tanggal_permintaan'));
			$fpl->jenis_permintaan = Input::get('jenis_permintaan');
			$fpl->perbaikan_pemeliharaan = Input::get('perbaikan');
			$fpl->pembelian = Input::get('pembelian');
			$fpl->alasan_kebutuhan = Input::get('alasan');
			$fpl->jumlah_estimasi_harga = Input::get('estimasi');
			$fpl->waktu_pengadaan = Carbon::createFromFormat('d/m/Y' , Input::get('waktu_pengadaan'));
			$fpl->trx_id = Input::get('trxid');
			$fpl->no_acc = Input::get('acc');
			$fpl->save();

			Session::flash('success' , 'Data has been saved');
			return Redirect::to('/fpl');
		}

		public function edit($id){
			$fpl = Fpl::find($id);
			$active = 'fpl';

			return View::make('fpl.edit')
			->with('active' , $active)
			->with('fpl' , $fpl);
		}

		public function update($id){
			$fpl = Fpl::find($id);
			$fpl->nama_pemohon = Input::get('nama_pemohon');
			$fpl->tanggal_permintaan = Carbon::createFromFormat('d/m/Y' , Input::get('tanggal_permintaan'));
			$fpl->jenis_permintaan = Input::get('jenis_permintaan');
			$fpl->perbaikan_pemeliharaan = Input::get('perbaikan');
			$fpl->pembelian = Input::get('pembelian');
			$fpl->alasan_kebutuhan = Input::get('alasan');
			$fpl->jumlah_estimasi_harga = Input::get('estimasi');
			$fpl->waktu_pengadaan = Carbon::createFromFormat('d/m/Y' , Input::get('waktu_pengadaan'));
			$fpl->trx_id = Input::get('trxid');
			$fpl->no_acc = Input::get('acc');
			$fpl->save();

			Session::flash('success' , 'Data has been updated');
			return Redirect::to('/fpl');	
		}

		public function delete($id){
			$fpl = Fpl::find($id);
			$fpl->delete();

			Session::flash('success' , 'Data has been removed');
			return Redirect::to('/fpl');
		}

	}

?>