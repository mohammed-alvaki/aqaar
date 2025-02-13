<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4aqaar</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css?ver=5.0.0">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="position-relative">
        <div class="top-bar py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex gap-1">
                            <button
                                class="btn-options bg-white border-0 d-flex flex-column align-items-center justify-content-center gap-1 d-xl-none"
                                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight"><span></span><span></span><span></span>
                            </button>
                            <button class="icon border-0 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                    class="fa-solid fa-magnifying-glass" style="color: #cebd93;"></i>
                            </button>
                            <div class="d-none d-xl-flex gap-2">
                                <a class="icon" href="mailTo:info@4aqaar.com"><i class="fa-solid fa-envelope fa-lg"
                                        style="color: #cebd93;"></i></a>
                                <a class="icon" href=""><i class="fa-solid fa-location-dot fa-lg"
                                        style="color: #cebd93;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-none d-xl-block">
                        <div class="calling text-white d-flex align-items-center justify-content-end gap-1">
                            <div class="d-flex align-items-center gap-1 fs-5" dir="ltr">
                                <a href="tel:+905309137980" class="icon text-white"><i class="fa-solid fa-mobile-screen-button"
                                        style="color: #cebd93;"></i>
                                </a>+905309137980
                            </div>
                            <div class="d-flex gap-1 align-items-center fs-5" dir="ltr">
                                <a href="tel:+905309147980" class="icon text-white"><i class="fa-solid fa-phone-flip"
                                        style="color: #cebd93;"></i>
                                </a>+905309147980 -
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-none d-md-block d-xl-none">
                        <div class="d-flex justify-content-end gap-2">
                            <a class="icon" href="mailTo:info@4aqaar.com"><i class="fa-solid fa-envelope fa-lg"
                                    style="color: #cebd93;"></i></a>
                            <a class="icon" href=""><i class="fa-solid fa-location-dot fa-lg"
                                    style="color: #cebd93;"></i></a>
                        </div>
                    </div>
                    <div class="col-6 d-md-none">
                        <button class="icon border-0 ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fa-solid fa-magnifying-glass" style="color: #cebd93;"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="outer-logo">
            <div class="logo-container mx-auto py-3 position-relative overflow-hidden">
                <a href="index.php"><img src="imgs/logo.png" alt="
            logo"></a>
            </div>
        </div>
        <div class="logo-icons">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <nav class="navbar navbar-expand-lg navbar-light py-0 bg-lg-white h-lg-100">
                            <div class="container-fluid h-lg-100 px-0 py-1 py-lg-0">
                                <span></span>
                                <button class="navBtn d-lg-none me-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#bs-example-navbar-collapse-1" aria-controls="navbarNav"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <div class="nav-bars d-flex flex-column gap-1">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </div>
                                </button>
                                <div class="collapse navbar-collapse justify-content-center" id="bs-example-navbar-collapse-1">
                                    <ul class="navbar-nav">
                                        <li class="nav-item nav-dropdown">
                                            <div class="dropdown h-100">
                                                <a class="aparts-link nav-link border-0 h-100 mt-2 mt-lg-0 dropdown-toggle text-white fw-bold d-flex align-items-center"
                                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    شقق للبيع في اسطنبول
                                                </a>

                                                <ul class="dropdown-menu border-0 mt-0 w-100">
                                                    <li><a class="dropdown-item text-white" href="offers.php"
                                                            style="font-size: 14px;">عروض عقارية في اسطنبول</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link h-lg-100 d-flex align-items-center"
                                                href="nationality.php">الجنسية التركية</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link d-flex align-items-center" href="plog.php">
                                                المدونة</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link h-lg-100 d-flex align-items-center"
                                                href="aboutus.php">من نحن </a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link h-lg-100 d-flex align-items-center"
                                                href="contactus.php">اتصل بنا</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-start bg-transparent" data-bs-scroll="true" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-body p-0">
                <div class="offcanvas-head d-flex justify-content-between p-2">
                    <h5 class="offcanvas-title fw-bold ps-3" id="offcanvasRightLabel">فور عقار</h5>
                    <button type="button" class="fw-bold bg-transparent border-0 " data-bs-dismiss="offcanvas"
                        aria-label="Close"><i class="fa-solid fa-circle-xmark fa-2xl"
                            style="color: #6c0b24;"></i></button>
                </div>
                <div class="p-2">

                    <div class="hr my-3"></div>
                    <h3 class="text-center text-white fw-bold p-2">أقسام الموقع</h3>
                    <ul class="links d-flex flex-column gap-1 ps-0">
                        <li class="d-flex px-2 py-1"><a class="text-decoration-none ms-auto" href="offers.php">الاخبار
                                التركية</a> <span class="num ms-auto text-white px-1">146</span>
                        </li>

                        <li>
                            <div class="d-flex px-2 py-1"> <button class="sub-cat-btn bg-transparent border-0">
                                    <i class="fa-solid fa-plus fa-lg" style="color: #ffffff;"></i>
                                </button>
                                <a class="text-decoration-none ms-auto" href="offers.php">مدينة العقار</a> <span
                                    class="num ms-auto text-white px-1">67</span>
                            </div>
                            <ul class="sub-list d-none mx-3 my-2">
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto"
                                        href="offers.php">اسطنبول
                                    </a> <span class="num ms-auto text-white px-1">9</span>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="d-flex px-2 py-1"><button class="sub-cat-btn bg-transparent border-0">
                                    <i class="fa-solid fa-plus fa-lg" style="color: #ffffff;"></i>
                                </button>
                                <a class="text-decoration-none ms-auto" href="offers.php">السعر</a> <span
                                    class="num ms-auto text-white px-1">64</span>
                            </div>
                            <ul class="sub-list d-none ps-0 mx-3 my-2 d-flex flex-column bg-white">
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto"
                                        href="offers.php">500.000 –
                                        1.000.000
                                        TL
                                    </a> <span class="num ms-auto text-white px-1">47</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto"
                                        href="offers.php">1.000.000 –
                                        2.000.000
                                        TL
                                    </a> <span class="num ms-auto text-white px-1">41</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto"
                                        href="offers.php">175.000 – 500.000
                                        TL
                                    </a> <span class="num ms-auto text-white px-1">20</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto"
                                        href="offers.php">2.000.000 –
                                        3.000.000
                                        TL
                                    </a> <span class="num ms-auto text-white px-1">19</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto"
                                        href="offers.php">3.000.000 –
                                        5.000.000
                                        TL
                                    </a> <span class="num ms-auto text-white px-1">12</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto"
                                        href="offers.php">5.000.000 –
                                        10.000.000 TL
                                    </a> <span class="num ms-auto text-white px-1">3</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">اكثر
                                        من
                                        10.000.000 TL
                                    </a> <span class="num ms-auto text-white px-1">1</span>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="d-flex px-2 py-1"><button class="sub-cat-btn bg-transparent border-0">
                                    <i class="fa-solid fa-plus fa-lg" style="color: #ffffff;"></i>
                                </button>
                                <a class="text-decoration-none ms-auto" href="offers.php">المساحة</a> <span
                                    class="num ms-auto text-white px-1">65</span>
                            </div>
                            <ul class="sub-list d-none ps-0 mx-3 my-2 d-flex flex-column bg-white">
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">100
                                        م² – 200 م²
                                    </a> <span class="num ms-auto text-white px-1">60</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">50 م²
                                        – 100 م²
                                    </a> <span class="num ms-auto text-white px-1">40</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">200
                                        م² – 300 م²
                                    </a> <span class="num ms-auto text-white px-1">25</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">0 م²
                                        – 50 م²
                                    </a> <span class="num ms-auto text-white px-1">12</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">300
                                        م² – 400 م²
                                    </a> <span class="num ms-auto text-white px-1">8</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">400م²
                                        – 500م²
                                    </a> <span class="num ms-auto text-white px-1">4</span>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="d-flex px-2 py-1"> <button class="sub-cat-btn bg-transparent border-0">
                                    <i class="fa-solid fa-plus fa-lg" style="color: #ffffff;"></i>
                                </button>
                                <a class="text-decoration-none ms-auto" href="offers.php">عدد الغرف</a> <span
                                    class="num ms-auto text-white px-1">67</span>
                            </div>
                            <ul class="sub-list d-none ps-0 mx-3 my-2 d-flex flex-column bg-white">
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">2+1
                                    </a> <span class="num ms-auto text-white px-1">63</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">1+1
                                    </a> <span class="num ms-auto text-white px-1">43</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">3+1
                                    </a> <span class="num ms-auto text-white px-1">43</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">4+1
                                    </a> <span class="num ms-auto text-white px-1">30</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">5+1
                                    </a> <span class="num ms-auto text-white px-1">13</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">0+1
                                    </a> <span class="num ms-auto text-white px-1">4</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">6+2
                                    </a> <span class="num ms-auto text-white px-1">2</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">4+2
                                    </a> <span class="num ms-auto text-white px-1">2</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">3+2
                                    </a> <span class="num ms-auto text-white px-1">2</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">7+1
                                    </a> <span class="num ms-auto text-white px-1">1</span>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="d-flex px-2 py-1"> <button class="sub-cat-btn bg-transparent border-0">
                                    <i class="fa-solid fa-plus fa-lg" style="color: #ffffff;"></i>
                                </button>
                                <a class="text-decoration-none ms-auto" href="offers.php">عقارات في تركيا</a> <span
                                    class="num ms-auto text-white px-1">63</span>
                            </div>
                            <ul class="sub-list d-none ps-0 mx-3 my-2 d-flex flex-column bg-white">
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">شقق
                                        للبيع في
                                        تركيا
                                    </a> <span class="num ms-auto text-white px-1">60</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto" href="offers.php">فلل
                                        للبيع في
                                        تركيا
                                    </a> <span class="num ms-auto text-white px-1">6</span>
                                </li>
                                <li class="d-flex p-2"><a class="text-decoration-none ms-auto"
                                        href="offers.php">مشاريع عقارية في
                                        تركيا
                                    </a> <span class="num ms-auto text-white px-1">2</span>
                                </li>

                            </ul>
                        </li>

                        <li class="d-flex px-2 py-1"><a class="text-decoration-none ms-auto">
                                شقق للبيع في اسطنبول</a> <span class="num ms-auto text-white px-1">56</span>
                        </li>

                        <li class="d-flex px-2 py-1"><a class="text-decoration-none ms-auto" href="offers.php">عروض
                                عقارية في
                                اسطنبول
                            </a> <span class="num ms-auto text-white px-1">15</span>
                        </li>

                        <li class="d-flex px-2 py-1"><a class="text-decoration-none ms-auto" href="offers.php">
                                عقارات للبيع في تركيا</a> <span class="num ms-auto text-white px-1">7</span>
                        </li>

                        <li class="d-flex px-2 py-1"><a class="text-decoration-none ms-auto" href="offers.php">أعمال
                                ديكور داخلي
                            </a> <span class="num ms-auto text-white px-1">4</span>
                        </li>

                        <li class="d-flex px-2 py-1"><a class="text-decoration-none ms-auto" href="plog.php">المدونة
                            </a> <span class="num ms-auto text-white px-1">1</span>
                        </li>
                    </ul>

                    <h3 class="text-center text-white fw-bold p-2">وسوم</h3>

                    <div class="tags">
                        <a href="">اخبار تركيا</a>
                        <a href="">استثمار عقاري</a>
                        <a href="">اسطنبول</a>
                        <a href="">اسعار العقارات في تركيا</a>
                        <a href="">اسعار الشقق في اسطنبول</a>
                        <a href="">اقتصاد تركيا</a>
                        <a href="">الاستثمار في تركيا</a>
                        <a href="">الاقتصاد التركي</a>
                        <a href="">التجارة في تركيا</a>
                        <a href="">التملك في اسطنبول</a>
                        <a href="">التملك في تركيا</a>
                        <a href="">الجنسية التركية</a>
                        <a href="">الحصول على الجنسية التركية</a>
                        <a href="">الصناعة في تركيا</a>
                        <a href="">العقارات في اسطنبول</a>
                        <a href="">تركيا</a>
                        <a href="">تصميم</a>
                        <a href="">تصميم داخلي</a>
                        <a href="">تصميم ديكور</a>
                        <a href="">تصميم منازل</a>
                        <a href="">تطوير عقاري</a>
                        <a href="">ديكور</a>
                        <a href="">ديكورات داخلية</a>
                        <a href="">ديكور داخلي</a>
                        <a href="">ديكور منازل</a>
                        <a href="">سوق العقارات في تركيا</a>
                        <a href="">سيارات </a>
                        <a href="">شراء شقة في اسطنبول</a>
                        <a href="">شركة عقارات في اسطنبول</a>
                        <a href="">شركة عقارات في تركيا</a>
                        <a href="">شروط الجنسية التركية</a>
                        <a href="">شقق للبيع في اسطنبول</a>
                        <a href="">شقق للبيع في اسطنبول بالتقسيط</a>
                        <a href="">شققللبيع في تركيا</a>
                        <a href="">صناعة السيارات في تركيا</a>
                        <a href="">عقارات اسطنبول</a>
                        <a href="">عقارات في تركيا</a>
                        <a href="">عقارات للبيع في اسطنبول</a>
                        <a href="">عقارات للبيع في تركيا</a>
                        <a href="">فلل اسطنبول</a>
                        <a href="">فلل فاخرة في اسطنبول</a>
                        <a href="">فلل للبيع في اسطنبول على البوسفور</a>
                        <a href="">فلل للبيع في تركيا</a>
                        <a href="">فيلا فخمة للبيع</a>
                        <a href="">مطار اسطنبول الجديد</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal -->
        <div class="modal fade search-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-body text-center p-0 mx-auto">
                        <form action="">
                            <input class="search-input text-center p-2 border-0" type="text" style="width:350px" placeholder="البحث">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </header>