@extends('layouts.main')

@section('title', 'Kontak')

@section('content')
<!-- Contact Start -->
<div class="contact wow fadeInUp">
    <div class="container">
        <div class="section-header text-center">
            <p>Hubungi Kami</p>
            <h2>Untuk Pertanyaan Apapun</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="flaticon-address"></i>
                        <div class="contact-text">
                            <h2>Location</h2>
                            <p>Jl. Letkol Iskandar No. 451E, Palembang 30124, Indonesia</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="flaticon-call"></i>
                        <div class="contact-text">
                            <h2>Phone</h2>
                            <p>0711 - 364574 & 0711 - 311405</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="flaticon-send-mail"></i>
                        <div class="contact-text">
                            <h2>Email</h2>
                            <p>ptlematang@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <div id=""></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email"
                                required="required"
                                data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
