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
            <strong>On Site Support</strong>
        </li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="panel-options">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">List OSS</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Create OSS Bantek</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3">Create OSS Material</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <table class="table table-stripped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tanggal</th>
                                                <th>No OSS</th>
                                                <th>Nama Bantek</th>
                                                <th>Nama Site</th>
                                                <th>Mulai</th>
                                                <th>Selesai</th>
                                                <th>Action</th>
                                                <th>Harga</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    {{ Form::open(array('url' => '/oss/submit' , 'class' => 'form form-horizontal')) }}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal OSS</label>
                                                <div class="col-md-8">
                                                    <input class="form-control datepicker" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">No OSS</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Mitra OSS</label>
                                                <div class="col-md-8">
                                                    <select class="form-control">
                                                        <option value="PRIMATAMA-PLW">PRIMATAMA-PLW</option>
                                                        <option value="PRIMATAMA-PSO">PRIMATAMA-PSO</option>
                                                        <option value="PRIMATAMA-LWK">PRIMATAMA-LWK</option>
                                                        <option value="KISEL-TLI">KISEL-TLI</option>
                                                        <option value="KISEL-PLW">KISEL-PLW</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Site</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Mulai</label>
                                                <div class="col-md-8">
                                                    <input class="form-control datepicker" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Selesai</label>
                                                <div class="col-md-8">
                                                    <input class="form-control datepicker" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Masalah</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-2">Nama Bantek</label>
                                                <div class="col-md-8">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">ID Site</label>
                                                <div class="col-md-8">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Harga</label>
                                                <div class="col-md-8">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Kode Shopping List</label>
                                                <div class="col-md-8">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Rincian Jasa / Material</label>
                                                <div class="col-md-8">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Action</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Request Oleh</label>
                                                <div class="col-md-8">
                                                    <select class="form-control">
                                                        <option value="Prasanthy Ganty">Prasanthy Ganty</option>
                                                        <option value="Nathaniel Rombo">Nathaniel Rombo</option>
                                                        <option value="Fahri">Fahri</option>
                                                        <option value="Ahmad Taufik">Ahmad Taufik</option>
                                                        <option value="Mochammad Faizal">Mochammad Faizal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Request Oleh</label>
                                                <div class="col-md-8">
                                                    <select class="form-control"><option value="Habibi M. Tau">Habibi M. Tau</option><option value="Prasanthy Ganty">Prasanthy Ganty</option><option value="Fahri">Fahri</option><option value="Ahmad Taufik">Ahmad Taufik</option><option value="Mochammad Faizal">Mochammad Faizal</option></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="col-md-8 col-md-offset-2 btn btn-primary">Save</button>
                                        </div>
                                    {{ Form::close() }}
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    {{ Form::open(array('url' => '/oss/submit' , 'class' => 'form form-horizontal')) }}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">No OSS</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tanggal OSS</label>
                                            <div class="col-md-8">
                                                <input class="form-control datepicker" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Mitra OSS</label>
                                            <div class="col-md-8">
                                                <select class="form-control">
                                                    <option value="PRIMATAMA-PLW">PRIMATAMA-PLW</option>
                                                    <option value="PRIMATAMA-PSO">PRIMATAMA-PSO</option>
                                                    <option value="PRIMATAMA-LWK">PRIMATAMA-LWK</option>
                                                    <option value="KISEL-TLI">KISEL-TLI</option>
                                                    <option value="KISEL-PLW">KISEL-PLW</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Site</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">ID Site</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-2">Masalah</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2">Action</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2">Request Oleh</label>
                                            <div class="col-md-8">
                                                <select class="form-control">
                                                    <option value="Prasanthy Ganty">Prasanthy Ganty</option>
                                                    <option value="Nathaniel Rombo">Nathaniel Rombo</option>
                                                    <option value="Fahri">Fahri</option>
                                                    <option value="Ahmad Taufik">Ahmad Taufik</option>
                                                    <option value="Mochammad Faizal">Mochammad Faizal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2">Request Oleh</label>
                                            <div class="col-md-8">
                                                <select class="form-control"><option value="Habibi M. Tau">Habibi M. Tau</option><option value="Prasanthy Ganty">Prasanthy Ganty</option><option value="Fahri">Fahri</option><option value="Ahmad Taufik">Ahmad Taufik</option><option value="Mochammad Faizal">Mochammad Faizal</option></select>
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
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ URL::to('/') }}/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker').datepicker();
    </script>
@stop