<div class="topbar overflow-hidden sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="topbar-area">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-8">
                            <div class="topbar-area__left">
                                <ul>
                                    <li class="neutral-bottom">
                                        <a href="{{url('/')}}">
                                            <img src="{{asset('assets/images/logo (2).png')}}" style="height: 61px;margin-top: 8px;" alt="Logo" role="button" >
                                        </a>
                                    </li>
                                    <li class="neutral-bottom">
                                        <a class="  active" href="{{url('/')}}" 
                                              aria-expanded="false">
                                            Home
                                        </a>
                                        
                                    </li>
                                    @if (isset(Auth::guard('donor')->user()->email ))
                                    @else
                                    <li class="neutral-bottom ">
                                        <a class=" " href="{{route('donor-register.donor_registration')}}" 
                                            aria-expanded="false">
                                            Be a donor
                                        </a>
                                        
                                    </li> 
                                    @endif

                                    <li class="neutral-bottom">
                                        <a class=" " href="{{route('donor-search.donor_search')}}" 
                                            aria-expanded="false">
                                            Search Donor
                                        </a>
                                        
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="topbar-area__right pb-3">
                                @if (Route::has('login'))
                                    <div class="">
                                        @auth
                                            <a href="{{ url('/app/dashboard') }}" style="color:#fff;" class="button button--effect">Dashboard</a>
                                        @else'

                                        @if (Auth::guard('donor')->check())
                                        <a href="{{ route('donor-dashboard.donor_dashboard') }}"style="color:#fff;"  class="button  button--effect">Donor</a>
                                        @else
                                        <a href="{{ route('donorLogin') }}" style="color:#fff;"  class="button button--effect">Donor</a>
                                        <a href="{{ route('login') }}" style="color:#fff;"  class="button button--effect">Admin</a>
                                        
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