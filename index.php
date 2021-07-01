<?php

    if(isset($_SESSION['usersignin'])){
        header('Location: signin.php');

    }

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header('Location: signin.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FarmCap</title>
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="admin.css" type="text/css">
</head>
<body>

	<div class="sidebar">
		<div class="sidebrand">
			<h2><span class="las la-seedling"></span> FarmCap</h2>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="#" class="active"><span class="las la-igloo"></span>
					<span>Dashboard</span></a>
				</li>
				<li>
					<a href="#"><span class="las la-users"></span>
					<span>Customers</span></a>
				</li>
				<li>
					<a href="#"><span class="las la-clipboard-list"></span>
					<span>Projects</span></a>
				</li>
				<li>
					<a href="#"><span class="las la-shopping-bag"></span>
					<span>Orders</span></a>
				</li>
				<li>
					<a href="#"><span class="las la-receipt"></span>
					<span>Inventory</span></a>
				</li>
				<li>
					<a href="#"><span class="las la-user-circle"></span>
					<span>Accounts</span></a>
				</li>
				<li>
					<a href="#"><span class="las la-clipboard-list"></span>
					<span>Tasks</span></a>
				</li>
				<li>
					<a href="index.php?logout=true"><span class="las la-sign-out-alt"></span>
					<span>Logout</span></a>
				</li>
		</div>
	</div>

	<div class="main-content">
		<header>
			<h2>
				<label for="">
					<span class="las la-bars"></span>
				</label>

				Dashboard
			</h2>

			<div class="search-wrapper">
				<span class="las la-search"></span>
				<<input type="search" placeholder="Seacrh here">
			</div>

			<div class="user-wrapper">
				<img src="img/2.jpg" width="40px" height="40px" alt="">
				<div>
					<h4>Tukur&Tukur farm</h4>
					<small>super admin</small>
				</div>
			</div>

		</header>

		<main>
			
			<div class="cards">
				<div class="card-single">
					<div>
						<h1>54</h1>
						<span>Customers</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>79</h1>
						<span>Projects</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>124</h1>
						<span>Orders</span>
					</div>
					<div>
						<span class="las la-shopping-bag"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>$6k</h1>
						<span>Income</span>
					</div>
					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>
			</div>
			
			<div class="recent-grid">
				<div class="projects">
					<div class="card">
						<div class="card-header">
							<h3>Recent Projects</h3>

							<button>see all <span class="las la-arrow-right">
							</span></button>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table width="100%">
									<thead>
										<tr>
											<td>Project Title</td>
											<td>Department</td>
											<td>Status</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>UI/UX Design</td>
											<td>UI team</td>
											<td> 
												<span class="status purple">
												</span>
												review
											</td>
										</tr>
										<tr>
											<td>Web development</td>
											<td>Frontend</td>
											<td> 
												<span class="status pink">
												</span>
												in progress
											</td>
										</tr>
										<tr>
											<td>Ushop app</td>
											<td>Mobile team</td>
											<td> 
												<span class="status orange">
												</span>
												pending
											</td>
										</tr>
										<tr>

											<td>UI/UX Design</td>
											<td>UI team</td>
											<td> 
												<span class="status purple"></span>
												review
											</td>
										</tr>
										<tr>
											<td>Web development</td>
											<td>Frontend</td>
											<td> 
												<span class="status pink"></span>
												in progress
											</td>
										</tr>
										<tr>
											<td>Ushop app</td>
											<td>Mobile team</td>
											<td> 
												<span class="status orange"></span>
												pending
											</td>
										</tr>
																			<tr>

											<td>UI/UX Design</td>
											<td>UI team</td>
											<td> 
												<span class="status purple"></span>
												review
											</td>
										</tr>
										<tr>
											<td>Web development</td>
											<td>Frontend</td>
											<td> 
												<span class="status pink"></span>
												in progress
											</td>
										</tr>
										<tr>
											<td>Ushop app</td>
											<td>Mobile team</td>
											<td> 
												<span class="status orange"></span>
												pending
											</td>
										</tr>
										
										
									</tbody>
								</table>
							</div>
						</div>

					</div>
				</div>

				<div class="customers">
					<div class="card">
						<div class="card-header">
							<h3>New customer</h3>

							<button>see all <span class="las la-arrow-right">
							</span></button>
						</div>

						<div class="card-body">
							<div class="customer">
								<div class="info">
									<img src="img/2.jpg" width="40px" height="40px" alt="">
									<div>
										<h4> Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
							  	</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>
							<div class="customer">
								<div>
									<img src="img/2.jpg" width="40px" height="40px" alt="">
									<div>
										<h4> Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
							  	</div>
								<div>
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>
							<div class="customer">
								<div>
									<img src="img/2.jpg" width="40px" height="40px" alt="">
									<div>
										<h4> Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
							  	</div>
								<div>
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>
							<div class="customer">
								<div>
									<img src="img/2.jpg" width="40px" height="40px" alt="">
									<div>
										<h4> Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
							  	</div>
								<div>
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>
							<div class="customer">
								<div>
									<img src="img/2.jpg" width="40px" height="40px" alt="">
									<div>
										<h4> Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
							  	</div>
								<div>
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>
							<div class="customer">
								<div>
									<img src="img/2.jpg" width="40px" height="40px" alt="">
									<div>
										<h4> Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
							  	</div>
								<div>
									<span class="las la-user-circle"></span>
									<span class="las la-comment"></span>
									<span class="las la-phone"></span>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</main>
	</div>


</body>
</html>

