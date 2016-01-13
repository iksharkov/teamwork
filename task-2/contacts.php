<?php
    $page_title = 'Contacts';
    include('templates/header.php');
?>
<div class="contact-header">
    <h2>Contact Us.Locate Us.Send Us Your Thoughts!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odio adipisci temporibus expedita minus
    voluptatum totam odit neces commodi idsum dolor sit amet, consectetur adipisicing elit. Velit odio
    adipisci temporibus.</p>
</div>
<div id="map-canvas" style="height: 300px; width: 900px;"></div>
<div class="imputs">
  <div>
    <input type="text" name="First Name" placeholder="First Name" label="First Name">
  </div>
  <div>
    <input type="text" name="Last Name" placeholder="Last name" label="Last name">
  </div>
  <div>
    <input type="text" name="Email Address" placeholder="Email Address" label="Email Address">
  </div>
    <textarea name="textarea" placeholder="Message" rows="10" cols="50"></textarea>
</div>
<div class="submit">
  <img src="images/submit_arrow.jpg" alt="arrows">
  <input type="submit" value="Submit"/>
</div>
<?php include('templates/footer.php') ?>