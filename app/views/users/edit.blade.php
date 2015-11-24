@extends('layouts.master')

@section('breadcrumb')
    <h2>On Site Support</h2>
    <ol class="breadcrumb">
        <li class="">
            <a href="{{ URL::to('/users') }}">Users</a>
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
                    {{ Form::open(array('url' => '/users/'.$user->user_id.'/update' , 'class' => 'form form-horizontal')) }}
                    <div class="form-group">
                        <label class="control-label col-md-2">Username</label>
                        <div class="col-md-8">
                            <input type="text" name="uname" value="{{ $user->uname }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Password</label>
                        <div class="col-md-8">
                            <input type="password" name="password" placeholder="leave blank to keep old password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Confirm Password</label>
                        <div class="col-md-8">
                            <input type="password" name="passwd" placeholder="leave blank to keep old password" class="form-control">
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
@stop