@extends('front.layouts.app')

@section('content')

<section class = "home-hero-banner">
    <img src="{{ asset('images/home-banner.webp') }}" >
    <div class = "overlay-div">
        <div class = "container home-banner__text-wrapper">
            <h3 class = "sub-heading">Welcome to<h3><h1 class = "main-heading">the Center of <br>African Descent Studies</h1>
        </div>
    </div>
</section>

    <section class = "section-padding-top section-padding-bottom section-with-bg-image">
        <img src="{{ asset('images/bg.png') }}" class = "bg-image">
        <div class = "container two-block-container container-with-bg-image">
            <div class = "image-block">
                <div class = "image-block__img-wrapper">
                    <img src="{{ asset('images/dr-clarke.png') }}" alt="Director Image">
                </div>
                <div class = "image-block__text-wrapper">
                    <h3 class = "text-secondary">
                        Dr. Clifton R. Clarke
                    </h3>
                    <p>Executive Director,<br>
                        Center for African Descent Studies </p>
                </div>
            </div>
            <div class = "text-block">
                <div class = "heading-wrapper">
                    <h3 class = "sub-heading text-secondary">
                        Welcome From
                    </h3>
                    <h1 class = "main-heading text-primary">
                        The Executive Director
                    </h1>
                </div>
                <p>
                    Welcome to the Center for African Descent Studies (CADS) at the Pentecostal Theological
                    Seminary. We extend a warm welcome to all seekers of knowledge, empowerment, and spiritual
                    growth within the rich tapestry of African descent. CADS is not merely a digital platform; rather, it
                    serves as a dynamic hub offering courses, seminars, workshops, and more.

                </p>

                <p>
                    At CADS, we proudly stand as a beacon of academic excellence, dedicated to equipping and
                    empowering Holy-Spirit-filled Christian leaders for impactful ministry in today’s world. Our vision is
                    global, our mission clear: to foster success in ministry among African, African American, Afro-
                    Caribbean, and all peoples of African descent.
                </p>
                <p>
                    We are committed to fostering a Black Pentecostal or Black Renewal academic engagement of our
                    Pentecostal faith. However, CADS is not exclusive; it is open to all individuals who seek to
                    effectively lead and empower people of African Descent.

                </p>
                <p>
                    Through a blend of academic rigor, leadership empowerment, and Spirit-filled life formation, we
                    endeavor to cultivate leaders who will shape communities and nations. Within the halls of CADS,
                    you will discover a wealth of resources, programs, and initiatives designed to deepen your
                    understanding of African heritage, culture, and institutions.

                </p>
                <p>
                    Whether you are an undergraduate, graduate, or non-degree seeking student, CADS offers a
                    platform for growth, discovery, and engagement. Guided by our core values of Academic
                    Excellence, Diversity, Leadership, Community Engagement, Holy Spirit Guidance, Collaboration,
                    Innovation, and Courage, we invite you to join us on a journey of learning, collaboration, and
                    transformation.


                </p>
                <p>
                    Welcome to CADS, where knowledge meets empowerment, and together, we strive to make a
                    difference in the world.


                </p>
            </div>
        </div>
    
    </section>

    <section class = "section-padding-top section-padding-bottom bg-off-white">
        <div class = "container">
            <div class = "heading-wrapper text-center">
                <h3 class = "sub-heading text-secondary">
                    About us
                </h3>
                <h1 class = "main-heading text-primary">
                    Discover Our Story
                </h1>
                
            </div>
            <p class="text-center max-width">
                The courses, programs, and initiatives of the Center for African Descent Studies (CADS) are designed to equip, educate, and empower undergraduate, graduate, and non-degree-seeking students to increase their knowledge and appreciation of people of African descent, cultures, and institutions in a local, national,and global context.
            </p>
            <div class = "btn-wrapper">
                <a href = "/about" class="button ">
                    READ MORE
                </a>
            </div>
            
        </div>
    </section>

    <section class = "section-padding-top section-padding-bottom section-with-bg-image">
        <img src="{{ asset('images/bg.png') }}" class = "bg-image">
        <div class = "container container-with-bg-image ">
             <div class = "heading-wrapper text-center">
                <h3 class = "sub-heading text-secondary">
                    OUR PROGRAMS
                </h3>
                <h1 class = "main-heading text-primary">
                    Explore Our Offerings
                </h1>
                
            </div>
            <p class="text-center max-width">
                Explore our offerings and become a part of a vibrant community committed to cultural awareness, historical insight, and social progress. Discover how you can contribute to and benefit from our programs today.
            </p>
            <div class = "courses-list-wrapper">
                <a href="/programs" class = "courses-list-item">
                    <div class = "courses-list-item__img-wrapper">
                        <img src="{{ asset('images/c1.png') }}">
                    </div>
                    <div class = "courses-list-item__text-wrapper">
                        <h3 class = "text-primary">
                            Certificate in Black Renewal Studies program
                        </h3>
                        <p>Certificate in Black Renewal Studies program, designed to provide comprehensive education and training in the rich heritage and practices of Black Renewal Christianity.</p>
                    </div>
                </a>
            </div>
            
        </div>
    </section>

    

    @include('front.components.testimonials')


    
@endsection
