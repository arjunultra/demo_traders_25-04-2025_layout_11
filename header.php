<!-- Marquee Topbar -->
<div id="headerTop" class="header-topbar py-2 smallfnt text-center marquee-left">
    Diwali sale is open now. Buy early for the best discounts! Happy Diwali...!!!!
    &nbsp; <i class="bi bi-whatsapp text-success"></i> +91 9999999999
    &nbsp; <i class="bi bi-telephone text-primary"></i> +91 8888888888, +91 7777777777
</div>

<!-- Header -->
<header id="head">
    <nav id="main-navigation" class="navigation p-3 d-flex align-items-center">
        <a href="index.php" class="logo">
            <img src="images/logo.png" alt="logo" title="Demo Traders" class="img-fluid">
        </a>
        <div class="hamburger-menu menu-closed">
            <div class="hamburger"></div>
        </div>
        <div class="menu-container">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center menu-row">
                    <!-- Left: Nav Links -->
                    <div class="col-12 col-md-6 col-lg-6 border-right border-white align-self-center">
                        <ul class="menu d-flex flex-column align-items-center mt-lg-5">
                            <li class="nav-item px-2">
                                <a class="nav-link <?php if ($page == 'home')
                                    echo 'active'; ?>" href="index.php">Home</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link <?php if ($page == 'about')
                                    echo 'active'; ?>" href="about.php">About</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link <?php if ($page == 'products')
                                    echo 'active'; ?>" href="products.php">Products</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link <?php if ($page == 'safety')
                                    echo 'active'; ?>" href="safetytips.php">Safety Tips</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link <?php if ($page == 'contact')
                                    echo 'active'; ?>" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Right: Contact Info -->
                    <div class="col-12 col-md-6 col-lg-6 text-white align-self-center">
                        <div class="flex-container d-flex flex-column align-items-center text-left">
                            <img src="images/logo.png" alt="brand logo" title="Demo Traders"
                                class="img-fluid main-logo">

                            <!-- Wrap text content in a full-width div -->
                            <div class="w-75 text-start contact-details">
                                <div class="align-container text-left">
                                    <p class="mb-2 d-flex">
                                        <i class="bi bi-geo-alt-fill text-warning mr-2"></i> Demo Building,Demo
                                        Colony,Demo
                                        Street,Sivakasi
                                    </p>
                                    <p class="mb-2 d-flex">
                                        <i class="bi bi-whatsapp text-success mr-2"></i> +91 9999999999
                                    </p>
                                    <p class="mb-2 d-flex">
                                        <i class="bi bi-telephone text-primary mr-2"></i> +91 8888888888, +91 7777777777
                                    </p>
                                    <p class="mb-2 d-flex">
                                        <i class="bi bi-envelope-fill text-warning mr-2"></i> info@crackershop.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Marquee Script -->
<script src="js/jquery.min.js"></script>
<script src="js/marquee.js"></script>
<script>
    $('.marquee-left').marquee({
        duration: 16000,
        gap: 150,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: false,
        pauseOnHover: true
    });
</script>