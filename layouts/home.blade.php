<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getTitle() }} - {{__('app.name')}}</title>
        <meta name="description" content="The Lavalite Content Management System">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{!!url('favicon.ico')!!}"/>       
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
        <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">

        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>

    <body>

        {!! Theme::partial('login') !!}
        {!! Theme::partial('header') !!}
        {!! Theme::content() !!}
        {!! Theme::partial('footer') !!}
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
