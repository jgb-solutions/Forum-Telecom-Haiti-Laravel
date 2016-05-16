<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ Config::get('site.name') }} - 
         @section('title')
            {{ Config::get('site.slogan') }}
         @show
     </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ config('site.description') }}">
    <meta name="author" content="Jean Gérard Bousiquot">

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@ForumTelecomHT" />
    <meta name="twitter:creator" content="@jgbneatdesign"/>

    <meta property="fb:admins" content="jeveuxblogger"/>
    <meta property="fb:app_id" content="112699365802983"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="{{ config('site.name') }}"/>

    <link rel="canonical" href="{{ config('site.url') }}"/>

    <meta property="og:url" content="{{ config('site.url') }}"/>
    <meta property="og:title" content="{{ Config::get('site.name') }} - {{ Config::get('site.slogan') }}"/>
    <meta property="og:description" content="{{ config('site.description') }}"/>
    <meta property="og:image" content="{{ config('site.url') }}/img/forum-telecom-haiti-logo.png"/>

    <!-- Custom CSS -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ng-app="forumTelecomHaiti">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=112699365802983";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>