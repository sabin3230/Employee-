@extends('layouts.app1')
@section('title')
    RoyalRide
@endsection
@section('content')
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(assets/img/slide/img1.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>KASTHAMANDAP</span></h2>
            <p class="animate__animated animate__fadeInUp">A Employee’s Management System (EMS) is a software built to handle the primary housekeeping functions of a company. EMS help companies keep track of all the employees and their records. It is used to manage the company using computerized system.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section>



<section id="featured-services" class="featured-services section-bg">
  <div class="container">

    <div class="row no-gutters">
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-laptop"></i></div>
          <h4 class="title">Saves Productive Time</h4>
          <p class="description">Our employee management system offers an intelligent module to keep you organized. With the software, you can get all the data of your employees at your fingertips. The advantage of employee management software is that it is cloud-based software. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-briefcase"></i></div>
          <h4 class="title">Happy Workforce</h4>
          <p class="description">The KASTHAMANDAP is an employee management software that can keep your employees happy and create a happy workforce. A good work culture environment and a culture is a need of your employees. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-calendar4-week"></i></div>
          <h4 class="title">Smooth Decision Making</h4>
          <p class="description">With employee management software, you can utilize the standard metrics for employee management. You can also customize or create your own metrics for the needs of the staff management in your company with ease. </p>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>About Us</h2>
      <p>The KASTHAMANDAP is an employee management software that can keep your employees happy and create a happy workforce. A good work culture environment and a culture is a need of your employees.</p>
    </div>

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="assets/img/img4.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h3>THE KASTHAMANDAP STORY, SINCE 1901</h3>
        <p class="fst-italic">
         The KASTHAMANDAP is an employee management software that can keep your employees happy and create a happy workforce. A good work culture environment and a culture is a need of your employees 
        </p>
        <ul>
          <li><i class="bi bi-check-circled"></i>Our employee management system offers an intelligent module to keep you organized. With the software, you can get all the data of your employees at your fingertips. The advantage of employee management software is that it is cloud-based software. </li>
          <li><i class="bi bi-check-circled"></i>The KASTHAMANDAP is an employee management software that can keep your employees happy and create a happy workforce. A good work culture environment and a culture is a need of your employees</li>
          <li><i class="bi bi-check-circled"></i>With employee management software, you can utilize the standard metrics for employee management. You can also customize or create your own metrics for the needs of the staff management in your company with ease. </li>
        </ul>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->

<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
    </div>

    <div class="row">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Budhanilkantha, Kathmandu, Nepal</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>Testkasthamandap@gmail.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+97 4544777</p>
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1829.9938102699082!2d85.35945249704271!3d27.772409379451407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1d5488b966e1%3A0x26e3e0146526e587!2sHotel%20Pabera!5e0!3m2!1sen!2snp!4v1641713659899!5m2!1sen!2snp" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          
        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="" method="post" role="form" class="contact-form">
          @csrf
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
        
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section>

@endsection