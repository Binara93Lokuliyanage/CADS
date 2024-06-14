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
                    <img src="{{ asset('images/dr-clarke.png') }}">
                </div>
                <h3 class = "text-center">Dr. Clifton R. Clarke<br>(PhD)</h3>
                <p class = "text-center" style = "margin-top: -15px">African Descent Studies and theology<br>
                </p>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/wayne-solomon.jpg') }}">
                </div>
                <h3 class = "text-center">Dr. Wayne C. Solomon<br>(BA, MA, DMin)</h3>
                <p class = "text-center" style = "margin-top: -15px">Practical Theology and Sociology<br>
                Research: African Descent Studies and Urban Ministry Education</p>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/arlene-hall.jpg') }}">
                </div>
                <h3 class = "text-center">Dr. Arlene O. Hall<br>(MA, MDiv, DMin)</h3>
                <p class = "text-center" style = "margin-top: -15px">Old Testament Studies and Theology</p>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/hugh-bair.png') }}">
                </div>
                <h3 class = "text-center">Dr. Hugh Bair<br>(MDiv, DMin, PhD)</h3>
                <p class = "text-center" style = "margin-top: -15px">Pastoral Care and Counseling<br>Theology</p>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/marcia-clarke.jpeg') }}">
                </div>
                <h3 class = "text-center">Dr. Marcia Clarke<br>(BRd, MEd, MA, PhD)</h3>
                <p class = "text-center" style = "margin-top: -15px">Practical Theology, Pentecostal Studies</p>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/william-turner.jpeg') }}">
                </div>
                <h3 class = "text-center">Dr. William Turner Jr. <br>(BA, ThM, PhD)</h3>
                <p class = "text-center" style = "margin-top: -15px">Practical Theology, Education and Africana Studies</p>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/kent-shaw.jpeg') }}">
                </div>
                <h3 class = "text-center">Dr. Kent Michael Shaw <br> (I, B.S, M.A, Ph.D)</h3>
                <p class = "text-center" style = "margin-top: -15px">
                    Missiology and Practical Theology<br>
                    African American and African Missions Theology<br>
                    African American Homiletics
                </p>
            </div>
            <div class = "team-list-item">
                <div class = "team-list-item__image-wrapper">
                    <img src="{{ asset('images/antipas-harris.jpeg') }}">
                </div>
                <h3 class = "text-center">Dr. Antipas L. Harris <br> (PhD, DMin, STM, MDIV, BA)</h3>
                <p class = "text-center" style = "margin-top: -15px">
                    Practical Theology<br>
                    Black Church Studies<br>
                    Pentecostalism
                </p>
            </div>
            
            
        </div>
            

    </div>
</section>

<section class = "divider-image-wrapper">
    <img src="{{ asset('images/divider-2.png') }}">
</section>

@include('front.components.testimonials')

@endsection