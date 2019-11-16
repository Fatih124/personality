@extends('layouts.index')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                    <aside class="profile-nav col-lg-3">
                        <section class="card">
                            <div class="user-heading round">
                                <a href="#">
                                    <img src="{{asset(\App\Helper\mHelper::largeImage($data[0]['user_pic']))}}" alt="">
                                </a>
                                <h1>{{$data[0]['name']}}</h1>
                                <p>{{$data[0]['email']}}</p>

                            </div>
                        </section>
                    </aside>
                <aside class="profile-info col-lg-9">
                    <section class="card">
                        <div class="bio-graph-heading">
                            Personel hakkında detaylı bilgiler.
                        </div>
                        <div class="card-body bio-graph-info">
                            <h1>Biografi</h1>
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>İsim </span>: {{$data[0]['name']}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Soyisim </span>: {{$data[0]['user_surname']}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Şehir </span>: {{$data[0]['user_city']}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Doğum Tarihi</span>: {{$data[0]['user_birthday']}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Görevi </span>: {{$data[0]['user_duty']}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Email </span>: {{$data[0]['email']}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Telefon </span>: {{$data[0]['user_gsm']}}</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="bio-desk">
                                            <h4 class="red">Çalışma Süresi</h4>
                                            <p>İşe Giriş : {{$data[0]['user_workin']}}</p>
                                            @if($data[0]['user_pic']=0)
                                            <p>İşten Çıkış : {{$data[0]['user_workout']}}</p>
                                                @else
                                            <p>İşten Çıkış : Personel Aktif Çalışıyor.</p>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
    @endsection