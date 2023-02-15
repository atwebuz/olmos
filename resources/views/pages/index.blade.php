@extends('layouts.main')

@section('content')
    <!-- ***** SLIDER ***** -->
    <section class="main-container slider">
        <div class="silder-container">
        <div class="carousel header-main-slider">
            <!-- 1 Slider -->
            <div class="carousel-cell overlay">
                <div class="slider-content">
                    <div class="container">
                    <img class="svg custom-element-right" src="{{asset('assets/patterns/domainmanage.svg')}}" alt="Domains">
                    <div class="col-sm-12 col-md-6 px-0">
                        <h1 data-aos="fade-up" data-aos-duration="800">INGILIZ TILINI BIZ BILAN O'RGANING</h1>
                        <p data-aos="fade-up" data-aos-duration="1200">3 000 dan ziyod insonlar talim olishgan</p>
                        <button class="btn btn-default-yellow-fill me-2 checkLevel" onclick="loadQuiz()" >Ingiliz tilidan o'z bilimingizni xoziroq bilib oling</button>
                    </div>
                    </div>
                </div>
                <div class="slider-video">
                    <div class="cover-wrapper">
                    <DIV class="cover-video" >
                    <img src="{{asset('assets/img/headerBg.jpg')}}" alt="">
                    </DIV>
                    </div>
                </div>
            </div>
            <!-- 2 Slider -->
            <div class="carousel-cell overlay">
                <div class="slider-content">
                    <div class="container">
                    <img class="svg custom-element-right" src="{{asset('assets/patterns/domainmanage.svg')}}" alt="Domains">
                    <div class="col-sm-12 col-md-6 px-0">
                        <h1 data-aos="fade-up" data-aos-duration="800">MATEMATIKA FANINI BIZ BILAN O'RGANING</h1>
                        <p data-aos="fade-up" data-aos-duration="1200">2 700 dan ziyod insonlar talim olishgan</p>
                        <button class="btn btn-default-yellow-fill me-2 checkLevelMath"  onclick="loadQuizMath()">Matematika fanidan o'z bilimingizni xoziroq bilib oling</button>
                    </div>
                    </div>
                </div>
                <div class="slider-video">
                    <div class="cover-wrapper">
                    <DIV class="cover-video" >
                    <img src="{{asset('assets/img/headerBg1.jpg')}}" alt="">
                    </DIV>
                    </div>
                </div>
            </div>
            <!-- 3 Slider -->
            <div class="carousel-cell overlay">
                <div class="slider-content">
                    <div class="container">
                    <img class="svg custom-element-right" src="{{asset('assets/patterns/domainmanage.svg')}}" alt="Domains">
                    <div class="col-sm-12 col-md-6 px-0">
                        <h1 data-aos="fade-up" data-aos-duration="800">RUS TILINI BIZ BILAN O'RGANING</h1>
                        <p data-aos="fade-up" data-aos-duration="1200">3 300 dan ziyod insonlar talim olishgan</p>
                        <button class="btn btn-default-yellow-fill me-2 checkLevelRus" onclick="loadQuizRus()">Rus tilidan o'z bilimingizni xoziroq bilib oling</button>
                    </div>
                    </div>
                </div>
                <div class="slider-video">
                    <div class="cover-wrapper">
                    <DIV class="cover-video" >
                    <img src="{{asset('assets/img/headerBg3.jpg')}}" alt="">
                    </DIV>
                    </div>
                </div>
            </div>
            <!-- 4 Slider -->
            <div class="carousel-cell overlay">
                <div class="slider-content">
                    <div class="container">
                    <img class="svg custom-element-right" src="{{asset('assets/patterns/domainmanage.svg')}}" alt="Domains">
                    <div class="col-sm-12 col-md-6 px-0">
                        <h1 data-aos="fade-up" data-aos-duration="800">FIZIKA FANINI BIZ BILAN O'RGANING</h1>
                        <p data-aos="fade-up" data-aos-duration="1200">2 200 dan ziyod insonlar talim olishgan</p>
                        <button class="btn btn-default-yellow-fill me-2 checkLevelFiz" onclick="loadQuizFiz()">Fizika fanidan o'z bilimingizni xoziroq bilib oling</button>
                    </div>
                    </div>
                </div>
                <div class="slider-video">
                    <div class="cover-wrapper">
                    <DIV class="cover-video" >
                    <img src="{{asset('assets/img/headerBg2.jpg')}}" alt="">
                    </DIV>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ***** PRICING TABLES ***** -->
    <section class="pricing special sec-bg2 bg-colorstyle specialposition">
        <div class="container">
        <div class="sec-up-slider nopadding">
            <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="wrapper first noshadow">
                <div class="top-content bg-seccolorstyle topradius">
                    <div class="title">Beginner</div>
                    <div class="fromer seccolor">Shu narxdan boshlanadi:</div>
                    <div class="price seccolor"><sup>$</sup>35 <span class="period">/oyiga</span></div>
                </div>
                <ul class="list-info">
                    <li><span> Xodimlar soni cheklanmagan</span></li>
                    <li> <span>2 ta kitob beriladi </span></li>

                    <li> <span>Sizni barcha o'quv jihozlar bilan taminlaymiz</span></li>
                    <li><span>Qo'shimcha sizga lug'at va grammatika kitobi beriladi</span></li>


                </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="wrapper first noshadow">
                <div class="top-content bg-seccolorstyle topradius">
                    <div class="title">Elementary</div>
                    <div class="fromer seccolor">Shu narxdan boshlanadi:</div>
                    <div class="price seccolor"><sup>$</sup>45 <span class="period">/oyiga</span></div>
                </div>
                <ul class="list-info">
                    <li><span> Xodimlar soni cheklanmagan</span></li>
                    <li> <span>2 ta kitob beriladi </span></li>

                    <li> <span>Sizni barcha o'quv jihozlar bilan taminlaymiz</span></li>
                    <li><span>Qo'shimcha sizga lug'at va grammatika kitobi beriladi</span></li>


                </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="wrapper first noshadow">
                <div class="top-content bg-seccolorstyle topradius">
                    <div class="title">Advanced</div>
                    <div class="fromer seccolor">Shu narxdan boshlanadi:</div>
                    <div class="price seccolor"><sup>$</sup>65 <span class="period">/oyiga</span></div>
                </div>
                <ul class="list-info">
                    <li><span> Xodimlar soni cheklanmagan</span></li>
                    <li> <span>2 ta kitob beriladi </span></li>

                    <li> <span>Sizni barcha o'quv jihozlar bilan taminlaymiz</span></li>
                    <li><span>Qo'shimcha sizga lug'at va grammatika kitobi beriladi</span></li>


                </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="wrapper first noshadow">
                <div class="top-content bg-seccolorstyle topradius">
                    <div class="title">Matematika</div>
                    <div class="fromer seccolor">Shu narxdan boshlanadi:</div>
                    <div class="price seccolor"><sup>$</sup>35 <span class="period">/oyiga</span></div>
                </div>
                <ul class="list-info">
                    <li><span> Xodimlar soni cheklanmagan</span></li>
                    <li> <span>2 ta kitob beriladi </span></li>

                    <li> <span>Sizni barcha o'quv jihozlar bilan taminlaymiz</span></li>
                    <li><span>Qo'shimcha sizga lug'at va grammatika kitobi beriladi</span></li>


                </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="wrapper first noshadow">
                <div class="top-content bg-seccolorstyle topradius">
                    <div class="title">Fizika</div>
                    <div class="fromer seccolor">Shu narxdan boshlanadi:</div>
                    <div class="price seccolor"><sup>$</sup>45 <span class="period">/oyiga</span></div>
                </div>
                <ul class="list-info">
                    <li><span> Xodimlar soni cheklanmagan</span></li>
                    <li> <span>2 ta kitob beriladi </span></li>

                    <li> <span>Sizni barcha o'quv jihozlar bilan taminlaymiz</span></li>
                    <li><span>Qo'shimcha sizga lug'at va grammatika kitobi beriladi</span></li>


                </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="wrapper first noshadow">
                <div class="top-content bg-seccolorstyle topradius">
                    <div class="title">Rus tili</div>
                    <div class="fromer seccolor">Shu narxdan boshlanadi:</div>
                    <div class="price seccolor"><sup>$</sup>65 <span class="period">/oyiga</span></div>
                </div>
                <ul class="list-info">
                    <li><span> Xodimlar soni cheklanmagan</span></li>
                    <li> <span>2 ta kitob beriladi </span></li>

                    <li> <span>Sizni barcha o'quv jihozlar bilan taminlaymiz</span></li>
                    <li><span>Qo'shimcha sizga lug'at va grammatika kitobi beriladi</span></li>


                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- <img class="blobleft svg d-none" src="{{asset('assets/img/background/blob.svg')}}" alt="Blob Background"> -->

    <!-- ***** LOAD BALANCING ***** -->
    <section class="balancing sec-normal bg-colorstyle">
        <div class="h-services">
        <div class="container">
            <div class="randomline">
            <div class="bigline"></div>
            <div class="smallline"></div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-heading whitecolor mergecolor">BIZNING AFZALLIKLARIMIZ</h2>
                    <p class="section-subheading whitecolor mergecolor">Sizlar uchun qulay bo'lgan va online talim berishga ega bo'lgan kurslarni taqdim qilamiz</p>
                </div>
                <div class="col-md-12">
                    <div class="wrap-service load">
                    <div class="wow animated fadeInUp fast">

                    </div>
                    <div class="row text-info text-center">
                        <div class="col-md-4 pb-2 pt-5"><b class="c-purple">[1] Innovatsion ta'lim</b> <br>
                        <span class="info seccolor">Ingliz tilini o'rganishdagi ta'sir va samaradorlikka o'qituvchilar va talabalar o'rtasidagi interaktiv hamkorlik orqali erishiladi.</span>
                        </div>
                        <div class="col-md-4 pb-2 pt-5"><b class="c-purple">[2] Noyob o'quv dasturi</b> <br>
                        <span class="info seccolor">Oksford universiteti professorlari tomonidan ishlab chiqilgan noyob o'quv dasturi.
                        </span>
                        </div>
                        <div class="col-md-4 pb-2 pt-5"><b class="c-purple">[3] Professional o'qituvchilar</b> <br>
                        <span class="info seccolor">O'qituvchilar - bu ingliz tilini o'qitish uchun maxsus dasturni tugatgan haqiqiy o'qituvchilar.</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <svg class="division-ontop bg-white d-none" viewBox="0 0 1440 150">
        <path fill="#fdd700" fill-opacity="1" d="M0,96L120,85.3C240,75,480,53,720,53.3C960,53,1200,75,1320,85.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
        </path>
    </svg>

    <!-- ***** FEATURES ***** -->
    <section class="services sec-normal sec-bg4">
        <div class="container">
        <div class="service-wrap">
            <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading">Nima uchun bizni tanlashadi?</h2>
                <p class="section-subheading">Qaysi shaharda yashashingiz muhim emas: Namangan, Buxoro, Andijon, Xorazm va boshqa - davlatlardagi odamlar Skype orqali ingliz tilini o'rganishadi.</p>
            </div>
            <div class="col-md-12 col-lg-4 wow animated fadeInUp fast">
                <div class="service-section bg-colorstyle noshadow">
                <div class="plans badge feat bg-pink">Premium</div>
                <img class="svg" src="{{asset('assets/fonts/svg/helpdesk.svg')}}" alt="">
                <div class="title mergecolor">Support</div>
                <p class="subtitle seccolor">
                    Yordamchi o'qituvchi sizga doimo yordam beradi
                </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 wow animated fadeInUp">
                <div class="service-section bg-colorstyle noshadow">
                <div class="plans badge feat bg-pink">Bepul darslari</div>
                <img class="svg" src="{{asset('assets/fonts/svg/window.svg')}}" alt="">
                <div class="title mergecolor">Tekin yakshanba darslari
                </div>
                <p class="subtitle seccolor">
                Yakshanba kunlari idoramizga bepul talim olishga kelishingiz mumkin
                </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 wow animated fadeInUp fast">
                <div class="service-section bg-colorstyle noshadow">
                <img class="svg" src="{{asset('assets/fonts/svg/cloudmanaged.svg')}}" alt="">
                <div class="title mergecolor">Rivojlangan kurslar</div>
                <p class="subtitle seccolor">
                    Sizlarni rivojlangan darslar bilan taminlaymiz
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ***** CONTACT FORM ***** -->
    <section id="requestconsult" class="sec-normal bg-colorstyle">
        <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 cd-filter-block mb-0">
            <div class="form-contact cd-filter-content p-0 sec-bx">
                <div class="text-center">
                <h2 class="section-heading mergecolor">Biz bilan bog'laning va maslahat oling</h2>
                <p class="mergecolor">Bugun qo'ng'iroqni rejalashtiring va mutaxassislarimizdan biri sizga qaror qabul qilishda yordam berishdan mamnun bo'ladi!</p>
                <h3 id="englishLevelFromContact">Sizning darajangiz: </h3>
                </div>
                <form id="contactForms" action="{{ route('contactForm') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 position-relative">
                            <label><i class="fas fa-user-tie"></i></label>
                            <input id="name" type="text" name="fullname" placeholder="To'liq ismingiz" required>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label><i class="fas fa-envelope"></i></label>
                            <input id="email" type="email" name="email" placeholder="Email adresingiz" required>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label><i class="fas fa-file-alt"></i></label>
                            <select id="subject" name="subject" class="select-filter">
                                <option value="Supportive">Fanni tanlang</option>
                                <option value="Ingiliz tili">INGILIZ TILI KURSI</option>
                                <option value="Matematika fani">MATEMATIKA FANI KURSI</option>
                                <option value="Fizika fani">FIZIKA FANI</option>
                                <option value="Rus tili">RUS TILI KURSI</option>
                            </select>
                        </div>
                        <div class="col-md-6 position-relative">
                            <div class="cd-select mt-4">
                                <label class="db"></label>
                                <select id="time" name="time" class="select-filter">
                                    <option value="" name="department">Soat / Vaqti</option>
                                    <option value="Dush/Chor/Juma: 10:30">Dush/Chor/Juma: 10:30</option>
                                    <option value="Dush/Chor/Juma: 15:30">Dush/Chor/Juma: 15:30</option>
                                    <option value="Dush/Chor/Juma: 18:30">Dush/Chor/Juma: 18:30</option>
                                    <option value="Sesh/Pay/Shanba: 10:30">Sesh/Pay/Shanba: 10:30</option>
                                    <option value="Sesh/Pay/Shanba: 15:30">Sesh/Pay/Shanba: 15:30</option>
                                    <option value="Sesh/Pay/Shanba: 18:30">Sesh/Pay/Shanba: 18:30</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <div class="form-group mt-4">
                                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Xabarnoma..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative mt-5">
                            <input name="newsletter" type="checkbox" id="checkbox" class="filter">
                            <label for="checkbox" class="checkbox-label c-grey mb-4 seccolor" ><span>Men ommaviy offerta bilan tanishdim - <a href="./assets/O’quv markazining qabul jarayoni.pptx" class="golink">RGPD</a></span></label>
                            <button type="submit" id="statusCheck" value="Submit" class="btn btn-default-yellow-fill float-start me-3">Xabarni Yuborish</button>
                            <button type="reset" value="reset" class="btn btn-default-fill mt-0 mb-3 me-3">Qaytatdan</button><br>
                        </div>
                        <div id="msgSubmit" class="col-md-12 mt-4">
                        <h3 class="c-pink"> Xabar Yuborildi!</h3>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection
