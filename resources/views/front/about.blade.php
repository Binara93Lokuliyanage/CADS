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
            <p class="text-center max-width">
                At CADS, these core values are not just principles; they are the foundation of everything we do.
                Our commitment to academic excellence drives our rigorous curriculum and ensures that our
                students receive a world-class education. We celebrate diversity and believe that embracing different
                perspectives enriches our learning community. Leadership is at the heart of our mission, as we
                empower our students to become influential leaders in their communities. Community engagement
                is vital to our ethos, as we believe in actively participating in and serving our local and global
                communities. Guided by the Holy Spirit, we seek to impart wisdom, discernment, and guidance to
                our students, enabling them to navigate their ministry paths with confidence. Collaboration fuels
                innovation, and together, we strive to pioneer new approaches and solutions to address the
                challenges facing African descent communities. Finally, courage is our driving force, empowering us
                to boldly pursue our mission and effect positive change in the world.
                Welcome to CADS, where academic excellence meets spiritual empowerment, and where together,
                we endeavor to make a meaningful impact in the lives of people of African descent around the
                globe.
            </p>

        </div>
    </section>
    
    <section class = "divider-image-wrapper">
        <img src="{{ asset('images/divider.png') }}">
    </section>

    @include('front.components.testimonials')
@endsection
