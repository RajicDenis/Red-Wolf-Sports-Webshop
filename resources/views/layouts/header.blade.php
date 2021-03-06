<div class="header-nav">
    <div class="nav">
        <ul class="list">
            <li><i class="fas fa-bars white"></i></li>
            <li><a class="white" href="{{URL::route('jerseys')}}">JERSEYS</a></li>
            <li><a class="white" href="{{URL::route('shoes')}}">SHOES</a></li>
            <li><a class="white" href="{{URL::route('allProducts')}}">ALL PRODUCTS</a></li>
        </ul>
    </div>

    <a href="{{URL::route('home')}}" class="logo"><img class="logo-img" src="{{URL::asset('images/redwolf.png')}}"></a>

   <div class="nav2">
        <ul class="list">
            @if(Sentinel::check() == true)
                <li class="log-li"><a href="{{ action('AuthenticationController@logout') }}"><div class="icon-box"><i class="fas fa-power-off s2x white"></i></div></a>{{ ucfirst(Sentinel::getUser()->username) }}</li>
            @else
                <a href="{{ route('login') }}" class="white"><li class="log-li"><div class="icon-box"><i class="far fa-user-circle s2x white"></i></div> Log In</li></a>
                <a href="{{ route('register') }}" class="white"><li class="log-li"><div class="icon-box"><i class="fas fa-sign-in-alt s2x white"></i></div> Sign Up</li></a>
            @endif
            
            <li>
                <a href="{{ route('cart') }}" class="icon-box white">
                    @if(Cart::count() == 0)
                        <i class="fas fa-cart-arrow-down white"></i>
                    @else
                        <span class="cart_count">{{ Cart::count() }}</span>
                    @endif
                </a>
            </li>
        </ul>
    </div> 
</div>