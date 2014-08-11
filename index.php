<?php 
/*
 * jxset
 * Copyright (c) 2010 - 2013, Shuki Shukrun (shukrun.shuki at gmail.com).
 * Dual licensed under the MIT and GPL licenses
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
 include_once("autoload.php");
 $dir_pre = config::jxset;
 jset_session::create();
 //jset_page::create(config::jxset, 'en', '', false, 'ui-lightness');
 jset_page::create(config::jxset, 'en', '', false, 'redmond');
 $user_group = $_SESSION['jset_user_group'];
?>
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
<title>Timesheet</title>
<script type="text/javascript">
	<?php echo jset_permission::get_user_attributes_js(); ?>
</script>
<script src="js/defaults.js" type="text/javascript"></script>
<script src="js/timesheet_item.js" type="text/javascript"></script>
<script src="js/job.js" type="text/javascript"></script>
<script src="js/client.js" type="text/javascript"></script>
<script src="js/worker.js" type="text/javascript"></script>
<script src="js/report.js" type="text/javascript"></script>
<script src="js/index.js" type="text/javascript"></script>
</head>
<body>
	<div style="float:right; margin:0 20px 0 0;">
		Hi <a href="<?php echo config::password_page; ?>"><?php echo $_SESSION['jset_user_login']; ?></a> <a href="login.php?signout"><img src="<?php echo $dir_pre ?>jset/img/logout-icon.png" style="width:16px;" title="<?php echo $lang['logout'] ?>"></a>
	</div>
	<br />
	<?php if(!$user_group){ ?>
		
		<div style="direction:rtl; text-align:right">  Please define the permission group for the user <?php echo $_SESSION['jset_user_login']; ?> to enable the use of the system. </div>

	<?php 
		die;
	}	?>
	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">Timesheets</a></li>
			<?php if($user_group == 1){ ?><li><a href="#tabs-2">Jobs</a></li><?php } ?>
			<?php if($user_group == 1){ ?><li><a href="#tabs-3">Clients</a></li><?php } ?>
			<?php if($user_group == 1){ ?><li><a href="#tabs-4">Employees</a></li><?php } ?>
			<?php if($user_group == 1){ ?><li><a href="#tabs-5">Reports</a></li><?php } ?>
		</ul>
		<div id="tabs-1">
			<table id="timesheet_item" border="1"></table>
		</div>
		<?php if($user_group == 1){ ?>
		<div id="tabs-2">
			<table id="job" border="1"></table>
		</div>
		<div id="tabs-3">
			<table id="client" border="1"></table>
		</div>
		<div id="tabs-4">
			<table id="worker" border="1"></table>
		</div>
		<div id="tabs-5">
			<table id="report" border="1"></table>
		</div>
		<?php } ?>
	</div>
</body>
</html>