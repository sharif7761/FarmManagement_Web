<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	/* header style */

#shop_header{
	font-family: "Roboto",Helvetica,Arial,sans-sarif;
	font-size: 14px;
	line-height: 1.42857143;
	color: #333333;
	background-color: #f0f0f0;
}

#top{
	background-color: #005266;
	padding: 10px 0;
    text-align: center;

}

#top .offer{
	color: #fff;
}

#top .offer .btn{
	text-transform: uppercase;
}

@media(max-width: 991px){
	#top .offer{
		margin-bottom: 10px;
	}
}

@media(max-width: 991px){
	#top {
		font-size: 12px;
		text-align: center;
	}
}

#top a{
	color: #fff;

}

#top ul.menu{
 padding-top: 5px;
 margin: 0;
 text-align: right;
 font-size: 12px;
 list-style: none;
}

@media(max-width: 991px){
	#top ul.menu{
		text-align: center;
	}
}

#top ul.menu{
	text-align: center;
}

#top ul.menu >li a{
	color: #eeeeee;

}

#top ul.menu>li{
	display: inline-block;
}

#top ul.menu > li +li:before{
	content: "|\00a0";
	padding: 0 5px;
	color: #f7f7f7;
}




/* header style */

.navbar{
	background: white;
}

.navbar-collapse .right {
	float: right;
}

.navbar-brand{
	float: left;
	padding: 10px 15px;
	font-size: 18px;
	line-height: 20px;
	height: 17px;
}


.navbar-brand:hover,.navbar-brand:focus{
	text-decoration: none;
}

.navbar ul.nav>li>a{
	text-transform: uppercase;
	font-weight: bold;
	font-size: 14px;
}

.padding{
	padding-top: 10px;
}

.navbar ul.nav>li>a:hover{
	background: #e7e7e7;

}

.btn-primary{
	color: rgb(255,255,255);
	background-color: rgb(75,151,168);
	border-color: rgb(65,179,156);
}
  
  
  #header_text{
    font-size: 21px;
    
    color: #FFFFFF;
  }

  #title{
    margin-left: 90px;
  }
  .contactus{
  	
  	float: left;
  	width: 45%;
  	
  	margin: auto;
  	padding-top: 25px;
  }

  .callus{
  float: right;
  	margin-right: 20px;	
  	width: 25%;
  	height: 100%;
  	background-color: tomato;
  	text-align: center;
  }

  .contactinfo{
  	float: right;
  	
  	width: 50%;
  	height: 100%
  }
  




 .social{
text-align: left;

}

.social a{
margin: 12px 10px 0 0;	
color: #fff;
display: inline-block;
width: 30px;
height: 30px;
border-radius: 15px;
line-height: 30px;
font-size: 15px;
text-align: center;
transform: all 0.3s ease-out;
vertical-align: bottom;
background-color: #555555;

}
.social a i{
	padding-top:6px; 
}





#title h3{
	padding-left: 8px;
	color: tomato;
	text-transform: uppercase;
}

#title h4{
	color: grey;
	}

#header2{
	background-color: white;
	width: 100%;
	height: 117px;
}

.nav-right label{
	width: 20px;
	height: 30px;
	border-radius: 50%;

	color: tomato;
	font-size: 20px;
	background-color: red;
}

.nav-right p{
	color: white;
	text-align: center;
	
}

.nav-right a{
	padding-right: 10px;
	margin-top:  20px;
	
	text-decoration: none;

	
}

#login_style{
	color: tomato;
	margin-top: 10px;
	padding-top:  10px;
}

#cart_style{
padding:  0px;

}


/*nav bar dropdown*/

#menu li ul {
display: none;
width: 100px;
background-color: grey;
text-align: center;
text-decoration: none;
}

#menu li:hover ul {
display: block;
position: absolute;
text-decoration: none;
width: 100%;
background-color: grey;
z-index: 100;

background: white;
color: white;
border: #fff solid;
border-width: 1px;
}

#menu li {
list-style-type: none;
width: 9em;
text-align: center;
float: left;
margin-right: 1em;
}

</style>

</head>
<body>

<div id="shop_header">
	<div id="top"> <!--top bar start-->
		<div class="container">
			

			
              <label id="header_text">Free Shipping • Order Today</label>
					</div>	

		</div>

		<div class="container" id="header2">
          <div class="navbar-header">
				<a class="navbar-brand home" href="index.php">
					<img src="img/new.png" alt="Shop" class="hidden-xs">
					   <img src="img/new.png" alt="Shop" class="visible-xs">
                  </div>
                  <div id="title">

					   <h2> AGRO FARM </h2>
            <h4 style="margin-left: 25px; ">Best products here</h4>
            </a>
                  </div>
                  <div class="contactinfo">
                  	
                  
				<div class="callus">
					<h3>Call Us</h3>
					<h4>0171234556</h4>
					
				</div>


			<div class="contactus">
			<p class="social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-envelope"></i></a>
				</p>
				</div>
				</div>
			</div>	
		
  </div>



  	<div class="navbar  navbar-default" id="navbar">
		<div class="container">
			

			<div class="navbar-collapse" id="navigation">
				<div class="padding nav">
					<ul class="nav navbar-nav navbar-left" id="menu">
					
						<li class="">
							<a href="index.php">HOME</a>
						</li>
						<li class="active">
							<a href="shop.php">SHOP</a>
						</li>

						<li id="drop">
							<a href="#">Reports</a>
							<ul class="nav navbar-nav">
								<li><a href="foodreport.php">Food</a></li>
								<li><a href="seedreport.php">Seed</a></li>
								<li><a href="fertilizerreport.php">Fertilizer</a></li>
								<li><a href="pesticidereport.php">Pesticide</a></li>
								<li><a href="treatmentreport.php">Treatment</a></li>
								<li><a href="transactionreport.php">Transcation</a></li>
								<li><a href="warehousereport.php">Warehouse</a></li>
								<li><a href="employeereport.php">Employees</a></li>
								
								<li><a href="customerreport.php">Customers</a></li>

							</ul>
						</li>
						
						<li>
							<a href="orderreport.php">Orders</a>
						</li>

						<li>
							<a href="aboutus.php">About Us</a>
						</li>

						
						<li>
							<a href="contactus.php">Contact Us</a>
						</li>

						
					</ul>
					<div class="nav-right">
					 <ul class="nav navbar-nav navbar-right">
						<?php
				if(isset($_SESSION['login_user']))
				{
					
					?>
				
						<li class="active"><i class="fa fa-user fa-2x">
							<a href="admin_profile.php" id="login_style"><?php echo $_SESSION['login_user']; ?></a>
						</i></li>
						
						
						
						<li class="active"><i class="fa fa-sign-out fa-2x">
							<a href="logout.php" id="login_style">Logout</a>
						</i></li>

				<?php
				}
				else{

					?>
					<li class="active"><i class="fa fa-user fa-2x">
							<a href="#" id="login_style">Login</a>
						</i></li>
					<?php
				}
				?>
						
						
			
					</ul>

<!--				
				
					<div class="cart_style">
				<a href="cart.php" class="navbar-btn right">
					<i class="fa fa-shopping-cart fa-2x"></i>
					<label><p>4</p></label>
				</a>
			</div>
		-->

		</div>
</div>
</div>
</div>
</div>
</a>
</div>
</div>
</div>




</body>
</html>