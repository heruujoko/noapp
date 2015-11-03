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
    		<a href="{{ URL::to('/oss') }}">On Site Support</a>
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
            		{{ Form::open(array('url' => '/oss/'.$oss->id.'/update' , 'class' => 'form form-horizontal')) }}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal OSS</label>
                                                <div class="col-md-8">
                                                    <input class="form-control datepicker time" type="text" name="tanggal_oss" value="{{ $oss->tanggal_oss }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">No OSS</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="no_oss" value="{{ $oss->no_oss }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Mitra OSS</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="mitra_oss" required>
                                                        @foreach($mitra as $mtr)
                                                        	@if($mtr->name == $oss->mitra_oss)
                                                        		<option value="{{ $mtr->name }}" selected="">{{ $mtr->name }}</option>
                                                        	@else
                                                        		<option value="{{ $mtr->name }}">{{ $mtr->name }}</option>
                                                        	@endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Site</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="nama_site" value="{{ $oss->nama_site }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Mulai</label>
                                                <div class="col-md-8">
                                                    <input class="form-control datepicker" type="text" name="tanggal_mulai" value="{{ $oss->tanggal_mulai_oss }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Selesai</label>
                                                <div class="col-md-8">
                                                    <input class="form-control datepicker" type="text" name="tanggal_selesai" value="{{ $oss->tanggal_selesai_oss }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Masalah</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" name="masalah" required>{{ $oss->permasalahan_oss }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-2">Nama Bantek</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="nama_bantek" value="{{ $oss->nama_bantek_oss }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">ID Site</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="id_site" value="{{ $oss->id_site }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Harga</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="harga" value="{{ $oss->harga_oss }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Kode Shopping List</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="shopping_list" value="{{ $oss->kode_shopping_list }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Rincian Jasa / Material</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="rincian" value="{{ $oss->rincian_jasa_material_oss }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Action</label>
                                                <div class="col-md-8">
                                                    <textarea name="action" required class="form-control">{{ $oss->action_oss }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Request Oleh</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="request">
                                                        @foreach($approvals as $appr)
                                                        	@if($appr->name == $oss->req_oleh )
                                                            	<option selected value="{{ $appr->name }}">{{ $appr->name }}</option>
                                                            @else
                                                            	<option value="{{ $appr->name }}">{{ $appr->name }}</option>
                                                            @endif	
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Diketahui Oleh</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="approval" required>
                                                        @foreach($approvals as $appr)
                                                        	@if($appr->name == $oss->diketahui_oleh )
                                                            	<option selected value="{{ $appr->name }}">{{ $appr->name }}</option>
                                                            @else
                                                            	<option value="{{ $appr->name }}">{{ $appr->name }}</option>
                                                            @endif	
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="col-md-8 col-md-offset-2 btn btn-primary">Save</button>
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
          var Tformat = moment($(this).val()).format('L');
          $(this).val(Tformat);
          $('.datepicker').datepicker({
            toggleActive: true
          });
      });
    </script>
@stop