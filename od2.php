
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Smart Detection Picaso</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v2.2.1
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

     <!-- ======= Clients Section ======= -->
     <section id="od2" class="clients">
     <br><br><br>
  <div class="container"  style="height: 100vh;">
  <div class="section-title" data-aos="fade-up">
        <h2>Try Object Detection with Video Upload</h2>
      
      </div>


<div class="row">

<div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
  <div class="info">
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <div class="container">

    


      <br><br>
      <img src="img/select2.png" class="img-fluid" alt=""><br><br>
              <form class="form-inline" method="post" action="" style="width:400px;">
                  <div class="input-group">
                      <label class="input-group-btn">
                          <span class="btn btn-danger btn-lg" style="height:40px; wifth:250px; ">
                              Browse.. &nbsp;&nbsp;&nbsp;&nbsp;<br><input type="file" id="media" name="media" style="display: none;height:200px; position:relative;top:5px;" required>
                          </span>
                      </label>
                      <input type="text" class="form-control input-lg" size="70" style="height:40px;" readonly required >
                  </div>
                  <br>
          
                      <input type="submit" class="btn btn-lg btn-primary" value="Start upload" style="position:relative; top:10px;">
              
              </form>
              <br>
              <div class="progress" style="display:none">
                  <div id="progressBar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                      <span class="sr-only">0%</span>
                  </div>
              </div>
              <div class="msg alert alert-info text-left" style="display:none"></div>
              <br><br><br><br><br><br><br>
      

  </div>

</div>

<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
  <style> 
#rcorners1 {
border-radius: 25px;
background: #e4e6eb;
padding: 20px; 
width: 700px;
height: 400px;  
}
</style>
</head>
<body>

<p id="rcorners1">Output will be here..</p>

  </form>
</div>

</div>

</div>
<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/upload.js"></script>
    <script>
	$(function() {
	  $(document).on('change', ':file', function() {
		var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	  });

	  $(document).ready( function() {
		  $(':file').on('fileselect', function(event, numFiles, label) {

			  var input = $(this).parents('.input-group').find(':text'),
				  log = numFiles > 1 ? numFiles + ' files selected' : label;

			  if( input.length ) {
				  input.val(log);
			  } else {
				  if( log ) alert(log);
			  }

		  });
	  });
	  
	});
	</script>



      </div>

    </div>
   
    </section><!-- End Clients Section -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>