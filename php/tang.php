<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link href='//bizweb.dktcdn.net/100/178/647/themes/233989/assets/main.scss.css?1511881369182' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="home.css">
    <style>
    	.sapxep{
    		width: 100%;
    		height: 40px;
    		background-color: white;
    		margin-top: 3%;
    		margin-bottom: 3%;
    		margin-left: 
    	}
    	.thumbnail img {
	      width: 100%;
	      height: 200px;
	  }
	
		

    </style>
</head>
<body>
	<div id="conainer">
		<div id="content">
			<div class="col-sm-12 col-md-3">
			</div>
			<div class="col-sm-12 col-md-9">
				
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				  	<a class="navbar-brand" >Sắp Xếp: </a>
				    <ul class="nav navbar-nav">
				      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Giá tăng dân <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				        	<li><a href="sanpham.php">Mắc định</a></li>
				          <li><a href="tang.php">Giá tăng dân</a></li>
				          <li><a href="giam.php">Giá giảm dân</a></li>
				          <li><a href="AZ.php">Từ A - z</a></li>
				          <li><a href="ZA.php">Từ Z - a</a></li>
				        </ul>
				      </li>
				    </ul>
				  </div>
				</nav>
			<div class="row text-center pro">
			<?php
				$host = "localhost";
				$user = "root";
				$password = "";
				$database = "nongsan";
				$conn = mysqli_connect($host, $user, $password, $database);
				if (!$conn) {
				   	die("Connection failed: " .mysqli_connect_error());
				}
						$sql = "SELECT name_product, link,price
						FROM products 
                        ORDER BY price ASC
                        LIMIT 10;
                        
						";
				$result = mysqli_query($conn,$sql);
				
				while ($kq = mysqli_fetch_assoc($result)) {
			?> 
			
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-full wow fadeInLeft data-wow-offset='100'">
				    <div class="image">
				    	<div class="thumbnail">
							<img src="<?php echo $kq['link']; ?>" alt="Paris" width="400" height="200">  
				   		</div>
	      			</div>
	       			<div class="productInf">
	         			<a class="productname"> <?php echo $kq['name_product']; ?></a>
		         	<div class="hearts">
		               <span class="fa fa-heart checked"></span>
		               <span class="fa fa-heart checked"></span>
		               <span class="fa fa-heart checked"></span>
		               <span class="fa fa-heart"></span>
		               <span class="fa fa-heart"></span>
		     		</div>
		       		<button class="hvr-radial-out btn hvr-grow-shadow">Mua ngay</button>
		        	<div class="price">Giá: <?php echo $kq['price'].' đ'; ?> 	
		        	</div>
	        	
       		</div>
       		<br><br>
    	</div>

		<?php } ?>
		</div>
	</div>
	</div>

	
</body>
</html>