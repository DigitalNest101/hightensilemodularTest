  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 ">
            <div class="footer-info">
              <h3>HIGH TENSILE</h3>
              <P>FASTNERS AND TOOLS</P>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul class="footer-a">
              <li><a class="./index.php" href="#">Home</a></li>
              <li><a href="./about.php">About us</a></li>
              <li><a href="./services1.php">Product</a></li>
              <li><a href="./contact.php">Contact Us</a></li>
             
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Products</h4>
            <ul>
              <li><a href="./services1.php">Sheet Metal Furniture</a></li>
              <li><a href="./services2.php">Electronic & Electrical cabinets</a></li>              
              <li><a href="./services3.php">Fire Boxs</a></li>
              <li><a href="./services4.php">Metal Doors,windows & Frames</a></li>
              <li><a href="./services5.php">Cable Trays </a></li>
              <li><a href="./services6.php">Perforations Lab Furniture</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h4>CONTACT US</h4>
              <p>
                4-6-67/1, Balanagar "X" Roads  <br>
                Hyderabad - 500037 , Telangana<br><br>
                <strong>Phone:</strong> +91 9885454346<br>
                <strong>Phone:</strong> +91 7382090733<br>
                <strong>Email:</strong> mufaddalkarodi@gmail.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
        

        </div>
      </div>
    </div>

 

  </footer>
  <div class="footer-legal text-center position-relative ">
      <div class="container-xxl">
        <div class="copyright">
          &copy; Copyright <strong><span>HIGH TENSILE</span></strong>. All Rights Reserved
        </div>
       
      </div>
    </div>
  <!-- End Footer -->
	<!-- Essential jQuery Plugins
		================================================== -->
		<!-- <script src="assets/plugins/aos/aos.js"></script> -->
	<!-- Main jQuery -->
	<script src="./assets/plugins/jquery-1.11.1.min.js"></script>
	<!-- Twitter Bootstrap -->
	<script src="./assets/plugins/bootstrap/bootstrap.min.js"></script>    
	<!-- Single Page Nav -->
	<script src="./assets/plugins/jquery.singlePageNav.min.js"></script>
	<!-- jquery.fancybox.pack -->
	<script src="./assets/plugins/jquery.fancybox.pack.js"></script>
	<!-- Owl Carousel -->
	<script src="./assets/plugins/owl.carousel.min.js"></script>
	<!-- jquery easing -->
	<script src="./assets/plugins/isotope.pkgd.min.js"></script>
	<script src="./assets/plugins/jquery.easing.min.js"></script>
	<!-- Fullscreen slider -->
	<script src="./assets/plugins/jquery.slitslider.js"></script>
	<script src="./assets/plugins/jquery.ba-cond.min.js"></script>
	<!-- onscroll animation -->
	<script src="./assets/plugins/wow.min.js"></script>
	<!-- Custom Functions -->
	<script src="./assets/plugins/jquery.form.min.js"></script>
	<script src="./assets/plugins/jquery.validate.min.js"></script>
	<!-- Google Map -->
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
	<script src="./assets/plugins/gmap.js"></script>
	<script src="./assets/js/main.js"></script>
	<script>
		$(function () {
			$("#contact-form").validate({
				rules: {
					name: {
						required: true,
						minlength: 2
					},
					email: {
						required: true,
						email: true
					},
					subject: {
						required: true,
						minlength: 2
					},
					mobile: {
					required: true,
					minlength: 10
					},
					message: {
						required: true,
						minlength: 2
					}
				},
				messages: {
					name: {
						required: "come on, you have a name don't you?",
						minlength: "your name must consist of at least 2 characters"
					},
					email: {
						required: "no email, no support"
					},
					subject: {
						required: "you have a reason to contact, write it here please",
						minlength: "thats all? really?"
					},
					mobile: {
						required: "you have a phone no to contact, write it here please",
						minlength: "your mobile must consist of at least 10 number"
					},
					message: {
						required: "um...yea, you have to write something to send this form.",
						minlength: "thats all? really?"
					}
				},
				submitHandler: function (form) {
					$(form).ajaxSubmit({
						type: "POST",
						data: $(form).serialize(),
						url: "mail.php",
						success: function () {
						
							console.log('done');
							$("#contact-form").fadeTo("slow", 1, function () {
							
								$("#contact-form").resetForm();
								$(".sent-message").slideDown("slow");
								
							});
						},
						error: function () {
							console.log('error');
							$("#contact-form").fadeTo("slow", 1, function () {
								$(".error-mess").slideDown("slow");
							});
						}
					});
				},
				errorPlacement: function (error, element) {
					element.after(error);
					error.hide().slideDown();
				}
			});
		});
	</script>
</body>

</html>