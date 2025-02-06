@extends('layouts.app')

@section('title', 'contact with  ageisegy')

@section('content')
<div class="social-media-page">
    <div class="container">
        <h1 class="text-center mb-5">CONTACT US</h1>
        <div class="social-grid">
            <div class="social-item instagram">
                <i class="fab fa-instagram"></i>
                <h3>INSTAGRAM</h3>
                <p>follow us on instagram to get the latest photos and offers</p>
                <a href="https://www.instagram.com/ageisegy?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="btn btn-social">ageisegy</a>
            </div>
            
            <div class="social-item tiktok">
                <i class="fab fa-tiktok"></i>
                <h3>TIKTOK</h3>
                <p>watch our videos on tiktok</p>
                <a href="https://www.tiktok.com/@abdelrhmangoondya30?is_from_webapp=1&sender_device=pc" target="_blank" class="btn btn-social">abdelrhmangoondya98</a>
            </div>
           
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .social-media-page {
        padding: 50px 0;
        background-color: #f8f9fa;
    }

    .social-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .social-item {
        background-color: #fff;
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .social-item:hover {
        transform: translateY(-5px);
    }

    .social-item i {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .social-item h3 {
        margin-bottom: 15px;
    }

    .social-item p {
        margin-bottom: 20px;
        color: #666;
    }

    .btn-social {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 25px;
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .instagram {
        background-color: #fcfcfc;
        color: #C13584;
    }
    .instagram .btn-social {
        background-color: #C13584;
    }

    .whatsapp {
        background-color: #fcfcfc;
        color: #25D366;
    }
    .whatsapp .btn-social {
        background-color: #25D366;
    }

    .tiktok {
        background-color: #fcfcfc;
        color: #000000;
    }
    .tiktok .btn-social {
        background-color: #000000;
    }

    .email {
        background-color: #fcfcfc;
        color: #D44638;
    }
    .email .btn-social {
        background-color: #D44638;
    }

    .btn-social:hover {
        opacity: 0.9;
        transform: translateY(-2px);
    }
</style>
@endsection
