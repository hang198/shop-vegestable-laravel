<div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">Vegefoods</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ route('index') }}" class="nav-link">@lang('lang.home')</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('lang.shop')</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="{{ route('product_type',1) }}">@lang('lang.shop')</a>
                    <a class="dropdown-item" href="{{ route('wishlist') }}">@lang('lang.wishlist')</a>
                    <a class="dropdown-item" href="{{ route('product_detail',1) }}">@lang('lang.single_product')</a>
                    <a class="dropdown-item" href="{{ route('addCart',1) }}">@lang('lang.cart')</a>
                    <a class="dropdown-item" href="{{ route('getCheckOut',1) }}">@lang('lang.checkout')</a>
                </div>
            </li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">@lang('lang.about')</a></li>
            <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">@lang('lang.blog')</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">@lang('lang.contact')</a></li>
            <li class="nav-item cta cta-colored"><a href="{{ route('showCart') }}" class="nav-link">
                    <span class="icon-shopping_cart">
                @if(Session::has('cart'))
                        [{{Session::get('cart')->totalQty}}] @else [0]
                        @endif</span></a>

            </li>
            <li class="nav-item"><a href="{{ route('showLogin') }}" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="{{ route('showLogout') }}" class="nav-link">Logout</a></li>
        </ul>
        <form method="post" action="{{ route('changeLanguage') }}">
            @csrf
            <select name="lang" class="btn btn-outline-white" onchange="this.form.submit()">
                <option value="">Language</option>
                <option value="en">EN</option>
                <option value="vi">VI</option>
            </select>
        </form>
    </div>
</div>
