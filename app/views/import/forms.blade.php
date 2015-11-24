@extends('layouts.master')

@section('breadcrumb')
    <h2>On Site Support</h2>
    <ol class="breadcrumb">
        <li class="active">
            <strong>Import Data</strong>
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
                            <li class="active"><a data-toggle="tab" href="#tab-1">Site Data</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Shoppinglist Data</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                {{ Form::open(array('url' => '/import/submit/sitedata' , 'files' => true , 'class' => 'form form-horizontal')) }}
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Site File</label>
                                        <div class="col-md-8">
                                            <input type="file" name="sitedata" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary col-md-8 col-md-offset-2">Save</button>
                                    </div>
                                {{ Form::close() }}    
                            </div>
                            <div id="tab-2" class="tab-pane">
                                {{ Form::open(array('url' => '/import/submit/shopdata' , 'files' => true , 'class' => 'form form-horizontal')) }}
                                    <div class="form-group">
                                        <label class="control-label col-md-2">SL File</label>
                                        <div class="col-md-8">
                                            <input type="file" name="shopdata" class="form-control" required>
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