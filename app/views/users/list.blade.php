@extends('layouts.master')

@section('breadcrumb')
    <h2>On Site Support</h2>
    <ol class="breadcrumb">
        <li class="active">
            <strong>Users</strong>
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
                            <li class="active"><a data-toggle="tab" href="#tab-1">List Users</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Create User</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->uname }}</td>
                                                <td>{{ $user->status }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="{{ URL::to('/') }}/users/{{ $user->user_id }}">Details</a></li>
                                                            <li><a href="{{ URL::to('/') }}/users/{{ $user->user_id }}/edit">Edit</a></li>
                                                            <li><a href="{{ URL::to('/') }}/users/{{ $user->user_id }}/delete">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                {{ Form::open(array('url' => '/users/submit' , 'class' => 'form form-horizontal')) }}
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Username</label>
                                        <div class="col-md-8">
                                            <input type="text" name="uname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Password</label>
                                        <div class="col-md-8">
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Confirm Password</label>
                                        <div class="col-md-8">
                                            <input type="password" name="passwd" class="form-control" required>
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