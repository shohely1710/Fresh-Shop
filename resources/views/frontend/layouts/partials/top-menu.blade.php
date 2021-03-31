<!-- Start Main Top -->
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="custom-select-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                        <option>¥ JPY</option>
                        <option>$ USD</option>
                        <option>€ EUR</option>
                    </select>
                </div>
                <div class="right-phone-box">
                    <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                </div>
                <div class="our-link">
                    <ul>
                        <li><a href="#"><i class="fa fa-user s_color"></i> My Account</a></li>
                        <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                        <li><a href="#"><i class="fas fa-headset"></i> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="login-box">
{{--                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">{{Session::get('user')['name']}}--}}
{{--                        <li><a href="/register">Register</a></li>--}}
{{--                        <option value="login"><a href="/login">Sign </a></option>--}}
{{--                        @if(Session::has('user'))--}}
{{--                        <option value="login"><a href="/login">Logout </a></option>--}}
{{--                        @else--}}
{{--                        <option value="login"><a href="/login">Sign </a></option>--}}
{{--                        @endif--}}

{{--                    </select>--}}
                    <ul class="selectpicker show-tick form-control" id="basic" >
                        @if(Session::has('user'))

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="logout"><a href="/logout">Logout</a></li>

                                </ul>
                            </li>

                        @else
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>

                        @endif

                    </ul>
                    </li>
                    </ul>
                </div>
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->
