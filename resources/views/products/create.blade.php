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
                                YENİ ÜRÜN OLUŞTURMA <br>Bu alanda yeni ürün oluşturabilirsiniz.
                            </div>
                        @endif
                        <div class="panel-body bio-graph-info">
                            <h1> Ürün Bilgileri</h1>
                            <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="{{route('products.create.post')}}" >
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">Ürün İsmi</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="product_name" class="form-control" id="f-name" placeholder=" ">
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