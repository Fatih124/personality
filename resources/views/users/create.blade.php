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
                            YENİ PERSONEL OLUŞTURMA <br>Bu alanda yeni personel oluşturabilirsiniz.
                        </div>
                        @endif
                        <div class="panel-body bio-graph-info">
                            <h1> Personel Bilgileri</h1>
                            <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="{{route('users.create.post')}}" style="padding-left: 135px;">
                                {{csrf_field()}}
                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-2 control-label">İsim</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="name" class="form-control" id="f-name" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-2 control-label">Soyisim</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="user_surname" class="form-control" id="l-name" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-2 control-label">Şehir</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="user_city" class="form-control" id="c-name" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-6 control-label">Doğum Tarihi</label>
                                    <div class="col-lg-12">
                                        <input type="date" name="user_birthday" class="form-control" id="b-day" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-2 control-label">Görevi</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="user_duty" class="form-control" id="occupation" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-12">
                                        <input type="email" name="email" class="form-control" id="email" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-2 control-label">Gsm</label>
                                    <div class="col-lg-12">
                                        <input type="number" name="user_gsm" class="form-control" id="mobile" placeholder=" ">
                                    </div>
                                </div>

                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-2 control-label">Şifre</label>
                                    <div class="col-lg-12">
                                        <input type="password" name="password" required class="form-control" id="password" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-6 control-label">Şifre Tekrar</label>
                                    <div class="col-lg-12">
                                        <input type="password" class="form-control" required id="rt-password" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-6 control-label">İşe Giriş Tarihi</label>
                                    <div class="col-lg-12">
                                        <input type="date" name="user_workin" class="form-control" id="b-day" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 300px; float: left;">
                                    <label  class="col-lg-6 control-label">İşten Çıkış Tarihi</label>
                                    <div class="col-lg-12">
                                        <input type="date" name="user_workout" class="form-control" id="b-day" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group"  style="width: 300px; float: left;">
                                    <label class="col-sm-2 control-label col-lg-12 mb-3">Personel Yetkili Mi? </label>
                                    <div class="col-lg-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="user_auth" value="1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Evet</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="user_auth" value="0" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">Hayır</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label  class="col-lg-6 control-label">Profil Resmi</label>
                                    <div class="col-lg-12">
                                        <input type="file" name="user_pic"/>
                                    </div>
                                </div>

                                <div class="form-group" style="width: 305px; float: left;">
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
    <!--main content end-->
    @endsection