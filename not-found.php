<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        :root {
            --pri-color: #6c0b24;
            --light-color: #ebe4d3;
            --sec-color: #cebd93;
            --third-color: #bda663;
        }

        body {
            font-family: "Noto Kufi Arabic", serif;
        }

        #not-found-section {
            padding-block: 150px;
        }

        #not-found-section img {
            width: 300px;
        }

        #not-found-section .not-found {
            font-size: 1.7rem;
        }

        #not-found-section input {
            outline: 0;
            width: 250px;
        }

        #not-found-section .btn-search {
            background-color: var(--sec-color) !important;
            border: 1px solid var(--sec-color) !important;
            transition: all 0.3s linear;
        }

        #not-found-section .btn-search:hover {
            background-color: var(--pri-color) !important;
        }

        #not-found-section .hr {
            width: 100%;
            height: 1px;
            background: linear-gradient(to left, transparent, var(--sec-color), transparent);
        }

        @media(min-width:992px) {
            #not-found-section input {
                outline: 0;
                width: 350px;
            }

            #not-found-section {
                padding-block: 200px;
            }

            #not-found-section .not-found {
                font-size: 2.5rem;
            }

            #not-found-section img {
                width: 400px;
            }
        }

        @media(min-width:1200px) {
            #not-found-section img {
                width: 400px;
            }
        }
    </style>
</head>

<body>

    <main>
        <section id="not-found-section">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-xl-5 order-lg-2">
                        <div class="logo-cont text-center mb-4">
                            <img class="mb-3" src="imgs/notfound.png" alt="">
                            <div class="hr d-lg-none"></div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-5 ">
                        <div class="text-center">
                            <p class="not-found fw-bold text-secondary">الصفحة غير موجودة</p>
                            <p class="text-secondary fs-4">ابحث عن شيء آخر</p>
                        </div>
                        <form action="" method="post">
                            <div class="search text-center">
                                <input class="p-1" type="text">
                                <button class="btn-search py-1 px-3 text-white fw-bold" type="submit">بحث</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </section>
    </main>


</body>

</html>