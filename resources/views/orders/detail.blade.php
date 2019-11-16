@extends('layouts.index')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    @if(session("status"))
                        <div class="alert alert-success" role="alert">
                            {{session("status")}}
                        </div>
                    @endif
                    <section class="card">
                        <header class="card-header">
                            Müşteri Bilgileri
                        </header>
                        <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">Müşteri İsmi Soyismi:</label>
                                    <div class="col-lg-10">
                                        {{$data[0]['customer_name']}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">Telefon:</label>
                                    <div class="col-sm-10">
                                        {{$data[0]['customer_phone']}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">Ürün İsmi</label>
                                    <div class="col-sm-10">
                                        {{$data[0]['product_id']}}
                                    </div>
                                </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="card-header">
                            Fatura Bilgileri
                        </header>
                        <div class="card-body">
                            <div class=" form">
                                <div class="form-group row ">
                                    <label for="cname" class="control-label col-lg-2">Fatura İsmi:</label>
                                    <div class="col-lg-10">
                                        {{$data[0]['customer_bill_name']}}
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="cemail" class="control-label col-lg-2">E-Mail (varsa):</label>
                                    <div class="col-lg-10">
                                        {{$data[0]['customer_bill_email']}}
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="curl" class="control-label col-lg-2">Vergi Numarası / TC No:</label>
                                    <div class="col-lg-10">
                                        {{$data[0]['customer_bill_tax_number']}}
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="curl" class="control-label col-lg-2">Vergi Dairesi:</label>
                                    <div class="col-lg-10">
                                        {{$data[0]['customer_bill_tax']}}
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="ccomment" class="control-label col-lg-2">Fatura Adresi:</label>
                                    <div class="col-lg-10">
                                        {{$data[0]['customer_bill_address']}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="card-header">
                            Ödeme Bilgileri
                        </header>
                        <div class="card-body">
                            <div class="form">
                                <div class="form-group row "><!--
                                    <label for="odemeturu" class="control-label col-lg-2">Ödeme Türü:</label>
                                    <div class="col-lg-4">
                                        @foreach($data as $key => $value)
                                        @if($value['on']==$data[0]['pay_cash'])
                                        <input  type="checkbox"  class="form-check-input" id="cash" name="pay_cash" checked disabled/>
                                        <label class="form-check-label" for="cash">
                                            Nakit
                                        </label>
                                        <br>
                                        @endif
                                        @endforeach
                                        @foreach($data as $key => $value)
                                        @if($value['on']==$data[0]['pay_creditcard'])
                                        <input  type="checkbox"  class="form-check-input" id="creditcard" name="pay_creditcard" checked disabled/>
                                        <label class="form-check-label" for="creditcard">
                                            Kredi Kartı
                                        </label>
                                        <br>
                                        @endif
                                        @endforeach
                                        @foreach($data as $key => $value)
                                        @if($value['on']==$data[0]['pay_both'])
                                        <input  type="checkbox"  class="form-check-input" id="both" name="pay_both" disabled checked />
                                        <label class="form-check-label" for="both">
                                            Her İki Ödeme Türü
                                        </label>
                                        <br>
                                        @endif
                                        @endforeach
                                        @foreach($data as $key => $value)
                                        @if($value['on']==$data[0]['pay_both'])
                                        <input  type="checkbox"  class="form-check-input" id="checks" name="checks" disabled checked />
                                        <label class="form-check-label" for="checks">
                                            Çek İle Ödeme
                                        </label>
                                        @endif
                                        @endforeach
                                    </div>-->
                                    <div class="col-lg-10">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Nakit</th>
                                                <th>Kredi Kartı</th>
                                                <th>Çek</th>
                                                <th>Genel Toplam</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{$data[0]['amount_cash']}} TL</td>
                                                <td>{{$data[0]['amount_creditcard']}} TL</td>
                                                <td>{{$data[0]['checks_amount']}} TL</td>
                                                <td>{{$data[0]['amount_total']}} TL</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="card-header">
                            Sevk Bilgileri
                        </header>
                        <div class="card-body">
                            <div class="form">
                                <div class="form-group row ">
                                    <label for="cname" class="control-label col-lg-2">Satış Tarihi</label>
                                        {{$data[0]['sale_date']}}
                                </div>
                                <div class="form-group row ">
                                    <label for="cname" class="control-label col-lg-2">Teslim Tarihi</label>
                                        {{$data[0]['delivery_date']}}
                                </div>
                                <div class="form-group row ">
                                    <label for="curl" class="control-label col-lg-2">Teslim Alacak Kişi</label>
                                    {{$data[0]['receiver']}}
                                </div>
                                <div class="form-group row ">
                                    <label for="curl" class="control-label col-lg-2">Telefon Numarası</label>
                                    {{$data[0]['receiver_phone']}}
                                </div>
                                <div class="form-group row ">
                                    <label for="ccomment" class="control-label col-lg-2">Teslimat Adresi</label>
                                    {{$data[0]['receiver_address']}}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="card-header">
                            Diğer Bilgiler
                        </header>
                        <div class="card-body">
                            <div class="form">
                                <div class="form-group row ">
                                    <label for="ccomment" class="control-label col-lg-2">Açıklamalar (Lütfen Tüm Detayları Belirtin)</label>
                                   {{$data[0]['details']}}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    @endsection