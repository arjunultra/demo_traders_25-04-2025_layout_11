<!-- Marquee Topbar -->
<div id="headerTop" class="header-topbar py-2 smallfnt text-center marquee-left">
    Diwali sale is open now. Buy early for the best discounts! Happy Diwali...!!!!
    &nbsp; <i class="bi bi-whatsapp text-success"></i> +91 9999999999
    &nbsp; <i class="bi bi-telephone text-primary"></i> +91 8888888888, +91 7777777777
</div>

<!-- Header -->
<header id="head">
    <nav id="main-navigation" class="navigation p-2">
        <a href="index.php" class="logo">
            <div class="logo-text text-danger font-weight-bold heading5">Demo Traders</div>
        </a>
        <div class="hamburger-menu">
            <div class="hamburger"></div>
        </div>
        <div class="menu-container">
            <div class="container">
                <div class="row align-items-center justify-content-center w-100 menu-row">
                    <!-- Left: Nav Links -->
                    <div class="col-12 col-md-6 col-lg-6 border-right border-white">
                        <ul class="menu">
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
                    <div class="col-12 col-md-6 col-lg-6 text-white">
                        <img src="images/logo.png" alt="brand logo" title="Demo Traders" class="img-fluid">
                        <p class="mb-2 heading1 text-start">Retail & Wholesale Fireworks Store</p>
                        <p class="mb-2 heading1 text-start"><i class="bi bi-whatsapp text-success"></i> +91 9999999999
                        </p>
                        <p class="mb-2 heading1 text-start"><i class="bi bi-telephone text-primary"></i> +91
                            8888888888,
                            +91
                            7777777777</p>
                        <p class="mb-0 heading1 text-start"><i class="bi bi-envelope-fill text-warning"></i>
                            info@crackershop.com</p>
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