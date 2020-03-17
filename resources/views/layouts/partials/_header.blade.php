<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <title>Boolean Careers</title>
</head>
{{-- @dd(Request::route()->getName()) --}}
<body>
    <div class="container">
        <nav class="navbar">
            <div class="logo">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="">
            </div>
            <ul>
                <li>
                <a class="{{(Request::route()->getName() == 'homepage.homepage') ? 'active' : ''}}" href="{{route('homepage.homepage')}}">HOME</a>
                </li>
                <li>
                    <a href="">CORSO</a>
                </li>
                <li>
                    <a class="{{(Request::route()->getName() == 'students.index') ? 'active' : ''}}" href="{{route('students.index')}}">DOPO CORSO</a>
                </li>
                <li>
                    <a href="">LEZIONE GRATUITA</a>
                </li>
                <li>
                    <button>
                        <a href="">CANDIDATI ORA</a>
                    </button>
                </li>
            </ul>
        </nav>