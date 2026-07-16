@extends('layouts.app')

@section('content')

<!-- HERO -->
<section id="home" class="hero-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <span class="badge bg-primary mb-3 text-white">
                    Available for Internship
                </span>

                <h6 class="hero-title">
                    Full Stack Developer
                </h6>

                <h3 class="hero-subtitle">
                    Dedicated Software Developer with a strong interest in web technologies, problem-solving, and creating impactful digital solutions.
                </h3>

                <p class="hero-text">
                    Building modern web applications using
                    Laravel, PHP, JavaScript and MySQL.
                </p>

                <a href="#projects" class="btn btn-primary me-2">
                    View Projects
                </a>

                <a href="#contact" class="btn btn-outline-light">
                    Contact Me
                </a>

            </div>

            <div class="col-lg-6 d-flex justify-content-center align-items-center">

                <img src="{{ asset('images/profile.jpeg') }}"
                     class="hero-image"
                     alt="Laiba Gill">

            </div>

        </div>

    </div>

</section>


<!-- ABOUT -->

<section id="about" class="about-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-primary fw-bold">
                ABOUT ME
            </span>

            <h2 class="fw-bold mt-2">
                Passionate Full Stack Developer
            </h2>

            <p class="text-white w-75 mx-auto">

                I'm a Software Development student passionate about
                building modern, responsive, and scalable web
                applications using Laravel, PHP, JavaScript,
                Bootstrap, and MySQL.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-6">

                <div class="about-card">

                    <h4 class="about-heading">
                        Education
                    </h4>

                    <p>

                        Software Development Student continuously
                        improving my programming and problem-solving
                        skills.

                    </p>

                </div>

            </div>

            <div class="col-md-6">

                <div class="about-card">

                    <h4 class="about-heading">
                        Experience
                    </h4>

                    <p>

                        Software Development Student passionate about building practical web applications and continuously improving my programming skills.

                    </p>

                </div>

            </div>

            <div class="col-md-6">

                <div class="about-card">

                    <h4 class="about-heading">
                        Currently Learning
                    </h4>

                    <p>

                        Learning Journey

Continuously expanding my knowledge in software development through practical projects and new technologies.

                    </p>

                </div>

            </div>

            <div class="col-md-6">

                <div class="about-card">

                    <h4 class="about-heading">
                        Career Goal
                    </h4>

                    <p>

                        To become a professional Full Stack Developer
                        and build scalable software solutions that
                        solve real-world problems.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- SKILLS -->

<section id="skills">

    <div class="container">

        <h2 class="text-center mb-5">
            Tech Stack
        </h2>

        <div class="row justify-content-center g-4">

            <div class="col-md-2 col-6 text-center">
                <div class="skill-circle">90%</div>
                <h5>HTML5</h5>
            </div>

            <div class="col-md-2 col-6 text-center">
                <div class="skill-circle">85%</div>
                <h5>CSS3</h5>
            </div>

            <div class="col-md-2 col-6 text-center">
                <div class="skill-circle">80%</div>
                <h5>Bootstrap</h5>
            </div>

            <div class="col-md-2 col-6 text-center">
                <div class="skill-circle">75%</div>
                <h5>JavaScript</h5>
            </div>

            <div class="col-md-2 col-6 text-center">
                <div class="skill-circle">70%</div>
                <h5>jQuery</h5>
            </div>

            <div class="col-md-2 col-6 text-center">
                <div class="skill-circle">85%</div>
                <h5>PHP</h5>
            </div>

            <div class="col-md-2 col-6 text-center">
                <div class="skill-circle">80%</div>
                <h5>Laravel</h5>
            </div>

            <div class="col-md-2 col-6 text-center">
                <div class="skill-circle">75%</div>
                <h5>MySQL</h5>
            </div>

            <div class="col-md-2 col-6 text-center">
                <div class="skill-circle">70%</div>
                <h5>Git</h5>
            </div>

            <div class="col-md-2 col-6 text-center">
                <div class="skill-circle">75%</div>
                <h5>GitHub</h5>
            </div>

        </div>

    </div>

</section>

<!-- PROJECTS -->

<section id="projects">

<div class="container">

    <h2 class="text-center mb-5">
        Projects
    </h2>

    <section id="stats">

        <div class="container ">

            <div class="row text-center">

                <div class="col-md-3">
                    <h1 class="text-primary">2+</h1>
                    <p>Projects Completed</p>
                </div>

                <div class="col-md-3">
                    <h1 class="text-primary">1+</h1>
                    <p>Years Learning</p>
                </div>

                <div class="col-md-3">
                    <h1 class="text-primary">5+</h1>
                    <p>Technologies</p>
                </div>

                <div class="col-md-3">
                    <h1 class="text-primary">100%</h1>
                    <p>Passion for Coding</p>
                </div>

            </div>

        </div>

    </section>

    <div class="row g-4">

        <div class="col-md-4 ">

            <div class="card project-card ">

                <div class="card-body about-card">

                    <h5 class="about-heading">
                        Online Movie Booking System
                    </h5>

                    <p>
                        A web-based ticket booking platform allowing users to browse movies, watch trailers, view reviews, and reserve seats online.

                       Technologies:
                       PHP, MySQL, Bootstrap, JavaScript
                    </p>

                    <a href="https://github.com/itx-liba/online-movie-booking-system" class="btn btn-primary" target="_blank">
                        View on GitHub
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card project-card about-card">

                <div class="card-body">

                    <h5 class="about-heading">
                        Student Management System
                    </h5>

                    <p>
                        A student administration platform for managing records, attendance, and academic information.
                    Technologies:
                    Laravel, MySQL, Bootstrap
                    </p>

                    <a href="https://github.com/itx-liba" class="btn btn-primary" target="_blank"> View on GitHub
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card project-card about-card">

                <div class="card-body">

                    <h5 class="about-heading">
                        Personal Portfolio
                    </h5>

                    <p>
                        Personal developer portfolio built with Laravel showcasing skills, projects, and contact information.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

<!-- CONTACT -->

<section id="contact" class="contact-section">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">Let's Work Together </h2>

            <p class="text-white green-text">
                Let's connect and turn ideas into reality. I'm always open to discussing new projects, internship opportunities, and exciting collaborations.
            </p>

        </div>

        <div class="row g-4">

            <!-- Contact Info -->

            <div class="col-lg-5">

                <div class="contact-card">

                    <h4 class="mb-4 text-white">
                        Contact Information
                    </h4>

                    <div class="contact-item">
                        <h6> Email</h6>
                        <p>libagill987@gmail.com</p>
                    </div>

                    <div class="contact-item">
                        <h6> GitHub</h6>
                        <p>github.com/itx-liba</p>
                    </div>

                    <div class="contact-item">
                        <h6> Location</h6>
                        <p>Karachi, Pakistan</p>
                    </div>

                    <div class="contact-item">
                        <h6> LinkedIn</h6>
                        <p>Coming Soon</p>
                    </div>

                </div>

            </div>

            <!-- Form -->

            <div class="col-lg-7">

                <div class="contact-card">

                    <form>

                        <div class="mb-3">
                            <input type="text" class="form-control custom-input" placeholder="Your Name">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control custom-input" placeholder="Your Email">
                        </div>

                        <div class="mb-3">
                            <textarea rows="6" class="form-control custom-input" placeholder="Write your message here..."></textarea>
                        </div>

                        <button class="btn btn-primary px-4">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection