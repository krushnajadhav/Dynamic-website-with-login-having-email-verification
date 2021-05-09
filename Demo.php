<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta charset="utf-8">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Counter up Animation on Scroll | CodingNepal</title> -->
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
 
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />



<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<?php
include 'home_css.php';
?>

  
</head>
<body>
	  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
    AOS.init({

    	

    });
	var m = document.getElementById('menu1');
        m.style.maxHeight = "0px";
        function togg(){

			

           if( m.style.maxHeight == "0px")
           {
            m.style.maxHeight = "210px";
           }
           else{
            m.style.maxHeight ="0px";
           }
        }
  </script>


	<div class="header" id="topheader">
		<!--Navbar -->
		<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
			<div class="container text-uppercase p-2">
		  <a class="navbar-brand font-weight-bold text-white" href="#">Demotech</a>
		  <button class="navbar-toggler" type="button" onclick="togg()">
		    <span class="navbar-toggler-icon" ></span>
		  </button>
		  <div class="collapse navbar-collapse" id="menu1">
							    <ul class="nav navbar-nav ml-auto">
							      <li class="nav-item active">
							        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#no1" >About Us</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#servicediv">Service </a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#pricingdiv">Price</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#footer">Contact</a>
							      </li>

							      <?php

							      if(isset($_GET['logout'])){
							      	?>
							      	 <li class="nav-item">
							        <a class="nav-link" href="logout.php">Logout</a>
							      </li>
							      <?php
							      }
							      else{

							      	?>
							      	<li class="nav-item">
							        <a class="nav-link" href="login.php">Log IN</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="registration.php">Sign Up</a>
							      </li>
							      	<?php

							      }


							      ?>
							      
						   
						    	</ul>
						    
						    </div>
		  </div>
		</nav>
<!--/.Navbar -->

						<section class="header-section" >
							<div class="center-div col-12">

								<h1  data-aos="fade-down" data-aos-delay="400" class="font-weight-bold"> We are the webDevloper</h1>
								<p  data-aos="fade-down" > we create magical websites</p>

								<div class="header-buttons">
									<a data-aos="fade-right" data-aos-delay="200" href="#no1">About Us</a>
									<a data-aos="fade-left" data-aos-delay="200" href="#footer">Contact Us</a>

									
								</div>
								<br>
								<?php
								if(isset($_GET['logout']))
								{
									?>
									<br>
									<h1  class="font-weight-bold animate__animated animate__bounce">Hello <?php echo $_SESSION['username']; ?> </h1>
									<?php
								}
								else
								{
									?>
									<br>
									<h1   class="font-weight-bold animate__animated animate__bounce ">Hello</h1>
									<?php
								}
								?>
							</div>
						</section>
		
	</div>

<!--****************Header part done********************************** !-->

<!--three extra header div stared-->
<section class="header-extradiv  col-12" >
	<div class="container" >
		<h1 class="font-black-bold" id="no1">About Us</h1>
		<br>
		<div class="row" >


			<div class="extradiv  col-lg-4 col-md-4 col-12" data-aos="fade-right">
				<a href="#"> 
					<i class="fa-3x fa fa-desktop" aria-hidden="true"></i> 

				</a>
				<h2>Easy to user</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					when an unknown printer took a galley of type and scrambled it to make</p>

			</div>
			<div class="extradiv  col-lg-4 col-md-4 col-12 " data-aos="fade-right">
				<a href="#"> 
					<i class="fa-3x fa fa-trophy" aria-hidden="true"></i> 

				</a>
				<h2>Awsome styles</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					when an unknown printer took a galley of type and scrambled it to make</p>

			</div>

			<div class="extradiv col-lg-4 col-md-4 col-12" data-aos="fade-right">
				<a href="#"> 
					<i class="fa-3x fa fa-magic" aria-hidden="true"></i>

				</a>
				<h2>easy to customize</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					when an unknown printer took a galley of type and scrambled it to make</p>

			</div>

		</div>

	</div>

</section>

<!--three extra header div ended-->


<!-- section started-->

<!--offer section started-->
<section class="serviceffers" id="servicediv">
	<div class="container headings text-center col-lg-6 col-md-12 col-10" >
		<h1 class="text-center font-weight-bold" >
			What do we offer
		</h1>
		<p class="text-center " style="color: white">
			There are many variations of passages of Lorem Ipsum available
		</p>

	</div>

	<div class="container" >
		<div class="row" style="color: white">
			<div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0 names my-3 servicediv1" data-aos="fade-right" >
				<h1 style="color: white" >HTML</h1>
				<div class="progress">
					
					<div class="progress-bar progress-bar-striped" style="width:95%">95%</div>
				  </div>
				  <br>
				  <h1 style="color: white">CSS</h1>
				  <div class="progress">
					
					<div class="progress-bar bg-success progress-bar-striped" style="width:90%">90%</div>
				  </div>
				  <br>
				  <h1 style="color: white">JAVASCRIPT</h1>
				  <div class="progress">
					
					<div class="progress-bar bg-info progress-bar-striped" style="width:80%">80%</div>
				  </div>
				  <br>
				  <h1 style="color: white">REACT JS</h1>
				  <div class="progress">
					
					<div class="progress-bar bg-warning progress-bar-striped" style="width:75%">75%</div>
				  </div>
				  <br>
				  <h1 style="color: white">NODE JS</h1>
				  <div class="progress">
					
					<div class="progress-bar bg-danger progress-bar-striped" style="width:80%">80%</div>
				  </div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 servicediv " data-aos="fade-left">
				<div class="row" >
					<div class="col-lg-2 col-2 service-icons">
						<i class="fa-3x fa fa-desktop" aria-hidden="true"></i>

					</div>

					<div class="col-lg-10 col-10" >
						<h2 >Website Devlopment</h2>
						<p style="color: white">when an unknown printer took a galley of type and scrambled it to 
							make a type specimen book. It has survived not only five centuries</p>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-2 col-2 service-icons">
						<i class="fa-3x fa fa-wifi" aria-hidden="true"></i>

					</div>

					<div class="col-lg-10 col-10">
						<h2>Digital marketing</h2>
						<p style="color: white">when an unknown printer took a galley of type and scrambled it to 
							make a type specimen book. It has survived not only five centuries</p>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-2 col-2 service-icons">
						<i class="fa-3x fa fa-phone" aria-hidden="true"></i>

					</div>

					<div class="col-lg-10 col-10">
						<h2 >Support 24/7</h2>
						<p style="color: white">when an unknown printer took a galley of type and scrambled it to 
							make a type specimen book. It has survived not only five centuries</p>
					</div>

				</div>

			</div>
		</div>

	</div>
</section>


<!--*******************offer section end**********************-->

<!--********************project done start*************-->

<section class="project-work  " data-aos="zoom-in">
	<div class="container headings text-center">
		<p class="text-center font-weight-bold"> More than 2000 websites created </p>
		
	</div>

	<div class="container d-flex justify-content-around align-item-center text-center " >
		<div>
			<h1 class="count">1500</h1>
			
			<p>CMS installation</p>
		</div>

		<div  >
			<h1 class="count">2500</h1>
			<p>CMS installation</p>
		</div>

		<div  >
			<h1 class="count">1000</h1>
			<p>CMS installation</p>
		</div>

		<div >
			<h1 class="count">700</h1>
			<p>CMS installation</p>
		</div>

	</div>
</section>

<script>

  $(".count").counterUp({
	delay:10,
	time:1000
  })


</script>

<!--************************project done end**************-->

<!--*******************************our prcing start************************************************-->

<section>
			
			<section class="pricing " id="pricingdiv"  >
					<div class="container headings text-center">
						<h1 class="text-center font-weight-bold text-white">
							Our Best Pricing
						</h1>
					</div>
				<div class="container ">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="card text-center">
								<div class="card-header">Basic</div>
								<div class="card-body">
									<li>$<span class="money" > 20</span>/website</li>
									<li>Responsive Website</li>
									<li>Domain Name Free</li>
									<li>Mobile Frindly</li>
									<li>Webmail Support</li>
									<li>Customer Support 24/7</li>
								</div>
								<div class="card-footer">
									<button  onclick="document.getElementById('id01').style.display='block'" >Purchase</button>
								</div>
								
							</div>

						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-12 card-second">
							<div class="card text-center">
								<div class="card-header">Standard</div>
								<div class="card-body">
									<li>$<span class="money">40</span>/website</li>
									<li>Responsive Website</li>
									<li>Domain Name Free</li>
									<li>Mobile Frindly</li>
									<li>Webmail Support</li>
									<li>Customer Support 24/7</li>
								</div>
								<div class="card-footer">
									<button  onclick="document.getElementById('id01').style.display='block'" >Purchase</button>
								</div>
								
							</div>

						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="card text-center">
								<div class="card-header">Premium</div>
								<div class="card-body"> 
									<li>$<span class="money">60</span>/website</li>
									<li>Responsive Website</li>
									<li>Domain Name Free</li>
									<li>Mobile Frindly</li>
									<li>Webmail Support</li>
									<li>Customer Support 24/7</li>
								</div>
								<div class="card-footer ">
									<button type="submit" onclick="document.getElementById('id01').style.display='block'" >Purchase</button>

								</div>
								
							</div>

						</div>

					</div>
				</div>
	
</section>


			<!--************************card Ended**************-->

			<!--************************modal start**************-->



			<?php

			if(isset($_GET['logout']))
			{
				?>	
							  <div id="id01" class="w3-modal w3-animate-opacity">
							    <div class="w3-modal-content w3-card-4">
							      <header class="w3-container w3-teal"> 

			      		
									<span onclick="document.getElementById('id01').style.display='none'" 
							        class="w3-button w3-large w3-display-topright">&times;</span>
							        <h2 style="padding: 5px;">Payment</h2>
							      </header>

							      <div class="w3-container">
							      	<br>

							        <form accept-charset="UTF-8" action="#" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
							            <div class='form-row'>
							              <div class='col-xs-12 form-group required'>
							                <label class='control-label'>Name on Card</label>
							                <input style="align-content: center;" class='form-control' size='50px' type='text' >
							              </div>
							            </div>
							            <div class='form-row'>
							              <div class='col-xs-12 form-group  required'>
							                <label class='control-label'>Card Number</label>
							                <input autocomplete='off' class='form-control card-number' size='50px' type='text'>
							              </div>
							            </div>
							            <div class='form-row'>
							              <div class='col-xs-4 form-group cvc required'>
							                <label class='control-label'>CVC</label>
							                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
							              </div>
							              <div class='col-xs-4 form-group expiration required'>
							                <label class='control-label'>Expiration</label>
							                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
							              </div>
							              <div class='col-xs-4 form-group expiration required'>
							                <label class='control-label'> </label>
							                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
							              </div>
							            </div>
							            <br>
							            <div class='form-row'>
							              <div class='col-md-12'>
							                <div class='form-control total btn btn-info'>
							                  <h4 style="padding-bottom:  10px;">$40</h4>
							                </div>
							              </div>
							            </div>
							            <div class='form-row'>
							              <div class='col-md-12 form-group'>
							                <button class='form-control btn btn-primary submit-button' type='submit'>Pay »</button>
							              </div>
							            </div>
							           
							          </form>
							      </div>
							      <footer class="w3-container w3-teal">
							        
							      </footer>
							    </div>
							  </div>
						<?php
							  
						}
						
						else

								{
									
									?>

									<div id="id01" class="w3-modal w3-animate-opacity">
							    <div class="w3-modal-content w3-card-4">
							      <header class="w3-container w3-teal"> 

			      		
									<span onclick="document.getElementById('id01').style.display='none'" 
							        class="w3-button w3-large w3-display-topright">&times;</span>
							        <h2 style="padding: 5px;">Payment</h2>
							      </header>

							      <div class="w3-container">
							      	<br>

							        <form accept-charset="UTF-8" action="#" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
							            <h1 style="padding: 10px">please login</h1>
							      <footer class="w3-container w3-teal">
							        
							      </footer>
							    </div>
							  </div>
							  <?php

								}

			?>
		
			<!--************************modal end**************-->
</section>
</div>
<!--*******************************our prcing start************************************************-->        

  



<!--************************our prcing start**************-->

<footer class="mainfooter" role="contentinfo" style="margin-top: 0px;">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>About Us</h4>
          <ul class="list-unstyled">
            <li><a href="#no1"></a></li>
            <li><a href="#no1">Easy to user</a></li>
            <li><a href="#no1">Awsome styles</a></li>
            <li><a href="#no1">easy to customize</a></li>
            
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>WHAT DO WE OFFER</h4>
          <ul class="list-unstyled">
            <li><a href="#servicediv">Website Devlopment</a></li>
            <li><a href="#servicediv">Digital marketing</a></li>
            <li><a href="#servicediv">Support 24/7</a></li>
           
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>OUR BEST PRICING</h4>
          <ul class="list-unstyled">
            <li><a href="#pricingdiv">Basic</a></li>
            <li><a href="#pricingdiv">Standard</a></li>
            <li><a href="#pricingdiv">Premium</a></li>
            
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    	<div class="col-lg-3 col-md-3 col-sm-6 col-6">
    		<h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>				
		</div>
    </div>
	<div class="row">
		<div class="col-12 copy">
			<p class="text-center last-line" > Copyright 2021 - DemoTech@gmail.com</p>
		</div>
	</div>


  </div>
  </div>
</footer>

</body>
</html>