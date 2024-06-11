@extends('front.layouts.app')

@section('content')
<section class = "page-hero-banner">
    <img src="{{ asset('images/advisory-hero.png') }}">
</section>

<section class = "section-padding-top section-padding-bottom section-with-bg-image ">
    <img src="{{ asset('images/bg.png') }}" class = "bg-image">
    <div class = "container container-with-bg-image">
        <div class = "heading-wrapper text-center">
            <h1 class = "main-heading text-primary">
                ADVISORY COUNCIL
            </h1>

        </div>
        <p class="text-center max-width">
            CADS is guided and supported by an Advisory Council. <br>
The present Advisory Council
are:
        </p>

        <div class = "team-list-wrapper">
            <div class = "team-list-item">
                <h3>Dr. Raymond Burch Jr.</h3>
            </div>
            <div class = "team-list-item">
                <h3>Dr. James McIntyre</h3>
            </div>
            <div class = "team-list-item">
                <h3>Bishop Marc-Elie Morriset</h3>
            </div>
            <div class = "team-list-item">
                <h3>Dr. Mark Williams</h3>
            </div>
            <div class = "team-list-item">
                <h3>Dr. Raymond Burch</h3>
            </div>
            
            <div class = "team-list-item">
                <h3>Bishop William A Lee</h3>
            </div>
            <div class = "team-list-item">
                <h3>Dr. Xanobia Poitier</h3>
            </div>
            <div class = "team-list-item">
                <h3>Bishop Steve Smith</h3>
            </div>
            <div class = "team-list-item">
                <h3>Bishop Doyle Roberts</h3>
            </div>
            <div class = "team-list-item">
                <h3>Bishop Doyle Scott</h3>
            </div>

            <div class = "team-list-item">
                <h3>Bishop Huge Bair</h3>
            </div>
            <div class = "team-list-item">
                <h3>Dr. Kenneth Hill</h3>
            </div>
            <div class = "team-list-item">
                <h3>Bishop Lennox Walker</h3>
            </div>
            <div class = "team-list-item">
                <h3>Dr. Hugh Nelson</h3>
            </div>
            <div class = "team-list-item">
                <h3>Bishop William Lee</h3>
            </div>
        </div>

    </div>
</section>

<section class = "section-padding-top section-padding-bottom bg-off-white">
    <div class = "container">
        <div class = "heading-wrapper text-center">
            <h1 class = "main-heading text-primary">
                PTS Faculty Liaisons
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