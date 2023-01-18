@extends('layouts.website')

@section('title','Contact US')

@section('content')

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Drop Us A Note</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form start -->
<section class="contact-form">
    <div class="container">
        <form class="row" id="contact-form">
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="form-group">
                        <input name="user_name" type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input name="user_email" type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input name="user_subject" type="text" class="form-control" placeholder="Subject">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="form-group-2">
                        <textarea name="user_message" class="form-control" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit">Send Message</button>
                </div>
            </div>
            <div class="error" id="error">Sorry Msg dose not sent</div>
            <div class="success" id="success">Message Sent</div>
        </form>
        <div class="contact-box row">
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <h2>Stop By For A visit</h2>
                    <ul class="address-block">
                        <li>
                            <i class="ion-ios-location-outline"></i>North Main Street,Brooklyn Australia
                        </li>
                        <li>
                            <i class="ion-ios-email-outline"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class="ion-ios-telephone-outline"></i>Phone:+88 01672 506 744
                        </li>
                    </ul>
                    <ul class="social-icons">
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-googleplus-outline"></i></a>
                        </li>
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-linkedin-outline"></i></a>
                        </li>
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-pinterest-outline"></i></a>
                        </li>
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-dribbble-outline"></i></a>
                        </li>
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-twitter-outline"></i></a>
                        </li>
                        <li>
                            <a href="http://www.themefisher.com"><i class="ion-social-facebook-outline"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="block">
                    <div class="google-map">
                        <div class="map" id="map_canvas" data-latitude="51.5223477" data-longitude="-0.1622023"
                             data-marker="images/marker.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
