<?php

session_start();
    
if(!isset($_SESSION) || empty($_SESSION)){
    @header('Location:login');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>ADMIN | Enrollment System</title>
	<!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	 <![endif]-->

	 <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	 <!-- Favicon icon -->
	 <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
	 <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

	 <!-- Google font-->
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	 <!-- iconfont -->
	 <link rel="stylesheet" type="text/css" href="/assets/icon/icofont/icofont.min.css">

	 <!-- simple line icon -->
	 <link rel="stylesheet" type="text/css" href="../assets/icon/simple-line-icons/css/simple-line-icons.css">

	 <!-- Required Fremwork -->
	 <link rel="stylesheet" type="text/css" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

	 <!-- Weather css -->
	 <link href="../assets/css/svg-weather.css" rel="stylesheet">

	 <!-- Echart js -->
	 <script src="../assets/plugins/charts/echarts/js/echarts-all.js"></script>

	 <!-- Style.css -->
	 <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	 <!-- Style.css -->
	 <link rel="stylesheet" type="text/css" href="../assets/plugins/Waves/waves.min.css">

	 <!-- Responsive.css-->
	 <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

	 <!--color css-->
	 <link rel="stylesheet" type="text/css" href="../assets/css/color/color-1.min.css" id="color"/>

 </head>
 <body class="sidebar-mini fixed">
	<div class="loader-bg">
		<div class="loader-bar">
		</div>
	</div>
	<div class="wrapper">
	  <div class="loader-bg">
	<div class="loader-bar">
	</div>
</div>
<!-- Navbar-->
<header class="main-header-top hidden-print">
	<a href="index.html" class="logo" style="font-size: 25px;font-weight: bold">ADMIN <small>SCI-TESDA</small></a>
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
		<!-- Navbar Right Menu-->
		<div class="navbar-custom-menu f-right">
			<ul class="top-nav">
				<!--Notification Menu-->
					
				<li class="dropdown pc-rheader-submenu message-notification search-toggle">
					<a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
						<i class="icofont icofont-search-alt-1"></i>
					</a>
				</li>
				<!-- User Menu-->
				<li class="dropdown">
					<a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
						<span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
						<span>John <b>Doe</b></span>

					</a>
				</li>
			</ul>
		 </div>
			</nav>
		</header>
		<!-- Side-Nav-->
		<aside class="main-sidebar hidden-print " >
			<section class="sidebar" id="sidebar-scroll">
				
				<!-- Sidebar Menu-->
				<ul class="sidebar-menu">
					<li class="nav-level"><i class="icon-list"></i><span>&nbsp;Navigation</span></li>
					<li class="active treeview">
						<a class="waves-effect waves-dark" href="dashboard">
							<i class="icon-speedometer"></i><span> Dashboard</span>
						</a>                
					</li>
					<li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span>Qualification</span><i class="icon-arrow-down"></i></a>
						<ul class="treeview-menu">
							<li><a class="waves-effect waves-dark" href="qualification"><i class="icon-arrow-right ql"></i>Qualification List</a></li>
						</ul>
					</li>
					 <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-calendar"></i><span>Schedule</span><i class="icon-arrow-down"></i></a>
						<ul class="treeview-menu">
							<li><a class="waves-effect waves-dark" href="schedule"><i class="icon-arrow-right sl"></i>Schedule List</a></li>
							<li><a class="waves-effect waves-dark" href="form-elements-bootstrap.html"><i class="icon-arrow-right ss"></i>Set Schedule</a></li>
						</ul>
					</li>
					<li class="treeview"><a class="waves-effect waves-dark" href="#"><i class="icofont-group-students"></i><span> Learner</span><i class="icon-arrow-down"></i></a>
						<ul class="treeview-menu">
							 <li><a class="waves-effect waves-dark " href="learner"><i class="icon-arrow-right ll"></i>Learner List</a></li>
							<li><a class="waves-effect waves-dark" href="#l"><i class="icon-arrow-right il"></i>Inactive Learner</a></li>
						</ul>
					</li>
					<li class="treeview"><a class="waves-effect waves-dark" href="#"><i class="icofont-teacher"></i><span> Trainor</span><i class="icon-arrow-down"></i></a>
						<ul class="treeview-menu">

							 <li><a class="waves-effect waves-dark " href="trainor"><i class="icon-arrow-right tl"></i>Trainor List</a></li>
							<li><a class="waves-effect waves-dark" href="#l"><i class="icon-arrow-right it"></i>Inactive Trainor</a></li>
						</ul>
					</li>
					 <li class="treeview">
						<a class="waves-effect waves-dark" href="message">
							<i class="icon-envelope-open"></i><span> Message</span>
						</a>
					</li>
					<li class="treeview">
						<a class="waves-effect waves-dark" href="reports">
							<i class="icon-chart"></i><span>Graph Reports</span>
						</a>                
					</li>
					<li class="treeview"><a class="waves-effect waves-dark" href="#"><i class="icon-settings"></i><span> Settings</span><i class="icon-arrow-down"></i></a>
						<ul class="treeview-menu">

							<li class="treeview">
								<a class="waves-effect waves-dark" href="my_profile">
									<i class="icon-user"></i><span> My Profile</span>
								</a>
							</li>
							<li class="treeview">
								<a class="waves-effect waves-dark" href="changePassword">
									<i class="icofont-lock"></i><span> Change Password</span>
								</a>
							</li>
						</ul>
					</li>
					 <li class="treeview">
						<a class="waves-effect waves-dark" href="logout?logout=true">
							<i class="icon-logout"></i><span> Logout</span>
						</a>
					</li>
				</ul>
			</section>
		</aside>
		<!-- Sidebar chat start -->
		<div id="sidebar" class="p-fixed header-users showChat">
			<div class="had-container">
				<div class="card card_main header-users-main">
					<div class="card-content user-box">

						<div class="md-group-add-on p-20">
						   <span class="md-add-on">
							<i class="icofont icofont-search-alt-2 chat-search"></i>
						</span>
						<div class="md-input-wrapper">
							<input type="text" class="md-form-control"  name="username" id="search-friends">
							<label>Search</label>
						</div>

					</div>
					<div class="media friendlist-main">

						<h6>Friend List</h6>

					</div>
					<div class="main-friend-list">
						<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Josephin Doe</div>
								<span>20min ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Alice</div>
								<span>1 hour ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
								<div class="live-status bg-danger"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Michael Scofield</div>
								<span>3 hours ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Irina Shayk</div>
								<span>1 day ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
								<div class="live-status bg-danger"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Sara Tancredi</div>
								<span>2 days ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Josephin Doe</div>
								<span>20min ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Alice</div>
								<span>1 hour ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Josephin Doe</div>
								<span>20min ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Alice</div>
								<span>1 hour ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip"  data-placement="left" title="Josephin Doe">

							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Josephin Doe</div>
								<span>20min ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Alice</div>
								<span>1 hour ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Josephin Doe</div>
								<span>20min ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Josephin Doe</div>
								<span>20min ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Josephin Doe</div>
								<span>20min ago</span>
							</div>
						</div>
						<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

							<a class="media-left" href="#!">
								<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header">Josephin Doe</div>
								<span>20min ago</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="showChat_inner">
		<div class="media chat-inner-header">
			<a class="back_chatBox">
				<i class="icofont icofont-rounded-left"></i> Josephin Doe
			</a>
		</div>
		<div class="media chat-messages">
			<a class="media-left photo-table" href="#!">
				<img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
				<div class="live-status bg-success"></div>
			</a>
			<div class="media-body chat-menu-content">
				<div class="">
					<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
					<p class="chat-time">8:20 a.m.</p>
				</div>
			</div>
		</div>
		<div class="media chat-messages">
			<div class="media-body chat-menu-reply">
				<div class="">
					<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
					<p class="chat-time">8:20 a.m.</p>
				</div>
			</div>
			<div class="media-right photo-table">
				<a href="#!">
					<img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
					<div class="live-status bg-success"></div>
				</a>
			</div>
		</div>
		<div class="media chat-reply-box">
			<div class="md-input-wrapper">
				<input type="text" class="md-form-control" id="inputEmail" name="inputEmail" >
				<label>Share your thoughts</label>
				<span class="highlight"></span>
				<span class="bar"></span>  <button type="button" class="chat-send waves-effect waves-light">
				<i class="icofont icofont-location-arrow f-20 "></i>
			</button>

			<button type="button" class="chat-send waves-effect waves-light">
				<i class="icofont icofont-location-arrow f-20 "></i>
			</button>
		</div>

	</div>
</div>