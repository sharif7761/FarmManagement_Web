<?php
session_start();
?>

<?php
include "includes/connection.php";
include "includes/customer_header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Farm Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="styles/style.css">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<style type="text/css">
	
	body{
	font-family: "Roboto",Helvetica,Arial,sans-sarif;
	font-size: 14px;
	line-height: 1.42857143;
	color: #333333;
	background-color: #f0f0f0;
}

/* slider */

#slider{
	margin-bottom: 40px;
	width: 100%;
}



/* product   start */

#content{
	padding-left: 25px;
}


.single{
	width: 290px;

}

@media(max-width: 768px){
	.single{
		width: 60%;
		margin: 0 auto;
	}
}

#content .product{
	background: #e6e6e6
	border: solid 0px #e6e6e6;
	box-sizing: border-box;
	margin-bottom: 30px; 
}
#content .product .text p .price{
font-size: 10px;
text-align: center;
font-weight: 300;
}

#content .product .text .buttons{
	clear: both;
	text-align: center;

}

#content .product .text h3{
	text-align: center;
	font-size: 20px;

}


#content .product .text h3 a{
	color: rgb(85,85,85);

}

#content .product .text{
	padding: 10px 10px 0px;
}

#content .product .text .buttons .btn{
	margin-bottom: 10px;
}

.price{
	text-align: center;
}

/* product   Ends */


#pic_1{
	background-image: url("img/ofr.png");
	 background-repeat: no-repeat;
   height: 450px;
  width: 500px;
   
}






 p .btn-primary{
	background-color: tomato;
	margin-top: 300px;
	margin-left: 200px;
}

 #pic1_txt{
	color: white;
	text-align: center;
	font-size: 30px;
	text-shadow: 5px 5px 3px #333;

}





#pic_2{
	background-image: url("img/crp.png");
	 background-repeat: no-repeat;
  
  height: 450px;
  width: 500px;

 }


#pic_3{
	background-image: url("img/frt.png");
	 background-repeat: no-repeat;
 
  height: 450px;
  width: 500px;

 }

#pic_4{
	background-image: url("img/veg2.png");
	 background-repeat: no-repeat;
 
  height: 450px;
  width: 500px;

 }



.buttons h3{
	margin:auto;
}

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






#title h2{
	padding-left: 15px;
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
	padding-right: 50px;
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




</style>

</head>
<body>



<!-- slider starts -->


<div class="container" id="slider">
	<div class="col-md-12">
		<div class="carousel slide" id="myCarousel" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="myCarousel" data-slide-to="0" class="acive"></li>
				<li data-target="myCarousel" data-slide-to="1" ></li>
				<li data-target="myCarousel" data-slide-to="2" ></li>
				<li data-target="myCarousel" data-slide-to="3" ></li>
				
			</ol>
			
			<div class="carousel-inner">
				<div class="item active">
					<img src="../img/2.jpg">
				</div>

				<div class="item">
					<img src="../img/3.jpg">
				</div>

				<div class="item">
					<img src="../img/v.jpg">
				</div>
			</div>


			<a href="#myCarousel" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a href="#myCarousel" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>


		</div>
		
	</div>
	
</div>




<!-- slider ends -->

<?php
	include "Login_pop.php";
	?>


<!-- Product list starts -->

<div class="container" id="content">
	<div class="row">
		
			
		

<div class="col-sm-4 col-sm-6 col-lg-6">   <!-- Product--1 starts -->

			
		<div class="product">
			<div class="pic1" id="pic_2">
			<!--<img src="cube.jpg" class="img-responsive"> -->
			
			<p class="buttons" >
							<a href="crops.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart"></i>Shop Now
						</a>
						<span><h3 id="pic1_txt"><b>CROPS</b></h3></span>
					</p>
			</div>
		</div>			
			
		</div>   <!-- Product--1 ends -->


<div class="col-sm-4 col-sm-6 col-lg-6">   <!-- Product--1 starts -->

			
		<div class="product" >
			<div class="pic1" id="pic_3">
			<!--<img src="cube.jpg" class="img-responsive"> -->
			
			<p class="buttons">
							<a href="fruits.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart"></i>Shop Now
						</a>
						<span><h3 id="pic1_txt"><b>FRUITS</b></h3></span>
					</p>
			</div>
		</div>			
			
		</div>   <!-- Product--1 ends -->

<div class="col-sm-4 col-sm-6 col-lg-3">   <!-- Product--1 starts -->
</div>
		<div class="col-sm-4 col-sm-6 col-lg-6">   <!-- Product--1 starts -->

			
		<div class="product">
			<div class="pic1" id="pic_4">
			<!--<img src="cube.jpg" class="img-responsive"> -->
			
			<p class="buttons">
							<a href="vegetable.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart"></i>Shop Now
						</a>
						<span><h3 id="pic1_txt"><b>VEGETABLES</b></h3></span>
					</p>
			</div>
		</div>			
			
		</div>   <!-- Product--1 ends -->

		
	

</div>
</div>
<footer>
	<?php
	include "shop_footer.php";
	?>
</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>