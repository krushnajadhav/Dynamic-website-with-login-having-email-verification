

<style>
	
.menu1{
    width: 28px;
    margin-left: 20px;
    display: none;
}

@media only screen and (max-width:800px)
{
    .navbar-collapse ul{
        margin-top: 20px;
        position: absolute;
        top: 70px;
        left: 0;
        background: #333;
        width: 100%;
        overflow: hidden;
        transition: 0.5s;
    }

    .navbar-collapse  ul li{
        display: block;
        margin: 15px 50px 15px 0 ;
    }
     .navbar-collapse ul li a{
         color: #fff;
     }

     .menu1{
         display: block;
        cursor: pointer;
     }
 
}

	
*{margin: 0;padding: 0;box-sizing: border-box; font-family: 'Poppins', sans-serif;}

a{
	text-decoration: none;

}
html
{
	  scroll-behavior: smooth;

}


a:hover
{
	text-decoration: none;
}

li
{
	list-style: none;
}

p
{
	font-size: 0.9rem;
	line-height: 1.6;
	font-weight: 400;
	color: #606060;
}

.extradiv h2, .servicediv h2
{
	font-size: 0.9rem;
	margin: 20px 0 15px 0;
	font-weight: bold;
	line-height: 1.1;
	word-spacing: 4px;
}

i
{
	color: #2fccd0;
}

/** actual css starts**/

.header
{
	width: 100%;
	height: 100vh;
	background-image: linear-gradient(rgba(0,168,255,0.3) , rgba(0,168,255,0.3)) ,url('image2.jpg');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	clip-path: polygon(100% 0%,100% 77%,50% 100%,0% 75%,0 0);
	position: relative;

}

.header:before
{
	content: "";
	position: absolute;
	top: 0%;
	bottom: 0%;
	left: 0%;
	right: 0%;
	opacity: .2;
	z-index: -1;
	background:linear-gradient(to right ,#1e5799 0% ,#3ccdbb 0% ,#16c9f6 100%);
}

.navbar:before
{
	content: "";
	position: absolute;
	top: 0%;
	bottom: 0%;
	left: 0%;
	right: 0%;

	opacity: .3;
	z-index: -1;
	background:linear-gradient(to right ,#1e5799 0% ,#3ccdbb 0% ,#16c9f6 100%);
}

.nav-item a
{
	color: #fff!important;
	font-weight: bold;
}

.header-section
{
	width: 100%;
	height: inherit;
	color: white;
	text-align: center;
	position: relative;
}

.center-div
{
	width: 100%;
	height: auto;
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50% , -50%);
	-ms-transform: translate(-50% , -50%);
	-webkit-translate: translate(-50% , -50%);
}

.header-buttons a
{
	border: 1px solid #fff;
	border-radius: 100px ;
	margin: 0 5px;
	padding: 12px 35px ;
	outline: none;
	color: #fff;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.4;
	text-align: center;

}

.header-buttons a:hover
{
	color: #50d1c0;
	background-color: #fff;
	text-decoration: node;
	box-shadow: 0 0 20px 0 rgba(0 ,0 ,0,0.3 );
}

.center-div p
{
	font-size: 1.3rem;
	padding: 10px 0 20px 0;
	color: #fff;

}

/*****************Extra header div start**********/ 
.header-extradiv
{
	
	width: 100%;
	height: auto;
	margin: 100px 0;
	text-align: center;
}

.extradiv
{
	background-color: #fff;
	border: medium none;
	padding: 50px!important;
	border-radius: 3px;
	transition: 0.3s;
}

.extradiv:hover
{
	box-shadow:  0 0 20px 0 rgba(0 ,0 ,0,0.3 );
	transform: translatey(-20px);
}

.animate__bounce
{
	--animate-delay: 5s;
}
/*****************Extra header div end**********/ 

/*****************Service offers css start**********/

.serviceffers
{
	/*background: #f7f7f9;18*/
	background: linear-gradient(59deg, #3A6073, #50d1c0);
	padding: 50px 0;
	margin-bottom: 50px;
	color: white;
}


.headings
{
	margin-bottom: 50px;
}

.headings h1
{
	font-size: 2rem;
	font-weight: 700;
	text-transform:uppercase;
}

.names h1
{
	color: #2e2e2e;
	font-size: 1.2rem;
	text-transform: capitalize;
}

.service-icons
{
	display: flex;
	justify-content: center;
	align-items: center;
}
.servicediv h2
{
	font-size: 1.2rem;
}

.progress
{
	height: 0.6rem!important;
	margin-bottom: 25px!important;
	
}
/*****************Service offers css end**********/

/*****************award won start**********/
.project-work
{
	margin: 100px 0 ;

}

.project-work h1
{
	font-size: 2rem;
	
}

/*****************award won end**********/

/*****************pricing start**********/
.pricing
{
	width: 100%;
	height: 100vh;
	padding: 50px ;
	position: relative;
	

	background: linear-gradient(59deg, #3A6073, #50d1c0);

	background-repeat: no-repeat;
	background-size: 100% 100%;
	/*clip-path: polygon(100% 0%,100% 77%,50% 100%,0% 75%,0 0);*/
	position: relative;

}


.pricing:before
{
content: "";
position: absolute;
top: 0%;
border: 0%;
left: 0%;
right: 0%;
z-index: -1;

}

.money
{
	font-size: 40px;
	line-height: 1;
	color: #606060;
}

.card
{
	transition: 0.4s ease;

}

.card-header
{
	
	font-size:1.6rem;
	font-weight: bold;
	background: #fff!important;
	padding: 25px 9!important;
}
.card.body
{
	padding: 30px 0px!important;
}

.card-footer
{
	background: white!important;
	padding: 30px 0px!important;
}



.card-footer button
{
	border: 1px solid #50d1c0;
	border-radius: 100px ;
	margin: 0 5px;
	padding: 12px 35px ;
	outline: none;
	color:#000000;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.4;
	text-align: center;

}

.card:hover .card-footer button
{
	color: #fff;
	background-color:#50d1c0;
	text-decoration: node;
	box-shadow: 0 0 20px 0 rgba(0 ,0 ,0,0.3 );
}

.card:hover
{
	transform: translatey(-20px);
	box-shadow: 0 0 20px 0 rgba(0 ,0 ,0,0.3 );
}

.card:hover .card-header, .card:hover .money
{
	color: #50d1c0;
}
.card-second
{
	transform: translatey(-20px);
	
}
/*****************pricing end**********/
@media(max-width: 768px)
{
	.nav-item
	{
		text-align: center!important;
	}
	.pricing
	{
	height: auto;margin-top: 50px;
	}
	.card-second
	{
		transform: translate(0px);
		margin: 30px 0;
	}
}


/**********Footer start*********/
footer {
  background: #16222A;
  background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
  background: linear-gradient(59deg,#3A6073,#3A6073);
  color: white;
  margin-top:100px;
}

footer a {
  color: #fff;
  font-size: 14px;
  transition-duration: 0.2s;
}

footer a:hover {
  color: #FA944B;
  text-decoration: none;
}

.copy {
  font-size: 12px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
}

.footer-middle {
  padding-top: 2em;
  color: white;
}


/*SOC??AL ??CONS*/

/* footer social icons */

ul.social-network {
  list-style: none;
  display: inline;
  margin-left: 0 !important;
  padding: 0;
}

ul.social-network li {
  display: inline;
  margin: 0 5px;
}


/* footer social icons */

.social-network a.icoFacebook:hover {
  background-color: #3B5998;
}

.social-network a.icoLinkedin:hover {
  background-color: #007bb7;
}

.social-network a.icoFacebook:hover i,
.social-network a.icoLinkedin:hover i {
  color: #fff;
}

.social-network a.socialIcon:hover,
.socialHoverClass {
  color: #44BCDD;
}

.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  width: 30px;
  height: 30px;
  font-size: 15px;
}

.social-circle li i {
  margin: 0;
  line-height: 30px;
  text-align: center;
}

.social-circle li a:hover i,
.triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}

.social-circle i {
  color: #595959;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

.social-network a {
  background-color: #F9F9F9;
}
.last-line
{
	color:white;
}



</style>























