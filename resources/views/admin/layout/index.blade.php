<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="Sunray" />
    <title>DOCTOR</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
	<link href="/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link href="/admin/plugins/material/material.min.css" rel="stylesheet" >
	<link href="/admin/css/material_style.css" rel="stylesheet">
	<!-- morris chart -->
    <link href="/admin/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
    <link href="/admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="/admin/img/favicon.ico" />
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    <img alt="" src="/admin/img/logo.png">
                    <span class="logo-default" >Sunray</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler font-size-20"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
				</ul>
				 <ul class="nav navbar-nav navbar-left in">
				 	<li class="dropdown dropdown-extended dropdown-notification" >
                            <a href="javascript:;" class="dropdown-toggle app-list-icon font-size-20" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu app-icon">
                            	<li class="app-dropdown-header">
                                    <p><span class="bold">Applications</span></p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list app-icon-dropdown" data-handle-color="#637283">
										<li>
											<a href="add_patient.html" class="patient-icon">
											<i class="material-icons">local_hotel</i>
											<span class="block">Add Patient</span>
											</a>
										</li>
										<li>
											<a href="email_inbox.html" class="email-icon">
											<i class="material-icons">drafts</i>
											<span class="block">Email</span>
											</a>
										</li>
										<li>
											<a href="view_appointment.html" class="appoint-icon">
											<i class="material-icons">assignment</i>
											<span class="block">Appointment</span>
											</a>
										</li>
										<li>
											<a href="all_doctors.html" class="doctor-icon">
											<i class="material-icons">people</i>
											<span class="block">Doctors</span>
											</a>
										</li>
										<li>
											<a href="google_maps.html" class="map-icon">
											<i class="material-icons">map</i>
											<span class="block">Map</span>
											</a>
										</li>
										<li>
											<a href="payments.html" class="payment-icon">
											<i class="material-icons">monetization_on</i>
											<span class="block">Payments</span>
											</a>
										</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                </ul>
                <ul class="nav navbar-nav navbar-left in">
                	<!-- start full screen button -->
                    <li><a href="javascript:;" class="fullscreen-click font-size-20"><i class="fa fa-arrows-alt"></i></a></li>
                    <!-- end full screen button -->
                </ul>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" >
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="material-icons">notifications</i>
                                <span class="notify"></span>
                                <span class="heartbeat"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="material-icons">question_answer</i>
                                <span class="notify"></span>
                                <span class="heartbeat"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="../assets/img/doc/doc2.jpg" class="/admin/img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Sarah Smith </span>
                                                	<span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="/admin/img/doc/doc3.jpg" class="/admin/img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> John Deo </span>
                                                	<span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="/admin/img/doc/doc1.jpg" class="/admin/img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Rajesh </span>
                                                	<span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="/admin/img/doc/doc8.jpg" class="/admin/img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Lina Smith </span>
                                                	<span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="/admin/img/doc/doc5.jpg" class="/admin/img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Jacob Ryan </span>
                                                	<span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="/admin/img-circle " src="/admin/img/dp.jpg" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="fa fa-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cogs"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-question-circle"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="fa fa-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-sign-out"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
	                           <i class="material-icons">settings</i>
	                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll" class="left-sidemenu">
	                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="/admin/img/dp.jpg" class="/admin/img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p> Dr. Emily</p>
	                                    <small>Admin</small>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="nav-item active open">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                                <span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  active open">
	                                    <a href="index.html" class="nav-link ">
	                                        <span class="title">Dashboard 1</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="dashboard2.html" class="nav-link ">
	                                        <span class="title">Dashboard 2</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">email</i>
	                                <span class="title">Email</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="email_inbox.html" class="nav-link ">
	                                        <span class="title">Inbox</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="email_view.html" class="nav-link ">
	                                        <span class="title">View Mail</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="email_compose.html" class="nav-link ">
	                                        <span class="title">Compose Mail</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
	                            <span class="title">Appointment</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="schedule.html" class="nav-link "> <span class="title">Doctor Schedule</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="book_appointment.html" class="nav-link "> <span class="title">Book Appointment</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="book_appointment_material.html" class="nav-link "> <span class="title">Book Appointment Material</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item  ">
	                                    <a href="edit_appointment.html" class="nav-link "> <span class="title">Edit Appointment</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="view_appointment.html" class="nav-link "> <span class="title">View All Appointment</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
	                                <span class="title">Doctors</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="all_doctors.html" class="nav-link "> <span class="title">All Doctor</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="add_doctor.html" class="nav-link "> <span class="title">Add Doctor</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="add_doctor_material.html" class="nav-link "> <span class="title">Add Doctor Material</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="edit_doctor.html" class="nav-link "> <span class="title">Edit Doctor</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="doctor_profile.html" class="nav-link "> <span class="title">About Doctor</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
	                                <span class="title">Other Staff</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="all_staffs.html" class="nav-link "> <span class="title">All Staff</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="add_staff.html" class="nav-link "> <span class="title">Add Staff</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="add_staff_material.html" class="nav-link "> <span class="title">Add Staff Material</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="edit_staff.html" class="nav-link "> <span class="title">Edit Staff</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="staff_profile.html" class="nav-link "> <span class="title">Staff Profile</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">accessible</i>
	                                <span class="title">Patients</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="all_patients.html" class="nav-link "> <span class="title">All Patients</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="add_patient.html" class="nav-link "> <span class="title">Add Patient</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="add_patient_material.html" class="nav-link "> <span class="title">Add Patient Material</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="edit_patient.html" class="nav-link "> <span class="title">Edit Patient</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="patient_profile.html" class="nav-link "> <span class="title">Patient Profile</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">hotel</i>
	                                <span class="title">Room Allotment</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="room_allotment.html" class="nav-link "> <span class="title">Alloted Rooms</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="add_room_allotment.html" class="nav-link "> <span class="title">New Allotment</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="add_room_allotment_material.html" class="nav-link "> <span class="title">New Allotment Material</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="edit_room_allotment.html" class="nav-link "> <span class="title">Edit Allotment</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
	                                <span class="title">Payments</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="payments.html" class="nav-link "> <span class="title">Payments</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="add_payment.html" class="nav-link "> <span class="title">Add Payments</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="invoice_payment.html" class="nav-link "> <span class="title">Patient Invoice</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="widget.html" class="nav-link nav-toggle"> <i class="material-icons">widgets</i>
	                                <span class="title">Widget</span>
	                            </a>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dvr</i>
	                                <span class="title">UI Elements</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="ui_buttons.html" class="nav-link ">
	                                        <span class="title">Buttons</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="ui_tabs_accordions_navs.html" class="nav-link ">
	                                        <span class="title">Tabs &amp; Accordions</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="ui_modal.html" class="nav-link ">
	                                        <span class="title">Modal Window</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="ui_typography.html" class="nav-link ">
	                                        <span class="title">Typography</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="ui_panels.html" class="nav-link ">
	                                        <span class="title">Panels</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="ui_grid.html" class="nav-link ">
	                                        <span class="title">Grids</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="calendar.html" class="nav-link ">
	                                        <span class="title">Calender</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="ui_tree.html" class="nav-link ">
	                                        <span class="title">Tree View</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="ui_carousel.html" class="nav-link ">
	                                        <span class="title">Carousel</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">store</i>
	                                <span class="title">Material Elements</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="material_button.html" class="nav-link ">
	                                        <span class="title">Buttons</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_tab.html" class="nav-link ">
	                                        <span class="title">Tabs</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_chips.html" class="nav-link ">
	                                        <span class="title">Chips</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_grid.html" class="nav-link ">
	                                        <span class="title">Grid</span>
	                                    </a>
	                                </li>

	                                <li class="nav-item  ">
	                                    <a href="material_form.html" class="nav-link ">
	                                        <span class="title">Form</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_datepicker.html" class="nav-link ">
	                                        <span class="title">DatePicker</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_select.html" class="nav-link ">
	                                        <span class="title">Select Item</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_loading.html" class="nav-link ">
	                                        <span class="title">Loading</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_menu.html" class="nav-link ">
	                                        <span class="title">Menu</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_slider.html" class="nav-link ">
	                                        <span class="title">Slider</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_tables.html" class="nav-link ">
	                                        <span class="title">Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_toggle.html" class="nav-link ">
	                                        <span class="title">Toggle</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_badges.html" class="nav-link ">
	                                        <span class="title">Badges</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">subtitles</i>
	                                <span class="title">Forms </span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="layouts_form.html" class="nav-link ">
	                                        <span class="title">Form Layout</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="advance_form.html" class="nav-link ">
	                                        <span class="title">Advance Component</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="wizard_form.html" class="nav-link ">
	                                        <span class="title">Form Wizard</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="validation_form.html" class="nav-link ">
	                                        <span class="title">Form Validation</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="editable_form.html" class="nav-link ">
	                                        <span class="title">Editor</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">list</i>
	                                <span class="title">Data Tables</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="basic_table.html" class="nav-link ">
	                                        <span class="title">Basic Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="advanced_table.html" class="nav-link ">
	                                        <span class="title">Advance Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="group_table.html" class="nav-link ">
	                                        <span class="title">Grouping</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="editable_table.html" class="nav-link ">
	                                        <span class="title">Editable Table</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="tableData.html" class="nav-link ">
	                                        <span class="title">Tables With Sourced Data</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">desktop_mac</i>
	                                <span class="title">Layout</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="layout_boxed.html" class="nav-link "> <span class="title">Boxed</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="layout_full_width.html" class="nav-link "> <span class="title">Full Width</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="layout_right_sidebar.html" class="nav-link "> <span class="title">Right Sidebar</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="layout_collapse.html" class="nav-link "> <span class="title">Collapse Menu</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="layout_sidebar_hover_menu.html" class="nav-link "> <span class="title">Hover Sidebar Menu</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">timeline</i>
	                                <span class="title">Charts</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="charts_echarts.html" class="nav-link ">
	                                        <span class="title">eCharts</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="charts_morris.html" class="nav-link ">
	                                        <span class="title">Morris Charts</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="charts_chartjs.html" class="nav-link ">
	                                        <span class="title">Chartjs</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">map</i>
	                                <span class="title">Maps</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="google_maps.html" class="nav-link ">
	                                        <span class="title">Google Maps</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="vector_maps.html" class="nav-link ">
	                                        <span class="title">Vector Maps</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">album</i>
	                                <span class="title">Icons</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="fontawesome_icons.html" class="nav-link ">
	                                        <span class="title">Font Awesome</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="material_icons.html" class="nav-link ">
	                                        <span class="title">Material Icons</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="javascript:;" class="nav-link nav-toggle"> <i class="material-icons">description</i>
	                            <span class="title">Extra pages</span>
	                            <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                            	<li class="nav-item  "><a href="user_profile.html" class="nav-link "><span
											class="title">Profile</span>
									</a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="contact.html" class="nav-link "> <span class="title">Contact Us</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="login.html" class="nav-link "> <span class="title">Login</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="sign_up.html" class="nav-link "> <span class="title">Sign Up</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="forgot_password.html" class="nav-link "> <span class="title">Forgot Password</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="lock_screen.html" class="nav-link "> <span class="title">Lock Screen</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="blank_page.html" class="nav-link "> <span class="title">Blank Page</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">slideshow</i>
	                                <span class="title">Multi Level Menu</span>
	                                <span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="javascript:;" class="nav-link nav-toggle">
	                                        <i class="fa fa-university"></i> Item 1
	                                        <span class="arrow"></span>
	                                    </a>
	                                    <ul class="sub-menu">
	                                        <li class="nav-item">
	                                            <a href="javascript:;" class="nav-link nav-toggle">
	                                                <i class="fa fa-bell-o"></i> Arrow Toggle
	                                                <span class="arrow "></span>
	                                            </a>
	                                            <ul class="sub-menu">
	                                                <li class="nav-item">
	                                                    <a href="javascript:;" class="nav-link">
	                                                        <i class="fa fa-calculator"></i> Sample Link 1</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a href="#" class="nav-link">
	                                                        <i class="fa fa-clone"></i> Sample Link 2</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a href="#" class="nav-link">
	                                                        <i class="fa fa-cogs"></i> Sample Link 3</a>
	                                                </li>
	                                            </ul>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-rss"></i> Sample Link 2</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-hdd-o"></i> Sample Link 3</a>
	                                        </li>
	                                    </ul>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="javascript:;" class="nav-link nav-toggle">
	                                        <i class="fa fa-gavel"></i> Arrow Toggle
	                                        <span class="arrow"></span>
	                                    </a>
	                                    <ul class="sub-menu">
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-paper-plane"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-power-off"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-recycle"></i> Sample Link 1
	                                             </a>
	                                        </li>
	                                    </ul>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link">
	                                        <i class="fa fa-volume-up"></i> Item 3 </a>
	                                </li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
			 <!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">DASHBOARD</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">INICIO</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">DASHBOARD</li>
                            </ol>
                        </div>
                    </div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
					        <div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-primary"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">CITAS ATENDIDAS</span>
					              <span class="info-box-number">450</span>
					              <div class="progress">
					                <div class="progress-bar bg-primary" style="width: 40%"></div>
					              </div>
					              <span class="progress-description">
					                    40% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-warning"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">CITAS CANCELADAS</span>
					              <span class="info-box-number">55</span>
					              <div class="progress">
					                <div class="progress-bar bg-warning" style="width: 40%"></div>
					              </div>
					              <span class="progress-description">
					                    40% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
                            
					        
					        <!-- /.col -->
					      </div>
                        
                        <div class="row">
                        
                        <div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-success"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">NUMERO DE PACIENTES</span>
					              <span class="info-box-number">120</span>
					              <div class="progress">
					                <div class="progress-bar bg-success" style="width: 85%"></div>
					              </div>
					              <span class="progress-description">
					                    85% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-info"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">NUMERO DE DOCTORES</span>
					              <span class="info-box-number">44</span><span></span>
					              <div class="progress">
					                <div class="progress-bar bg-info" style="width: 50%"></div>
					              </div>
					              <span class="progress-description">
					                    50% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
                        
                        </div>
                        
						</div>
					<!-- end widget -->
                    
                    <!-- start new patient list -->
                     <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>DOCTORES MÁS SOLICITADOS</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>No</th>
														<th>Doctor</th>
														
														<th>Cantidad de Citas</th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>01</td>
														<td>Dr.Rajesh</td>
														
														<td>
															<span class="label label-sm label-success">70</span>
														</td>
														
													</tr>
													<tr>
														<td>02</td>
														<td>Dr.Sarah Smith</td>
														
														<td>
															<span class="label label-sm label-success"> 65 </span>
														</td>
														
													</tr>
													<tr>
														<td>03</td>
														<td>Dr.John Deo</td>
														
														<td>
															<span class="label label-sm label-success">60</span>
														</td>
														
													</tr>
													<tr>
														<td>04</td>
														<td>Dr.Jay Soni </td>
														
														<td>
															<span class="label label-sm label-success ">55</span>
														</td>
														
													</tr>
													<tr>
														<td>05</td>
														<td>Dr.Jacob Ryan</td>
														
														<td>
															<span class="label label-sm label-success ">50</span>
														</td>
														
													</tr>
													<tr>
														<td>06</td>
														<td>Dr.Megha Trivedi </td>
														
														<td>
															<span class="label label-sm label-warning">45</span>
														</td>
														
													</tr>
                                                    
                                                    
                                                    <tr>
														<td>07</td>
														<td>Dr. Mark</td>
														
														<td>
															<span class="label label-sm label-warning">40</span>
														</td>
														
													</tr>
                                                    
                                                    <tr>
														<td>08</td>
														<td>Dr.Felix</td>
														
														<td>
															<span class="label label-sm label-warning">35</span>
														</td>
														
													</tr>
                                                    
                                                    <tr>
														<td>09</td>
														<td>Dr.Beryl</td>
														
														<td>
															<span class="label label-sm label-warning">30</span>
														</td>
														
													</tr>
                                                    
                                                    <tr>
														<td>10</td>
														<td>Dr.Jayesh</td>
														
														<td>
															<span class="label label-sm label-warning">20</span>
														</td>
														
													</tr>
                                                    
												</tbody>
											</table>
										</div>
									</div>	
                                </div>
                            </div>
                        </div>
                         
                         
                         
                         
                         
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                             <div class="card card-box">
                                 <div class="card-head">
                                     <header>LISTA DE DOCTORES</header>
                                 </div>
                                 <div class="card-body ">
                                 <div class="row">
                                        <ul id="homeDoctorList" class="docListWindow small-slimscroll-style">
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc1.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">Disponible</span>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc2.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc3.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc4.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Jay Soni</a> - (BHMS)
                                                    </div>
													<div>
														<span class="clsOnLeave">De vacaciones</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc5.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Jacob Ryan</a> - (MBBS,MS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc6.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Megha Trivedi</a> - (MBBS,MS)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc1.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">Disponible</span>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc2.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc3.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                        </ul>
                                        <div class="text-center full-width">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                 </div>
                             </div>
						</div>
                    </div>
                    <!-- end new patient list -->
                        
					
                     <!-- start new patient list -->
                     <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>LISTA DE PACIENTES</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>No</th>
														<th>Nombre</th>
														<th>Doctor Asignado</th>
														<th>Enfermedad</th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Jens Brincker</td>
														<td>Dr.Kenny Josh</td>
														<td>
															<span class="label label-sm label-success">Influenza</span>
														</td>
														
													</tr>
													<tr>
														<td>2</td>
														<td>Mark Hay</td>
														<td>Dr. Mark</td>
														<td>
															<span class="label label-sm label-warning"> colera </span>
														</td>
														
													</tr>
													<tr>
														<td>4</td>
														<td>David Perry</td>
														<td>Dr.Felix </td>
														<td>
															<span class="label label-sm label-danger">ictericia</span>
														</td>
														
													</tr>
													<tr>
														<td>5</td>
														<td>Anthony Davie</td>
														<td>Dr.Beryl</td>
														<td>
															<span class="label label-sm label-success ">Leptospirosis</span>
														</td>
														
													</tr>
													<tr>
														<td>7</td>
														<td>Mark Hay</td>
														<td>Dr.Jayesh</td>
														<td>
															<span class="label label-sm label-success ">tifoidea</span>
														</td>
														
													</tr>
													<tr>
														<td>8</td>
														<td>Sue Woodger</td>
														<td>Dr.Sharma</td>
														<td>
															<span class="label label-sm label-danger">Malaria</span>
														</td>
														
													</tr>
												</tbody>
											</table>
										</div>
									</div>	
                                </div>
                            </div>
                        </div>
                         
                         
                         
                         
                         
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                             <div class="card card-box">
                                 <div class="card-head">
                                     <header>LISTA DE DOCTORES</header>
                                 </div>
                                 <div class="card-body ">
                                 <div class="row">
                                        <ul id="homeDoctorList" class="docListWindow small-slimscroll-style">
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc1.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">Disponible</span>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc2.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc3.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc4.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Jay Soni</a> - (BHMS)
                                                    </div>
													<div>
														<span class="clsOnLeave">De vacaciones</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc5.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Jacob Ryan</a> - (MBBS,MS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc6.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Megha Trivedi</a> - (MBBS,MS)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc1.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">Disponible</span>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc2.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc3.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                        </ul>
                                        <div class="text-center full-width">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                 </div>
                             </div>
						</div>
                    </div>
                    <!-- end new patient list -->
                    
                    
                    
                    
                </div>
            </div>
        
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                    	<li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon"  data-toggle="tab">Theme</a>
                        </li>
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_2" class="nav-link tab-icon"  data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                    	<!-- Start Color Theme Sidebar -->
                    	<div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel" id="quick_sidebar_tab_1">
							<div class="chat-sidebar-slimscroll-style">
								<div class="theme-light-dark">
									<h6>Sidebar Theme</h6>
									<button type="button" data-theme="white" class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light Sidebar</button>
									<button type="button" data-theme="dark" class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark Sidebar</button>
								</div>
								<div class="theme-light-dark">
									<h6>Sidebar Color</h6>
									<ul class="list-unstyled">
										<li class="complete">
											<div class="theme-color sidebar-theme">
												<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
											</div>
										</li>
									</ul>
									<h6>Header Brand color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color logo-theme">
								             	<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
								           	</div>
								        </li>
									</ul>
									<h6>Header color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color header-theme">
								             	<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
								          	</div>
								        </li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Color Theme Sidebar -->
 						<!-- Start Setting Panel -->
 						<div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_2">
                            <div class="chat-sidebar-settings-list chat-sidebar-slimscroll-style">
                                <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
	                            <div class="chatpane inner-content ">
									<div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Sidebar Position</div>
					                        <div class="setting-set">
					                           <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
	                                                <option value="left" selected="selected">Left</option>
	                                                <option value="right">Right</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Header</div>
					                        <div class="setting-set">
					                           <select class="page-header-option form-control input-inline input-sm input-small ">
	                                                <option value="fixed" selected="selected">Fixed</option>
	                                                <option value="default">Default</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Sidebar Menu </div>
					                        <div class="setting-set">
					                           <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
	                                                <option value="accordion" selected="selected">Accordion</option>
	                                                <option value="hover">Hover</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Footer</div>
					                        <div class="setting-set">
					                           <select class="page-footer-option form-control input-inline input-sm input-small ">
	                                                <option value="fixed">Fixed</option>
	                                                <option value="default" selected="selected">Default</option>
                                            	</select>
					                        </div>
					                    </div>
					                </div>
									<div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
									<div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Notifications</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect"
									                  for = "switch-1">
									                  <input type = "checkbox" id = "switch-1"
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Show Online</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect"
									                  for = "switch-7">
									                  <input type = "checkbox" id = "switch-7"
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Status</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect"
									                  for = "switch-2">
									                  <input type = "checkbox" id = "switch-2"
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">2 Steps Verification</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect"
									                  for = "switch-3">
									                  <input type = "checkbox" id = "switch-3"
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                </div>
                                    <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                                    <div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Location</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect"
									                  for = "switch-4">
									                  <input type = "checkbox" id = "switch-4"
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Save Histry</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect"
									                  for = "switch-5">
									                  <input type = "checkbox" id = "switch-5"
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Auto Updates</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect"
									                  for = "switch-6">
									                  <input type = "checkbox" id = "switch-6"
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                </div>
	                        	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; Sunray Template By
            <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
            </div>
            <div class="scroll-to-top">
                <i class="material-icons">eject</i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="/admin/plugins/jquery/jquery.min.js" ></script>
	<script src="/admin/plugins/popper/popper.min.js" ></script>
    <script src="/admin/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="/admin/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <!-- counterup -->
    <script src="/admin/plugins/counterup/jquery.waypoints.min.js" ></script>
    <script src="/admin/plugins/counterup/jquery.counterup.min.js" ></script>
    <!-- Common js-->
	<script src="/admin/js/app.js" ></script>
    <script src="/admin/js/layout.js" ></script>
    <script src="/admin/js/theme-color.js" ></script>
    <!-- material -->
    <script src="/admin/plugins/material/material.min.js"></script>
    <!-- morris chart -->
    <script src="/admin/plugins/morris/morris.min.js" ></script>
    <script src="/admin/plugins/morris/raphael-min.js" ></script>
    <script src="/admin/js/pages/chart/morris/morris-home-data.js" ></script>
    <!-- end js include path -->
  </body>
</html>
