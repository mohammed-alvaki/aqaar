<?php include "header.php"; ?>

<main>
    <section id="contactus-section">
        <div class="breadcrumb-part">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house"
                                style="color: #cebd93;"></i></a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">اتصل بنا</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <form class="py-4" action="" method="post">
                        <h4>اتصل بنا</h4>
                        <input class="w-100 mb-3" type="text" placeholder="الاسم الكامل">
                        <input class="w-100 mb-3 text-start" type="tel" placeholder="البريد الاكتروني"><input
                            class="w-100 mb-3 text-start" type="tel" placeholder="الهاتف">
                        <textarea class="p-2 mb-3 border-0 w-100" name="" id="" rows="5"
                            placeholder="نص الرسالة" style="resize: none;"></textarea>
                        <button class="btn-send fw-bold te text-white px-2 d-block mx-auto" type="submit"><i
                                class="fa-solid fa-share-from-square" style="color: #ffffff;"></i> أرسل</button>
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <div class="contact mt-md-5">
                        <div class="hr mb-3"></div>
                        <div class="icon-cont">
                            <div class="d-flex flex-column align-items-center">
                                <span class="mb-2"><i class="fa-solid fa-phone-flip fa-lg"
                                        style="color: #cebd93;"></i></span>
                                <p class="fw-bold" dir="ltr">+905309137980</p>
                                <p class="fw-bold" dir="ltr">+905309147980</p>
                                <span class="mb-2"><i class="fa-solid fa-envelope fa-lg"
                                        style="color: #cebd93;"></i></span>
                                <p class="fw-bold">info@4aqaar.com</p>
                                <span class="mb-2"><i class="fa-solid fa-location-dot fa-lg"
                                        style="color: #cebd93;"></i></span>
                                <p class="fw-bold">Alibeyköy Mahallesi,Namık Kemal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "footer.php"; ?>