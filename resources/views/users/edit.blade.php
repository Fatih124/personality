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
                            <div class="bio-graph-heading">
                                PERSONEL BİLGİLERİ GÜNCELLEME<br>Bu alanda personel bilgilerini güncelleyebilirsiniz.a
                            </div>
                        @endif
                        <div class="panel-body bio-graph-info">
                            <h1 style="text-align: center"> Personel Bilgileri</h1>
                            <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="{{route('users.edit.post', ['user_id'=>$data[0]['user_id']])}}" >
                                {{csrf_field()}}
                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-2 control-label">İsim</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="name" class="form-control" id="f-name" required value="{{$data[0]['name']}}">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-2 control-label">Soyisim</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="user_surname" class="form-control" id="l-name" required value="{{$data[0]['user_surname']}}">
                                    </div>
                                </div>
                                <div class="form-group" style="width:290px; float: left;">
                                    <label  class="col-lg-2 control-label">Şehir</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="user_city" class="form-control" id="c-name" value="{{$data[0]['user_city']}}">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-6 control-label">Doğum Tarihi</label>
                                    <div class="col-lg-12">
                                        <input type="date" name="user_birthday" class="form-control" id="b-day" value="{{$data[0]['user_birthday']}}">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-2 control-label">Görevi</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="user_duty" class="form-control" id="occupation" required value="{{$data[0]['user_duty']}}">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-12">
                                        <input type="email" name="user_email" class="form-control" id="email" value="{{$data[0]['email']}}">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-2 control-label">Gsm</label>
                                    <div class="col-lg-12">
                                        <input type="number" name="user_gsm" class="form-control" id="mobile" required value="{{$data[0]['user_gsm']}}">
                                    </div>
                                </div>

                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-2 control-label">Şifre</label>
                                    <div class="col-lg-12">
                                        <input type="password" name="password" required class="form-control" id="password" value="{{$data[0]['password']}}">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-6 control-label">Şifre Tekrar</label>
                                    <div class="col-lg-12">
                                        <input type="password" class="form-control" required id="rt-password" value="">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-6 control-label">İşe Giriş Tarihi</label>
                                    <div class="col-lg-12">
                                        <input type="date" name="user_workin" class="form-control" id="b-day" value="{{$data[0]['user_workin']}}">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-6 control-label">İşten Çıkış Tarihi</label>
                                    <div class="col-lg-12">
                                        <input type="date" name="user_workout" class="form-control" id="b-day" value="{{$data[0]['user_workout']}}">
                                    </div>
                                </div>

                                <div class="form-group" style="width: 290px; float: left;">
                                    <label  class="col-lg-2 control-label" style="max-width: 200px; !important;">Profil Resmi</label>
                                    <div class="col-lg-12">
                                        @if($data[0]['user_pic']!="")
                                            <img src="{{asset($data[0]['user_pic'])}}" style="width: 30px; height: 30px;"/>
                                        @endif
                                        <input type="file" name="user_pic" />
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="form-group" style="width: 305px; float: left;">
                                    <div class="col-lg-12">
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
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>
    <!--main content end-->
@endsection