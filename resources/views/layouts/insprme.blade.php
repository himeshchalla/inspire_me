<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        
    <title>{{ config('app.name', 'InsprMe') }} :: @yield('title')</title>
    <!------ Globle css --------------->
    <link href="{{ asset('css/globle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vue-form-wizard.min.css') }}" rel="stylesheet" type="text/css">
    <!------ Fonts css --------------->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet" type="text/css">
    
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
    </head>
    
    <body>
        <div id="sitemain">
        <!---- Header Start ----->
        @include('layouts.header')
        <!---- Header End ----->
        
        <!---- Section Start ----->
        @yield('content')
        <!---- Section End ----->
        
        <!---- Footer Start ----->
        @include('layouts.footer')
        <!---- Footer End ----->
        </div>
    </body>
</html>