<?php
	##############
	## glob.php ##
	##############

	$params['db']['hostname']  = "mysql.hostinger.se";
	$params['db']['username']  = "u782254496_admin";
	$params['db']['password']  = "jkl123jkl";
	$params['db']['database']  = "u782254496_radio";

	$params['core']['salt1']   = "fc8eb73c7f";
	$params['core']['salt2']   = "de29a0bb2d";

	$params['user']['timeout'] = "60 minutes";

	session_start();
	putenv( "TZ=Europe/London" );

	require_once( "db.inc.php" );
	require_once( "core.inc.php" );
	require_once( "user.inc.php" );
	
	if( file_exists( "_installer/" ) ) {
	
		die( "Please delete the /_installer directory." );
	
	}
?>