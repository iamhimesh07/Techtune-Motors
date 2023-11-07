  <!-- Section: Hero -->
<?php 
    $section = "index";
    $pageTitle = "Home - Techtune Motors";
    include("includes/header.php"); 
?>


  <section class="hero container-fluid bg-image">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0 overflow-hidden text-center content">
        <h1 class="main-hero-headline">"PRECISION, PERFORMANCE, PROMECH"</h1>
        <a class="btn btn-primary primary-button" href="booking_appointment.php" role="button">Book Your Appointment</a>
      </div>
    </div>
  </section>

  <!-- Section: What We Do? -->
  <section class="container-fluid wwd wwd-bg-image">
    <div class="row p-4">
      <h2 class="wbd_title mt-5 mb-4">What We Do ?</h2>
      <div class="wwd_content">
        <div class="box1 box">
          <div class="icon left_side">
            <img src="assets/images/Car.png" alt="icon" />
          </div>
          <div class="info right_side">
            <h3>MOT</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla,
              repellendus.
            </p>
          </div>
        </div>
        <div class="box2 box">
          <div class="icon left_side">
            <img src="assets/images/Services.png" alt="icon" />
          </div>
          <div class="info right_side">
            <h3>Engine Diagnosis</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla,
              repellendus.
            </p>
          </div>
        </div>
        <div class="box3 box">
          <div class="icon left_side">
            <img src="assets/images/Tools.png" alt="icon" />
          </div>
          <div class="info right_side">
            <h3>Kit & Frame</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla,
              repellendus.
            </p>
          </div>
        </div>
        <div class="box4 box">
          <div class="icon left_side">
            <img src="assets/images/Job.png" alt="icon" />
          </div>
          <div class="info right_side">
            <h3>Auto Maintenance Services</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla,
              repellendus.
            </p>
          </div>
        </div>
        <div class="box5 box">
          <div class="icon left_side">
            <img src="assets/images/Fresh Air.png" alt="icon" />
          </div>
          <div class="info right_side">
            <h3>air conditioning services</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla,
              repellendus.
            </p>
          </div>
        </div>
        <div class="box6 box">
          <div class="icon left_side">
            <img src="assets/images/Wheel.png" alt="icon" />
          </div>
          <div class="info right_side">
            <h3>tires & wheel balancing</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla,
              repellendus.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Why Choose Us? -->
  <section class="container-fluid wcu2 wcu-bg-image">
    <div class="row p4">
      <h2 class="wbd_title mt-5 mb-4">Why Choose Us ?</h2>
      <div class="wcu_content">
        <div class="company_features">
          <div class="boxx">
            <div class="icon left_side">
              <img src="assets/images/Fresh Air.png" alt="icon" />
            </div>
            <div class="info right_side">
              <h3>Expert Engineering</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Nulla, repellendus.
              </p>
            </div>
          </div>
          <div class="boxx">
            <div class="icon left_side">
              <img src="assets/images/Fresh Air.png" alt="icon" />
            </div>
            <div class="info right_side">
              <h3>Guarantee Service</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Nulla, repellendus.
              </p>
            </div>
          </div>
          <div class="boxx">
            <div class="icon left_side">
              <img src="assets/images/Fresh Air.png" alt="icon" />
            </div>
            <div class="info right_side">
              <h3>Experience Skills</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Nulla, repellendus.
              </p>
            </div>
          </div>
          <div class="boxx">
            <div class="icon left_side">
              <img src="assets/images/Fresh Air.png" alt="icon" />
            </div>
            <div class="info right_side">
              <h3>Trusted Work</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Nulla, repellendus.
              </p>
            </div>
          </div>

        </div>
        <section class="request-call-back">
          <h2>Request a Call Back</h2>
          <form action="request_callback.php" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea id="message" name="message" required></textarea>
            </div>
            <button class="secondary-button" type="submit">Submit</button>
          </form>
        </section>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <div class="testimonials">
    <h2 class="testimonial-title mb-3 mt-4">Testimonials</h2>
    <div class="testimonial-slide">
        <div class="testimonial">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
            <p class="author">- John Doe</p>
        </div>
        <div class="testimonial">
            <p>"Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
            <p class="author">- Jane Smith</p>
        </div>
        <!-- Add more testimonials as needed -->
    </div>
    <div class="controls">
        <button id="prevBtn" onclick="changeTestimonial(-1)">&#9665;</button>
        <button id="nextBtn" onclick="changeTestimonial(1)">&#9655;</button>
    </div>
</div>

  <!-- Section: Footer -->
  <?php include("includes/footer.php"); ?>
