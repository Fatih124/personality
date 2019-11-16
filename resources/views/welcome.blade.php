@extends('layouts.index')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <div class="row state-overview">
                <div class="col-lg-3 col-sm-6">
                    <section class="card">
                        <div class="symbol terques">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="value">
                            <h1 class="count">
                                0
                            </h1>
                            <p>Kayıtlı Kullanıcılar</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="card">
                        <div class="symbol red">
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count2">
                                0
                            </h1>
                            <p>Toplam Satış</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="card">
                        <div class="symbol yellow">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count3">
                                0
                            </h1>
                            <p>Yeni İşler</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="card">
                        <div class="symbol blue">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count4">
                                0
                            </h1>
                            <p>Toplam TL Satış Miktarı</p>
                        </div>
                    </section>
                </div>
            </div>
            <!--state overview end-->

            <div class="row">
                <div class="col-lg-8">
                    <!--custom chart start-->
                    <div class="border-head">
                        <h3>Yıllık Grafik</h3>
                    </div>
                    <div class="custom-bar-chart">
                        <ul class="y-axis">
                            <li><span>100</span></li>
                            <li><span>80</span></li>
                            <li><span>60</span></li>
                            <li><span>40</span></li>
                            <li><span>20</span></li>
                            <li><span>0</span></li>
                        </ul>
                        <div class="bar">
                            <div class="title">OCK</div>
                            <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">ŞUB</div>
                            <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">MAR</div>
                            <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">NİS</div>
                            <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
                        </div>
                        <div class="bar">
                            <div class="title">MAY</div>
                            <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">HAZ</div>
                            <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
                        </div>
                        <div class="bar">
                            <div class="title">TEM</div>
                            <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">AGU</div>
                            <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">EYL</div>
                            <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">EKİ</div>
                            <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">KAS</div>
                            <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">ARA</div>
                            <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
                        </div>
                    </div>
                    <!--custom chart end-->
                </div>
                <div class="col-lg-4">
                    <!--user info table start-->
                    <section class="card">
                        <div class="card-body">
                            <a href="#" class="task-thumb">
                                <img src="img/avatar1.jpg" alt="">
                            </a>
                            <div class="task-thumb-details">
                                <h1><a href="#">Anjelina Joli</a></h1>
                                <p>Bölge Planlama</p>
                            </div>
                        </div>
                        <table class="table table-hover personal-task">
                            <tbody>
                            <tr>
                                <td>
                                    <i class=" fa fa-tasks"></i>
                                </td>
                                <td>Yeni Görev Verildi</td>
                                <td> 2</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-exclamation-triangle"></i>
                                </td>
                                <td>Bekleyen Görevler</td>
                                <td> 14</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-envelope"></i>
                                </td>
                                <td>Hedeflenen Satış Miktarı</td>
                                <td> 450.00TL</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                    <!--user info table end-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--work progress start-->
                    <section class="card">
                        <div class="card-body progress-card">
                            <div class="task-progress">
                                <h1>İş İlerleyişi</h1>
                                <p>Anjelina Joli</p>
                            </div>
                            <div class="task-option"><!--BU ALAN SADECE YONETİCİYE GORUNECEK-->
                                <select class="styled">
                                    <option>Anjelina Joli</option>
                                    <option>Tom Crouse</option>
                                    <option>Jhon Due</option>
                                </select>
                            </div>
                        </div>
                        <table class="table table-hover personal-task">
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                   Hedeflenen Satış
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-danger">75%</span>
                                </td>
                                <td>
                                    <div id="work-progress1"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Verilen İş
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-success">43%</span>
                                </td>
                                <td>
                                    <div id="work-progress2"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Tamamlanan İş
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-info">67%</span>
                                </td>
                                <td>
                                    <div id="work-progress3"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    Hedefe Ulaşma
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-warning">30%</span>
                                </td>
                                <td>
                                    <div id="work-progress4"></div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </section>
                    <!--work progress end-->
                </div>
            </div>
            <div class="row">


            </div>

        </section>
    </section>
    <!--main content end-->
    @endsection