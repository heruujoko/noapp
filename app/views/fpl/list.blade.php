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
        <li class="active">
            <strong>Pengadaan Barang / Jasa</strong>
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
                    <div class="panel-options">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1">List FPL</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Create FPL</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Waktu Pengadaan</th>
                                            <th>Jenis Permintaan</th>
                                            <th>Harga</th>
                                            <th>TRX ID</th>
                                            <th>No. Acc</th>
                                            <th>Masa Berlaku TRX ID</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fpldata as $fpl)
                                            <tr>
                                                <td>{{ $fpl->id }}</td>
                                                <td class="time">{{ $fpl->waktu_pengadaan }}</td>
                                                <td>{{ $fpl->jenis_permintaan }}</td>
                                                <td class="price">{{ $fpl->jumlah_estimasi_harga }}</td>
                                                <td>{{ $fpl->trx_id }}</td>
                                                <td>{{ $fpl->no_acc }}</td>
                                                <td></td>
                                                <td>
                                                        <div class="btn-group">
                                                          <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action <span class="caret"></span>
                                                          </button>
                                                          <ul class="dropdown-menu">
                                                            <li><a href="{{ URL::to('/') }}/fpl/{{ $fpl->id }}">Details</a></li>
                                                            <li><a href="{{ URL::to('/') }}/fpl/{{ $fpl->id }}/edit">Edit</a></li>
                                                            <li><a href="{{ URL::to('/') }}/fpl/{{ $fpl->id }}/delete">Delete</a></li>
                                                          </ul>
                                                        </div>
                                                    </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                {{ Form::open(array('url' => '/fpl/submit' , 'class' => 'form form-horizontal')) }}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Tanggal Permintaan</label>
                                            <div class="col-md-6">
                                                <input class="form-control datepicker" name="tanggal_permintaan" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Nama Pemohon</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="nama_pemohon" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Perbaikan & Pemeliharaan</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="perbaikan" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Alasan dan Kebutuhan</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="alasan" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">TRXID</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="trxid" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Waktu Pengadaan</label>
                                            <div class="col-md-6">
                                                <input class="form-control datepicker" name="waktu_pengadaan" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Jenis Permintaan</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="jenis_permintaan" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Pembelian</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="pembelian" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Jumlah Barang & Estimasi Harga</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="estimasi" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">No. Acc</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="acc" required>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary col-md-8 col-md-offset-2">Save</button>
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ URL::to('/') }}/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ URL::to('/') }}/bower_components/numeral/numeral.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/bower_components/moment/moment.js"></script>
    <script>
        $('.datepicker').datepicker({
            toggleActive: true
        });
        $('.price').each(function(){
            var Pformat = numeral($(this).text()).format('0,0');
            $(this).text('Rp '+Pformat);
        });
        $('.time').each(function(){
          var Tformat = moment($(this).text()).format('LL');
          $(this).text(Tformat);
        });
    </script>
@stop