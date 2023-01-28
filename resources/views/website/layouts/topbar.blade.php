<div class="topbar overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="topbar-area">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-8">
                            <div class="topbar-area__left">
                                <ul>
                                    <li class="neutral-bottom">
                                        <a href="tel:+01(977)259912">
                                            <i class="fa-solid fa-phone"></i>+01 (977) 2599 12
                                        </a>
                                    </li>
                                    <li class="neutral-bottom">
                                        <a href="mailto:company@domin.com">
                                            <i class="fa-solid fa-envelope"></i>company@domin.com
                                        </a>
                                    </li>
                                    <li class="neutral-bottom">
                                        <a href="contact-us.html">
                                            <i class="fa-solid fa-location-dot"></i>3146 Koontz Lane, USA
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="topbar-area__right">
                                @if (Route::has('login'))
                                    <div class="hidden">
                                        @auth
                                            <a href="{{ url('/app/dashboard') }}" class="button button--effect">Dashboard</a>
                                        @else'

                                        @if (Auth::guard('donor')->check())
                                        <a href="{{ route('donor-dashboard.donor_dashboard') }}" class="button button--effect">Donor</a>
                                        @else
                                        <a href="{{ route('donorLogin') }}" class="button button--effect">Donor</a>
                                        <a href="{{ route('login') }}" class="button button--effect">Admin</a>
                                        
                                        @endif
                                            {{-- @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="button button--effect">Register</a>
                                            @endif --}}
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>