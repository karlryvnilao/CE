<?php 
session_start();
if(isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:home.php");

 ?>

<?php 



 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Computer System Servicing</title>
</head>
<header>
  <?php
  include 'landingpages/header.php';
  ?>
</header>
<body>



<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to TESDA</h1>
      <h2>We will help you to broaden your knowledge.</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Few Words About Us</h2>
            <p>
            The COMPUTER SYSTEMS SERVICING NC II Qualification consists of competencies
            that must possess to enable to install and configure computers systems, set-up computer
            networks and servers and to maintain and repair computer systems and networks.

            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">BASIC COMPETENCIES</a></h4>
              <ul class="list-unstyled">
                <li class="list-group-item">500311105 - Participate in workplace communication</li>
                <li class="list-group-item">500311106 - Work in a team environment</li>
                <li class="list-group-item">500311107 - Practice career professionalism</li>
                <li class="list-group-item">500311108 - Practice occupational health and safety procedures</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">COMMON COMPETENCIES</a></h4>
              <ul class="list-unstyled">
                <li class="list-group-item">ELC315202 - Apply quality standards</li>
                <li class="list-group-item">ELC311203 - Perform computer operations</li>
                <li class="list-group-item">ELC311201 - Perform mensuration and calculation</li>
                <li class="list-group-item">ELC311202 - Prepare and interpret technical drawing</li>
                <li class="list-group-item">ELC724201 - Use hand tools</li>
                <li class="list-group-item">ELC724205 - Test electronic components</li>
                <li class="list-group-item">ELC724202 - Terminate and connect electrical wiring and electronic circuits</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">CORE COMPETENCIES</a></h4>
              <ul class="list-unstyled">
                <li class="list-group-item">ELC724331 - Install and configure computer systems</li>
                <li class="list-group-item">ELC724332 - Set-up Computer Networks</li>
                <li class="list-group-item">ELC724333 - Set-up Computer Servers</li>
                <li class="list-group-item">ELC724334 - Maintain and Repair Computer Systems and Networks</li>
              </ul>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">
        <div class="section-header mb-4">
          <h3 class="section-title">Training Duration</h3>
        </div>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
            <p>Basic</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="1" class="purecounter"></span>
            <p>Common</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="160" data-purecounter-duration="1" class="purecounter"></span>
            <p>CORE</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="280" data-purecounter-duration="1" class="purecounter"></span>
            <p>Total</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Services</h3>
          <p class="section-description">This services will teach you the fundamentals and basics of the computer system before you proceed to the actual and hands-on computer servicing.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-briefcase"></i></a></div>
              <h4 class="title"><a href="">Installing and Configuring Computer Systems</a></h4>
              <p class="description">This module focuses on installing and configuring computer hardware and software, requiring an Intro to CSS course. It covers disassembly, assembly, installation of operating system, and program applications.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-card-checklist"></i></a></div>
              <h4 class="title"><a href="">Setting Up Computer Networks/Servers</a></h4>
              <p class="description">This module focuses on setting up computer networks, requiring completion of Intro to CSS and Installing and Configuring Computer Systems. It covers creating network cables, configuring routers, and connecting cables for workstations. The fourth module teaches setting up computer servers, including user access, configuring network services, and conducting testing and documentation procedures.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Maintaining Computer Systems and Networks</a></h4>
              <p class="description">This module focuses on maintaining computer systems and networks, requiring completion of Intro to CSS, Installing and Configuring Computer Systems, and Setting Up Computer Networks, and teaching planning, preparation, inspection, and testing.</p>
            </div>
          </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Facts</h3>
            <p class="cta-text"> The Technical Education and Skills Development Authority (TESDA) was established through the enactment of Republic Act No. 7796 otherwise known as the "Technical Education and Skills Development Act of 1994", which was signed into law by President Fidel V. Ramos on August 25, 1994. This Act aims to encourage the full participation of and mobilize the industry, labor, local government units and technical-vocational institutions in the skills development of the country's human resources.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://www.tesda.gov.ph/about/tesda/10">Read more</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Portrait</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Configuring</li>
              <li data-filter=".filter-card">Networking</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/images/portfolio/con-1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Configuring</h4>
              
              <a href="assets/images/portfolio/con-1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/images/portfolio/con-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Configuring</h4>
              
              <a href="assets/images/portfolio/con-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
             
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/images/portfolio/net-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Networking</h4>
              
              <a href="assets/images/portfolio/net-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/images/portfolio/con-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Configuring</h4>
              
              <a href="assets/images/portfolio/con-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/images/portfolio/net-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Networking</h4>
              
              <a href="assets/images/portfolio/net-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/images/portfolio/net-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Networking</h4>
              
              <a href="assets/images/portfolio/net-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title mt-3">FAQ</h3>
          <p class="section-description">FREQUENTLY ASKED QUESTIONS (FAQS) ON ASSESSMENT AND CERTIFICATION</p>
        </div>
        <div class="row">
          <div class="accordion" id="faqAccordion">
    <!-- FAQ Item 1 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="faqHeading1">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
          Question 1: What is TESDA Online Program?
        </button>
      </h2>
      <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          <p>The TESDA Online Program is a web-based platform that offers free Massive Open Online Courses (MOOCs) for the technical education and skills development of the Filipino workforce. Through the use of information and communication technologies, the TOP provides an effective and efficient way to deliver technical education and skills development services to a broader audience/wide range of users/all learners at a lesser cost. </p>
        </div>
      </div>
    </div>

    <!-- FAQ Item 2 -->
    <div class="accordion-item mb-5">
      <h2 class="accordion-header" id="faqHeading2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
          Question 2: Do we get a certificate of Training after completing the online course?
        </button>
      </h2>
      <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          <p>We have developed the online courses to be accessible to as many Filipinos as possible. You will get a Certificate of Completion once you finish the course and if you think you are ready, then you may take the face-to-face assessment for National Certification at any TESDA accredited assessment center or venue.</p>
        </div>
      </div>
    </div>

    <!-- Add more FAQ items as needed -->

  </div>
        </div>

      </div>
    </section>
    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h3 class="section-title">Contact Us</h3>
      <p class="section-description">Feel free to reach out to us with any questions or inquiries.</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="bi bi-geo-alt"></i>
          <h3>Address</h3>
          <address>Avenue St., City, Country</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="bi bi-phone"></i>
          <h3>Phone Number</h3>
          <p><a href="tel:+1234567890">+1 234 567 890</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="bi bi-envelope"></i>
          <h3>Email</h3>
          <p><a href="mailto:info@example.com">info@example.com</a></p>
        </div>
      </div>

    </div>

    <div class="row mt-5">
      <div class="col-lg-12">
        <form action="process_contact_form.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>
            </div>

            <div class="col-lg-12 mt-1">
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
            </div>

            <div class="col-lg-12 mt-1">
              <div class="form-group">
                <textarea class="form-control" rows="5" name="message" placeholder="Message" required></textarea>
              </div>
            </div>

            <div class="col-lg-12 mt-2">
              <button type="submit" class="btn btn-primary form-control">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</section><!-- End Contact Section -->



  </main><!-- End #main -->

</div>
<footer>
    <?php
    include 'landingpages/footer.php';
    ?>
</footer>

</body>
</html>



