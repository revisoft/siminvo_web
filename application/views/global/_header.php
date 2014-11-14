<html>
<head>
	<title><?php echo $_Pendek .' Version ' . $_Version; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Css -->
	<link href="<?php echo base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/css/style.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/css/simple-sidebar.css');?>" rel="stylesheet">

</head>
<body>

<div id="wrapper">
		<!-- Menu Header -->	
		<div class="navbar navbar-inverse navbar-fixed-top">
			  <div class="navbar-inner">
			    <div class="container">
			      <a class="brand"><?php echo $_Panjang; ?></a>
			      <ul class="nav">
			      	<li>
			      		<a href="<?php echo base_url(); ?>">Home</a>
			      	</li>
			        <li <?php if($this->uri->segment(2) == 'about'){echo 'class="active"';}?>>
			          <a href="<?php echo base_url(); ?>admin/about">Abouts</a>
			        </li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li>
			              <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
			            </li>
			          </ul>
			        </li>
			      </ul>
			    </div>
		    </div>
		</div>	
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-30">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->