<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "nongsan";
	$conn = mysqli_connect($host, $user, $password, $database);
	if (!$conn) {
	   	die("Connection failed: " .mysqli_connect_error());
	}

	 if (isset($_POST['sendcontact'])) 
              {
                $namect = $_POST['contact-name'];
            }
$sql = " 
						SELECT name_product, link,price
                        FROM products
                        WHERE MATCH(name_product)
                        AGAINST('echo()');
						";
