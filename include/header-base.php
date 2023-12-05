<?php $url = 'https://' . $_SERVER['HTTP_HOST']; ?>
<?php /*$url = 'http://' . $_SERVER['HTTP_HOST'] . '/znojmoprojekt-new'; */?>
<?php /*$url = 'http://' . $_SERVER['HTTP_HOST']; */?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="ZNOJMOPROJEKT, Radomír KAMAN, s.r.o,architekt, architektonická kancelár, projekce, projektování, návrhy, inženýrské služby, stavební dozor, technická pomoc, územní plány, urbanistické studie, architektura, výkresy, czech, Znojmo, znojman, oknet" />
    <meta name="description" content="ZNOJMOPROJEKT Ing. arch. Radomír KAMAN, s.r.o. - architektonická kancelář." />
    <meta name="author" content="Ondřej Blaha" />

    <!-- Title  -->
    <title>ZNOJMOPROJEKT</title>

    <meta prefix="og: http:ogp.me/ns#" property="og:title" content="ZNOJMOPROJEKT"/>
    <meta prefix="og: http:ogp.me/ns#" property="og:description" content="ZNOJMOPROJEKT Ing. arch. Radomír KAMAN, s.r.o. - architektonická kancelář."/>
    <meta prefix="og: http:ogp.me/ns#" property="og:type" content="website"/>
    <meta prefix="og: http:ogp.me/ns#" property="og:image" content="http://www.znojmoprojekt.cz/src/assets/img/fb.jpg"/>
    <meta prefix="og: http:ogp.me/ns#" property="og:image:secure_url" content="https://www.znojmoprojekt.cz/src/assets/img/fb.jpg"/>
    <meta prefix="og: http:ogp.me/ns#" property="og:locale" content="cs_CZ"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" rel="preload" as="style" href="<?php echo $url ?>/src/assets/css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" rel="preload" as="style" href="<?php echo $url ?>/src/assets/css/style.css" />
    <link rel="stylesheet" rel="preload" as="style" href="<?php echo $url ?>/src/assets/css/custom.css" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url ?>/src/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url ?>/src/assets/img/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url ?>/src/assets/img/favicon//favicon-16x16.png">
    <link rel="manifest" href="<?php echo $url ?>/src/assets/img/favicon//site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" media="print" onload="this.media='all'">
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js" defer async></script>

    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#1a1a1a",
                        "text": "#858585"
                    },
                    "button": {
                        "background": "transparent",
                        "border": "#858585",
                        "text": "#858585"
                    }
                },
                "content": {
                    "href": "https://www.google.com/intl/cs/policies/privacy/partners/",
                    "message": "Tento web používá pouze nezbytné technické cookies.",
                    "dismiss": "Souhlasím",
                    "link": "Více informací"
                },
                "position": "bottom"
            })});
    </script>

</head>

<body>
