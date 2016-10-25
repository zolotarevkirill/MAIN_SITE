<?php
header("Access-Control-Allow-Origin: *");
?><!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <META NAME="ROBOTS" content="ALL">
        <title><?php $APPLICATION->ShowTitle(); ?> | www.terem-pro.ru</title>
        <?php $APPLICATION->ShowMeta("description") ?>
        <?php $APPLICATION->ShowMeta("keywords") ?>
        <meta property="og:title" content="<?php $APPLICATION->ShowTitle(); ?>"/>
        <meta property="og:description" content="<?php $APPLICATION->ShowProperty("description"); ?>"/>
        <meta property="og:image" content="http://www.terem-pro.ru/upload/logo.png"/>
        <meta property="og:type" content="website"/>
        <?php $p_url = $APPLICATION->GetCurPage(); ?>
        <meta property="og:url" content= "http://www.terem-pro.ru<?= $p_url ?>" />
        <meta property="og:keywords" content="<?php $APPLICATION->ShowProperty("keywords"); ?>">





        <link rel="shortcut icon" href="/bitrix/templates/.default/assets/img/fav.ico" type="image/x-icon">
        <link href='/bitrix/templates/.default/assets/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <link href='/bitrix/templates/.default/assets/css/style.min.css' rel='stylesheet' type='text/css'>
        <link href="http://www.terem-pro.ru/upload/icon/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
        <link href="http://www.terem-pro.ru/upload/icon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
        <link href="http://www.terem-pro.ru/upload/icon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
        <link href="http://www.terem-pro.ru/upload/icon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
        <link href="http://www.terem-pro.ru/upload/icon/apple-touch-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
        <link href="http://www.terem-pro.ru/upload/icon/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
        <link href="http://www.terem-pro.ru/upload/icon/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
        <link href="http://www.terem-pro.ru/upload/icon/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
        <link href="http://www.terem-pro.ru/upload/icon/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
        <link href="http://www.terem-pro.ru/upload/icon/favicon-192x192.png" rel="icon" sizes="192x192" type="image/png">
        <link href="http://www.terem-pro.ru/upload/icon/favicon-160x160.png" rel="icon" sizes="160x160" type="image/png">
        <link href="http://www.terem-pro.ru/upload/icon/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
        <link href="http://www.terem-pro.ru/upload/icon/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
        <link href="/bitrix/templates/.default/assets/img/fav.ico" rel="icon" sizes="16x16" type="image/png">
        

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="/bitrix/templates/.default/assets/js/e-smart-hittest-jquery.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script async  src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script  async  src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php $APPLICATION->ShowHeadStrings(); ?>
        <?php
        if ($USER->IsAdmin()) {
            $APPLICATION->ShowHead();
        }
        ?>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto);
            @font-face {
                font-family: 'Reforma';
                src: url('/bitrix/templates/.default/assets/fonts/RFG49.eot'); /* IE9 Compat Modes */
                src: url('/bitrix/templates/.default/assets/fonts/RFG49.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
                    url('/bitrix/templates/.default/assets/fonts/RFG49.woff') format('woff'), /* Pretty Modern Browsers */
                    url('/bitrix/templates/.default/assets/fonts/RFG49.ttf')  format('truetype'), /* Safari, Android, iOS */
                    url('/bitrix/templates/.default/assets/fonts/RFG49.svg#RFG49') format('svg'); /* Legacy iOS */
                font-weight: 100;
                font-style: normal;
            }
            @font-face {
                font-family: 'Reforma';
                src: url('/bitrix/templates/.default/assets/fonts/RFG69.eot'); /* IE9 Compat Modes */
                src: url('/bitrix/templates/.default/assets/fonts/RFG69.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
                    url('/bitrix/templates/.default/assets/fonts/RFG69.woff') format('woff'), /* Pretty Modern Browsers */
                    url('/bitrix/templates/.default/assets/fonts/RFG69.ttf')  format('truetype'), /* Safari, Android, iOS */
                    url('/bitrix/templates/.default/assets/fonts/RFG69.svg#RFG49') format('svg'); /* Legacy iOS */
                font-weight: 400;
                font-style: normal;
            }
            @font-face {
                font-family: 'Reforma';
                src: url('/bitrix/templates/.default/assets/fonts/RFG79.eot'); /* IE9 Compat Modes */
                src: url('/bitrix/templates/.default/assets/fonts/RFG79.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
                    url('/bitrix/templates/.default/assets/fonts/RFG79.woff') format('woff'), /* Pretty Modern Browsers */
                    url('/bitrix/templates/.default/assets/fonts/RFG79.ttf')  format('truetype'), /* Safari, Android, iOS */
                    url('/bitrix/templates/.default/assets/fonts/RFG79.svg#RFG49') format('svg'); /* Legacy iOS */
                font-weight: 600;
                font-style: normal;
            }
            @font-face {
                font-family: 'Reforma';
                src: url('/bitrix/templates/.default/assets/fonts/RFG89.eot'); /* IE9 Compat Modes */
                src: url('/bitrix/templates/.default/assets/fonts/RFG89.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
                    url('/bitrix/templates/.default/assets/fonts/RFG89.otf')  format('truetype'), /* Safari, Android, iOS */
                    url('/bitrix/templates/.default/assets/fonts/RFG89.svg#RFG49') format('svg'); /* Legacy iOS */
                font-weight: 700;
                font-style: normal;
            }
            @font-face{
                font-family:'Glyphicons Halflings';
                src:url('/bitrix/templates/.default/assets/fonts/glyphicons-halflings-regular.eot');
                src:url('/bitrix/templates/.default/assets/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),
                    url('/bitrix/templates/.default/assets/fonts/glyphicons-halflings-regular.woff') format('woff'),
                    url('/bitrix/templates/.default/assets/fonts/glyphicons-halflings-regular.ttf') format('truetype'),
                    url('/bitrix/templates/.default/assets/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
            }
        </style>
    </head>
    <body>
        <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
        <?php if ($APPLICATION->GetDirProperty("IS_GRID") == 'Y'): ?>



            <div class="sticky-page main-page">
                <section class="header-wrap">
                    <section class="header" data-item="header">
                    <?php else: ?>
                        <div class="sticky-page">
                            <section class="header-wrap">
                                <section class="header" data-item="header">
                                <?php endif; ?>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 col-sm-12">
                                            <nav class="navbar navbar-default">
                                                <div class="header-fix-logo">
                                                    <!-- Brand and toggle get grouped for better mobile display -->
                                                    <div class="navbar-header">
                                                        <div class="logo">
                                                            <a href="http://www.terem-pro.ru/" draggable="false">
                                                                <svg class="ip-inner" height="100%" width="100%" viewBox="0 0 139 167" enable-background="new 0 0 139 167" preserveAspectRatio="xMidYMin meet">
                                                                <path class="logo-bg" fill="#AC1E23" d="M3.2,0v167h119.9c7,0,12.7-5.8,12.7-12.9V0H3.2z"/>
                                                                <g>
                                                                <path class="logo-text-copyrights" fill="#FFFFFF" d="M116.1,72.1h0.2c0.3,0,0.5,0,0.6,0c0.1,0,0.1,0.1,0.2,0.1c0,0.1,0.1,0.1,0.1,0.2s0,0.2-0.1,0.2
                                                                      c0,0.1-0.1,0.1-0.2,0.1c-0.1,0-0.3,0-0.6,0h-0.2V72.1L116.1,72.1L116.1,72.1z M116.1,74.4v-1.1h0.1c0.2,0,0.3,0,0.4,0.1
                                                                      c0.1,0.1,0.2,0.3,0.4,0.6l0.2,0.5h0.7l-0.3-0.6c-0.1-0.2-0.2-0.3-0.2-0.3c-0.1-0.1-0.1-0.2-0.2-0.2c0,0-0.1-0.1-0.2-0.1
                                                                      c0.2,0,0.4-0.1,0.6-0.3c0.1-0.1,0.2-0.3,0.2-0.5c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.2-0.2-0.3-0.3s-0.3-0.1-0.4-0.1
                                                                      c-0.1,0-0.4,0-0.8,0h-0.6v2.6H116.1L116.1,74.4L116.1,74.4z M117.7,71.1c0.3,0.2,0.6,0.5,0.8,0.8c0.2,0.3,0.3,0.7,0.3,1
                                                                      s-0.1,0.7-0.3,1c-0.2,0.3-0.5,0.6-0.8,0.8c-0.3,0.2-0.7,0.3-1,0.3s-0.7-0.1-1-0.3c-0.3-0.2-0.6-0.5-0.8-0.8
                                                                      c-0.2-0.3-0.3-0.7-0.3-1s0.1-0.7,0.3-1c0.2-0.3,0.5-0.6,0.8-0.8s0.7-0.3,1-0.3C117.1,71,117.5,71.1,117.7,71.1L117.7,71.1
                                                                      L117.7,71.1z M115.5,70.8c-0.4,0.2-0.8,0.6-0.9,0.9c-0.2,0.4-0.4,0.8-0.4,1.2c0,0.5,0.1,0.8,0.4,1.2c0.2,0.4,0.6,0.8,0.9,0.9
                                                                      c0.4,0.2,0.8,0.4,1.2,0.4c0.5,0,0.8-0.1,1.2-0.4c0.4-0.2,0.8-0.6,0.9-0.9s0.4-0.8,0.4-1.2c0-0.5-0.1-0.8-0.4-1.2
                                                                      c-0.2-0.4-0.6-0.8-0.9-0.9s-0.8-0.3-1.2-0.3C116.3,70.4,115.9,70.6,115.5,70.8L115.5,70.8L115.5,70.8z"/>
                                                                <path class="logo-text-m" fill="#FFFFFF" d="M87.5,98.4l-2.3-10.4c-0.5,0.8-0.9,1.5-1.3,2.3s-0.6,1.4-0.8,2.1s-0.3,1.4-0.3,2.2c0,0.5,0,1,0.1,1.9
                                                                      c0.1,0.8,0.2,1.2,0.2,1.4v1c0,0.2-0.1,0.4-0.3,0.5c-0.1,0.1-0.3,0.1-0.5,0.1c-0.2,0-0.4,0-0.8-0.1c-0.1,0-0.3,0-0.6,0
                                                                      c-0.3,0-0.5,0-0.7,0s-0.4,0-0.5,0c-0.3,0-0.5-0.1-0.6-0.3c0.1-0.2,0-0.6,0-1.2c0-1,0.1-1.8,0.4-2.5c0.3-0.8,0.6-1.5,1-2.2
                                                                      c0.4-0.7,1-1.5,1.8-2.5s1.3-1.9,1.6-2.5c0.4-0.6,0.5-1.2,0.5-1.8c0-0.6-1.2-0.6-1.5-0.5V85H89v0.8h-1.1l2.5,12l2.3-12h-0.9V85
                                                                      h5.5v0.8h-1.3l2.7,12.6h1.4v0.8h-5.5v-0.8h0.9l-2.3-10.8l-2,10.8h1v0.8h-5.9v-0.8L87.5,98.4L87.5,98.4L87.5,98.4z"/>
                                                                <path class="logo-text-t" fill="#FFFFFF" d="M26.7,97.7v-24h-1.3h-0.7c-0.6,0-1,0.1-1.3,0.4c-0.4,0.2-0.7,0.8-0.9,1.5c-0.3,0.8-0.7,2.1-0.9,3.8
                                                                      c-0.2,0.8-0.3,1.3-0.4,1.6s-0.3,0.4-0.6,0.4c-0.4,0-0.6-0.2-0.7-0.5c-0.1-0.3-0.2-0.8-0.2-1.3c0-1-0.2-2.2-0.6-3.4
                                                                      c-0.1-0.3-0.3-0.8-0.5-1.6c-0.3-0.8-0.4-1.3-0.4-1.6c0-0.4,0.1-0.8,0.4-1c0.2-0.3,0.6-0.5,1-0.5c0.1,0,0.4,0.1,0.8,0.2
                                                                      c0.4,0.1,0.8,0.2,1.3,0.3C22.4,72,23,72,23.8,72c0.2,0,0.4,0,0.6,0s0.4,0,0.5,0h9c0.1,0,0.3,0,0.6,0c0.2,0,0.4,0,0.6,0
                                                                      c0.8,0,1.4,0,1.9-0.1c0.5-0.1,0.9-0.2,1.3-0.3c0.4-0.1,0.7-0.2,0.8-0.2c0.5,0,0.8,0.2,0.9,0.5c0.2,0.3,0.4,0.7,0.4,1
                                                                      c0,0.3-0.1,0.8-0.4,1.5c-0.3,0.8-0.5,1.2-0.6,1.6c-0.4,1.2-0.6,2.4-0.6,3.4c0,1.2-0.3,1.8-0.8,1.8c-0.3,0-0.4-0.1-0.6-0.3
                                                                      c-0.1-0.2-0.2-0.5-0.3-0.8c-0.1-0.3-0.2-1-0.5-2.2c-0.3-1.3-0.6-2.4-0.9-2.9c-0.3-0.7-0.7-1-1.1-1.2c-0.4-0.2-0.9-0.3-1.7-0.3
                                                                      h-1.3v24h2.5v1.6h-9.8v-1.6L26.7,97.7L26.7,97.7L26.7,97.7z"/>
                                                                <path class="logo-text-e" fill="#FFFFFF" d="M68.1,89.8c0-0.8,0.1-1.4,0.3-2.2c0.2-0.7,0.5-1.2,0.9-1.7c0.5-0.5,1-0.7,1.7-0.7c0.8,0,1.5,0.3,1.9,0.8
                                                                      c0.8,0.8,1.3,2.8,1,4.7h-5.9C68.2,90.5,68.1,90.2,68.1,89.8L68.1,89.8L68.1,89.8z M72.7,94.7v0.8c1.8,0,0.8,1.2-0.1,2.2
                                                                      c-0.6,0.7-1.5,0.9-2.6,0.9c-0.3,0-0.6,0-0.8-0.1c0.1-0.4,0.2-0.8,0.2-1c0-0.7,0-1.2-0.1-1.6c-0.1-0.4-0.3-0.9-0.5-1.7
                                                                      c-0.2-0.7-0.4-1.4-0.5-2.4H78V91l0,0c-0.2-1.7-0.6-4-2.1-5.1c-0.7-0.5-1.3-0.8-2.1-0.9c-0.8-0.2-1.4-0.3-2.1-0.3
                                                                      c-1.1,0-2.2,0.2-3.3,0.7c-1,0.4-2,1.1-2.6,2.1c-0.8,0.9-1,2.3-1,3.9c0,0.6,0.1,1,0.2,1.4s0.3,0.8,0.7,1.3
                                                                      c0.3,0.5,0.8,1.1,1.4,1.9c0.4,0.5,0.8,0.9,0.9,1.3c0.2,0.4,0.3,0.8,0.3,1.3c0,0.1,0,0.3,0,0.6c0.5,0.1,0.9,0.2,1.6,0.3
                                                                      c0.7,0.1,1.2,0.1,1.8,0.1c0.8,0,1.6-0.2,2.4-0.5c0.8-0.4,1.4-0.8,2.1-1.4c0.9-0.8,1-2,2.3-2v-0.8L72.7,94.7L72.7,94.7L72.7,94.7z"/>
                                                                <path class="logo-text-r" fill="#FFFFFF" d="M58.9,91.5c-0.3,0.4-0.6,0.6-0.9,0.6c-0.1,0-0.2,0-0.4-0.1s-0.3-0.2-0.4-0.3l-1.3,1.7v-3.5v-0.5
                                                                      c0-0.8,0-1.4,0.1-2c0.1-0.5,0.2-0.9,0.5-1.3c0.3-0.4,0.7-0.6,1.1-0.6c0.7,0,1.1,0.3,1.3,0.8c0.3,0.6,0.4,1.3,0.4,2.4
                                                                      C59.4,89.8,59.2,91.2,58.9,91.5L58.9,91.5L58.9,91.5z M62.4,86.7c-0.4-0.7-1-1.1-1.8-1.5c-0.8-0.4-1.7-0.6-2.8-0.6
                                                                      c-1.1,0-2.1,0.3-3,0.8c-0.8,0.6-1.5,1.3-2,2.3c0,1-0.1,2.1-0.1,3.1V97c0,1.6-0.9,1.3-1.7,1.3c0,0.3,0,0.6,0,0.8h6.7v-0.8
                                                                      c-0.6-0.1-1.7,0.3-1.7-1.4c0-1,0-1.4,0-2.5l1.4-1.8c0.1,0,0.3,0.1,0.5,0.2c0.4,0.2,0.7,0.4,0.8,0.4c0.2,0.1,0.5,0.1,0.8,0.1
                                                                      c0.7,0,1.2-0.2,1.8-0.6c1.1-0.6,1.7-3,1.7-4.2C63,88.1,62.8,87.4,62.4,86.7L62.4,86.7L62.4,86.7z"/>
                                                                <path class="logo-text-e" fill="#FFFFFF" d="M40,89.8c0-0.8,0.1-1.4,0.3-2.2c0.2-0.7,0.5-1.2,0.9-1.7c0.5-0.5,1-0.7,1.7-0.7c0.8,0,1.5,0.3,1.9,0.8
                                                                      c0.8,0.8,1.3,2.8,1,4.7H40C40,90.5,40,90.2,40,89.8L40,89.8L40,89.8z M44.5,94.7v0.8c1.8,0,0.8,1.2-0.1,2.2
                                                                      c-0.6,0.7-1.5,0.9-2.6,0.9c-0.3,0-0.6,0-0.8-0.1c0.1-0.4,0.2-0.8,0.2-1c0-0.7,0-1.2-0.1-1.6c-0.1-0.4-0.3-0.9-0.5-1.7
                                                                      c-0.2-0.7-0.4-1.4-0.5-2.4h9.6V91l0,0c-0.2-1.7-0.6-4-2.1-5.1c-0.7-0.5-1.3-0.8-2.1-0.9c-0.8-0.2-1.4-0.3-2.1-0.3
                                                                      c-1.1,0-2.2,0.2-3.3,0.7c-1,0.4-2,1.1-2.6,2.1c-0.8,0.9-1,2.3-1,3.9c0,0.6,0.1,1,0.2,1.4s0.3,0.8,0.7,1.3
                                                                      c0.3,0.5,0.8,1.1,1.4,1.9c0.4,0.5,0.8,0.9,0.9,1.3s0.3,0.8,0.3,1.3c0,0.1,0,0.3,0,0.6c0.5,0.1,0.9,0.2,1.6,0.3
                                                                      c0.7,0.1,1.2,0.1,1.8,0.1c0.8,0,1.6-0.2,2.4-0.5c0.8-0.4,1.4-0.8,2.1-1.4c0.9-0.8,1-2,2.3-2v-0.8L44.5,94.7L44.5,94.7L44.5,94.7z"/>
                                                                <path class="logo-text-e" fill="#FFFFFF" d="M114.5,95.5c0,0.9-0.2,1.6-0.6,1.8c-0.4,0.3-0.8,0.4-1.5,0.4H110V85.4c0.8,1,1.9,1.8,3.1,2.4
                                                                      c0.7,0.3,1,0.6,1.2,0.8c0.1,0.3,0.2,0.7,0.2,1.3c0,0.3,0,0.5,0,0.5c0,0.1,0,0.2,0,0.5L114.5,95.5L114.5,95.5L114.5,95.5z
                                                                      M118.5,86.9c-0.2-0.4-0.7-0.7-1.4-0.7c-0.5,0.1-0.8,0.1-1.1,0.1c-0.9,0-2-0.3-3.1-0.8c-1.1-0.6-2.1-1.3-2.8-2.3v-9.4h2.3v-1.7
                                                                      h-12c-0.4,0-0.9-0.2-1.5-0.4c-0.1,0-0.5-0.2-0.8-0.2s-0.7,0.1-0.8,0.3c-0.2,0.1-0.6,0.6-0.6,1.2c0,0.9,0.8,2.5,0.8,2.8
                                                                      c0.3,1.1,0.5,1.3,0.6,2.9c0.1,0.9,0.1,1.6,0.2,2c0.1,0.4,0.4,0.6,0.8,0.6c0.3,0,0.5-0.1,0.6-0.3c0.1-0.3,0.3-0.7,0.4-1.3
                                                                      c0.3-1.5,0.6-2.5,0.8-3.7c0.7-2.4,1.6-2.4,2.6-2.4h1.8v23.9h-2.5v1.6h14.4c0.4,0,0.7-0.1,0.9-0.2c0.2-0.1,0.4-0.4,0.6-0.8
                                                                      c0.1-0.4,0.2-1,0.2-1.8v-7.8C118.8,88,118.7,87.3,118.5,86.9L118.5,86.9L118.5,86.9z"/>
                                                                </g>
                                                                <g class="logo-upper-group">
                                                                <path class="logo-upper" fill="#FFFFFF" d="M50.7,81.3c0-1.3,0.6-2.5,1.3-3.3l0,0c0.8-0.8,2-1.3,3.3-1.3c1.3,0,2.5,0.6,3.3,1.3l0,0
                                                                      c0.8,0.8,1.3,2,1.3,3.3h-1.6c0-0.8-0.4-1.6-0.8-2.2l0,0c-0.6-0.6-1.3-0.8-2.2-0.8c-0.8,0-1.6,0.4-2.2,0.8l0,0
                                                                      c-0.6,0.6-0.8,1.3-0.8,2.2H50.7L50.7,81.3L50.7,81.3L50.7,81.3z"/>
                                                                <path class="logo-upper" fill="#FFFFFF" d="M76.8,81.3c0-1.3,0.6-2.5,1.3-3.3l0,0c0.8-0.8,2-1.3,3.3-1.3s2.5,0.6,3.3,1.3l0,0c0.8,0.8,1.3,2,1.3,3.3
                                                                      h-1.6c0-0.8-0.4-1.6-0.8-2.2l0,0c-0.6-0.6-1.3-0.8-2.2-0.8c-0.8,0-1.6,0.4-2.2,0.8l0,0c-0.6,0.6-0.8,1.3-0.8,2.2H76.8L76.8,81.3
                                                                      L76.8,81.3L76.8,81.3z"/>
                                                                <path class="logo-upper" fill="#FFFFFF" d="M63.8,81.3c0-1.3,0.6-2.5,1.3-3.3l0,0c0.8-0.8,2-1.3,3.3-1.3s2.5,0.6,3.3,1.3c0.8,0.8,1.3,2,1.3,3.3h-1.6
                                                                      c0-0.8-0.4-1.6-0.8-2.2c-0.6-0.6-1.3-0.8-2.2-0.8c-0.8,0-1.6,0.4-2.2,0.8l0,0c-0.6,0.6-0.8,1.3-0.8,2.2H63.8L63.8,81.3L63.8,81.3
                                                                      L63.8,81.3z"/>
                                                                <polygon class="logo-upper" fill="#FFFFFF" points="70.5,66.4 69.6,67.9 72.1,68.4 69.6,69 70.2,70.3 68.9,69.6 68.4,72.3 67.9,69.5 66.4,70.4 
                                                                         67.3,69 64.8,68.4 67.3,67.8 66.7,66.5 68,67.3 68.4,64.5 69,67.4 70.5,66.4	"/>
                                                                <path class="logo-upper" fill="#FFFFFF" d="M92.1,74.3H77.4c0.5-0.5,1-0.9,1.4-1.4h13.3V74.3L92.1,74.3z M76.4,74.3h-1.5c0,0,0.2-0.2,0.3-0.3
                                                                      c3.7-4.3,1.8-7.6-0.8-10c-0.9-0.8-2-1.6-2.9-2.3c-1.2-0.9-2.3-1.6-2.4-2.1l-0.5-2l-0.5,2c-0.1,0.5-1.1,1.2-2.4,2.1
                                                                      c-0.9,0.7-2,1.4-2.9,2.3c-2.7,2.5-4.5,5.7-0.8,10c0.1,0.1,0.3,0.3,0.3,0.3h-1.5c0,0-0.2-0.2-0.3-0.3c-3.7-2.9-3.5-5.4-1.8-7.6
                                                                      c1-1.4,2.7-2.8,4.4-4.2c2.1-1.7,4.5-3.4,5.7-5.3l0,0l0,0c1.1,1.9,3.6,3.6,5.7,5.3c1.7,1.4,3.3,2.7,4.4,4.2
                                                                      c1.7,2.3,1.9,4.6-1.8,7.6C76.6,74.1,76.4,74.3,76.4,74.3L76.4,74.3z M44.7,74.3v-1.4h13.3c0.5,0.5,0.9,1,1.4,1.4H44.7L44.7,74.3z
                                                                      M52.4,62.3h0.9v2.6h-0.9V62.3L52.4,62.3z M54.3,62.3h0.9v2.6h-0.9V62.3L54.3,62.3z M56.2,62.3h0.9v2.6h-0.9V62.3L56.2,62.3z
                                                                      M58.1,62.3H59v1.9l-0.8,0.8H58L58.1,62.3L58.1,62.3z M59.9,62.3h0.9v0.1l-0.9,0.8V62.3L59.9,62.3z M76.9,62.3v0.9L76,62.4v-0.1
                                                                      H76.9L76.9,62.3z M60.7,54.8h15.5v6.3H74c-2-1.7-4.3-3.4-5.2-5.2l0,0l-0.4-0.8l-0.4,0.8l0,0c-0.8,1.8-3.2,3.5-5.2,5.2h-2.2V54.8
                                                                      L60.7,54.8z M77.9,62.3h0.9v2.6h-0.3l-0.8-0.8L77.9,62.3L77.9,62.3z M79.8,62.3h0.9v2.6h-0.9V62.3L79.8,62.3z M81.7,62.3h0.9v2.6
                                                                      h-0.9V62.3L81.7,62.3z M83.6,62.3h0.9v2.6h-0.9V62.3L83.6,62.3z M85.3,64.9v-3.6c0.6-0.1,0.9-0.7,0.9-1.2c0-0.7-0.6-1.2-1.2-1.2
                                                                      c-0.7,0-1.2,0.6-1.2,1.2c0,0.6,0.4,1,0.9,1.2v0.2h-6.8v-7h3.5l-7.2-3.1l-2.8-4.2l-2.9-4.3c0.7,0,1.2-0.6,1.2-1.2
                                                                      c0-0.7-0.6-1.2-1.2-1.2c-0.7,0-1.2,0.6-1.2,1.2c0,0.7,0.6,1.2,1.2,1.2l-2.9,4.3l-2.8,4.2l-7.2,3.1H59v7h-6.8v-0.2
                                                                      c0.6-0.1,0.9-0.7,0.9-1.2c0-0.7-0.6-1.2-1.2-1.2s-1.2,0.6-1.2,1.2c0,0.6,0.4,1,0.9,1.2v3.6L43.8,72v3H46v6.2h1.2V75
                                                                      c5.6,0,11.1,0,16.6,0c-0.8-0.9-2.5-2.4-3-4.6c-0.6-2,0.3-3.9,2.5-5.9c0.9-0.8,1.9-1.5,2.8-2.2h0.1c1.1-0.8,1.9-1.3,2.3-1.8
                                                                      c0.5,0.5,1.1,1,2.3,1.8h0.1c0.8,0.7,1.9,1.3,2.8,2.2c2.2,2,3,3.9,2.5,5.9c-0.7,2.3-2.2,3.6-3,4.6c5.6,0,11.1,0,16.6,0v6.2h1.2V75
                                                                      h2.2v-3L85.3,64.9L85.3,64.9z"/>
                                                                </g>

                                                                <g class="logo-text-bottom">
                                                                <path fill="#FFFFFF" d="M41.2,123.4l0-1.8h-4l0,1.8l-1.5,0v-3.2h0.9c0.5-1.6,0.5-2.9,0.5-4.9v-3.6h4.6v8.5h1v3.2H41.2z M40.1,120.2
                                                                      V113h-1.3v2.5c0,2.4-0.1,3.4-0.5,4.6H40.1z"/>
                                                                <path fill="#FFFFFF" d="M48.1,119.4c0,0.6,0,1.2-0.7,1.7c-0.6,0.5-1.3,0.6-1.8,0.6c-0.5,0-1.2-0.1-1.8-0.6
                                                                      c-0.6-0.6-0.7-1.2-0.7-1.7v-5.5c0-0.6,0-1.2,0.7-1.7c0.6-0.5,1.3-0.6,1.8-0.6c0.5,0,1.2,0.1,1.8,0.6c0.6,0.6,0.7,1.2,0.7,1.7V119.4
                                                                      z M44.8,119.3c0,0.2,0,0.5,0.2,0.7c0.2,0.3,0.5,0.3,0.7,0.3c0.2,0,0.5,0,0.7-0.3c0.1-0.2,0.2-0.5,0.2-0.7v-5.4c0-0.2,0-0.5-0.2-0.7
                                                                      c-0.2-0.3-0.5-0.3-0.7-0.3c-0.2,0-0.5,0-0.7,0.3c-0.1,0.2-0.2,0.5-0.2,0.7V119.3z"/>
                                                                <path fill="#FFFFFF" d="M51.8,121.5l-1.2-7.4h-0.1l0.1,1.3v6.1H49v-9.9h2.5l0.9,6.4h0.1l0.9-6.4H56v9.9h-1.6v-6.1l0.1-1.3h-0.1
                                                                      l-1.2,7.4H51.8z"/>
                                                                <path fill="#FFFFFF" d="M57,123.4l0.7-1.9H57v-1.7h1.5v1.8l-0.9,1.7H57z"/>
                                                                <path fill="#FFFFFF" d="M62.7,121.5v-9.9h1.6v3.8h0.5c0.3,0,0.5-0.1,0.7-1l0.3-1.7c0.1-0.5,0.4-0.8,0.6-0.9c0.3-0.2,0.7-0.2,1-0.2
                                                                      h0.5v1.4h-0.3c-0.4,0-0.4,0.4-0.5,0.5l-0.3,1.7c-0.1,0.4-0.2,0.8-0.5,1.1l1.6,5h-1.6l-1.4-4.7h-0.6v4.7H62.7z"/>
                                                                <path fill="#FFFFFF" d="M73.4,119.4c0,0.6,0,1.2-0.7,1.7c-0.6,0.5-1.3,0.6-1.8,0.6c-0.5,0-1.2-0.1-1.8-0.6
                                                                      c-0.6-0.6-0.7-1.2-0.7-1.7v-5.5c0-0.6,0-1.2,0.7-1.7c0.6-0.5,1.3-0.6,1.8-0.6c0.5,0,1.2,0.1,1.8,0.6c0.6,0.6,0.7,1.2,0.7,1.7V119.4
                                                                      z M70.1,119.3c0,0.2,0,0.5,0.2,0.7c0.2,0.3,0.5,0.3,0.7,0.3c0.2,0,0.5,0,0.7-0.3c0.1-0.2,0.2-0.5,0.2-0.7v-5.4c0-0.2,0-0.5-0.2-0.7
                                                                      c-0.2-0.3-0.5-0.3-0.7-0.3c-0.2,0-0.5,0-0.7,0.3c-0.1,0.2-0.2,0.5-0.2,0.7V119.3z"/>
                                                                <path fill="#FFFFFF" d="M75.5,121.5V113h-1.7v-1.4h5v1.4h-1.7v8.5H75.5z"/>
                                                                <path fill="#FFFFFF" d="M84.2,119.4c0,0.6,0,1.2-0.7,1.7c-0.6,0.5-1.3,0.6-1.8,0.6c-0.5,0-1.2-0.1-1.8-0.6
                                                                      c-0.6-0.6-0.7-1.2-0.7-1.7v-5.5c0-0.6,0-1.2,0.7-1.7c0.6-0.5,1.3-0.6,1.8-0.6c0.5,0,1.2,0.1,1.8,0.6c0.6,0.6,0.7,1.2,0.7,1.7V119.4
                                                                      z M80.9,119.3c0,0.2,0,0.5,0.2,0.7c0.2,0.3,0.5,0.3,0.7,0.3c0.2,0,0.5,0,0.7-0.3c0.1-0.2,0.2-0.5,0.2-0.7v-5.4c0-0.2,0-0.5-0.2-0.7
                                                                      c-0.2-0.3-0.5-0.3-0.7-0.3c-0.2,0-0.5,0-0.7,0.3c-0.1,0.2-0.2,0.5-0.2,0.7V119.3z"/>
                                                                <path fill="#FFFFFF" d="M85.1,121.5v-9.9h2.7c0.6,0,1.2,0.3,1.5,0.6c0.5,0.5,0.5,1.1,0.5,1.6v1.5c0,0.5,0,1.2-0.5,1.6
                                                                      c-0.3,0.3-0.7,0.5-1.4,0.5c-0.4,0-0.8,0-1.2-0.1v4.1H85.1z M87.6,116c0.2,0,0.4,0,0.6-0.3c0-0.1,0.1-0.2,0.1-0.7v-1.1
                                                                      c0-0.2,0-0.5-0.1-0.6c-0.2-0.2-0.5-0.2-0.6-0.2h-0.7v3H87.6z"/>
                                                                <path fill="#FFFFFF" d="M90.5,111.7h1.6v4.1h0.7c0.3,0,1,0,1.6,0.4c0.7,0.5,0.8,1.3,0.8,1.8v1.3c0,0.5,0,1.3-0.6,1.8
                                                                      c-0.2,0.2-0.7,0.5-1.4,0.5h-2.7V111.7z M92.1,120.2h0.8c0.2,0,0.4,0,0.5-0.1c0.2-0.2,0.2-0.5,0.2-0.7v-0.9c0-0.4,0-0.7-0.1-0.8
                                                                      c-0.2-0.5-0.6-0.5-0.9-0.5h-0.6V120.2z M95.8,111.7h1.6v9.9h-1.6V111.7z"/>
                                                                <path fill="#FFFFFF" d="M101.7,121.5v-4.9l0.1-0.7l-1.7,3.8v1.8h-1.6v-9.9h1.6v4.5l-0.1,0.8l1.7-3.8v-1.5h1.6v9.9H101.7z
                                                                      M102.7,109.4c0,0.8-0.5,1.3-0.7,1.4c-0.4,0.3-0.8,0.4-1.2,0.4c-0.5,0-0.9-0.1-1.2-0.4c-0.1-0.1-0.7-0.6-0.7-1.4h1.3
                                                                      c0,0.1,0,0.3,0.1,0.6c0.1,0.2,0.3,0.3,0.6,0.3c0.2,0,0.4-0.1,0.5-0.3c0.1-0.2,0.1-0.5,0.1-0.6H102.7z"/>
                                                                <path fill="#FFFFFF" d="M45.2,131.8v4.7h-1.6v-9.9h1.6v3.8h1.7v-3.8h1.6v9.9h-1.6v-4.7H45.2z"/>
                                                                <path fill="#FFFFFF" d="M49.1,135.1H50c0.3,0,0.6-0.1,0.9-0.4c0.4-0.5,0.2-0.9,0.1-1.2l-1.9-6.9h1.7l1.1,4.9l0.7-4.9h1.7l-1.6,8
                                                                      c-0.1,0.4-0.3,1.1-1,1.5c-0.5,0.3-0.9,0.3-1.3,0.3c-0.1,0-0.3,0-1.1,0V135.1z"/>
                                                                <path fill="#FFFFFF" d="M58,136.5v-4.7l-0.6,0l-1.4,4.7h-1.7l1.7-5.2c-0.3-0.3-0.5-0.6-0.5-0.9l-0.3-1.7c-0.1-0.3-0.1-0.6-0.4-0.6
                                                                      h-0.2v-1.4h0.7c0.5,0,1.1,0,1.3,1.2l0.4,1.9c0.1,0.7,0.5,0.7,0.7,0.7l0.4,0v-3.8h1.6v3.8h0.4c0.5,0,0.6-0.4,0.7-0.7l0.4-1.9
                                                                      c0.2-1.2,0.9-1.2,1.3-1.2h0.7v1.4h-0.2c-0.3,0-0.4,0.2-0.4,0.6l-0.3,1.7c-0.1,0.4-0.2,0.7-0.5,0.9l1.6,5.2h-1.7l-1.4-4.7l-0.6,0
                                                                      v4.7H58z"/>
                                                                <path fill="#FFFFFF" d="M63.9,126.6H68v1.4h-2.5v2.4h1.9v1.4h-1.9v3.4h2.7v1.4h-4.3V126.6z"/>
                                                                <path fill="#FFFFFF" d="M70.5,131.8v4.7h-1.6v-9.9h1.6v3.8h1.7v-3.8h1.6v9.9h-1.6v-4.7H70.5z"/>
                                                                <path fill="#FFFFFF" d="M80.8,136.5l-1.2-7.4h-0.1l0.1,1.3v6.1H78v-9.9h2.5l0.9,6.4h0.1l0.9-6.4H85v9.9h-1.6v-6.1l0.1-1.3h-0.1
                                                                      l-1.2,7.4H80.8z"/>
                                                                <path fill="#FFFFFF" d="M87.6,131.8v4.7H86v-9.9h1.6v3.8h1.7v-3.8h1.6v9.9h-1.6v-4.7H87.6z"/>
                                                                <path fill="#FFFFFF" d="M91.9,126.6H96v1.4h-2.5v2.4h1.9v1.4h-1.9v3.4h2.7v1.4h-4.3V126.6z"/>
                                                                </g>
                                                                </svg>
                                                            </a>
                                                        </div>

                                                        <div class="center">
                                                            <div class="visible-xs text-center">
                                                                <a href="#" class="phone">+7 (495) <span id="telMain">721-18-00</span></a>
                                                                <a href="#" class="modal-call" data-target="#call" data-toggle="modal">обратный звонок</a>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                            <span>
                                                                <span>Меню</span>
                                                            </span>
                                                            <span>
                                                                <span class="sr-only">Toggle navigation</span>
                                                                <span class="icon-bar"></span>
                                                                <span class="icon-bar"></span>
                                                                <span class="icon-bar"></span>
                                                            </span>
                                                        </button>
                                                    </div>

                                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                        <?php
                                                        $APPLICATION->IncludeComponent(
                                                                "bitrix:menu", "mega_menu", array(
                                                            "COMPONENT_TEMPLATE" => "mega_menu",
                                                            "ROOT_MENU_TYPE" => "top",
                                                            "MENU_CACHE_TYPE" => "Y",
                                                            "MENU_CACHE_TIME" => "3600",
                                                            "MENU_CACHE_USE_GROUPS" => "Y",
                                                            "MENU_CACHE_GET_VARS" => array(
                                                            ),
                                                            "MAX_LEVEL" => "2",
                                                            "CHILD_MENU_TYPE" => "left",
                                                            "USE_EXT" => "N",
                                                            "DELAY" => "N",
                                                            "ALLOW_MULTI_SELECT" => "N"
                                                                ), false
                                                        );
                                                        ?>
                                                        <?php
                                                        $APPLICATION->IncludeComponent(
                                                                "bitrix:menu", "mega_menu_mobile", array(
                                                            "COMPONENT_TEMPLATE" => "mega_menu_mobile",
                                                            "ROOT_MENU_TYPE" => "top",
                                                            "MENU_CACHE_TYPE" => "Y",
                                                            "MENU_CACHE_TIME" => "3600",
                                                            "MENU_CACHE_USE_GROUPS" => "Y",
                                                            "MENU_CACHE_GET_VARS" => array(
                                                            ),
                                                            "MAX_LEVEL" => "2",
                                                            "CHILD_MENU_TYPE" => "left",
                                                            "USE_EXT" => "N",
                                                            "DELAY" => "N",
                                                            "ALLOW_MULTI_SELECT" => "N"
                                                                ), false
                                                        );
                                                        ?>
                                                    </div><!-- /.navbar-collapse -->
                                                </div><!-- /.container-fluid -->
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </section>
                        <?php if ($APPLICATION->GetDirProperty("SLIDER") == 'Y'): ?>    
                            <section class="content content-back-side" data-parallax="up" data-opacity="true">
                                <div class="container-fluid reset-padding">
                                    <div class="row reset-margin">
                                        <div class="col-xs-12 col-md-12 col-sm-12 reset-padding">
                                            <div class="back-img" style="background-image: url('//terem-pro.ru.opt-images.1c-bitrix-cdn.ru/bitrix/templates/.default/assets/img/bg.jpg?1450443398773185');">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php if ($APPLICATION->GetDirProperty("BREADCRUMBS") == 'Y'): ?>    
                            <section class="content" data-item="push-left">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 col-sm-12">
                                            <div class="top-bar-push-left my-margin-first-block">
                                                <div class="offset"></div>
                                                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "template1", Array(

                                                ),
                                                false
                                                );?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        <?php endif; ?>