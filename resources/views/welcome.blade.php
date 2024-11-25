<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Portfolio</a></li>
            <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
            <li class="sidebar-nav-item"><a href="#about">About Me</a></li>
            <li class="sidebar-nav-item"><a href="#education">Education</a></li>
            <li class="sidebar-nav-item"><a href="#skills">Skills</a></li>
            <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">Hi, and welcome to my portfolio!</h1>
            <h3 class="mb-5"><em>Explore to discover more about myself</em></h3>
            <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
        </div>
    </header>
    <!-- About-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center align-items-center">
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('img-profile.jpg') }}" alt="Image" class="img-fluid rounded-circle mb-2"
                        style="max-width: 100%; height: auto;">
                </div>
                <div class="col-lg-6">
                    <h2>Hi, I'm Raphael Andhika Pratama</h2>
                    <p class="lead mb-5">
                        A motivated individual with a passion for continuous learning and growth. I am dedicated to
                        achieving results and contributing to projects that make a difference. With strong communication
                        and collaboration skills, I enjoy working in teams and tackling challenges that drive my
                        innovation and improvement.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education -->
    <section class="content-section bg-primary text-white text-center" id="education">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h2 class="mb-5">Education</h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <img src="{{ asset('education-1.jpg') }}" alt="Image" class="img-fluid rounded-circle"
                            style="max-width: 100px;">
                    </span>
                    <h4><strong>SDN Sidodadi 2 Taman</strong></h4>
                    <p class="text-faded mb-0">2011-2017</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <img src="{{ asset('education-2.jpg') }}" alt="Image" class="img-fluid rounded-circle"
                            style="max-width: 100px;">
                    </span>
                    <h4><strong>SMPN 1 Taman</strong></h4>
                    <p class="text-faded mb-0">2017-2019</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <img src="{{ asset('education-3.jpg') }}" alt="Image" class="img-fluid rounded-circle"
                            style="max-width: 100px;">
                    </span>
                    <h4><strong>SMAN 1 Taman</strong></h4>
                    <p class="text-faded mb-0">2019-2022</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <img src="{{ asset('education-4.jpg') }}" alt="Image" class="img-fluid rounded-circle"
                            style="max-width: 100px;">
                    </span>
                    <h4><strong>Institut Teknologi Sepuluh Nopember</strong></h4>
                    <p class="text-faded mb-0">2022-Present</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills -->
    <section class="content-section" id="skills">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h2 class="mb-5">Skills</h2>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">HTML</div>
                                <p class="mb-0">Experienced in using HTML to create and structure web content,
                                    ensuring
                                    a solid foundation for user interfaces and web applications</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('portfolio-1.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Java</div>
                                <p class="mb-0">Proficient in Java programming, with the ability to develop
                                    applications
                                    and solve problems using object-oriented principles.</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('portfolio-2.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Python</div>
                                <p class="mb-0">Familiar with Python for various programming tasks, including
                                    scripting,
                                    automation, and data analysis, leveraging its versatility for different applications
                                </p>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('portfolio-3.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">UI/UX Design</div>
                                <p class="mb-0">Knowledgeable in UI/UX design principles, focusing on enhancing user
                                    experience through intuitive layouts and user-friendly interfaces</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('portfolio-4.jpg') }}" alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section with Form -->
    <section class="content-section bg-light" id="contact">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-6 col-md-8"> <!-- Changed column size for smaller form -->
                    <h2>Contact</h2>
                    <p class="lead mb-5">Have any questions? Would love to hear from you! Fill out the form below.</p>

                    <form id="contactForm" action="#" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text"
                                placeholder="Enter your name..." required />
                            <label for="name">Full Name</label>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                required />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 8rem;"
                                required></textarea> <!-- Adjusted height -->
                            <label for="message">Message</label>
                            <div class="invalid-feedback">Please enter a message.</div>
                        </div>
                        <button class="btn btn-primary btn-xl" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <!-- Email -->
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="mailto:raphadika2410@gmail.com">
                        <i class="icon-envelope"></i>
                    </a>
                </li>
                <!-- LinkedIn -->
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3"
                        href="https://www.linkedin.com/in/your-linkedin-profile" target="_blank">
                        <i class="icon-social-linkedin"></i>
                    </a>
                </li>
                <!-- GitHub -->
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://github.com/RaphaelAndhika162"
                        target="_blank">
                        <i class="icon-social-github"></i>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
