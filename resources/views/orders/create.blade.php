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
                            <form role="form" class="form-horizontal tasi-form" action="{{route('orders.create.post')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">Müşteri İsmi Soyismi</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="customer_name" class="form-control" id="validationServer01" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">Telefon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="customer_phone" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">Ürün İsmi</label>
                                    <div class="col-sm-10">
                                        <select name="product_id" class="form-control mb-2">
                                            @foreach($product as $key => $value)
                                                <option value="{{$value['product_id']}}">{{$value['product_name']}}</option>
                                                @endforeach
                                        </select>
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
                                    <label for="cname" class="control-label col-lg-2">Fatura İsmi</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="cname" name="customer_bill_name" minlength="2" type="text"/>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="cemail" class="control-label col-lg-2">E-Mail (varsa)</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="cemail" type="email" name="customer_bill_email" />
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="curl" class="control-label col-lg-2">Vergi Numarası / TC No</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="curl" type="text" name="customer_bill_tax_number" />
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="curl" class="control-label col-lg-2">Vergi Dairesi</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="curl" type="text" name="customer_bill_tax" />
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="ccomment" class="control-label col-lg-2">Fatura Adresi</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control " id="ccomment" name="customer_bill_address"></textarea>
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
                                <div class="form-group row ">
                                    <label for="odemeturu" class="control-label col-lg-2">Ödeme Türü:</label>
                                    <div class="col-lg-4">
                                        <input  type="checkbox"  class="form-check-input" id="cash" name="pay_cash" />
                                        <label class="form-check-label" for="cash">
                                            Nakit
                                        </label>
                                        <br>
                                        <input  type="checkbox"  class="form-check-input" id="creditcard" name="pay_creditcard" />
                                        <label class="form-check-label" for="creditcard">
                                            Kredi Kartı
                                        </label>
                                        <br>
                                        <input  type="checkbox"  class="form-check-input" id="both" name="pay_both" />
                                        <label class="form-check-label" for="both">
                                            Her İki Ödeme Türü
                                        </label>
                                        <br>
                                        <input  type="checkbox"  class="form-check-input" id="checks" name="checks" />
                                        <label class="form-check-label" for="checks">
                                            Çek İle Ödeme
                                        </label>
                                    </div>
                                    <label for="odememiktari" class="control-label col-lg-2">Ödeme Miktarı:</label>
                                    <div class="col-lg-4">
                                        <input  type="text"  class="form-control" id="cash" name="amount_cash" placeholder="Nakit" style="width: 160px; float:left; margin-right: 35px;"/>
                                        <input  type="text"  class="form-control" id="checks" name="checks_amount" placeholder="Çek Miktarı" style="width: 160px;"/>
                                        <br>
                                        <input  type="text"  class="form-control" id="creditcard" name="amount_creditcard" placeholder="Kredi Kartı" style="width: 160px; float:left; margin-right: 35px;"/>
                                        <input  type="date"  class="form-control" id="checks_date" name="checks_date" placeholder="Çek Tarihi" style="width: 160px;"/>
                                        <br>
                                        <input  type="text"  class="form-control" id="both" name="amount_total" placeholder="Toplam Miktar" />
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
                                    <div class="col-lg-10">
                                        <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="dd-mm-yyyy">
                                            <input type="date" class="form-control" name="sale_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="cname" class="control-label col-lg-2">Teslim Tarihi</label>
                                    <div class="col-lg-10">
                                        <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="dd-mm-yyyy">
                                            <input type="date" class="form-control" name="delivery_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="curl" class="control-label col-lg-2">Teslim Alacak Kişi</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="curl" type="text" name="receiver" />
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="curl" class="control-label col-lg-2">Telefon Numarası</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="curl" type="text" name="receiver_phone" />
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="ccomment" class="control-label col-lg-2">Teslimat Adresi</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control " id="ccomment" name="receiver_address"></textarea>
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
                            Diğer Bilgiler
                        </header>
                        <div class="card-body">
                            <div class="form">
                                <div class="form-group row ">
                                    <label for="ccomment" class="control-label col-lg-2">Açıklamalar (Lütfen Tüm Detayları Belirtin)</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control " id="ccomment" name="details"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-danger" type="submit">Kaydet</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
@endsection