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
<body>

<header>
    <?php
     include 'landingpages/header.php';
    ?>
</header>


<!-- Home Section -->
<section id="home" class=" container-fluid">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/images/landingpage/iStock_000049025866XLarge.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/landingpage/1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/landingpage/Depositphotos_67894427_l-2015.jpg" alt="Third slide">
    </div>
  </div>
</div>
</section>

<!-- About Us Section -->
<section id="about" class="container mt-5 ">
<div class="container mt-5">
  <h1 class="mb-4 text-center">About Us</h1>

  <p>
    Welcome to our organization, where we are dedicated to providing individuals with the skills and knowledge needed in the field of computer systems servicing.
  </p>

  <h2 class="mt-4 text-center">Qualification Overview</h2>

  <p class="text-center">
    The COMPUTER SYSTEMS SERVICING NC II Qualification is designed to equip individuals with the competencies required for installing and configuring computer systems, setting up computer networks and servers, and maintaining and repairing computer systems and networks.
  </p>

  <div class="row mt-5">
    <div class="col-md-6 text-start p-4 mt-3">
      <h3 class="text-center ">Basic Competencies</h3>
      <ul >
        <li>Participate in workplace communication (500311105)</li>
        <li>Work in a team environment (500311106)</li>
        <li>Practice career professionalism (500311107)</li>
        <li>Practice occupational health and safety procedures (500311108)</li>
      </ul>
    </div>

    <div class="col-md-6 text-start p-4 mt-3">
      <h3 class="text-center">Possible Job Roles</h3>
      <ul>
        <li>Computer Assembler</li>
        <li>Computer Service Technician</li>
        <li>Network Technician</li>
        <li>Computer Maintenance Technician</li>
      </ul>
    </div>
  </div>
</div>
</section>

<!-- FAQ Section -->
<section id="faq" class="container mt-5 text-center">
    <h2>FAQ</h2>
    
    <div class="container mt-5">
  <h1 class="mb-4 text-center">Frequently Asked Questions (FAQ)</h1>

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
    <div class="accordion-item">
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
</section>

<footer>
    <?php
    include 'landingpages/footer.php';
    ?>
</footer>

</body>
</html>



