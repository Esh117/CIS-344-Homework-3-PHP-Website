<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AutoZone Plus | Premium Auto Parts</title>

    <style>

        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f5f7;
            color: #222;
        }


        header {
            background-color: #101820;
            color: white;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: white;
        }

        .logo span {
            color: #e63946;
        }

        .tagline {
            font-size: 12px;
            color: #bfc5cc;
            margin-top: 5px;
        }


        nav {
            background-color: #192631;
            padding: 16px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 18px;
            font-size: 15px;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            color: #e63946;
        }


        .hero {
            background:
                linear-gradient(rgba(10, 20, 30, 0.75),
                rgba(10, 20, 30, 0.75)),
                url("https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1600&q=85");

            background-size: cover;
            background-position: center;
            min-height: 440px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;
            color: white;
            padding: 50px 20px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .hero h1 span {
            color: #e63946;
        }

        .hero p {
            font-size: 18px;
            max-width: 650px;
            line-height: 1.6;
        }


        .button {
            display: inline-block;
            background-color: #e63946;
            color: white;
            padding: 14px 28px;
            margin-top: 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .button:hover {
            background-color: #b92330;
            transform: translateY(-3px);
        }


        main {
            max-width: 1200px;
            margin: auto;
            padding: 50px 25px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-title h2 {
            font-size: 32px;
            color: #101820;
        }

        .section-title p {
            color: #666;
        }


        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
        }

        .product {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .product:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .product img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .product-info {
            padding: 20px;
        }

        .product h3 {
            color: #101820;
        }

        .product p {
            color: #666;
            font-size: 14px;
        }

        .price {
            color: #e63946;
            font-size: 22px;
            font-weight: bold;
        }


        .promo {
            background-color: #101820;
            color: white;
            text-align: center;
            padding: 40px 20px;
            margin: 50px 0;
            border-radius: 10px;
        }

        .promo h2 {
            font-size: 30px;
        }

        .promo span {
            color: #e63946;
        }


        .about {
            background-color: white;
            padding: 35px;
            border-radius: 10px;
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .about h2 {
            color: #101820;
        }


        .contact {
            background-color: #e9edf1;
            padding: 35px;
            text-align: center;
            border-radius: 10px;
        }


        footer {
            background-color: #101820;
            color: white;
            padding: 45px 8% 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        footer h3 {
            color: #e63946;
        }

        footer p {
            color: #c3c9cf;
            line-height: 1.7;
        }

        footer a {
            display: block;
            color: #c3c9cf;
            text-decoration: none;
            margin: 10px 0;
        }

        footer a:hover {
            color: #e63946;
        }

        .copyright {
            text-align: center;
            border-top: 1px solid #39434c;
            padding-top: 20px;
            font-size: 13px;
        }

        @media (max-width: 600px) {

            header {
                justify-content: center;
                text-align: center;
            }

            nav a {
                display: inline-block;
                margin: 8px;
                font-size: 13px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero p {
                font-size: 15px;
            }

            .section-title h2 {
                font-size: 26px;
            }
        }

    </style>

</head>

<body>

<header>

    <div>
        <div class="logo">AUTOZONE <span>PLUS</span></div>

        <div class="tagline">
            PREMIUM AUTOMOTIVE PARTS & ACCESSORIES
        </div>
    </div>

    <div>
        <strong>DRIVE WITH CONFIDENCE.</strong>
    </div>

</header>

<nav>

    <a href="index.php">HOME</a>

    <a href="#products">PRODUCTS</a>

    <a href="#about">ABOUT US</a>

    <a href="#contact">CONTACT</a>

</nav>
