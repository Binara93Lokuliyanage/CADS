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
                <img src="{{ asset('images/img-4.png') }}" alt="Director Image">
            </div>
        </div>
        <div class = "text-block">
            <div class = "heading-wrapper">
                <h3 class = "text-primary uppercase">
                    Certificate in Black Renewal Studies program
                </h3>
            </div>
            <p>
                Welcome to the Certificate in Black Renewal Studies program, designed to provide comprehensive education and training in the rich heritage and practices of Black Renewal Christianity. This certificate program is divided into two parts, offering students the flexibility to pursue their educational goals according to their interests and aspirations. 
            </p>
            <p>
                Students enrolled in Part One will complete a series of courses designed to provide a foundational understanding of Black Renewal theology, history, and praxis. These courses are specifically tailored to equip students with essential knowledge and skills relevant to Black Renewal Christianity.
            </p>
            <p>
                Upon completion of Part One, students who wish to further their studies may opt to continue towards the completion of the full Certificate Program. A successful completion of the full certificate program will provide the inroads to admission into PTS Master’s Degree programs (with the exception of the Clinical Counseling degree program).  
            </p>
            <p>
                The two-part curriculum of the CADS programs are as fullows: 
            </p>
            

</section>

<section class = "section-padding-top section-padding-bottom">
    <div class = "container two-block-container "  style = "border-bottom: 2px solid #DB0732; padding-bottom: 4rem;">
        <div>
            <h3 class = "text-primary uppercase">
                Part One: <br>Certificate Program
            </h3>
        </div>
        <div class = "course-content-wrapper">
            <h4 class = "text-primary">
                Fall Semester 01 | Session 01
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>History of the Christian Church in Black Renewal Perspective</li>
                    <li> Foundations for Pastoral Counseling in African Descent Communities</li>
            </ul>
            <h4 class = "text-primary margin-top">
                Fall Semester 01 | Session 02
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>Contextual Theology</li>
                    <li> Christian Ethics: A Pentecostal Approach to Social Action</li>
            </ul>
            <h4 class = "text-primary margin-top">
                Spring Semester 01 | Session 01
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>Introduction to Biblical Hermeneutics</li>
                    <li> Foundations for World Mission & Evangelism</li>
            </ul>
            <h4 class = "text-primary margin-top">
                Spring Semester 01 | Session 02
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>Ministry Formation in Black Pentecostal Churches</li>
                    <li> Roots of Pentecostal Spirituality: Black Pentecostalism</li>
            </ul>
            <h4 class = "text-primary margin-top">
                Summer Semester 01
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>Introduction to old Testament</li>
                    <li> Introduction to New Testament</li>
            </ul>
        </div>
    </div>
    <div class = "container two-block-container "  style = " padding-top: 4rem;">
        <div>
            <h3 class = "text-primary uppercase">
                Part Two: <br>Certificate Program (Bridge to Master's Degree)
            </h3>
        </div>
        <div class = "course-content-wrapper">
            <h4 class = "text-primary">
                Fall Semester 02 | Session 01
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>Applied Theology, Research & Writing</li>
                    <li> Preaching in the Black Renewal Tradition</li>
            </ul>
            <h4 class = "text-primary margin-top">
                Fall Semester 02 | Session 02
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>Introduction to Philosophy and Critical Thinking</li>
                    <li> Liturgy & Ecclesial Practices in Black Pentecostal Churches</li>
            </ul>
            <h4 class = "text-primary margin-top">
                Spring Semester 02 | Session 01
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>Fundraising, Budgeting & Financial Management</li>
                    <li> Church of God History and Polity: Black Pentecostal perspectives</li>
            </ul>
            <h4 class = "text-primary margin-top">
                Spring Semester 02 | Session 02
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>Behavioral Science</li>
                    <li> Pastoral & Educational Ministry to African Descent Immigrants in the United States</li>
            </ul>
            <h4 class = "text-primary margin-top">
                Summer Semester 02
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>Christian Education Strategies & Techniques</li>
                    <li> Wesleyan-Pentecostal Theology in Black Renewal Perspectives</li>
            </ul>
            <h4 class = "text-primary margin-top">
                Fall Semester 03 | Session 01
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>OT Book Study</li>
                    <li>NT Book Study</li>
            </ul>
            <h4 class = "text-primary margin-top">
                Fall Semester 03 | Session 02
            </h4>
            <p>
                (06 Credits)
            </p>
            <ul>
                <li>CERTIFICATE CAPSTONE: Ministry Practicum with Black Renewal Integration</li>
            </ul>
        </div>
    </div>

</section>

<section class = "divider-image-wrapper">
    <img src="{{ asset('images/divider-2.png') }}">
</section>

@include('front.components.testimonials')

@endsection