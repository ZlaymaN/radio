<?php

	if( !preg_match( "/index.php/i", $_SERVER['PHP_SELF'] ) ) { die(); }

	$query = $db->query( "SELECT * FROM connection_info ORDER BY id DESC LIMIT 1" );
	$array = $db->assoc( $query );

	$stats = $core->radioInfo( "http://" . $array['host'] . ":" . $array['port'] );

?>
<div class="box">

	<div class="square title">
		<strong>Radio statistics for <?php echo $array['host'] . ":" . $array['port']; ?></strong>
	</div>

	<div class="content">

	<?php
		
		if( $stats['online'] ) {
		
	?>
		<strong>Listeners:</strong>
		<br />
		<?php
			echo $stats['listeners'];
		?>
		
		<br /><br />
		
		<strong>Unique listeners:</strong>
		<br />
		<?php
			echo $stats['ulisteners'];
		?>
		
		<br /><br />
		
		<strong>Listener peak:</strong>
		<br />
		<?php
			echo $stats['listenerpeak'];
		?>
		
		<br /><br />
		
		<strong>Stream title:</strong>
		<br />
		<?php
			echo $stats['streamtitle'];
		?>
		
		<br /><br />
		
		<strong>Current song:</strong>
		<br />
		<?php
			echo $stats['currentsong'];
		?>
	
	<?php
		}
		else {
	?>
	This radio server appears to be offline.
	<?php
		}
	?>
	</div>

</div>