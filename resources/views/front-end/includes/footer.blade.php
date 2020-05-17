<footer class="navbar-fixed-bottom area-mobile-off" style="width: 100%;background: none;">
    <a href="{{ url('/cart') }}">
        <!--Apps button start-->
        <div style="height: auto;width: 80px;background: #fff ;position: absolute;z-index: 9999;bottom: 450px;right: 0;border-radius: 5px 0 0 5px;border: 1px solid #1D70BA;"
            class="cart_anchor">
            <span id="CartDetailsTotal"
                style="padding: 8px 0;width:100%;display: inline-block;color:#000;font-size:14px;font-weight:bold;text-align:center">{{ Cart::total() }}
                Tk.</span>
            <span
                style="width:100%;display: inline-block; background: green; color: #fff;font-weight:bold;padding:2px;text-align:center;border-radius: 0 0 0 5px;">
                <i class="fa fa-shopping-cart " title="My Cart" style="    font-size: 30px;"> </i>
                <span id="totalCartItems2">{{ Cart::content()->count() }} Items</span>
            </span>
        </div>
    </a>
    <!--Apps button end-->
</footer>


<footer class="navbar-default" style="background: #5DA779">
    <div class="container-fluid ">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <p class="text-center" style="padding-top:5px"></p>
            <center>
                @foreach(App\Page::all() as $page)
                <a href="{{ url('page/'.$page->slug) }}" target="_blank" style="color: white !important;margin:0 15px">
                    {{ $page->title }} </a>
                @endforeach
            </center>

            <p class="text-center" style="color:#fff;font-weight:bold;padding-top:8px;padding-bottom: 8px;">Copyright ©
                {{ date('Y') }} | {{$basic->name}} | Design and Development By <a href="#">TwinsTech</a></p>
        </div>

    </div>
</footer>
