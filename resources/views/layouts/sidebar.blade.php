<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{asset('/')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Anasayfa</span>
                </a>
            </li>
            <!-- BU ALANI SADECE ADMİN GÖREBLİR // THIS SITE ONLY SEE ADMINISTRATOR-->
            @if (\Illuminate\Support\Facades\Auth::user()->user_auth == "1")
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-book"></i>
                    <span>Kullanıcı İşlemleri</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('users.index')}}">Kullanıcılar</a></li>
                    <li><a  href="{{route(('users.create'))}}">Yeni Kullanıcı Ekle</a></li>
                </ul>
            </li>
            @endif
            <!---->
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-list-alt"></i>
                    <span>Siparişler</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('orders.create')}}">Yeni Sipariş Ekle</a></li>
                    <li><a  href="{{route('orders.index')}}">Siparişlerim</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>Ürünler</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route('products.index')}}">Ürünler</a></li>
                    <li><a href="{{route('products.create')}}">Ürün Ekle</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-hand-o-right"></i>
                    <span>Görevlerim</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route('duty.index')}}">Görevlerim</a></li>
                    <li><a href="{{route('duty.create')}}">Görevlendir</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->