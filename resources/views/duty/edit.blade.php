@extends('layouts.index')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">

                <aside class="profile-info col-lg-12">
                    <section class="panel">
                        @if(session("status"))
                            <div class="alert alert-success" role="alert">
                                {{session("status")}}
                            </div>
                        @else
                            <div class="bio-graph-heading" style="background: #a9d86e !important;">
                                GÖREV GÜNCELLEME <br>Bu alanda mevcut görevi güncelleyebilirsiniz.
                            </div>
                        @endif
                        <div class="panel-body bio-graph-info">
                            <h1> Görev Bilgileri</h1>
                            <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="{{route('duty.edit.post', ['duty_id' => $data[0]['duty_id']])}}" >
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label  class="col-lg-2 control-label">Görev İsmi</label>
                                    <div class="col-lg-12">

                                        <input type="text" name="duty_name" class="form-control" id="f-name" value="{{$data[0]['duty_name']}}">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-lg-2 control-label">Görev Detayları</label>
                                    <div class="col-lg-12">
                                        <textarea  class="form-control" name="duty_detail" id="f-name" cols="20" rows="10">{{$data[0]['duty_detail']}}</textarea>

                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="cname" class="control-label col-lg-2">Görev Başlangıç Tarihi</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="duty_startdate" value="{{$data[0]['duty_startdate']}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="cname" class="control-label col-lg-2">Görev Bitiş Tarihi</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="duty_endtime" value="{{$data[0]['duty_endtime']}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">Görevlendirilen Personel İsmi</label>
                                    <div class="col-sm-10">
                                        <select name="appointed_user_id" class="form-control mb-2">
                                            @foreach($user as $key => $value)
                                                <option value="{{$value['id']}}" name="appointed_user_id">{{$value['name']}} {{$value['user_surname']}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" style="display: none;">
                                    <input type="text" name="duty_add_personal" class="form-control" id="f-name" value="{{$ids['id']}}" placeholder=" ">
                                </div>
                                <div class="form-group row">
                                    <label for="cname" class="control-label col-lg-2">Görev Devam Ediyor mu?</label>
                                    <div class="col-sm-10">
                                        <div class="radio-list">
                                            @if($data[0]['duty_status']!=0)
                                            <label style="width: 70px; float: left;">
                                                <div class="radio">
                                                    <span class="checked"><input type="radio" name="duty_status" value="0" ></span>
                                                </div>
                                                Evet
                                            </label>
                                            <label style="width: 70px; float: left;">
                                                <div class="radio">
                                                    <span class="checked"><input type="radio" name="duty_status" value="1" checked></span>
                                                </div>
                                                Hayır
                                            </label>
                                            @else
                                            <label style="width: 70px; float: left;">
                                                <div class="radio">
                                                    <span class="checked"><input type="radio" name="duty_status" value="0" checked></span>
                                                </div>
                                                Evet
                                            </label>
                                            <label style="width: 70px; float: left;">
                                                <div class="radio">
                                                    <span class="checked"><input type="radio" name="duty_status" value="1"></span>
                                                </div>
                                                Hayır
                                            </label>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row" style="width: 305px; float: left;">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-info">Kaydet</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </section>
                </aside>
            </div>

            <!-- page end-->
        </section>
    </section>
@endsection