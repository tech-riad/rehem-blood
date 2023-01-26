<header class="header">
    <nav class="navbar navbar-expand-xl sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('assets/images/logo-light.png')}}" alt="Logo" class="logo">
            </a>
            <div class="collapse navbar-collapse justify-content-center order-3 order-xl-2" id="primaryNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="javascript:void(0)" id="navbarHomeDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Home
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.html">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarCampaignDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Campaign
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarCampaignDropdown">
                            <li><a class="dropdown-item" href="campaigns.html">Campaigns</a></li>
                            <li><a class="dropdown-item" href="campaign-details.html">Campaign Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="services.html">Our Services</a></li>
                            <li><a class="dropdown-item" href="service-details.html">Service Details</a></li>
                            <li><a class="dropdown-item" href="team.html">Team Members</a></li>
                            <li><a class="dropdown-item" href="donate-now.html">Donate Now</a></li>
                            <li><a class="dropdown-item" href="gallery.html">Photo Gallery</a></li>
                            <li><a class="dropdown-item" href="register.html">Registration Now</a></li>
                            <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                            <li><a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a class="dropdown-item" href="terms-conditions.html">Terms & Conditions</a></li>
                            <li><a class="dropdown-item" href="404.html">Error</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarBlogDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarBlogDropdown">
                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                            <li><a class="dropdown-item" href="blog-two.html">Blog Two</a></li>
                            <li><a class="dropdown-item" href="blog-three.html">Blog Three</a></li>
                            <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                            <li><a class="dropdown-item" href="blog-details-two.html">Blog Details Two</a></li>
                            <li><a class="dropdown-item" href="blog-details-three.html">Blog Details Three</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-out order-2 order-xl-3">
                <div class="navbar-out__group">
                    <a href="javascript:void(0)" class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <select class="select-language">
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                        <option value="china">China</option>
                        <option value="germany">Germany</option>
                    </select>
                    <a href="javascript:void(0)" class="d-none d-xl-block open-sidenav">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav"
                    aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle Primary Nav">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
        </div>
    </nav>
</header>

        <!-- ==== #header end ==== -->

        <!-- ==== full screen search start ==== -->
        <div class="search">
            <a href="javascript:void(0)" class="close">
                <i class="fa-solid fa-xmark"></i>
            </a>
            <form action="#" method="post">
                <input type="search" name="search__box" id="searchBox" placeholder="Search Now" required>
                <button type="submit" class="button button--effect">Search Now</button>
            </form>
        </div>
        <!-- ==== #full screen search end ==== -->

        <!-- ==== sidenav start ==== -->
        <div class="sidenav d-none d-xl-block">
            <div class="navbar-inner">
                <div class="close-sidebar-wrapper">
                    <a href="javascript:void(0)" class="close-sidebar">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                </div>
                <div class="intro">
                    <a href="index.html">
                        <img src="assets/images/logo.png" alt="Logo" class="logo">
                    </a>
                </div>
                <ul>
                    <li><a href="index.html"><i class="fa-solid fa-angle-right"></i> Home</a></li>
                    <li><a href="about-us.html"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
                    <li><a href="campaign.html"><i class="fa-solid fa-angle-right"></i> Campaign</a></li>
                    <li><a href="blog.html"><i class="fa-solid fa-angle-right"></i> Blog</a></li>
                    <li><a href="blog-details.html"><i class="fa-solid fa-angle-right"></i> Blog Details</a></li>
                    <li><a href="contact-us.html"><i class="fa-solid fa-angle-right"></i> Contact Us</a></li>
                </ul>
                <form action="#" method="post">
                    <div class="input-group-btn input-group-btn--secondary">
                        <input type="email" name="sidenav__newsletter__email" id="sidenavNewsletterEmail"
                            placeholder="Enter Your Email" required>
                        <button type="submit" class="button button--effect"><i class="fa-solid fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>