@extends('layouts.index')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="card">
                <header class="card-header">
                    Görev Detayları
                </header>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section class="card">
                        @if(session("status"))
                            <div class="alert alert-success" role="alert">
                                {{session("status")}}
                            </div>
                        @endif
                        <div class="bio-graph-heading project-heading">
                            <strong>{{$data[0]['duty_name']}}</strong>
                        </div>
                        <div class="card-body bio-graph-info">
                            <!--<h1>New Dashboard BS3 </h1>-->
                            <div class="row p-details">
                                <div class="bio-row">
                                    <p><span class="bold">Görevlendiren </span>: {{$user->name}}</p>
                                </div>
                                @if($data[0]['duty_status']!='1')
                                <div class="bio-row">
                                    <p><span class="bold">Durum </span>: <span class="badge badge-success">Aktif</span></p>
                                </div>
                                @else
                                <div class="bio-row">
                                    <p><span class="bold">Durum </span>: <span class="badge badge-dark">Pasif</span> </p>
                                </div>
                                @endif
                                <div class="bio-row">
                                    <p><span class="bold">Başlama Tarihi </span>: {{$data[0]['duty_startdate']}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span class="bold">Bitiş Tarihi</span>: {{$data[0]['duty_endtime']}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span class="bold">Görevli</span>: {{$app->name}}</p>
                                </div><!--BURADA GELEN KİŞİNİ İDSİNE GÖRE İSMİNİ YAZDIRMAK GEREKLİ-->
                                <div class="bio-row">
                                @if($data[0]['duty_app_rej']!=0)
                                    <p><span class="bold">Konumu </span>: İptal Edildi</p>
                                @else
                                    <p><span class="bold">Konumu </span>: Devam Ediyor</p>
                                @endif
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="card" style="display: none;">
                        <header class="card-header">
                            Last Activity
                        </header>
                        <div class="card-body">
                            <table class="table table-hover p-table">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Commnets</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Project analysis
                                    </td>
                                    <td>
                                        18/11/2014 9:28:23
                                    </td>
                                    <td>
                                        28/11/2014 12:23:03
                                    </td>
                                    <td>
                                        Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Requirement Collection
                                    </td>
                                    <td>
                                        10/11/2014 9:28:23
                                    </td>
                                    <td>
                                        22/11/2014 12:23:03
                                    </td>
                                    <td>
                                        Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Reported</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Design Implement
                                    </td>
                                    <td>
                                        18/11/2014 9:28:23
                                    </td>
                                    <td>
                                        28/11/2014 12:23:03
                                    </td>
                                    <td>
                                        Dism Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Accepted</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Widget Management
                                    </td>
                                    <td>
                                        18/11/2014 9:28:23
                                    </td>
                                    <td>
                                        28/11/2014 12:23:03
                                    </td>
                                    <td>
                                        Cosm Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Contact Info
                                    </td>
                                    <td>
                                        18/11/2014 9:28:23
                                    </td>
                                    <td>
                                        28/11/2014 12:23:03
                                    </td>
                                    <td>
                                        Hello that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Sent</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Project analysis
                                    </td>
                                    <td>
                                        18/11/2014 9:28:23
                                    </td>
                                    <td>
                                        28/11/2014 12:23:03
                                    </td>
                                    <td>
                                        Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Project analysis
                                    </td>
                                    <td>
                                        18/11/2014 9:28:23
                                    </td>
                                    <td>
                                        28/11/2014 12:23:03
                                    </td>
                                    <td>
                                        Orem psum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Completed</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                </div>
                <div class="col-md-4">
                    <section class="card">
                        <header class="card-header">
                            Görev Detayları
                        </header>
                        <div class="card-body">
                            <p>
                                {{$data[0]['duty_detail']}}
                            </p>
                            <br/>
                            <h6 class="bold" style="display: none;">Görevle İlgili Dosyalar</h6>
                            <ul class="list-unstyled p-files" style="display: none;">
                                <li><a href="#"><i class="fa fa-file-text"></i> Project-document.docx</a></li>
                                <li><a href="#"><i class="fa fa-picture-o"></i> Logo-company.jpg</a></li>
                                <li><a href="#"><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a></li>
                                <li><a href="#"><i class="fa fa-file"></i> Contract-10_12_2014.docx</a></li>
                            </ul>
                            <br/>
                            <div class="text-center mtop20">
                                <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="{{route('duty.edit.post', ['duty_id' => $data[0]['duty_id']])}}" >
                                    {{csrf_field()}}
                                @if($data[0]['duty_status']!='0')
                                    <button type="submit" name="duty_status" value="1" class="btn btn-primary d-none">Görevi Tamamla</button>
                                @else
                                    <button type="submit" name="duty_status" value="1" class="btn btn-primary">Görevi Tamamla</button>
                                @endif
                                    @if($data[0]['duty_app_rej']!='1')
                                    <button type="submit" name="duty_app_rej" value="1" class="btn btn-warning">Görevi Reddet</button>
                                    @else
                                    <button type="submit" name="duty_app_rej" value="1" class="btn btn-warning d-none">Görevi Reddet</button>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    @endsection