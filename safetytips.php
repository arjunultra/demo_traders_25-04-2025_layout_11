<?php $page = "safetytips"; ?>
<!DOCTYPE html>
<html lang="en">

<head itemscope itemtype="http://www.schema.org/website">
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="https://.com">
    <meta property="og:image" content="https://.com/images/android-icon-192x192.png">
    <meta name="keywords" content="">
    <meta property="og:description" name="description" content="">
    <meta name="robots" content="all">
    <meta name="revisit-after" content="10 Days">
    <meta name="copyright" content="">
    <meta name="language" content="English">
    <meta name="distribution" content="Global">
    <meta name="web_author" content="srisoftwarez.com">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="icon" sizes="192x192" href="images/android-icon-192x192.png">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/odometer-theme.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body itemscope itemtype="http://schema.org/WebPage">
    <?php include_once "header.php"; ?>
    <section class="safety-banner">
        <img class="img-fluid w-100" src="images/safety-banner.webp" alt="demo traders about banner"
            title="Demo Traders">
    </section>
    <section class="safety-tips py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12 text-center mb-5 safety-tips__header">
                    <h2 class="section-title font-weight-bold">Safety First, Celebration Second</h2>
                    <div class="safety-tips__divider">
                        <span class="safety-tips__divider-icon"><i class="bi bi-shield-check"></i></span>
                    </div>
                    <p class="section-subtitle">Essential guidelines to ensure your festive celebrations remain joyful
                        and incident-free</p>
                </div>
            </div>

            <div class="safety-tips__container">
                <!-- Safety Guidelines Cards -->
                <div class="safety-tips__tabs">
                    <ul class="nav nav-pills safety-tips__nav mb-4" id="safetyTab" role="tablist">
                        <li class="nav-item mb-3 mb-md-0 mb-lg-0" role="presentation">
                            <a class="nav-link active bg-success" id="dos-tab" data-toggle="pill" href="#dos" role="tab"
                                aria-controls="dos" aria-selected="true">
                                <i class="bi bi-check-circle"></i> Best Practices
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="donts-tab" data-toggle="pill" href="#donts" role="tab"
                                aria-controls="donts" aria-selected="false">
                                <i class="bi bi-exclamation-triangle"></i> Safety Warnings
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content safety-tips__content" id="safetyTabContent">
                        <!-- DO's Tab -->
                        <div class="tab-pane fade show active" id="dos" role="tabpanel" aria-labelledby="dos-tab">
                            <div class="safety-tips__illustration">
                                <img src="images/dos.webp" alt="Safe fireworks practices"
                                    class="img-fluid safety-tips__image">
                            </div>

                            <div class="safety-tips__cards">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--do">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-shop"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">Licensed Vendors</h5>
                                            <p class="safety-tips__card-text">Buy crackers only from licensed and
                                                authorized shops to ensure quality and safety standards.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--do">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-journal-text"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">Follow Instructions</h5>
                                            <p class="safety-tips__card-text">Always read and follow label instructions
                                                carefully before lighting any fireworks.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--do">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-bucket"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">Emergency Ready</h5>
                                            <p class="safety-tips__card-text">Keep a bucket of water or sand nearby
                                                during use for any unforeseen incidents.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--do">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-tree"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">Open Spaces</h5>
                                            <p class="safety-tips__card-text">Light crackers in open outdoor areas only,
                                                away from buildings and dry vegetation.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--do">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-arrows-fullscreen"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">Safe Distance</h5>
                                            <p class="safety-tips__card-text">Maintain a safe distance after lighting
                                                fireworks to prevent accidents.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--do">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">Adult Supervision</h5>
                                            <p class="safety-tips__card-text">Always supervise children while they use
                                                fireworks, even sparklers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DON'Ts Tab -->
                        <div class="tab-pane fade" id="donts" role="tabpanel" aria-labelledby="donts-tab">
                            <div class="safety-tips__illustration">
                                <img src="images/donts.webp" alt="Fireworks safety warnings"
                                    class="img-fluid safety-tips__image">
                            </div>

                            <div class="safety-tips__cards">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--dont">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-lightbulb-off"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">Leave Duds Alone</h5>
                                            <p class="safety-tips__card-text">Don't relight a dud cracker. Wait 20
                                                minutes and then soak in water.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--dont">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-fire"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">Proper Storage</h5>
                                            <p class="safety-tips__card-text">Don't store fireworks near open flames,
                                                heat sources, or flammable materials.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--dont">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-house-door"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">Outdoor Only</h5>
                                            <p class="safety-tips__card-text">Never light fireworks inside closed areas,
                                                rooms, or confined spaces.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--dont">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-person-x"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">Child Safety</h5>
                                            <p class="safety-tips__card-text">Don't give fireworks to small children to
                                                handle or light unsupervised.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--dont">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-wallet2"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">No Pockets</h5>
                                            <p class="safety-tips__card-text">Never carry fireworks in your pocket or on
                                                your person.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="safety-tips__card safety-tips__card--dont">
                                            <div class="safety-tips__card-icon">
                                                <i class="bi bi-bullseye"></i>
                                            </div>
                                            <h5 class="safety-tips__card-title">No Aiming</h5>
                                            <p class="safety-tips__card-text">Don't point or throw fireworks at people,
                                                animals, vehicles, or structures.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="safety-tips__cta">
                        <h4>Ready to celebrate safely?</h4>
                        <p>Visit our shop for certified and safety-compliant fireworks!</p>
                        <a href="products.php" class="btn safety-tips__btn">Browse Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once "footer.php"; ?>
    <div class="fixed point w0">
        <a href="https://api.whatsapp.com/send?phone=91">
            <img src="images/whatsappicon.png" class="priceicn float-left" alt="" title="">
        </a>
    </div>
    <div class="fixed point1 w0 d-none d-lg-block">
        <span class="time-of-year">
            <img src="images/callicon.png" class="priceicn float-left" alt="" title="">
            <div class="tooltip text-white carter text-center"> For More Details Call <br>
                <i class="fa fa-phone text-white"></i> +91
            </div>
        </span>
    </div>
    <div class="fixed point1 w0 d-lg-none">
        <a href="tel:+91">
            <img src="images/callicon.png" class="priceicn float-left" alt="" title="">
        </a>
    </div>
    <div class="fixed point2">
        <a href="products.php">
            <img src="images/quickpurchase.png" class="priceicn2 float-right blink" alt="" title="">
        </a>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/main.js"></script>
</body>

</html>