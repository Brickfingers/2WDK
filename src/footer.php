<footer class="page-footer font-small stylish-color-dark pt-4">
<div class= footer>
<br />
  <div class="container text-center text-md-left">
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div class="row">

    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="footer.css">

      
      <div class="col-md-3 mx-auto">     
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">ABOUT US</h5>
        <p>INSERT TEXT HERE.</p>
      </div>
     
      <hr class="clearfix w-100 d-md-none">
    
      <div class="col-md-2 mx-auto">
       <h5 class="font-weight-bold text-uppercase mt-3 mb-4">MENU</h5>
        <ul class="list-unstyled">
           <li>
            <a href="/WebApp/src/Home.php">HOME</a>
          </li>
		  <li>
            <a href="/WebApp/src/About.php">ABOUT</a>
          </li>
          <li>
            <a href="/WebApp/src/Gallery.php">GALLERY</a>
          </li>
          <li>
            <a href="/WebApp/src/eventplanner.php">EVENTS</a>
          </li>
		   <li>
            <a href="/WebApp/src/Booking.php">BOOKING</a>
          </li>
          <li>
            <a href="/WebApp/src/Tickets.php">TICKETS</a>
          </li>
        </ul>
      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">###</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!"></a>
          </li>
          <li>
            <a href="#!"></a>
          </li>
          <li>
            <a href="#!"></a>
          </li>
          <li>
            <a href="#!"></a>
          </li>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col-md-2 mx-auto">

        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">CALENDAR</h5>
       
        <br />
        <br />
        <ul class="list-unstyled">    
    </li>
    <li class="list-inline-item">
    
      <button class="open-button" onclick="openForm()">SIGN UP FOR NOTIFICATIONS</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Sign Up!</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Sign up</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    </li>
        </ul>
      </div>
    </div>
  </div>

  <hr>

  <ul class="list-unstyled list-inline text-center">
  <h5 class="mb-1">CONTACT US</h5>
  <br />
  <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
       <a href="mailto:info@domain.com" ><i class="fa fa-envelope mr-md-3 mr-3 fa-3x"></i></a>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <a href="http://www.facebook.com"><i class="fa fa-facebook mr-md-3 mr-5 fa-3x"> </i></a>
      </a>
    </li>
   <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <a href="http://www.instagram.co"><i class="fa fa-instagram mr-md-3 mr-5 fa-3x"> </i></a>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <a href="http://www.youtube.com"><i class="fa fa-youtube mr-md-3 mr-3 fa-3x"> </i></a>
      </a>
    </li>
    
  </ul>
  <div class="copyright">
  <br />
  <div class="footer-copyright text-center py-3">
  
 <h6>&copy; <script>document.write(new Date().getFullYear());</script> Copyright - Sax n Sip</h6>

  </div>
  </div>
  </div>
</footer>
