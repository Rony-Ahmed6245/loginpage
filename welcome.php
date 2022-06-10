<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style1.css">



	<!-- bootstrap -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

	<title>AdminHub</title>


</head>
<body>
	


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Sell system
					</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Purchase</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					
					<a href="logout.php"><span class="text">Logout</span></a>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#"></a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#"></a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>3,003 TK</h3>
						<p>1day Total Sell</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>90,000 TK</h3>
						<p >Monthly Total Sell</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>10,00000 TK</h3>
						<p>Yearly Total Sell</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 class="root1">Selled List</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table class="table2 ">
						<td>
							<table class="list" id="storeList">
								<thead>
									<tr>
										<th><h3 class="root">Product Name</h3></th>
										<th><h3 class="root"> KG & Pics  </h3></th>
										<th><h3 class="root">  Packet </h43</th>
										<th><h3 class="root">  Price  </h3></th>
									</tr>
								</thead>
								<tbody>
					
								</tbody>
							</table>
						</td>
					
					</table>
				</div>





				<div class="todo">
					<div class="head">
						<h3 class="root1">Sell Input</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table class="table1">
        
						<tr>
							<td>
								<form autocomplete="off" onsubmit="onFormSubmit()">
									<div>
										<label for="productCode"><span class="root">Product name</span></label>
										<br>
										<input class="root3" type="text" name="productCode" id="productCode">
									</div>
									<div>
										<label for="product"><span class="root">KG & Pics</span></label>
										<br>
										<input class="root3" type="text" name="product" id="product">
									</div>
									<div>
										<label for="qty"><span class="root">Packet</span></label>
										<br>
										<input class="root3" type="number" name="qty" id="qty">
									</div>
									<div>
										<label for="perPrice"><span class="root">Price</span></label>
										<br>
										<input  class="root3" type="number" name="perPrice" id="perPrice">
									</div>
									<br>
				
									<div class="form_action--button">
										<input class="root2" type="submit" value="Submit">
										<input class="root2" type="reset" value="Reset">
									</div>
								</form>
				</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

<script src="script.js"></script>


</body>
</html>