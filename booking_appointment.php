<?php 
    $section = "booking_appointment";
    $pageTitle = "Appointment Booking Page";
    include("includes/header.php"); ?>


  <!-- Hero -->
  <div class="header abtus_bg_image">
    <div class="container-fluid">
      <div class="row text-center">
        <h2 class="text-white mt-5 s-headline"> Appointment Booking</h2>

      </div>
    </div>
  </div>

  <div class="container-fluid bg-color">
    <div class="row">
      <h1 class="mt-5 mb-5">Book An Appointment</h1>

      <form class="b-form" action="submit_appointment _booking_request.php" method="post">
        <fieldset>
          <legend>Vehicle Information</legend>
          <label for="make_model">Make & Model:</label>
          <input type="text" id="make_model" name="make_model" required><br>

          <label for="year">Year:</label>
          <input type="text" id="year" name="year" required><br>

          <label for="vin">VIN:</label>
          <input type="text" id="vin" name="vin" required><br>

          <label for="license_plate">License Plate:</label>
          <input type="text" id="license_plate" name="license_plate" required><br>

          <label for="previous_mileage">Previous Mileage:</label>
          <input type="text" id="mileage" name="previous_mileage" required><br>
        </fieldset>

        <fieldset>
          <legend>Customer Information</legend>
          <label for="customer_name">Customer Name:</label>
          <input type="text" id="customer_name" name="customer_name" required><br>

          <label for="contact_info">Contact Information:</label>
          <input type="text" id="contact_info" name="contact_info" required><br>

          <label for="customer_address">Customer Address:</label>
          <input type="text" id="customer_address" name="customer_address" required><br>
        </fieldset>

        <fieldset>
          <legend>Service Request Details</legend>
          <label for="service_request">Service Request:</label>
          <textarea id="service_request" name="service_request" rows="4" required></textarea><br>

          <label for="service_history">Service History:</label>
          <textarea id="service_history" name="service_history" rows="4"></textarea><br>

          <label for="authorization">Authorization:</label>
          <textarea id="authorization" name="authorization" rows="4" required></textarea><br>
        </fieldset>

        <fieldset>
          <legend>Payment and Completion</legend>
          <label for="estimated_cost">Estimated Cost:</label>
          <input type="text" id="estimated_cost" name="estimated_cost" required><br>

          <label for="completion_date">Expected Completion Date & Time:</label>
          <input type="datetime-local" id="completion_date" name="completion_date" required><br>

          <label for="payment_options">Payment Options:</label>
          <select id="payment_options" name="payment_options" required>
            <option value="credit_card">Credit Card</option>
            <option value="cash">Cash</option>
            <option value="check">Cheque</option>
            <option value="other">Other</option>
          </select>
        </fieldset>

        <button class="b-button primary-button" type="submit">Submit Request</button>
      </form>

      <!-- Section: Footer -->
<?php include("includes/footer.php"); ?>
