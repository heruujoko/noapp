@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ URL::to('/') }}/datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/bower_components/chosen-bootstrap/chosen.bootstrap.min.css">
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
                                        <tbody>
                                            @foreach($dataoss as $doss)
                                                <tr>
                                                    <td>{{ $doss->id }}</td>
                                                    <td class="time">{{ $doss->tanggal_oss }}</td>
                                                    <td>{{ $doss->no_oss }}</td>
                                                    <td>{{ $doss->nama_bantek_oss }}</td>
                                                    <td>{{ $doss->nama_site }}</td>
                                                    <td>{{ $doss->tanggal_mulai_oss }}</td>
                                                    <td>{{ $doss->tanggal_selesai_oss }}</td>
                                                    <td>{{ $doss->action_oss }}</td>
                                                    <td class="price">{{ $doss->harga_oss }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                          <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action <span class="caret"></span>
                                                          </button>
                                                          <ul class="dropdown-menu">
                                                            <li><a href="{{ URL::to('/') }}/oss/{{ $doss->id }}">Details</a></li>
                                                            <li><a href="{{ URL::to('/') }}/oss/{{ $doss->id }}/edit">Edit</a></li>
                                                            <li><a href="{{ URL::to('/') }}/oss/{{ $doss->id }}/delete">Delete</a></li>
                                                          </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    {{ Form::open(array('url' => '/oss/bantek/submit' , 'class' => 'form form-horizontal')) }}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal OSS</label>
                                                <div class="col-md-8">
                                                    <input class="form-control datepicker" type="text" name="tanggal_oss" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">No OSS</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="no_oss" value="{{ $max }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Mitra OSS</label>
                                                <div class="col-md-8">
                                                    <select class="form-control chosen" name="mitra_oss" required>
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
                                                    <!-- <input class="form-control" type="text" name="nama_site" required> -->
                                                    <select class="form-control chosen" id="nama_site" name="nama_site" required>
                                                        @foreach($sites as $site)
                                                            <option siteid="{{ $site->btsnameoss }}" value="{{ $site->sitelocation }}">{{ $site->sitelocation }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Mulai</label>
                                                <div class="col-md-8">
                                                    <input class="form-control datepicker" type="text" name="tanggal_mulai" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Selesai</label>
                                                <div class="col-md-8">
                                                    <input class="form-control datepicker" type="text" name="tanggal_selesai" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Masalah</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" name="masalah" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-2">Nama Bantek</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="nama_bantek" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">ID Site</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="{{ $sites[0]->btsnameoss }}" name="id_site" id="id_site_1" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Harga</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="harga" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Kode Shopping List</label>
                                                <div class="col-md-8">
                                                    <!-- <input class="form-control" name="shopping_list" required> -->
                                                    <select class="form-control chosen-ajax" id="sl-list" name="shopping_list" required>
                                                        <option></option>
                                                        <!-- @foreach($sl_data as $sl)
                                                            <option value="{{ $sl->kode_sl }}">{{ $sl->kode_sl }}</option>
                                                        @endforeach -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Rincian Jasa / Material</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="rincian" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Action</label>
                                                <div class="col-md-8">
                                                    <textarea name="action" required class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Request Oleh</label>
                                                <div class="col-md-8">
                                                    <select class="form-control chosen" name="request">
                                                        @foreach($approvals as $appr)
                                                            <option value="{{ $appr->name }}">{{ $appr->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2">Diketahui Oleh</label>
                                                <div class="col-md-8">
                                                    <select class="form-control chosen" name="approval" required>
                                                        @foreach($approvals as $appr)
                                                            <option value="{{ $appr->name }}">{{ $appr->name }}</option>
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
                                <div id="tab-3" class="tab-pane">
                                    {{ Form::open(array('url' => '/oss/material/submit' , 'class' => 'form form-horizontal')) }}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">No OSS</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" name="no_oss" value="{{ $max }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tanggal OSS</label>
                                            <div class="col-md-8">
                                                <input class="form-control datepicker" type="text" name="tanggal_oss" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Mitra OSS</label>
                                            <div class="col-md-8">
                                                <select class="form-control" name="mitra_oss" required>
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
                                                <!-- <input class="form-control" type="text" name="nama_site" required> -->
                                                <select class="form-control chosen" id="nama_site_2" name="nama_site" required>
                                                        @foreach($sites as $site)
                                                            <option siteid="{{ $site->btsnameoss }}" value="{{ $site->sitelocation }}">{{ $site->sitelocation }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">ID Site</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" value="{{ $sites[0]->btsnameoss }}" name="id_site" id="id_site_2" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-2">Masalah</label>
                                            <div class="col-md-8">
                                                <textarea name="masalah" required class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2">Action</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control" name="action" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2">Request Oleh</label>
                                            <div class="col-md-8">
                                                <select class="form-control" name="request" required>
                                                    @foreach($approvals as $appr)
                                                        <option value="{{ $appr->name }}">{{ $appr->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2">Diketahui Oleh</label>
                                            <div class="col-md-8">
                                                <select class="form-control" name="approval">
                                                    @foreach($approvals as $appr)
                                                        <option value="{{ $appr->name }}">{{ $appr->name }}</option>
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
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ URL::to('/') }}/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ URL::to('/') }}/chosen/chosen.jquery.js"></script>
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

        $('.chosen-ajax').chosen({
            width: "100%",
            no_results_ajax : function(param){
                $.ajax({
                    url: "{{ URL::to('/ajax/sl/') }}/"+param,
                    type:'GET',
                    dataType: 'json',
                    success: function(output_string){
                        if(output_string != ""){
                            $('#sl-list').html(output_string);
                            $("#sl-list").trigger("chosen:updated");    
                        }            
                    },
                    error : function(){
                        // console.log('error');
                        $('.result').hide();        
                    } // End of success function of ajax form
                }); // End of ajax call     
            }
        });

        $('.chosen').chosen({
            width: "100%",
        });

        // $("#sl_list_chosen").bind('keyup',function(e) {
        //     console.log(e.target.value.length);
        //     if(e.target.value.length <= 2){

        //     } else {
        //         var param = e.target.value;
        //         $.ajax({
        //             url: "{{ URL::to('/ajax/sl/') }}/"+param,
        //             type:'GET',
        //             dataType: 'json',
        //             success: function(output_string){
        //                 if(output_string != ""){
        //                     $('#sl-list').html(output_string);
        //                     $("#sl-list").trigger("chosen:updated");    
        //                 }            
        //             },
        //             error : function(){
        //                 // console.log('error');
        //                 $('.result').hide();        
        //             } // End of success function of ajax form
        //         }); // End of ajax call     
        //     }
            
        // });

        $('#sl_list').on('chosen:hiding_dropdwn' , function(){
            alert('hello');
        });

        $('div.chosen-search').find('input').change(function(){
            console.log('c');
        })

        $('#nama_site').change(function(){
            $('#id_site_1').val($('option:selected', this).attr('siteid'));
        })

        $('#nama_site_2').change(function(){
            $('#id_site_2').val($('option:selected', this).attr('siteid'));
        })
    </script>
@stop