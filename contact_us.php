<?php 
    $section = "contact_us";
    $pageTitle = "Contact Us";
    include("includes/header.php"); ?>


  <!-- Hero -->
  <div class="header abtus_bg_image">
    <div class="container-fluid">
      <div class="row text-center">
        <h2 class="text-white mt-5 s-headline">Contact Us</h2>

      </div>
    </div>
  </div>

  <section>
    <div class="container-fluid bg-color">
      <div class="row">
        <div class="container">
          <div class="column mb-5">
            <div class="contact-form">
              <h2>Contact Us</h2>
              <form action="submit_contact_form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required /><br />

                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required /><br />

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea><br />

                <button type="submit" class="primary-button">Submit</button>
              </form>
            </div>
          </div>
          <div class="column">
            <h2 class="text-white mb-4">View Location on Map</h2>

            <div class="google-map">
              <!-- Google Maps iframe embed code goes here -->

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.875870345786!2d77.51360237479298!3d12.91569871610201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3f6b65f63b5b%3A0x20c589588c5a815a!2sTechTune%20Motors%20Multi%20Brand%20Car!5e0!3m2!1sen!2sin!4v1699270740750!5m2!1sen!2sin"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Footer -->
  <?php include("includes/footer.php"); ?>
