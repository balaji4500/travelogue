

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ============= BOOTSTRAP ================= -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="shortcut icon" href="img/favicon.png" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
       

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="styles.css">

        <title>Travelogue</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent ">
                <a class="navbar-brand" href="#"><img src="img/favicon.png" alt=""id="img1"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active ">
                            <a class="nav-link" href="#home" id="a1">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link" href="#about" id="a2">About</a>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link " href="#discover" id="a3">Discover</a>
                        </li>
                        <li class="nav-item active  ">
                            <a class="nav-link " href="http://localhost/phpprograms/travel%20copy/signup/signup.php" id="a4"> SignuP </a>
                        </li>
                       

                    </ul>
                </div>
            </nav>
        </header>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="img/home1.jpg" alt="" class="home__img">

                <div class="home__container container grid" >
                    <div class="home__data" data-aos="fade-up"data-aos-duration="1500">
                        <span class="home__data-subtitle">Discover your place</span>
                        <h1 class="home__data-title">Explore The <br> Best <b>Beautiful <br> Beaches</b></h1>
                        <a href="#discover" class="button">Explore</a>

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                    <div class="home__info">
                        <div>
                            <span class="home__info-title">5 best places to visit</span>
                            <a href="#place" class="button button--flex button--link home__info-button">
                                More <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__info-overlay">
                            <img src="img/home2.jpg" alt="" class="home__info-img">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data" data-aos="fade-up"data-aos-duration="1500">
                        <h2 class="section__title about__title">More Information <br> About The Best Beaches</h2>
                        <p class="about__description">You can find the most beautiful and pleasant places at the best 
                            prices with special discounts, you choose the place we will guide you all the way to wait, get your 
                            place now.
                        </p>
                        <a href="#place" class="button">Reserve a place</a>
                    </div>

                    <div class="about__img" data-aos="fade-up"data-aos-duration="1500">
                        <div class="about__img-overlay">
                            <img src="img/about1.jpg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="img/about2.jpg" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== DISCOVER ====================-->
            <section class="discover section" id="discover">
                <h2 class="section__title">Discover the most <br> attractive places</h2>
                
                <div class="discover__container container swiper-container" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="img/discover1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Bali</h2>
                                <span class="discover__description">24 tours available</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="img/discover2.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Hawaii</h2>
                                <span class="discover__description">15 tours available</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="img/discover3.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Hvar</h2>
                                <span class="discover__description">18 tours available</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 4 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="img/discover4.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Whitehaven</h2>
                                <span class="discover__description">32 tours available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== EXPERIENCE ====================-->
            <section class="experience section">
                <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

                <div class="experience__container container grid" data-aos="fade-left" data-aos-duration="1500" >
                    <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number">20</h2>
                            <span class="experience__description">Year <br> Experience</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">75</h2>
                            <span class="experience__description">Complete <br> tours</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">650+</h2>
                            <span class="experience__description">Tourist <br> Destination</span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="img/experience1.jpg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="img/experience2.jpg" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== VIDEO ====================-->
            <section class="video section">
                <h2 class="section__title">Video Tour</h2>

                <div class="video__container container">
                    <p class="video__description">Find out more with our video of the most beautiful and 
                        pleasant places for you and your family.
                    </p>
          <div class="video_content"data-aos="flip-down"data-aos-duration="2500" >
                <video id="myVideo" width="600" height="200">
                    <source src="video.mp4" type="video/mp4">
                  </video>
                  <button onclick="playVid()" id="btn" type="button">Play </button>  
                </div>
                    </div>
                </div>
            </section>

            <!--==================== PLACES ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">Choose Your Place</h2>

                <div class="place__container container grid"data-aos="zoom-out-right" data-aos-duration="1500" >
                    <!--==================== PLACES CARD 1 ====================-->
                    <div class="place__card"  >
                        <img src="img/place1.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Bali</h3>
                                <span class="place__subtitle">Indonesia</span>
                                <span class="place__price">$2499</span>
                            </div>
                        </div>

                      <a href="http://localhost/phpprograms/travel%20copy/bali/index.php"> <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a> 
                    </div>

                    <!--==================== PLACES CARD 2 ====================-->
                    <div class="place__card">
                        <img src="img/place2.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5,0</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Bora Bora</h3>
                                <span class="place__subtitle">Polinesia</span>
                                <span class="place__price">$1599</span>
                            </div>
                        </div>

                     
                     <a href="http://localhost/phpprograms/travel%20copy/bora%20bora/index.php">  <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 3 ====================-->
                    <div class="place__card">
                        <img src="img/place3.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,9</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Hawaii</h3>
                                <span class="place__subtitle">EE.UU</span>
                                <span class="place__price">$3499</span>
                            </div>
                        </div>

                       <a href="http://localhost/phpprograms/travel%20copy/hawaai/index.php"><button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a> 
                    </div>

                    <!--==================== PLACES CARD 4 ====================-->
                    <div class="place__card">
                        <img src="img/place4.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Whitehaven</h3>
                                <span class="place__subtitle">Australia</span>
                                <span class="place__price">$2499</span>
                            </div>
                        </div>

                      <a href="http://localhost/phpprograms/travel%20copy/whiteheaven/index.php"><button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>  
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="img/place5.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Hvar</h3>
                                <span class="place__subtitle">Croacia</span>
                                <span class="place__price">$1999</span>
                            </div>
                        </div>

                     <a href="http://localhost/phpprograms/travel%20copy/hvar/index.php">  <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>
                </div>
            </section>

            <!--==================== SUBSCRIBE ====================-->
            <section class="subscribe section">
                <div class="subscribe__bg"data-aos="zoom-out-right">
                    <div class="subscribe__container container">
                        <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                        <p class="subscribe__description">Subscribe to our newsletter and get a 
                            special 30% discount.
                        </p>
    
                        <form action="sub.php" method="post" class="subscribe__form">
                            <input type="text" placeholder="Enter email" name="email" class="subscribe__input" id="sub" required oninvalid="this.setCustomValidity('please give your email')" 
                            onchange="this.setCustomValidity('')" >
                
                          <input type="submit" value="subscribe" class="button" >
                            

                        </form>
                    </div>
                </div>
            </section>
            
            <!--==================== SPONSORS ====================-->
            <section class="sponsor section">
                <div class="sponsor__container container grid"data-aos="zoom-out-right">
                    <div class="sponsor__content">
                        <a href="https://www.airbnb.co.in/"><img src="img/sponsors1.png" alt="" class="sponsor__img"></a>  
                    </div>
                    <div class="sponsor__content">
                       <a href="https://www.amazon.in/?&ext_vrnc=hi&tag=googhydrabk1-21&ref=pd_sl_6b31gegj9g_e&adgrpid=60612964962&hvpone=&hvptwo=&hvadid=486380734074&hvpos=&hvnetw=g&hvrand=14338532674897582389&hvqmt=e&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1007809&hvtargid=kwd-49491430&hydadcr=14454_2154375&gclid=Cj0KCQiA3eGfBhCeARIsACpJNU-WBnf-iHfp5qLzQzKgzlbaAU8w4yxMAxIF_otJvCq-fOZ_XJTGJRIaAiPjEALw_wcB"> <img src="img/sponsors2.png" alt="" class="sponsor__img"></a>
                    </div>
                    <div class="sponsor__content">
                      <a href="https://www.shopify.com/in/free-trial/3-steps?term=shopify&adid=566014743975&campaignid=15433369407&branded_enterprise=1&BOID=brand&gclid=Cj0KCQiA3eGfBhCeARIsACpJNU-sF5z9QWEi33dnRqPArNaMFE8r2b6TVAQVYX3TQSaRVHKy6_FjiiYaAnqDEALw_wcB&cmadid=516585705;cmadvertiserid=10730501;cmcampaignid=26990768;cmplacementid=324494758;cmcreativeid=163722649;cmsiteid=5500011"><img src="img/sponsors3.png" alt="" class="sponsor__img"></a>  
                    </div>
                    <div class="sponsor__content">
                      <a href="https://www.paypal.com/in/home"><img src="img/sponsors4.png" alt="" class="sponsor__img"></a>  
                    </div>
                    <div class="sponsor__content">
                       <a href="https://slack.com/intl/en-in"><img src="img/sponsors5.png" alt="" class="sponsor__img"></a> 
                    </div>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid"data-aos="zoom-out-right">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">Travel</h3>
                        <p class="footer__description">Travel you choose the <br> destination, 
                            we offer you the <br> experience.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="http://localhost/phpprograms/travel%20copy/about%20us/index.php" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="http://localhost/phpprograms/travel%20copy/about%20us/index.php" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="http://localhost/phpprograms/travel%20copy/about%20us/index.php" class="footer__link">New & Blog</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan y Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Become a member</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__data">
    
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="http://localhost/phpprograms/travel%20copy/terms/index.php" class="footer__link">Support Center</a>
                            </li>
                            <li class="footer__item">
                                <a href="http://localhost/phpprograms/travel%20copy/signup/signup.php" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2021  All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="http://localhost/phpprograms/travel%20copy/terms/index.php" class="footer__terms-link">Terms & Agreements</a>
                        <a href="http://localhost/phpprograms/travel%20copy/terms/index.php" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>
<!-- ======= script =============-->
    <script src="hs.js"></script>
    </body>
</html>
