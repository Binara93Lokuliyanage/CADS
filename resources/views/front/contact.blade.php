@extends('front.layouts.app')

@section('content')
<section class = "page-hero-banner">
    <img src="{{ asset('images/advisory-hero.png') }}">
</section>


<section class = "section-padding-top section-padding-bottom section-with-bg-image">
    <img src="{{ asset('images/bg.png') }}" class = "bg-image">
    <div class = "container container-with-bg-image">
        <div class = "heading-wrapper text-center">
            <h3 class = "sub-heading text-secondary">
                contact us
            </h3>
            <h1 class = "main-heading text-primary">
                Reach Out to Us
            </h1>

        </div>
        
        <p class="text-center max-width">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <div class = "form-wrapper max-width">
            <form method="POST" action="contactForm" class="margin-default">
                @csrf

                <div class="form-container">
                    <div class="grid-two-col">

                        <div>

                            <div class="input-with-placeholder">
                                <input type="text" id="first_name" name="first_name"
                                    placeholder="First Name" class="first_name" required>
                                <div class="placeholder-image" style="background-image: url(images/form/name.svg)">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="input-with-placeholder">
                                <input type="text" id="last_name" name="last_name"
                                    placeholder="Last Name" class="last_name" required>
                                <div class="placeholder-image" style="background-image: url(images/form/name.svg)">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="grid-two-col">


                        <div>
                            <div class="input-with-placeholder">
                                <input type="number" id="contact" name="contact" placeholder="Contact Number"
                                    class="contact" required="">
                                <div class="placeholder-image" style="background-image: url(images/form/contact.svg)">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="input-with-placeholder">
                                <input type="email" id="email" name="email" placeholder="Email"
                                    class="email" required>
                                <div class="placeholder-image" style="background-image: url(images/form/email.svg)">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div>
                        <input type="email" id="email" name="email" placeholder="Address"
                                    class="email" required>
                    </div>
                    <div>
                        <textarea id="message" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class = "btn-wrapper">
                        <button type="submit" class="button">Send Message</button>
                    </div>
            </form>
        </div>
    </div>
</section>

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.762667968804!2d-84.87104272375893!3d35.16253925829215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885e2b9065544d27%3A0x4fca00d6f0a8c930!2sPentecostal%20Theological%20Seminary!5e0!3m2!1sen!2slk!4v1718123887189!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


@include('front.components.testimonials')

@endsection