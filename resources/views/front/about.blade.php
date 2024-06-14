@extends('front.layouts.app')

@section('content')
    <section class = "page-hero-banner">
        <img src="{{ asset('images/about-hero.png') }}">
    </section>

    <section class = "section-padding-top section-padding-bottom section-with-bg-image ">
        <img src="{{ asset('images/bg.png') }}" class = "bg-image">
        <div class = "container vision-container container-with-bg-image">
            <div class = "vision-circle">
                <h2 class = "text-primary">
                    VISION
                </h2>
                <p>
                    CADS envisions itself as a global center
                    committed to equipping, empowering, and
                    educating Holy-Spirit-filled Christian
                    leaders to effectively minister among people
                    of African descent in today’s world.
                </p>
            </div>
            <div class = "vision-circle">
                <h2 class = "text-primary">
                    MISSION
                </h2>
                <p>
                    Our mission at CADS is to promote academic
                    excellence, leadership empowerment, and a
                    Spirit-filled life formation to foster success
                    in ministry among African, African American,
                    Afro-Caribbean, and all peoples of African descent.
                </p>
            </div>

        </div>
    </section>

    <section class = "section-padding-top section-padding-bottom bg-off-white">
        <div class = "container">
            <div class = "heading-wrapper text-center">
                <h1 class = "main-heading text-primary">
                    For Whom
                </h1>

            </div>
            <p class="text-center max-width">
                CADS caters to a diverse audience, offering courses, programs, and initiatives designed to equip,
                educate, and empower undergraduate, graduate, and non-degree seeking students. Our aim is to
                increase their knowledge and appreciation of people of African descent, cultures, and institutions in
                a local, national, and global context.
            </p>
            <div class = "heading-wrapper text-center">
                <h1 class = "main-heading text-primary">
                    CORE values
                </h1>

            </div>
            <div class = "values-wrapper">
                <div class = "value-item">
                    <div class = "value-item__img-wrapper">
                        <img src="{{ asset('images/heart-bullet.png') }}">
                    </div>
                    <div class = "value-item__text-wrapper">
                        Academic Excellence
                    </div>
                </div>
                <div class = "value-item">
                    <div class = "value-item__img-wrapper">
                        <img src="{{ asset('images/heart-bullet.png') }}">
                    </div>
                    <div class = "value-item__text-wrapper">
                        Diversity
                    </div>
                </div>
                <div class = "value-item">
                    <div class = "value-item__img-wrapper">
                        <img src="{{ asset('images/heart-bullet.png') }}">
                    </div>
                    <div class = "value-item__text-wrapper">
                        Leadership
                    </div>
                </div>
                <div class = "value-item">
                    <div class = "value-item__img-wrapper">
                        <img src="{{ asset('images/heart-bullet.png') }}">
                    </div>
                    <div class = "value-item__text-wrapper">
                        Community Engagement
                    </div>
                </div>
                <div class = "value-item">
                    <div class = "value-item__img-wrapper">
                        <img src="{{ asset('images/heart-bullet.png') }}">
                    </div>
                    <div class = "value-item__text-wrapper">
                        Holy Spirit Guidance
                    </div>
                </div>
                <div class = "value-item">
                    <div class = "value-item__img-wrapper">
                        <img src="{{ asset('images/heart-bullet.png') }}">
                    </div>
                    <div class = "value-item__text-wrapper">
                        Collaboration
                    </div>
                </div>
                <div class = "value-item">
                    <div class = "value-item__img-wrapper">
                        <img src="{{ asset('images/heart-bullet.png') }}">
                    </div>
                    <div class = "value-item__text-wrapper">
                        Innovation
                    </div>
                </div>
                <div class = "value-item">
                    <div class = "value-item__img-wrapper">
                        <img src="{{ asset('images/heart-bullet.png') }}">
                    </div>
                    <div class = "value-item__text-wrapper">
                        Courage
                    </div>
                </div>
            </div>

            <div class = "btn-wrapper">
                <div class="button " id = "read-more" style="cursor: pointer">
                    READ MORE
                <div>
            </div>
            

        </div>
    </section>
    
    <section class = "divider-image-wrapper">
        <img src="{{ asset('images/divider.png') }}">
    </section>

    @include('front.components.testimonials')
@endsection
