@extends('front.layouts.app')

@section('content')
<section class = "page-hero-banner">
    <img src="{{ asset('images/advisory-hero.png') }}">
</section>

<section class = "section-padding-top section-padding-bottom section-with-bg-image ">
    <img src="{{ asset('images/bg.png') }}" class = "bg-image">
    <div class = "container container-with-bg-image">
        <div class = "heading-wrapper text-center">
            <h3 class = "sub-heading text-secondary">
                Our STAFF
            </h3>
            <h1 class = "main-heading text-primary">
                The Visionaries Leading Us
            </h1>

        </div>

        <div class = "team-list-wrapper">
            <div class = "team-list-item">
                
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/member.png') }}">
                </div>
                <h3>Executive Director</h3>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/member.png') }}">
                </div>
                <h3>Administrative Assistant</h3>
            </div>
            <div class = "team-list-item">
                
            </div>
            
            
        </div>

    </div>
</section>

<section class = "section-padding-top section-padding-bottom bg-off-white">
    <div class = "container">
        <div class = "heading-wrapper text-center">
            <h1 class = "main-heading text-primary">
                FACULTY
            </h1>

        </div>
        <div class = "team-list-wrapper">
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/member.png') }}">
                </div>
                <h3>Dr. Raymond Burch Jr.</h3>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/member.png') }}">
                </div>
                <h3>Dr. Raymond Burch Jr.</h3>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/member.png') }}">
                </div>
                <h3>Dr. Raymond Burch Jr.</h3>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/member.png') }}">
                </div>
                <h3>Dr. Raymond Burch Jr.</h3>
            </div>
            
            
        </div>
            

    </div>
</section>

<section class = "divider-image-wrapper">
    <img src="{{ asset('images/divider-2.png') }}">
</section>

@include('front.components.testimonials')

@endsection