@extends('layouts.user')
<!-- HEADER START-->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text">
                        <h1 style="text-align:left">Kontak Kami</h1>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</header>
<!-- HEADER END -->

@section('content')
<br>
<div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558851650418!2d107.66179861431732!3d-6.94320606989811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs%20-%20Konsultan%20Digital%20Marketing%20%2FPengembangan%20Website%2FIOS!5e0!3m2!1sid!2sid!4v1667982147329!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br><br>
</div>
<!-- Contact -->
<div class="container" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Kontak Kami</h2>
                    <p>You can stop by our office for a cup of coffee and just use the contact form below for any questions and inquiries</p> 
                    <br><br><br><br><br><br>
                    <h3>Tropisianimal On Social Media</h3>
                    <span class="fa-stack">
                    <a href="https://twitter.com/">
                        <span class="hexagon"></span>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://www.instagram.com/">
                        <span class="hexagon"></span>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
                </div> 
            </div> 
            <div class="col-lg-6">
                <!-- Contact Form -->
                <form action="{{ route('contact.store') }}" method="post" class="container">
                @csrf
                    <div class="form-group">
                        <input type="text" class="form-control-input @error('nama') is-invalid @enderror" name="nama" id="nama">
                        <label class="label-control" for="nama">Name</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input @error('email') is-invalid @enderror" name="email" id="email">
                        <label class="label-control" for="email">Email</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea @error('pesan') is-invalid @enderror" name="pesan" id="pesan"></textarea>
                        <label class="label-control" for="pesan">Your message</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                    </div>
                </form>
                <!-- End Contact Form -->
            </div> 
        </div> 
    </div> 
</div> <br><br><br>
<!-- end of contact -->
@endsection