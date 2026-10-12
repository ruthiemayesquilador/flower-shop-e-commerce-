<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Fleur | Flower Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="<?= base_url('public/assets/img/favicon-16x16.ico') ?>" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #fff;
            /* white */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* subtle shadow */
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        section {
            width: 100%;
            height: 100vh;
        }

        section nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: fixed;
            right: 0;
            left: 0;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        section nav .logo img {
            width: 100px;
            cursor: pointer;
            margin: 7px 0;
        }

        section nav ul {
            list-style: none;
        }

        section nav ul li {
            display: inline-block;
            margin: 0 15px;
        }

        section nav ul li a {
            text-decoration: none;
            color: #000;
            font-weight: 500;
            font-size: 17px;
            transition: 0.1s;
        }

        section nav ul li a::after {
            content: '';
            width: 0;
            height: 2px;
            background: #6ab04c;
            display: block;
            transition: 0.2s linear;
        }

        section nav ul li a:hover::after {
            width: 60%;

        }

        section nav ul li a:hover {
            color: #6ab04c;
        }

        section nav .icon i {
            font-size: 18px;
            color: #000;
            margin: 0 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        section nav .icon i:hover {
            color: #6ab04c;
        }

        section .main {
            display: flex;
            text-align: justify;
            align-items: center;
            justify-content: space-around;
            position: relative;
            top: 105px;
        }

        section .main .men_text h1 {
            font-size: 60px;
            position: relative;
            top: -90px;
            left: 20px;
        }

        section .main .men_text h1 span {
            margin-left: 15px;
            color: #6ab04c;
            font-family: mv boli;
            line-height: 22px;
            font-size: 70px;
        }

        section .main .main_image img {
            width: 500px;
            margin-top: 50px;
            position: relative;
            left: 70px;
        }

        section p {
            width: 650px;
            text-align: justify;
            position: relative;
            left: 123px;
            bottom: 120px;
            line-height: 22px;
        }

        section .main_btn {
            background: #6ab04c;
            position: relative;
            left: 123px;
            bottom: 30px;
            width: 150px;
            cursor: pointer;
            padding: 12px 25px;
        }

        section .main_btn a {
            color: #fff;
            margin-right: 5px;
            text-decoration: none;
        }

        section .main_btn i {
            color: #fff;
            transition: 0.3s;
        }

        section .main_btn:hover i {
            transform: translateX(7px);
        }



        /*About*/

        .about {
            width: 100%;
            height: 80vh;
            padding: 70px 0;
            top: 800px;
        }

        .about .about_main {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .about .about_main .image img {
            width: 800px;
            position: relative;
            top: 60px;
        }

        .about .about_main .about_text h1 span {
            color: #6ab04c;
            margin-right: 15px;
            font-family: mv boli;
        }

        .about .about_main .about_text h1 {
            font-size: 55px;
            position: relative;
            bottom: 50px;
        }

        .about .about_main .about_text h3 {
            font-size: 30px;
            margin: 2 0 50px 0;
        }

        .about .about_main .about_text p {
            width: 650px;
            text-align: justify;
            margin-right: 30px;
            line-height: 22px;
        }

        .about .about_btn {
            background: #6ab04c;
            padding: 12px 25px;
            text-decoration: none;
            color: #fff;
            position: relative;
            left: 55%;
            bottom: 30px;
        }



        /*Menu*/

        .menu {
            width: 100%;
            padding: 70px 0;
        }

        .menu h1 {
            font-size: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .menu h1 span {
            color: #6ab04c;
            margin-left: 15px;
            font-family: mv boli;
        }

        .menu h1 span::after {
            content: '';
            width: 100%;
            height: 2px;
            background: #6ab04c;
            display: block;
            position: relative;
            bottom: 15px;
        }

        .menu .menu_box {
            width: 95%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(100%, 250px), 1fr));
            gap: 15px;
        }

        .menu .menu_box .menu_card {
            width: auto;
            min-height: 480px;
            height: auto;
            padding-top: 10px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .menu .menu_box .menu_card .menu_image {
            width: calc(100% - 24px);
            height: 245px;
            margin: 0 auto;
            overflow: hidden;
        }

        .menu .menu_box .menu_card .menu_image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: 0.3s;
        }

        .menu .menu_box .menu_card .menu_image:hover img {
            transform: scale(1.1);
        }

        .menu .menu_box .menu_card .small_card {
            width: 45px;
            height: 45px;
            float: right;
            position: relative;
            top: -240px;
            right: -8px;
            opacity: 0;
            border-radius: 7px;
            transition: 0.3s;
        }

        .menu .menu_box .menu_card:hover .small_card {
            position: relative;
            top: -240px;
            right: 20px;
            opacity: 1;
        }

        .menu .menu_box .menu_card .small_card i {
            font-size: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 50px;
            color: #000;
            cursor: pointer;
            text-shadow: 0 0 6px #000;
            transition: 0.2s;
        }

        .menu .menu_box .menu_card .small_card i:hover {
            color: #e40b0b;
        }

        .menu .menu_box .menu_card .menu_info h2 {
            width: 60%;
            text-align: center;
            margin: 10px auto 10px auto;
            font-size: 25px;
            color: #eb1961;
        }

        .menu .menu_box .menu_card .menu_info p {
            text-align: center;
            margin-top: 8px;
            line-height: 21px;
        }

        .menu .menu_box .menu_card .menu_info h3 {
            text-align: center;
            margin-top: 10px;
        }

        .menu .menu_box .menu_card .menu_info .menu_icon {
            color: #fac031;
            text-align: center;
            margin: 10px 0 10px 0;
        }

        .menu .menu_box .menu_card .menu_info .menu_btn {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
            background: #000;
            padding: 8px 10px;
            width: min(180px, calc(100% - 32px));
            margin: 0 auto;
            transition: 0.3s;
        }

        /*Order*/

        .order {
            width: 100%;
            min-height: 100vh;
            height: auto;
            padding: 70px 0;
            background-image: url(image/bg2.jpg);
            background-size: cover;
            background-position: center;
        }

        .order h1 {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            font-size: 55px;
        }

        .order h1 span {
            color: #6ab04c;
            margin-right: 15px;
            font-family: mv boli;
        }

        .order h1 span::after {
            content: '';
            width: 100%;
            height: 2px;
            background: #6ab04c;
            display: block;
            position: relative;
            bottom: 15px;
        }

        .order .order_main {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .order .order_main .order_image img {
            width: min(600px, 100%);
        }

        .order .order_main form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 0 10px;
        }

        .order .order_main form .input p {
            line-height: 25px;
        }

        .order .order_main form .input {
            margin: 5px;
        }

        .order .order_main form .input input {
            width: 300px;
            height: 35px;
            padding: 0 10px;
            border: 2px solid #cccccc;
            background: #eeeeee;
            outline: none;
            border-radius: 3px;
        }

        .order .order_main form .input input:focus {
            border: 2px solid #6ab04c;
        }

        .order .order_main form .order_btn {
            padding: 10px 0;
            background: #6ab04c;
            color: white;
            width: 40%;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
        }

        footer {
            background-color: black;
            color: white;
        }

        footer .end {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }

        footer .end span {
            margin-left: 10px;
        }

        ::-webkit-scrollbar {
            width: 13px;
        }

        ::-webkit-scrollbar-track {
            border-radius: 15px;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.5);
        }

        ::-webkit-scrollbar-thumb {
            background: #6ab04c;
            border-radius: 15px;
        }

        .logo {
            margin-right: 0;
        }

        ul {
            font-size: 20px;
        }

        ul a {
            margin-right: 0;
        }

        .login {
            color: black;
            /* Example color */
            border-radius: 5px;
            /* Example border radius */
            text-decoration: none;
            /* Remove default underline */
        }

        .login:hover {
            color: #6ab04c;
            /* Example hover color */
        }

        @media (max-width: 900px) {
            section .main .main_image img { width: min(42vw, 500px); left: 0; }
            section .main .men_text h1 { font-size: 48px; }
            section .main .men_text h1 span { font-size: 56px; }
            section p { width: min(64vw, 650px); left: 0; margin: 0 auto; }
            section .main_btn { left: max(18px, calc((100% - 650px) / 2)); }
            .about .about_main .image img { width: min(48vw, 650px); }
            .about .about_main .about_text p { width: auto; }
            .order .order_main { gap: 24px; padding: 0 24px; }
            .order .order_main .order_image { flex: 1; min-width: 0; }
            .order .order_main form { flex: 1; min-width: 0; }
            .order .order_main form .input input { width: 100%; }
        }

        @media (max-width: 600px) {
            section nav {
                justify-content: space-between;
                gap: 10px;
                padding: 8px 14px;
            }

            section nav .logo img { width: 62px; margin: 0; }
            section nav ul { display: flex; align-items: center; gap: clamp(8px, 3vw, 16px); }
            section nav ul li { margin: 0; }
            section nav ul li a { font-size: 13px; white-space: nowrap; }

            section#Home {
                display: flex;
                flex-direction: column;
                justify-content: center;
                min-height: 100svh;
                height: auto;
                padding: 86px 0 28px;
            }

            section .main {
                top: auto;
                flex-direction: column-reverse;
                gap: 12px;
                padding: 0 20px;
                text-align: center;
            }

            section .main .men_text h1 {
                top: auto;
                left: auto;
                font-size: clamp(38px, 11vw, 52px);
            }

            section .main .men_text h1 span {
                margin-left: 8px;
                font-size: clamp(44px, 12vw, 58px);
            }

            section .main .main_image img {
                display: block;
                width: min(78vw, 340px);
                margin: 0 auto;
            }

            section p {
                position: static;
                width: auto;
                max-width: 540px;
                margin: 18px auto 0;
                padding: 0 22px;
                text-align: center;
                line-height: 1.6;
            }

            section .main_btn {
                position: static;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 160px;
                margin: 20px auto 0;
            }

            .about {
                top: auto;
                height: auto;
                padding: 52px 20px;
                text-align: center;
            }

            .about .about_main { flex-direction: column; gap: 28px; }
            .about .about_main .image { width: 100%; }
            .about .about_main .image img { display: block; width: min(100%, 460px); margin: 0 auto; top: auto; }
            .about .about_main .about_text h1 { bottom: auto; font-size: 40px; }
            .about .about_main .about_text h3 { margin: 12px 0 18px; font-size: 24px; }
            .about .about_main .about_text p { width: auto; margin: 0 auto 14px; text-align: left; line-height: 1.6; }
            .about .about_btn { display: inline-block; left: auto; bottom: auto; margin-top: 12px; }

            .menu { padding: 48px 0; }
            .menu h1, .order h1 { font-size: 40px; }
            .menu .menu_box { width: min(100% - 32px, 420px); grid-template-columns: minmax(0, 1fr); gap: 14px; }
            .menu .menu_box .menu_card { min-height: 0; padding-bottom: 18px; }
            .menu .menu_box .menu_card .menu_image { height: 230px; }
            .menu .menu_box .menu_card .menu_info h2 { width: 90%; font-size: 23px; }
            .menu .menu_box .menu_card .small_card { opacity: 1; right: 14px; }
            .menu .menu_box .menu_card:hover .small_card { right: 14px; }

            .order { padding: 54px 0; }
            .order .order_main { flex-direction: column; gap: 24px; padding: 0 20px; }
            .order .order_main .order_image { width: 100%; }
            .order .order_main .order_image img { display: block; width: min(100%, 440px); margin: 0 auto; }
            .order .order_main form { width: 100%; grid-template-columns: minmax(0, 1fr); }
            .order .order_main form .input { min-width: 0; }
            .order .order_main form .input input { width: 100%; }
            .order .order_main form .order_btn { width: 100%; }

            footer .end { padding: 15px 18px; text-align: center; line-height: 1.5; }
        }
    </style>

</head>

<body>

    <section id="Home">
        <nav>
            <div class="logo">
                <img src="<?= base_url("public/assests/img"); ?>/logo.png">
            </div>

            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Menu">Menu</a></li>
                <li><a href="<?= base_url("order/login"); ?>" class="login"><i class="bi bi-person-fill"></i> LOGIN </a>
                </li>

            </ul>



        </nav>

        <div class="main">

            <div class="men_text">
                <h1>Le<span>Fleur</span></h1>
            </div>

            <div class="main_image">
                <img src="<?= base_url("public/assests/img"); ?>/ffpot.jpg">
            </div>

        </div>
        <div>
            <p>Welcome to Le Fleur, a sanctuary of elegance and natural beauty nestled in the heart of Nabua. At Le
                Fleur, we believe that flowers are more than just botanical marvels - they are silent messengers of
                emotion, memory, and meaning.</p>
        </div>


        <div class="main_btn">
            <a href="#Menu">Order Now</a>
            <i class="fa-solid fa-angle-right"></i>
        </div>

    </section>



    <!--About-->

    <div class="about" id="About">
        <div class="about_main">

            <div class="image">
                <img src="<?= base_url("public/assests/img"); ?>/about.jpg">
            </div>

            <div class="about_text">
                <h1><span>About</span>Us</h1>
                <h3>Why Choose us?</h3>

                <p>At Le Fleur, we believe in the power of flowers to brighten lives and create meaningful connections.
                    Founded in 2024, our passion for floristry has driven us to curate stunning arrangements and provide
                    exceptional service to our valued customers.</p>
                <p>Welcome to Le Fleur! Founded in 2024, we're passionate about flowers. Our team of dedicated florists
                    combines creativity with craftsmanship to create stunning floral arrangements for every occasion.
                    Whether you're celebrating a special moment or simply want to brighten someone's day, Le Fleur is
                    here to help you express yourself through the beauty of flowers.</p>
            </div>

        </div>
        <br> <br> <br>
        <a href="#Menu" class="about_btn">Order Now</a>

    </div>
    <!--Menu-->

    <div class="menu" id="Menu">
        <h1>Our<span>Menu</span></h1>

        <div class="menu_box">
            <div class="menu_card">

                <div class="menu_image">
                    <img src="<?= base_url("public/assests/img"); ?>/Eclectic Rose Ensemble.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Eclectic Rose Ensemble</h2>
                    <p>
                        A representation of diversity and beauty.
                    </p>
                    <h3> ₱1024</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="<?= base_url("Order/addRecord"); ?>" class="menu_btn">Order Now</a>


                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="<?= base_url("public/assests/img"); ?>/Quintessential Roses.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Quintessential Roses</h2>
                    <p>
                        Crafted for softies.
                    </p>
                    <h3> ₱800 </h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="<?= base_url("Order/addRecord"); ?>" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="<?= base_url("public/assests/img"); ?>/White Roses.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Garden of Ivory Serenity</h2>
                    <p>
                        Embodies grace and sophistication.
                    <h3> ₱2851</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="<?= base_url("Order/addRecord"); ?>" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="<?= base_url("public/assests/img"); ?>/Purple Majesty Bloom.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Purple Majesty Bloom</h2>
                    <p>
                        Enchanting allure of purple blooms.
                    </p>
                    <h3> ₱3484</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="<?= base_url("Order/addRecord"); ?>" class="menu_btn">Order Now</a>
                </div>

            </div>


            <div class="menu_card">

                <div class="menu_image">
                    <img src="<?= base_url("public/assests/img"); ?>/Golden Glow Bouquet.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2> Golden Glow Bouquet </h2>
                    <p>
                        Vibrant sunflowers bring joy.
                    </p>
                    <h3> ₱4058 </h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="<?= base_url("Order/addRecord"); ?>" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="<?= base_url("public/assests/img"); ?>/Rosy Crimson Delight.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Rosy Crimson Delight</h2>
                    <p>
                        A delightful burst of rosy elegance.
                    </p>
                    <h3> ₱1083 </h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="<?= base_url("Order/addRecord"); ?>" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="<?= base_url("public/assests/img"); ?>/Silver Petal Harmony.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Frosty Meadow Bloom</h2>
                    <p>
                        A cool, serene arrangement.
                    </p>
                    <h3> ₱1500 </h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="<?= base_url("Order/addRecord"); ?>" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="<?= base_url("public/assests/img"); ?>/Hydrangea Haven.png">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Hydrangea Haven</h2>
                    <p>
                        A tranquil blend of colors and blooms.
                    </p>
                    <h3> ₱2836 </h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="<?= base_url("Order/addRecord"); ?>" class="menu_btn">Order Now</a>
                </div>

            </div>




        </div>

    </div>





    <!-- Footer -->
    <footer>
        <div class="end">
            <p>&copy; 2024 ITEC222 | Ruthiemay Esquilador | BSIT 2G </p>
        </div>
    </footer>





</body>

</html>