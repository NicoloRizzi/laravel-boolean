<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Boolean</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="main-header">
        <nav class="navbar">
        <a href="#" class="navbar-brand">LOGO BOOLEAN</a>
            <ul>
                <li><a 
                    @if (Request:: route()->getName() == 'static-page.home') class="active" @endif href="{{ route ('static-page.home') }}">home</a></li>
                <li><a href="">corso</a></li>
                <li><a @if (Request:: route()->getName() == 'student.index') class="active" @endif  href="{{ route ('student.index') }}">dopo il corso</a></li>
                <li><a href="">lezione gratuita</a></li>
                <li><a href="">assumi i nostri studenti</a></li>
                <li><a href="">candidati ora</a></li>
            </ul>
        </nav>
    </header>