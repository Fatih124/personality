@extends('layouts.index')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="card">
                <header class="card-header">
                    Kullanıcılar
                </header>
                <div class="card-body">
                    <!-- Editable table -->
                    <div class="card">
                        <div class="card-body">
                            <p>Bu alanda yeni kullanıcı ekleyebilir. Mevcut kullanıcıları düzenleyip silebilir veya haklarında daha fazla bilgiye sahip olmak için inceleyebilirsiniz.</p>
                            <div id="table" class="table-editable">
                                <span class="table-add float-right mb-3 mr-2">
                                    <a href="{{route('users.create')}}" class="text-success"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
                                </span>
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <tr>
                                        <th class="text-center">Personel İsim Soyisim</th>
                                        <th class="text-center">Doğum Tarihi</th>
                                        <th class="text-center">Görevi</th>
                                        <th class="text-center">E-mail</th>
                                        <th class="text-center">Detay</th>
                                        <th class="text-center">Düzenle</th>
                                        <th class="text-center">Sil</th>
                                    </tr>
                                    @foreach($data as $key =>$value)
                                        <tr>
                                            <td class="pt-3-half">{{$value['name']}} {{$value['user_surname']}}</td>
                                            <td class="pt-3-half">{{$value['user_birthday']}}</td>
                                            <td class="pt-3-half">{{$value['user_duty']}}</td>
                                            <td class="pt-3-half">{{$value['email']}}</td>
                                            <td class="pt-3-half">
                                                <span class="table-detail"><a href="{{route('users.profile',['id'=>$value['id']])}}"><button type="button" class="btn btn-info btn-rounded btn-sm my-0">İncele</button></a></span>
                                            </td>
                                            <td class="pt-3-half">
                                                <span class="table-edit"><a href="{{route('users.edit', ['id'=>$value['id']])}}"><button type="button" class="btn btn-success btn-rounded btn-sm my-0">Düzenle</button></a></span>
                                            </td>
                                            <td>
                                                <span class="table-remove"><a href="{{route('users.delete', ['id'=>$value['id']])}}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Sil</button></a></span>
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