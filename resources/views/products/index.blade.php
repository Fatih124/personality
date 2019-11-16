@extends('layouts.index')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="card">
                <header class="card-header">
                    Ürünler
                </header>
                <div class="card-body">
                    <!-- Editable table -->
                    <div class="card">
                        <div class="card-body">
                            <p>Bu alanda yeni ürün ekleyebilir. Mevcut ürünleri düzenleyip silebilirsiniz.</p>
                            <div id="table" class="table-editable">
                                <span class="table-add float-right mb-3 mr-2">
                                    <a href="{{route('products.create')}}" class="text-success"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
                                </span>
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <tr>
                                        <th class="text-center">Ürün İsmi</th>
                                        <th class="text-center">Düzenle</th>
                                        <th class="text-center">Sil</th>
                                    </tr>
                                    @foreach($data as $key =>$value)
                                        <tr>
                                            <td class="pt-3-half">{{$value['product_name']}}</td>
                                            <td class="pt-3-half">
                                                <span class="table-edit"><a href="{{route('products.edit', ['product_id'=>$value['product_id']])}}"><button type="button" class="btn btn-success btn-rounded btn-sm my-0">Düzenle</button></a></span>
                                            </td>
                                            <td>
                                                <span class="table-remove"><a href="{{route('products.delete', ['product_id'=>$value['product_id']])}}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Sil</button></a></span>
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