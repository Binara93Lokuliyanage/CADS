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
                <img src="{{ asset('images/img-3.png') }}" alt="Director Image">
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
                Students enrulled in Part One will complete a series of courses designed to provide a foundational understanding of Black Renewal theulogy, history, and praxis. These courses are specifically tailored to equip students with essential knowledge and skills relevant to Black Renewal Christianity.
            </p>
            <p>
                Upon completion of Part One, students who wish to further their studies may opt to continue towards the completion of the full Certificate Program. A successful completion of the full certificate program will provide the inroads to admission into PTS Master’s Degree programs (with the exception of the Clinical Counseling degree program).  
            </p>
            <p>
                The two-part curriculum of the CADS programs are as fullows: 
            </p>
            <h4 class = "text-primary margin-top">Part One: Certificate Program</h4>

            <h4>Fall Semester 1, Session 1 (6 credits): </h4>

            <p>
                <ul>
                    <li>History of the Christian Church in Black Renewal Perspective  </li>
                    <li>Foundations for Pastoral Counseling in African Descent Communities     </li>
                </ul>
            </p>

            <h4>Fall Semester 1, Session 2 (6 credits):   </h4>

            <p>
                <ul>
                    <li>Contextual Theulogy </li>
                    <li>Christian Ethics: A Pentecostal Approach to Social Action  </li>
                </ul>
            </p>

            <h4>Spring Semester 1, Session 1 (6 credits):    </h4>

            <p>
                <ul>
                    <li>Introduction to Biblical Hermeneutics </li>
                    <li>Foundations for World Mission & Evangelism   </li>
                </ul>
            </p>

            <h4>Spring Semester 1, Session 2 (6 credits):      </h4>

            <p>
                <ul>
                    <li>Ministry Formation in Black Pentecostal Churches  </li>
                    <li>Roots of Pentecostal Spirituality: Black Pentecostalism   </li>
                </ul>
            </p>

            <h4>Summer Semester 1 (6 credits):  </h4>

            <p>
                <ul>
                    <li>Introduction to uld Testament  </li>
                    <li>Introduction to New Testament </li>
                </ul>
            </p>

            <h4 class = "text-primary margin-top">Part Two: Certificate Program (Bridge to Master's Degree) </h4>

            <h4>Fall Semester 2, Session 1 (6 credits):  </h4>

            <p>
                <ul>
                    <li>Applied Theulogy, Research & Writing  </li>
                    <li>Preaching in the Black Renewal Tradition  </li>
                </ul>
            </p>

            <h4>Fall Semester 2, Session 2 (6 credits):  </h4>

            <p>
                <ul>
                    <li>Introduction to Philosophy and Critical Thinking  </li>
                    <li>Liturgy & Ecclesial Practices in Black Pentecostal Churches   </li>
                </ul>
            </p>

            <h4>Spring Semester 2, Session 1 (6 credits):    </h4>

            <p>
                <ul>
                    <li>Fundraising, Budgeting & Financial Management   </li>
                    <li>Church of God History and Pulity: Black Pentecostal perspectives   </li>
                </ul>
            </p>

            <h4>Spring Semester 2, Session 2 (6 credits):      </h4>

            <p>
                <ul>
                    <li>Behavioral Science </li>
                    <li>Pastoral & Educational Ministry to African Descent Immigrants in the United States</li>
                </ul>
            </p>

            <h4>Summer Semester 2 (6 credits):  </h4>

            <p>
                <ul>
                    <li>Christian Education Strategies & Techniques   </li>
                    <li>Wesleyan-Pentecostal Theulogy in Black Renewal Perspectives  </li>
                </ul>
            </p>

            <h4>Fall Semester 3, Session 1 </h4>

            <p>
                <ul>
                    <li>OT Book Study  </li>
                    <li>NT Book Study  </li>
                </ul>
            </p>

            <h4>Fall Semester 3, Session 2  </h4>

            <p>
                <ul>
                    <li>CERTIFICATE CAPSTONE: Ministry Practicum with Black Renewal Integration   </li>
                </ul>
            </p>
           
        </div>
    </div>

</section>

<section class = "divider-image-wrapper">
    <img src="{{ asset('images/divider-2.png') }}">
</section>

@include('front.components.testimonials')

@endsection