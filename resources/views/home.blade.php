@extends ('layouts.app')
@section ('content')


<!--Hero -->
<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
        <h1 style = "color: white;">WELCOME TO BOOKS MANDALA</h1>
        <h1 style = "color: white;">SALVEEKA GURUNG</h1>
    </div>
</section>

       
 <!-- About Section-->
 <section class="page-section bg-secondary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About Books Mandala</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">A book is a medium for recording information in the form of writing or images, typically composed of many pages (made of papyrus, parchment, vellum, or paper) bound together and protected by a cover.[1] The technical term for this physical arrangement is codex (plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its predecessor, the scroll. A single sheet in a codex is a leaf and each side of a leaf is a page.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and still considered as an investment of time to read. In a restricted sense, a book is a self-sufficient section or part of a longer composition, a usage reflecting that, in antiquity, long works had to be written on several scrolls and each scroll had to be identified by the book it contained. Each part of Aristotle's Physics is called a boo</p>
                </div>
            </div>
           


<!-- Contact US -->
<!-- Wrapper container -->
<section id="contact">
<div class="container py-4">

    <!-- Bootstrap 5 starter form -->
    <form id="contactForm">
<h1 style = "color: white;"class="text-center"> <strong>CONTACT</strong></h1>
        <!-- Name input -->
        <div class="mb-3">
            <label class="form-label" for="name">NAME</label>
            <input class="form-control" id="name" type="text" placeholder="Name" />
        </div>

        <!-- Email address input -->
        <div class="mb-3">
            <label class="form-label" for="emailAddress">EMAIL ADDRESS</label>
            <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
        </div>

        <!-- Message input -->
        <div class="mb-3">
            <label class="form-label" for="message">MESSAGE</label>
            <textarea class="form-control" id="message" type="text" placeholder="Message"
                style="height: 10rem;"></textarea>
        </div>

        <!-- Form submit button -->
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">SUBMIT</button>
        </div>

    </form>
</div>
</section>

@endsection
