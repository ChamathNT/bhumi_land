<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us</title>
<link href=".\css\style. ncss.css" rel="stylesheet" >
	<link href=".\css\dashboard.css" rel="stylesheet" >

<title>con</title>
<script>
  window.addEventListener('DOMContentLoaded', (event) => {
          const logoutButton = document.querySelector('.logout-button');
  
          logoutButton.addEventListener('click', () => {
              const result = confirm('Are you sure you want to logout?'); // Display the pop-up dialog box
  
              if (result) {
                  // User clicked "OK" or "Yes"
                  // Perform logout action or redirect to logout page
                  window.location = 'logout.php';
              } else {
                  // User clicked "Cancel" or "No"
                  // Do nothing or perform any desired action
              }
          });
      });
       </script>
  

</head>
<body>
  <div class="navbar">
    <!-- Navigation links -->
    <a href="./index.html">Home</a>
    <a href="./about us.html">About Us</a>
    <a href="Lands main page.html">Land</a>
    <a href="./payment.html">Payment Plans</a>
    <a href="./contact us.html">Contact Us</a>
    <a href="./user_info.php">User Info</a>
	  <a href="./login.php">Login</a>
    <input type="text" id="searchInput" onclick="searchGoogle()" placeholder="Search on Google" />
    <button class="logout-button">Logout</button>
</div>
<!-- Main Container -->
<div class="container"> 
  <!-- Header -->
  <header class="header">
    
	  <br>
  </header>
  
 
   

		
   </div>
	                                 <div class="container">
  

									<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="contactProceed.php">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							
							<div class="col-md-5 d-flex align-items-stretch">
								
									<div class="subscribe">
										<h3><b>Subscribe to Recieve Updates</b></h3>
										<form method="POST" action="mailingProceed.php">
											<div class="form-row justify-content-center">
												<div class="col-auto">
													<input type="email" class="form-control" placeholder="Enter your Email" name="mailingEmail">
												</div>
												<div class="col-auto">
													<button type="submit">Subscribe</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						<div class="Footer">
    <footer>
		<div class="container">
  

        <div class="footer-container">
            <div class="footer-left">
                <p>Email: info@bhumi.gmail.com</p>
                <p>Fax: +94115579862</p>
                <p>Contact Number: +94115579861</p>
            </div>
            <div class="footer-center"></div>
			
            <div class="footer-right">
                <a href="#">FAQ</a>
                <p>Tecnical Support: +9415579855</p><br>
            </div>
        </div>
        <hr style="border: none; border-top: 1px solid white; margin: 10px 0; width: 1120px;">
        <div class="copyright">
            <p>Copyright © 2023- Bhumi lands- All Rights Reserved
            Concept, Design & Development by Web Bhumi</p>
        </div>
			</div>
    </footer>
</div>

	
	</body>
</html>

