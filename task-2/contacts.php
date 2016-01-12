<?php
    $page_title = 'Contacts';
    include('templates/header.php');
?>
<div class="contact-header">
    <h2>Contact Us.Locate Us.Send Us Your Thoughts!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odio adipisci temporibus expedita minus
    voluptatum totam odit neces commodi id.</p>
</div>
<div id="map-canvas" style="height: 300px; width: 900px;"></div>
<div class="imputs">
  <div>
    <input type="text" name="First Name" placeholder="First Name" label="First Name">
  </div>
  <div>
    <input type="text" name="Last Name" placeholder="last name" label="last name">
  </div>
  <div>
    <input type="text" name="Email Address" placeholder="Email Address" label="Email Address">
  </div>
    <textarea name="textarea" placeholder="Message" rows="10" cols="50"></textarea>
</div>
<div class="submit">
  <a href="#"><img src="images/submit_arrow.jpg" alt="arrows">Submit</a>
</div>
<?php include('templates/footer.php') ?>