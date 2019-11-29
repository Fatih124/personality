@extends('layouts.index')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="card">
                <header class="card-header">
                    Görevlerim
                </header>
                <div class="card-body">
                    <!-- Editable table -->
                    <div class="card">
                        <div class="card-body">
                            @if(session("status"))
                                <div class="alert alert-success" role="alert">
                                    {{session("status")}}
                                </div>
                            @endif
                            <p>Bu alanda size atanan görevleri görebilirsiniz.</p>
                            <div id="table" class="table-editable">
                                <span class="table-add float-right mb-3 mr-2">
                                    <a href="{{route('duty.create')}}" class="text-success"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
                                </span>
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <tr>
                                        <th class="text-center">Görev İsmi</th>
                                        <th class="text-center">Başlangıç Tarihi</th>
                                        <th class="text-center">Bitiş Tarihi</th>
                                        <th class="text-center">Durum</th>
                                        <th class="text-center">Detay</th>
                                        <th class="text-center">Düzenle</th>
                                        <th class="text-center">Sil</th>
                                    </tr>
                                    @foreach($data as $key =>$value)
                                        <tr>
                                            <td class="pt-3-half">{{$value['duty_name']}}</td>
                                            <td class="pt-3-half">{{$value['duty_startdate']}}</td>
                                            <td class="pt-3-half">{{$value['duty_endtime']}}</td>
                                            @if($value['duty_status']!='1')
                                                <td class="pt-2-half"><span class="badge badge-danger">Aktif</span></td>
                                            @else
                                                <td class="pt-2-half"><span class="badge badge-dark">Pasif</span></td>
                                            @endif
                                            <td class="pt-2-half">
                                                <span class="table-show"><a href="{{route('duty.show', ['duty_id'=>$value['duty_id']])}}"><button type="button" class="btn btn-warning btn-rounded btn-sm my-0">İncele</button></a></span>
                                            </td>
                                            <td class="pt-3-half">
                                                <span class="table-edit"><a href="{{route('duty.edit', ['duty_id'=>$value['duty_id']])}}"><button type="button" class="btn btn-success btn-rounded btn-sm my-0">Düzenle</button></a></span>
                                            </td>
                                            <td class="pt-3-half">
                                                <span class="table-remove"><a href="{{route('duty.delete', ['duty_id'=>$value['duty_id']])}}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Sil</button></a></span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                {{$data->links()}}
                            </div>
                        </div>
                    </div>
                    <!-- Editable table -->

                </div>
            </section>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
@endsection