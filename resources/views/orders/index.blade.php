@extends('layouts.index')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                            Tüm Siparişler
                        </header>
                        <div class="card-body">
                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>Müşteri İsmi</th>
                                        <th>Müşteri Telefonu</th>
                                        <th>Ürün İsmi</th>
                                        <th>Satış Tarihi</th>
                                        <th>Teslimat Tarihi</th>
                                        <th>İşlem Seçiniz</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $row)

                                        <tr>
                                            <td>{{$row->customer_name}}</td>
                                            <td>{{$row->customer_phone}}</td>
                                            <td>{{$row->product_name}}</td>
                                            <td>{{$row->sale_date}}</td>
                                            <td>{{$row->delivery_date}}</td>
                                            <td>
                                                <a href="{{route('orders.detail', $row->order_id )}}"><button class="btn btn-success btn-sm fa fa-search"></button> </a>
                                                <a href="{{route('orders.edit', $row->order_id )}}"><button class="btn btn-info btn-sm fa fa-edit"></button> </a>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div><!-- page end-->
        </section>
    </section>


@endsection