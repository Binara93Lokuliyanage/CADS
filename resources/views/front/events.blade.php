@extends('front.layouts.app')

@section('content')
<section class = "page-hero-banner">
    <img src="{{ asset('images/advisory-hero.png') }}">
</section>

<section class = "section-padding-top section-padding-bottom section-with-bg-image">
    <img src="{{ asset('images/bg.png') }}" class = "bg-image">
    <div class = "container two-block-container container-with-bg-image">
        <div class = "image-block">
            <div class = "image-block__img-wrapper">
                <img src="{{ asset('images/img-1.png') }}" alt="Director Image">
            </div>
        </div>
        <div class = "text-block">
            <div class = "heading-wrapper">
                <h3 class = "text-primary uppercase">
                    Black History Month Chapel Services
                </h3>
            </div>
            <p>
                A series of special chapel services held throughout February to honor and celebrate the achievements and contributions of African Americans in history, featuring guest speakers, music, and reflections.
            </p>

           
        </div>
    </div>

    <div class = "container margin-top two-block-container container-with-bg-image">
        <div class = "image-block">
            <div class = "image-block__img-wrapper">
                <img src="{{ asset('images/img-2.png') }}" alt="Director Image">
            </div>
        </div>
        <div class = "text-block">
            <div class = "heading-wrapper">
                <h3 class = "text-primary uppercase">
                    Edmond and Rebecca Barr Annual Lectureship
                </h3>
            </div>
            <p>
                An annual lecture series established to honor Edmond and Rebecca Barr, focusing on topics related to social justice, African American history, and contemporary issues affecting the African diaspora, featuring renowned scholars and activists.
            </p>

           
        </div>
    </div>

    <div class = "container margin-top two-block-container container-with-bg-image">
        <div class = "image-block">
            <div class = "image-block__img-wrapper">
                <img src="{{ asset('images/img-3.png') }}" alt="Director Image">
            </div>
        </div>
        <div class = "text-block">
            <div class = "heading-wrapper">
                <h3 class = "text-primary uppercase">
                    Annual Awards and Fundraising Banquet
                </h3>
            </div>
            <p>
                A prestigious event that celebrates the accomplishments of outstanding individuals and organizations within the community, while raising funds to support scholarships, programs, and initiatives aimed at empowering people of African descent.
            </p>

           
        </div>
    </div>

    <div class = "container margin-top two-block-container container-with-bg-image">
        <div class = "image-block">
            <div class = "image-block__img-wrapper">
                <img src="{{ asset('images/img-5.png') }}" alt="Director Image">
            </div>
        </div>
        <div class = "text-block">
            <div class = "heading-wrapper">
                <h3 class = "text-primary uppercase">
                    Student of African Descent Support and Mentorship Program
                </h3>
            </div>
            <p>
                A dedicated program providing support, guidance, and mentorship to students of African descent, aiming to enhance their academic success, personal growth, and professional development through a network of mentors and resources.
            </p>

           
        </div>
    </div>

    

</section>

{{-- <section class = "section-padding-top section-padding-bottom bg-off-white">
    <div class = "container">
        <div class = "heading-wrapper text-center">
            <h1 class = "main-heading text-primary">
                Upcoming events
            </h1>

        </div>
    </div>
    <div class = "container margin-top two-block-reverse-container container-with-bg-image">
            
        <div class = "text-block">
            <div class = "heading-wrapper">
                <h3 class = "text-primary uppercase">
                    Edmond and Rebecca Barr Annual Lectureship
                </h3>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                 nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                 in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                 nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                 sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

           
        </div>
        <div class = "image-block">
            <div class = "image-block__img-wrapper">
                <img src="{{ asset('images/img-3.png') }}" alt="Director Image">
            </div>
        </div>
    </div>
    <div class = "container margin-top two-block-reverse-container container-with-bg-image">
            
        <div class = "text-block">
            <div class = "heading-wrapper">
                <h3 class = "text-primary uppercase">
                    Edmond and Rebecca Barr Annual Lectureship
                </h3>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                 nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                 in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                 nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                 sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

           
        </div>
        <div class = "image-block">
            <div class = "image-block__img-wrapper">
                <img src="{{ asset('images/img-3.png') }}" alt="Director Image">
            </div>
        </div>
    </div>
</section> --}}

<section class = "divider-image-wrapper">
    <img src="{{ asset('images/divider-2.png') }}">
</section>

@include('front.components.testimonials')

@endsection