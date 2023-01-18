@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center mb-4" id="banner">
        <div class="banner-text">
            <h2><small>collection du printemps</small></h2>
            <h1 class="pb-4">titre du drop</h1>
            <h1><a href="#" id="link">Saisie le</a></h1>
        </div>
    </div>
    <div class="container text-center">
        <div class="border w-50 mx-auto">
            <h1 class="py-4" style="font-weigh:bold;">Decouvrez</h1>
            <button class="btn btn-lg btn-danger p-3 my-5">play button</button>
        </div>
    </div>
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('footer-content')
    <div class="bg-dark text-light" class="footer">
        <div class="row">
            <div class="col-md-2 logo">
            </div>
            <div class="col-md-2 pages-links">
                <h1>Pages</h1>
                <ul class="nav flex-column footer-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">Contactez nous</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 vl"></div>
            <div class="col-md-2">
                <h1>Boutique</h1>
                <div class="shop-link">
                    <ul class="nav flex-column footer-nav">
                        <li class="nav-item">
                            <a href="{{ route('shop') }}" class="nav-link">Collection</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 vl"></div>
            <div class="col-md-2">
                <h1>Suivez nous</h1>
                <ul class="nav flex-column footer-nav">
                    <li class="nav-item">
                        <a href="https://instagram.com/lambanobrand?igshid=YmMyMTA2M2Y=" class="nav-link">Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.tiktok.com/@lambanobrand?_t=8Z8nItdKA3q&_r=1" class="nav-link">Tiktok</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="divider"></div>
        <div class="copyright text-center py-3">
            <span>© 2023 Lambano. All rights reserved.</span>
        </div>
    </div>
@endsection
