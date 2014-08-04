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
 jset_page::create(config::jxset, 'en', '', false, 'ui-lightness');
 $user_group = $_SESSION['jset_user_group'];
?>
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
<title>Add Timesheet Entry</title>
<script type="text/javascript">
	<?php echo jset_permission::get_user_attributes_js(); ?>
</script>
<script src="js/defaults.js" type="text/javascript"></script>
<script src="js/add.js" type="text/javascript"></script>
<meta name="viewport" content="width=500, initial-scale=1">
</head>
<body>
	<div style="float:right; margin:0 20px 0 0;">
		Hi <a href="<?php echo config::password_page; ?>"><?php echo $_SESSION['jset_user_login']; ?></a> <a href="login.php?signout"><img src="<?php echo $dir_pre ?>jset/img/out.png" title="Log out"></a>
	</div>
	<br />
	<?php if(!$user_group){ ?>		
		<div style="direction:rtl; text-align:right">  Please define the permission group for the user <?php echo $_SESSION['jset_user_login']; ?> to enable the use of the system. </div>
	<?php 
		die;
	} ?>
	<div id="add" style="display:none;">
		<table id="add_timesheet" border="1"></table>
	</div>
</body>
</html>