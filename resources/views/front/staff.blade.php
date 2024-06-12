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

        <div class = "team-list-wrapper" style="display: flex; justify-content: center">
            <div class = "team-list-item">
                
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/dr-clarke.png') }}">
                </div>
                <div class = "text-center">
                    <h3>Executive Director</h3>
                    <p>Executive Director</p>

                </div>
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
                    <img src="{{ asset('images/wayne-solomon.jpg') }}">
                </div>
                <h3>Dr. Wayne Solomon</h3>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/arlene-hall.jpg') }}">
                </div>
                <h3>Dr. Arlene Hall</h3>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/hugh-bair.png') }}">
                </div>
                <h3>Dr. Hugh Bair</h3>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/marcia-clarke.jpeg') }}">
                </div>
                <h3>Dr. Marcia Clarke</h3>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/william-turner.jpeg') }}">
                </div>
                <h3>Dr. William Turner</h3>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/kent-shaw.jpeg') }}">
                </div>
                <h3>Dr. Kent Shaw</h3>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/antipas-harris.jpeg') }}">
                </div>
                <h3>Dr. Antipas L. Harris</h3>
            </div>
            
            
        </div>
            

    </div>
</section>

<section class = "divider-image-wrapper">
    <img src="{{ asset('images/divider-2.png') }}">
</section>

@include('front.components.testimonials')

@endsection