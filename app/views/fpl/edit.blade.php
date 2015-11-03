@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ URL::to('/') }}/datepicker/css/bootstrap-datepicker3.min.css">
    <style>
        .datepicker table tr td.active:hover, .datepicker table tr td.active:hover:hover, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active.disabled:hover:hover, .datepicker table tr td.active:focus, .datepicker table tr td.active:hover:focus, .datepicker table tr td.active.disabled:focus, .datepicker table tr td.active.disabled:hover:focus, .datepicker table tr td.active:active, .datepicker table tr td.active:hover:active, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active.active, .datepicker table tr td.active:hover.active, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled:hover.active, .open .dropdown-toggle.datepicker table tr td.active, .open .dropdown-toggle.datepicker table tr td.active:hover, .open .dropdown-toggle.datepicker table tr td.active.disabled, .open .dropdown-toggle.datepicker table tr td.active.disabled:hover {
            color: #fff;
            background-color: #1ab394;
            border-color: #1ab394;
        }
    </style>
@stop

@section('breadcrumb')
    <h2>On Site Support</h2>
    <ol class="breadcrumb">
    	<li>
    		<a href="{{ URL::to('/fpl') }}">Pengadaan Barang / Jasa</a>
    	</li>
        <li class="active">
            <strong>Edit</strong>
        </li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if(Session::get('error'))
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{ Session::get('error') }}
                    </div>
                @elseif(Session::get('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{ Session::get('success') }}
                    </div>
                @else    
                @endif
            <div class="ibox">
                <div class="ibox-content">
                    {{ Form::open(array('url' => '/fpl/'.$fpl->id.'/update' , 'class' => 'form form-horizontal')) }}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Tanggal Permintaan</label>
                                            <div class="col-md-6">
                                                <input class="form-control datepicker time" name="tanggal_permintaan" value="{{ $fpl->tanggal_permintaan }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Nama Pemohon</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="nama_pemohon" value="{{ $fpl->nama_pemohon }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Perbaikan & Pemeliharaan</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="perbaikan" value="{{ $fpl->perbaikan_pemeliharaan }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Alasan dan Kebutuhan</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="alasan" value="{{ $fpl->alasan_kebutuhan }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">TRXID</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="trxid" value="{{ $fpl->trx_id }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Waktu Pengadaan</label>
                                            <div class="col-md-6">
                                                <input class="form-control datepicker time" name="waktu_pengadaan" value="{{ $fpl->waktu_pengadaan }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Jenis Permintaan</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="jenis_permintaan" value="{{ $fpl->jenis_permintaan }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Pembelian</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="pembelian" value="{{ $fpl->pembelian }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Jumlah Barang & Estimasi Harga</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="estimasi" value="{{ $fpl->jumlah_estimasi_harga }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">No. Acc</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="acc" value="{{ $fpl->no_acc }}" required>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                        <button id="save" type="submit" class="btn btn-primary col-md-8 col-md-offset-2">Save</button>
                                    </div>
                                {{ Form::close() }}
                </div>
            </div>    
        </div>
    </div>
@stop

@section('js')
    <script src="{{ URL::to('/') }}/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/bower_components/moment/moment.js"></script>
    <script>
        $('.time').each(function(){
          var Tformat = moment($(this).val()).format('MM/DD/YYYY');
          $(this).val(Tformat);
          $('.datepicker').datepicker({
            toggleActive: true
          });
        });
    </script>
@stop