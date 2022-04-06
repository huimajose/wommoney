<!DOCTYPE html>
<html lang="pt">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{BASE}}assets/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="{{BASE}}assets/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="{{BASE}}assets/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
   

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="{{BASE}}assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="{{BASE}}assets/css/style.css" rel="stylesheet" id="style">
    <title>
        {% block title %}{% endblock %}
    </title>
</head>

<body class="body-scroll" data-page="profile">
    {% include 'partials/header.twig.php' %}

    {% block body %}{% endblock %}

    {% include 'partials/footer.twig.php' %}
</body>

</html>