
<header id="header" class="fixed-top">
    <div class="row navbar-row">
        <div class="col-md-2 col-lg-1 col-xs-2 img-row ">
            <a href="{{route('home')}}"><img class="header-img" src="{{asset('assets/org/img/logo.png')}}" alt="No Image Found"></a>
        </div>
        <div class="col-md-10 col-lg-11 col-xs-10">
            <div class="row pr-2 ">
                <nav class="nav-menu d-none d-lg-block" style="margin-right:20%">
                    <ul>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('assets/org/img/global.png')}}" draggable="false"> en </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a style="text-align:center; font-family: Alvi Nastaleeq !important;" class="dropdown-item lang" href="index.html">
                                    <img src="{{asset('assets/org/img/pakistan.png')}}" draggable="false" />اردو
                                </a>
                            </div>
                        </div>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <!-- <li><a href="#team">Central Executive Body</a></li> -->
                        <li><a href="{{route('infrastructure')}}">Organizational Infrastructure</a></li>
                        <li><a href="{{route('departements')}}">Departments</a>
                            <!-- <ul>
                                <li><a href="{{route('departements')}}">Pakistan Department</a></li>
                                <li><a href="{{route('departements')}}">Idara Moeen ul Islam Department</a></li>
                            </ul> -->
                        </li>
                        <!-- <li><a href="Home/updates.html">Updates</a></li>
                        <li class="drop-down"><a href="#">Madani Pearl</a>
                            <ul>
                                <li><a href="Home/shora_madani_phool.html">Madani Pearls of Shura’s Madani Mashwarahs</a></li>
                                <li><a href="Home/mahana_madani_phool.html">Madani Pearls of Monthly Madani Mashwarahs</a></li>
                            </ul>
                        </li> -->
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="{{route('register')}}">Online Registration</a></li>
                        <!-- <li><a href="MediaLibrary/index.html">Videos</a></li>
                        <li class="drop-down"><a href="#">More</a>
                            <ul>
                                <li class="drop-down"><a href="#">Files</a>
                                    <ul>
                                        <li><a href="Home/pakistan_tanzeemi_files.html">Organizational Setup (Pakistan) File</a></li>
                                        <li><a href="Home/notification.html">Notifications</a></li>
                                    </ul>
                                </li>
                                <li><a href="Home/organogram.html">Organogram</a></li>
                                <li><a href="Home/madani_muzakarah_qa.html">Q/A of Madani Muzakarah</a></li>
                                <li><a href="https://www.Idara Moeen ul Islam.net/pamphlets/?mt=23&amp;lang=ur" target="_blank">Haftawar Bayannat</a></li>
                                <li><a href="https://www.Idara Moeen ul Islam.net/bookslibrary/search?search=&amp;bsearch=&amp;pn=1&amp;bookSection=true&amp;lang=ur&amp;categories=WzE0XQ%3D%3D&amp;booksId=W10%3D" target="_blank">Tanzeemi Books</a></li>
                            </ul>
                        </li>
                        <li class="get-started"><a href="https://www.Idara Moeen ul Islam.net/onlinedonation/">Donate Us</a></li> -->
                    </ul>
                </nav><!-- .nav-menu -->
            </div>
            <div class="row pt-3 news-row">
                <div class="container latest-news" dir="ltr">
                    <div class="d-flex justify-content-between align-items-center bg-white">
                        <marquee direction="right" onMouseOver="this.stop()" onMouseOut="this.start()" class="news-scroll urdu" behavior="scroll" direction="left">
                            دِینی کام کرنے والوں سے بھی پوچھ گچھ کرتے رہنے کی حاجت ہے ، جس کام کی پوچھ گچھ نہ کی جائے توپہلے وہ کمزورہوتاہےاورپھردم توڑدیتاہے<i class='fa fa-circle dot mx-2' aria-hidden='true'></i>جب بھی کسی کو کوئی کام دینا ہوتواس کام کااہل تلاش کریں،پھرتربیت کریں ،کام کا طریق ِکاربتائیں اور اس کاحوصلہ بلند کریں<i class='fa fa-circle dot mx-2' aria-hidden='true'></i>کام کرنے والوں کو ذمہ داربنایا جائے ،اگراہل ہیں تو پھراس کی تربیت کریں ،تربیت کرنے سے بھی تبدیلی نہ آئے تونگران سے مشورہ کرکے ذمہ دار تبدیل کردیں۔<i class='fa fa-circle dot mx-2' aria-hidden='true'></i> </marquee>
                        <div class="urdu d-flex flex-row flex-grow-1 flex-fill justify-content-center py-1 text-white px-1 news"><span class="d-flex align-items-center">تازہ ترین</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<style type="text/css">
    /**
    * To Customize Css
    */
    .urdu {
        font-family: "Mehr Nastaliq Web" !important;
    }

    .iconClass {
        float: right;
        width: 40px;
        height: 40px;
        border-radius: 20px;
        background: #eb5d1e;
        padding: 10px;
        color: #ffffff;
    }

    .iconClass:hover {
        background: #ffffff;
        color: #eb5d1e;
    }

    .iconPdf {
        font-size: 80px;
        color: red;
        padding-bottom: 15px;
    }

    .iconEye {
        padding-right: 15px;
    }

    .iconDownload {
        padding-left: 15px;
    }

    .iconEye,
    .iconDownload {
        font-size: 25px;
        color: #eb5d1e
    }

    .themeColor {
        color: #ffffff;
    }

    .themeColor:hover {
        color: #eb5d1e;
    }

    .styled-table {
        direction: ltr;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: "Raleway", "sans-serif";
        width: 100%;
        box-shadow: 0 0 20px #eb5d1e;
    }

    .styled-table thead tr {
        background-color: #eb5d1e;
        color: #ffffff;
        text-align: center;
    }

    .styled-table th,
    .styled-table td {
        text-align: center;
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        color: #eb5d1e !important;
        background: #ffffff !important;
        font-size: 16px;
        font-weight: bold;
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr a {
        color: inherit;
        background: inherit;
    }

    .styled-table tbody tr:hover {
        color: #ffffff !important;
        background: #eb5d1e !important;
        font-weight: bold;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #eb5d1e;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #eb5d1e;
    }

    h1>a {
        font-weight: bold;
    }

    .hidden {
        display: none;
    }

    body {
        font-family: "Raleway", "sans-serif" !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .font-primary {
        font-family: "Raleway", "sans-serif" !important;
        float: left;
    }

    a,
    h3 {
        color: #eb5d1e;
    }

    a:hover {
        color: #000000;
    }

    p>button {
        background: #eb5d1e;
        color: #ffffff;
    }

    #dropdownMenuButton {
        background-color: #ffffff;
        height: 100%;
        padding: 5px;
        color: #000000;
        border-radius: 0px;
        box-shadow: none;
        border-color: #ffffff;
    }

    .dropdown-menu a {
        padding-left: 5px;
        direction: ltr;
    }

    .dropdown-menu a img {
        padding-right: 20px;
    }

    .back-to-top {
        background: #eb5d1e;
        bottom: 10px;
    }

    .back-to-top:hover {
        color: #eb5d1e;
        background: #ffffff !important;
    }

    #header {
        /*height: 120px;*/
        direction: ltr;
    }

    #header .logo h1 a,
    #header .logo h1 a:hover {
        color: #eb5d1e;
    }

    .nav-menu {
        margin-left: auto !important;
    }

    .nav-menu a {
        color: #eb5d1e;
        font-size: 16px;
        font-weight: bold;
        font-family: "Raleway", "sans-serif" !important;
    }

    .nav-menu a:hover,
    .nav-menu .active>a {
        color: #eb5d1e !important;
    }

    .nav-menu a:hover,
    .nav-menu .active>a:hover {
        color: #ffffff !important;
        background: #eb5d1e !important;
        border-radius: 50px;
    }

    .nav-menu .get-started a {
        margin: 0px;
        padding: 10px;
        background: #eb5d1e;
    }

    .nav-menu .get-started a:hover {
        color: #ffffff !important;
        background: #eb5d1e;
    }

    .nav-menu .drop-down ul {}

    .nav-menu>ul {
        display: flex;
        flex-direction: row;
    }

    .nav-menu .drop-down ul a {}

    .nav-menu .drop-down ul a:hover,
    .nav-menu .drop-down ul .active>a,
    .nav-menu .drop-down ul li:hover>a {
        color: #eb5d1e;
    }

    .nav-menu .drop-down>a:after {
        /*        font-family: */
        /* !important;*/
    }

    .mobile-nav {}

    .mobile-nav a {
        color: #eb5d1e;
    }

    .mobile-nav a:hover,
    .mobile-nav .active>a,
    .mobile-nav li:hover>a {
        color: #eb5d1e;
    }

    .mobile-nav .get-started a {
        background: #eb5d1e;
    }

    .mobile-nav .get-started a:hover {
        background: #eb5d1e;
    }

    .mobile-nav-active .mobile-nav {
        background-color: #ffffff;
    }

    .mobile-nav-toggle i {}

    #hero {
        background: #fef8f5 !important;
        border-bottom: 2px solid #fef8f5;
        margin: 0px !important;
        padding: 0px !important;
    }

    .hero-class {
        background: #fef8f5 !important;
        border-bottom: 2px solid #fef8f5;
    }

    #hero,
    #about,
    #team,
    #services,
    #portfolio,
    #contact {
        direction: ltr;
    }

    section {
        padding: 65px 0px 80px 0px;
    }

    .section-bg {
        background-color: #fef8f5;
    }

    #hero h1 {
        float: left !important;
    }

    #hero h2 {
        float: left !important;
        text-align: justify;
    }

    #hero .btn-get-started {
        background: #eb5d1e;
        font-family: "Raleway", "sans-serif" !important;
    }

    .btn_lm {
        background: #eb5d1e !important;
    }

    .btn_lm:hover {
        background: #f2a989 !important;
    }

    #hero .btn-get-started:hover {
        background: #f2a989;
    }

    .section-title {
        padding-bottom: 40px !important;
    }

    .section-title h2 {
        color: #eb5d1e;
        float: none;
        margin-bottom: 0px !important;
    }

    .section-title p {
        color: #eb5d1e;
        padding-bottom: 0px !important;
        margin-bottom: 0px !important;
    }

    .section-title p::after {
        background: #eb5d1e;
    }

    .breadcrumbs {
        background: #fef8f5;
    }

    .breadcrumbs ol li+li::before {}

    .about h3 {
        color: #eb5d1e;
    }

    .about h4 {
        color: #eb5d1e;
    }

    h4 {
        float: none;
        text-align: center;
    }

    .about i {
        color: #eb5d1e !important;
        float: left !important;
    }

    .about i:hover {
        /*border-radius: 40%;*/
        /*        border: 1px solid */
        /*;*/
    }

    .bx {}

    .about p {
        float: left;
        text-align: justify;
    }

    #portfolio .d-flex {
        margin: 0px 0px 40px 0px !important;
    }

    .custom-bg {
        box-shadow: inset 0 10px 29px 0 #ff572230 !important;
    }

    .services .icon-box {
        background: #ffffff;
        border-bottom: 3px solid #eb5d1e;
        margin: 0 !important;
        padding: 30px 10px 30px 10px;
    }

    .services-card {
        padding: 30px !important;
    }

    .icon-box-greeen {
        color: #000000;
        background-color: #fff !important;
    }

    .services .icon-box:hover {
        border-color: #fef8f5;
    }

    .services .icon i {
        color: #eb5d1e;
    }

    .services .title-dept a {
        text-align: center;
        color: #000000;
        font-weight: bold;
        font-size: 20px;
    }

    .services .description {
        text-align: center;
        font-weight: 400;
    }

    .portfolio #portfolio-flters li {
        color: #fef8f5;
    }

    .portfolio #portfolio-flters li:hover,
    .portfolio #portfolio-flters li.filter-active {
        color: #eb5d1e !important;
    }

    .portfolio .portfolio-wrap .portfolio-links a {
        color: #eb5d1e;
    }

    .portfolio .portfolio-wrap .portfolio-links a:hover {
        background: #eb5d1e;
    }

    .portfolio .portfolio-wrap .portfolio-info h4 {}

    .portfolio .portfolio-wrap .portfolio-info p {}

    .portfolio-details .portfolio-details-carousel .owl-dot {}

    .portfolio-details .portfolio-details-carousel .owl-dot.active {
        background-color: #eb5d1e !important;
    }

    .portfolio-details .portfolio-info {}

    .portfolio-details .portfolio-info h3 {}

    .portfolio .icon-box {
        padding-left: 10px;
        padding-right: 10px;
    }

    .faq .faq-list a {
        color: #eb5d1e;
        font-family: "Raleway", "sans-serif";
    }

    .faq .faq-list a.collapse {
        color: #eb5d1e;
    }

    .faq .faq-list a.collapsed {}

    .faq .faq-list a.collapsed:hover {
        color: #eb5d1e;
    }

    .team {
        padding: 65px 0px 80px 0px;
    }

    .team .member {}

    .team .member .member-info-content h4 {}

    .team .member .member-info-content span {}

    .team .member .social a {}

    .team .member .social a:hover {
        color: #eb5d1e;
    }

    .team .member .social i {
        font-size: 30px;
        margin: 0 2px;
    }

    .clients .owl-dot {}

    .clients .owl-dot.active {
        background-color: #eb5d1e !important;
    }

    .contact .info {
        border-top: 3px solid #eb5d1e;
        border-bottom: 3px solid #eb5d1e;
    }

    .contact .info i {
        color: #eb5d1e;
    }

    .contact .info h4 {
        float: none;
        text-align: left;
    }

    .contact .info p {
        float: none;
        text-align: left;
        direction: ltr !important;
    }

    .contact .info .social-links a {}

    .contact .info .social-links a:hover {
        background: #eb5d1e;
    }

    .contact .info .email:hover i,
    .contact .info .address:hover i,
    .contact .info .phone:hover i {
        background: #eb5d1e;
    }

    .contact .php-email-form {
        border-top: 3px solid #eb5d1e;
        border-bottom: 3px solid #eb5d1e;
    }

    .contact .php-email-form .validate {}

    .contact .php-email-form .error-message {}

    .contact .php-email-form .sent-message {}

    .contact .php-email-form .loading {}

    .contact .php-email-form .loading:before {}

    .contact .php-email-form button[type="submit"] {
        background: #eb5d1e;
        border: 1px solid #eb5d1e;
    }

    .contact .php-email-form button[type="submit"]:hover {
        color: #eb5d1e;
        background: #ffffff;
    }

    #contact label {
        float: left;
    }

    #footer {
        color: #ffffff;
        background: #eb5d1e;
        font-size: 16px !important;
        padding-bottom: 18px;
    }

    #footer .footer-newsletter {
        background: #fef8f5;
    }

    #footer .footer-newsletter h4 {}

    #footer .footer-newsletter form {}

    #footer .footer-newsletter form input[type="submit"] {
        background: #eb5d1e;
        border: 1px solid #eb5d1e;
    }

    #footer .footer-newsletter form input[type="submit"]:hover {
        color: #eb5d1e;
        background: #ffffff;
    }

    #footer .footer-top {
        border-top: 2px solid #eb5d1e;
        direction: ltr;
        text-align: initial;
    }

    #footer .footer-top .footer-contact p {
        font-family: "Raleway", "sans-serif";
        float: left !important;
    }

    #footer .footer-top h4 {
        text-align: left;
    }

    #footer .footer-top .footer-links ul i {
        color: #fef8f5;
    }

    #footer .footer-top .footer-links ul a {
        font-size: 14px;
        color: #eb5d1e;
    }

    #footer .footer-top .footer-links ul a:hover {
        color: #eb5d1e;
    }

    #footer .footer-top .social-links a {
        padding-top: 4px;
        font-size: 28px;
    }

    #footer .footer-top .social-links a:hover {}

    #footer .credits {}

    #footer .credits a {
        color: #eb5d1e;
    }

    #footer .footer-links p {
        text-align: justify;
    }

    .copyright {
        padding-top: 15px;
    }

    #footer .copyright {
        float: none;
    }

    .breadcrumbs>.container>div {
        direction: ltr;
    }

    .imageFlip {
        transform: scaleX(-1);
    }

    #submit {
        font-weight: bold;
    }

    .styled-table tbody tr:hover input[type=submit] {
        color: #ffffff !important;
    }

    .card .container .color {
        color: #4c4c4c !important;
        font-weight: bold;
        padding-top: 5px;
        text-align: center;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card .container .color:hover {
        color: #eb5d1e !important;
    }

    #viewMore {
        direction: ltr !important;
        justify-content: center;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .load-more {
        width: auto;
        background-color: #eb5d1e !important;
        color: #ffffff !important;
        font-weight: bold;
        border-style: none;
        border-radius: 50px;
        border: 1px solid #eb5d1e;
    }

    .load-more:hover {
        color: #eb5d1e !important;
        background-color: #ffffff !important;

    }

    .custom-btn {
        width: auto;
        background-color: #eb5d1e !important;
        color: #ffffff !important;
        border-radius: 50px;
        border: 1px solid #eb5d1e;
    }

    .custom-btn:hover {
        color: #eb5d1e !important;
        background-color: #ffffff !important;
    }

    .twitter {
        color: #FFFFFF;
        background-color: #1DA1F2 !important;
        border: 1px solid #1DA1F2;
    }

    .twitter:hover {
        background-color: #ffffff !important;
        color: #1DA1F2 !important;
    }

    .facebook {
        color: #FFFFFF;
        background-color: #4267B2 !important;
        border: 1px solid #4267B2;
    }

    .facebook:hover {
        background-color: #ffffff !important;
        color: #4267B2 !important;
    }

    .instagram {
        padding-top: 3px !important;
        color: white;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        border: 1px solid #d6249f;
    }

    .instagram:hover {
        color: transparent;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        -webkit-background-clip: text;
        border: 1px solid #d6249f;
    }

    .flicker {
        padding-top: 3px !important;
        color: white;
        background: linear-gradient(90deg, #0063dc 50%, #ff0084 50%);
        border: 1px solid #d6249f;
    }

    .flicker:hover {
        color: transparent;
        background: linear-gradient(90deg, #0063dc 50%, #ff0084 50%);
        -webkit-background-clip: text;
        border: 1px solid #d6249f;
    }

    .service-desc {
        text-align: center;
    }

    .nav-menu>ul>li:hover {
        color: #eb5d1e !important;
    }

    .nav-menu li:hover {
        color: #eb5d1e !important;
    }

    .lang {
        padding: 5px 2px !important;
    }

    .nav-menu .lang:hover {
        background: #ffffff !important;
        color: #eb5d1e !important;
    }

    .title {
        color: #000000;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        color: black;
    }

    .team .member-info h4>a {
        text-decoration: none;
        color: #eb5d1e !important;
    }

    button:hover,
    li>a:hover {
        opacity: 1;
    }

    .card-title>h5 {
        padding-top: 20px;
        color: #000000;
        font-weight: bold;
    }

    p {
        font-size: 14px;
    }

    p.title,
    p>a {
        /*text-align: justify;*/
        /*padding-left: 20px;*/
        /*padding-right: 20px;*/
        font-size: 14px;
    }

    p[class='description'] {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .rowf {
        display: inherit;
    }

    .row-intro {
        height: 110px;
    }

    .row-title {
        height: 75px
    }

    .icon-box {
        width: 500px;
    }

    .founder {
        width: auto;
    }

    .founder-title {
        font-family: Raleway !important;
    }

    .more-link:hover {
        text-decoration: underline;
        font-weight: bold;
    }

    .title {
        color: #000000;
        font-size: 18px;
    }

    p>a {
        text-align: justify;
        padding-left: 20px;
        padding-right: 20px;
        font-size: 14px;
        color: #eb5d1e;
    }

    .imageFlip {
        transform: scaleX(-1);
    }

    p[class='description'] {
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .about .social-links i {
        padding-left: 15px;
    }

    @media screen and (max-width: 575px) {
        .rowpading {
            margin-left: 0px !important;
            padding-left: 15px !important;
        }
    }

    @media screen and (min-width: 435px) and (max-width: 575px) {
        .icon-box {
            /*width: auto;*/
        }
    }

    /* Departments page css */
    .dept-table {
        text-align: center;
        font-size: 0.9em;
        font-family: "Raleway", "sans-serif";
        width: 100%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .dept-table thead tr {
        background-color: #eb5d1e;
        color: #ffffff;
        text-align: center;
    }

    .dept-table th,
    .dept-table td {
        text-align: center;
    }

    .dept-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .dept-table tbody tr:last-of-type {
        border-bottom: 2px solid #eb5d1e;
    }

    .dept-table tbody tr.active-row {
        font-weight: bold;
        color: #eb5d1e;
    }

    .active-row a {
        color: #eb5d1e;
    }

    .collapsible {
        background-color: white !important;
        color: #eb5d1e !important;
        cursor: pointer !important;
        padding: 18px;
        width: 100%;
        border: 1px solid #eb5d1e;
        text-align: center;
        outline: none;
        font-size: 22px;
        font-weight: bold;
    }

    .collapsible:hover {
        color: #ffffff !important;
        background: #eb5d1e !important;
    }

    div>.content {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: white;
    }

    #submit:hover {
        color: #ffffff !important;
        background: #eb5d1e !important;
    }

    #media_button {
        background-color: white !important;
        color: #eb5d1e !important;
        cursor: pointer !important;
        padding: 10px;
        width: 100%;
        height: 50px;
        border: 1px solid #eb5d1e;
        text-align: center;
        font-size: 22px;
        font-weight: bold;
    }

    #media_button:hover {
        color: #ffffff !important;
        background: #eb5d1e !important;
    }

    .dept_info {
        float: ;
    }

    i:hover {
        border-style: none !important;
    }

    /* Documentations page */
    #contact {
        direction: ltr;
    }

    h5 {
        float: none;
    }

    /* Media library page */
    .title {
        color: #4c4c4c;
        font-weight: bold;
        padding-top: 5px;
        text-align: center;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        direction: ltr;
    }

    #videoDiv p:hover {
        color: #eb5d1e
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 2px 16px;
    }

    .t_height {
        height: 58px;
    }

    #videoDiv {
        direction: ltr;
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .header-img {
            width: 50px;
        }

        .embed-responsive {
            /* video div height */
            height: 260px;
        }

        #header {
            position: fixed !important;

        }

        #banner {
            padding-top: 120px !important;
        }

        #header .logo h1 {
            /* site title */
            font-size: 24px !important;
        }

        .mobile-nav-toggle {
            top: 18px !important;
        }

        .icon-box>img {
            height: auto;
            width: 100%;
            max-width: 480px;
        }

        .about h3 {
            font-size: 24px !important;
        }

        .service-icon-box {
            width: 100%;
        }

        .t-height {
            padding: 10px 0px 10px 0px;
            font-size: 14px !important;
        }

        .founder {
            padding-bottom: 0px !important;
        }

        .j-title {
            padding-top: 65px;
        }

        .services .d-flex {
            margin-bottom: 20px !important;
        }

        .section-title h2 {
            font-size: 20px;
        }

        .section-title p {
            font-size: 20px;
        }

        .team-img {
            height: 100% !important;
        }

        .download-icon {
            float: none !important;
            margin-bottom: 10px;
        }

        .pad-bottom {
            padding-bottom: 17px !important;
        }

        .pad-top {
            margin-top: 0 !important;
            padding-bottom: 5px;
        }

        #servicesCarouselP {
            margin-left: -14px;
        }

        #servicesCarouselP i {
            font-size: 32px;
        }

        #servicesCarouselN {
            margin-right: -14px;
        }

        #servicesCarouselN i {
            font-size: 32px;
        }

        .carousel-inner .carousel-item-right,
        .carousel-inner .carousel-item-left {
            transform: translateX(100);
        }

    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
        #banner {
            padding-top: 120px !important;
        }

        .header-img {
            width: 50px;
        }

        .t-height {
            height: 30px;
            padding: 10px 40px 0px 40px;
            font-size: 14px !important;
        }

        .founder-img {
            padding: 0px 10px 0px 10px;
            height: 200px !important;
            width: 400px;
        }

        .founder {
            padding-bottom: 10px !important;
        }

        .j-title {
            padding-top: 65px;
        }

        .services .d-flex {
            margin-bottom: 20px !important;
        }

        .mobile-nav-toggle {
            /*top:68px !important;*/
        }

        #servicesCarouselP {
            margin-left: -20px;
        }

        #servicesCarouselN {
            margin-right: -20px;
        }

        #servicesCarouselN i {
            font-size: 40px;
        }

        #servicesCarouselP i {
            font-size: 40px;
        }
    }


    @media only screen and (max-width: 768px) {

        /*services carousal style*/
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }

        .service-icon-box {
            height: 300px;
        }
    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        .header-img {
            width: 90px;
        }

        .news-row {
            margin-top: 45px;
        }

        .rowpading img {
            margin-top: 100px;
        }

        .t-height {
            /*height: 40px;*/
            padding: 10px 0px 0px 0px;
            font-size: 14px !important;
        }

        .j-title {
            padding-top: 0px;
        }

        .founder-title {
            font-size: 18px !important;
        }

        .icon-box>img {
            padding: 0px 10px 0px 10px;
            height: 200px !important;
            width: 100%;
        }

        .founder {
            width: auto;
        }

        .team-img {
            height: 250px;
        }

        .mobile-nav-toggle {
            /*top:68px !important;*/
        }

        .service-icon-box {
            height: 300px;
        }

        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(50%);
        }

        .carousel-inner .carousel-item-left.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-50%);
        }

        .carousel-inner .carousel-item-right,
        .carousel-inner .carousel-item-left {
            transform: translateX(0);
        }
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .img-row {
            padding-right: 5px;
            padding-left: 5px;
            text-align: center
        }

        .header-img {
            width: 90px;
        }

        .news-row {
            margin-left: 10px;
            margin-top: 0px;
        }

        #header .logo h1 {
            /* site title */
            padding-top: 0px;
            font-size: 14px !important;
        }

        .nav-menu a {
            /* navbar links */
            font-size: 10px !important;
            padding: 10px 4px;
        }

        .nav-menu .get-started a {
            /* donate-us button */
            padding: 8px 14px !important;
        }

        #dropdownMenuButton {
            padding: 2px;
        }

        .founder-title {
            font-size: 18px !important;
        }

        .icon-box>img {
            padding: 0px 10px 0px 10px;
            height: 283px !important;
            width: 100%;
        }

        .founder {
            width: auto;
        }

        .t-height {
            /*height: 25px;*/
            padding-left: 5px;
            padding-right: 5px;
            font-size: 14px !important;
        }

        .services .d-flex {
            margin-bottom: 20px !important;
        }

        .nav-menu>ul>li {
            padding-left: 4px;
        }

        .service-icon-box {
            height: 400px;
        }

        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(100%);
        }

        .carousel-inner .carousel-item-left.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-100%);
        }

        .carousel-inner .carousel-item-right,
        .carousel-inner .carousel-item-left {
            transform: translateX(0);
        }
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        #header .logo h1 {
            /* site title */
            padding-top: 10px;
            font-size: 17px !important;
        }

        .nav-menu a {
            /* navbar links */
            font-size: 12px !important;
            padding: 10px 8px;
        }

        .nav-menu .get-started a {
            /* donate-us button */
            padding: 10px 24px !important;
        }

        .founder-title {
            font-size: 20px !important;
        }

        .icon-box>img {
            padding: 0px 10px 0px 10px;
            height: 330px !important;
            width: 100%;
        }

        .founder {
            width: auto;
        }

        .t-height {
            padding-left: 5px;
            padding-right: 5px;
            font-size: 14px !important;
        }

        .section-title h2 {
            font-size: 28px;
        }

        .navbar-row {
            margin-left: 25px !important;
            margin-right: 25px !important;
        }

        .news-row {
            margin-right: 5px;
        }

        .nav-menu .drop-down .drop-down:hover>ul {
            left: -126%;
        }
    }

    /* Extra large devices (2k, 4k large laptops and desktops, 1366px and up) */
    @media only screen and (min-width: 1366px) {
        #header .logo h1 {
            /* site title */
            padding-top: 0;
            font-size: 24px !important;
        }

        .nav-menu a {
            /* navbar links */
            font-size: 14px !important;
            padding: 10px 6px;
        }

        .nav-menu .get-started a {
            /* donate-us button */
            padding: 8px 20px !important;
        }

        .icon-box>img {
            padding: 0px 10px;
            height: 335px !important;
            width: 100%;
        }

        .founder {
            width: auto;
        }

        .t-height {
            padding-left: 5px;
            padding-right: 5px;
            font-size: 14px !important;
        }

        .nav-menu .drop-down .drop-down:hover>ul {
            left: -128%;
        }
    }

    /* Extra extra large devices (2k, 4k large laptops and desktops, 1366px and up) */
    @media only screen and (min-width: 1440px) {
        #header .logo h1 {
            /* site title */
            padding-top: 10px;
            font-size: 22px !important;
        }

        .nav-menu a {
            /* navbar links */
            font-size: 14px !important;
            padding: 10px 10px;
        }

        .nav-menu .get-started a {
            /* donate-us button */
            padding: 10px 25px;
        }

        .icon-box>img {
            padding: 0px 10px;
            height: 335px !important;
            width: 100%;
        }

        .founder {
            width: auto;
        }

        .t-height {
            padding-left: 5px;
            padding-right: 5px;
            font-size: 14px !important;
        }

        .nav-menu .drop-down .drop-down:hover>ul {
            left: -128%;
        }
    }

    @media only screen and (min-width: 1600px) {
        .nav-menu a {
            /* navbar links */
            font-size: 15px !important;
            padding: 10px 14px;
        }

        .nav-menu .get-started a {
            /* donate-us button */
            padding: 10px 25px;
        }
    }

    @media only screen and (min-width: 1920px) {
        #header .logo h1 {
            /* site title */
            padding-top: 10px;
            font-size: 22px !important;
        }

        .nav-menu a {
            /* navbar links */
            font-size: 16px !important;
            padding: 10px 15px;
        }

        .nav-menu .get-started a {
            /* donate-us button */
            padding: 10px 25px;
        }

        .navbar-row {
            margin-left: 100px !important;
            margin-right: 100px !important;
        }

        .nav-menu .drop-down .drop-down:hover>ul {
            left: -129%;
        }

        .banner-img {
            max-height: 700px !important;
        }
    }

    #header>.row {
        margin-left: 0px;
        margin-right: 0px;
    }

    .files_table {
        direction: ltr;
        text-align: center;
    }

    .download-icon {
        text-align: center;
        float: right;
        width: 40px;
        height: 40px;
        border-radius: 20px;
        background: #eb5d1e;
        padding: 10px;
        color: #ffffff;
    }

    .download-icon:hover {
        background: #ffffff;
        border: 1px solid #eb5d1e !important;
        color: #eb5d1e;
    }

    #header {
        height: 120px;
    }

    .latest-news {
        padding: 0;
    }

    .news {
        width: 120px;
        background-color: #eb5d1e;
    }

    .news-scroll a {
        text-decoration: none;
    }

    .dot {
        color: #eb5d1e;
    }

    .custom-card {
        /*used on single department page*/
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23) !important;
        border-radius: inherit !important;
        border-bottom: hidden !important;
    }

    .custom-card a {
        color: #eb5d1e !important;
    }

    .custom-card a:hover {
        color: #f2a989 !important;
    }

    .custom-card {
        padding: 10px !important;
    }

    .designation {
        background: #eb5d1e;
        color: #ffffff !important;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 0px 50px;
    }

    .twitters i {
        color: #ffffff !important;
    }

    .twitters {
        border: 1px solid #0c84ff;
        padding: 6px;
        border-radius: 60px;
        color: #ffffff !important;
        background: #0c84ff !important;
    }

    .facebooks i {
        color: #ffffff !important;
    }

    .facebooks {
        border: 1px solid #4267B2;
        padding: 6px 12px;
        border-radius: 60px;
        color: #ffffff !important;
        background: #4267B2 !important;
    }

    .instagrams i {
        color: #ffffff !important;
    }

    .instagrams {
        border: 1px solid #bb0000;
        padding: 6px;
        border-radius: 60px;
        color: #ffffff !important;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
    }

    .youtubes i {
        color: #ffffff !important;
    }

    .youtubes {
        border: 1px solid #bb0000;
        padding: 6px 8px;
        border-radius: 60px;
        color: #ffffff !important;
        background: #bb0000;
    }

    .newsletter-color {
        color: #ffffff;
        border: 1px solid #eb5d1e;
        background-color: #eb5d1e;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .newsletter-color:hover {
        color: #eb5d1e;
        background-color: #ffffff;
    }

    .btn-search-video {
        background-color: #f8f9fa;
        border-color: #ddd;
        color: #444;
    }

    .btn-search-video.hover,
    .btn-search-video:active,
    .btn-search-video:hover {
        background-color: #e9ecef;
        color: #2b2b2b;
    }
</style>
<style>
    .sa {
        margin-top: 70px;

    }

    .tiltes {
        height: 90px;
        font-size: 16px;
        font-weight: 700
    }

    @media only screen and (max-width: 1000px) {
        .sa {
            margin-top: 1px;
        }

        .tiltes {
            height: 90px;
            font-size: 16px;
            font-weight: 700
        }
    }
</style>