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
                                ÜRÜN BİLGİLERİ GÜNCELLEME<br>Bu alanda ürün bilgilerini güncelleyebilirsiniz.
                            </div>
                        @endif
                        <div class="panel-body bio-graph-info">
                            <h1 style="text-align: center"> Ürün Bilgileri</h1>
                            <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="{{route('products.edit.post', ['product_id'=>$data[0]['product_id']])}}" >
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">İsim</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="product_name" class="form-control" id="f-name" required value="{{$data[0]['product_name']}}">
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="form-group" style="width: 305px; float: left;">
                                    <div class="col-lg-12">
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
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>
    <!--main content end-->
@endsection