<body style='margin:0px auto;'>
<?php

		/* get disk space free (in bytes) */
		$df =       disk_free_space("Z:");
		/* and get disk space total (in bytes)  */
		$dt = disk_total_space("Z:");
		/* now we calculate the disk space used (in bytes) */
		$du = $dt - $df;
		/* percentage of disk used - this will be used to also set the width % of the progress bar */
		$dp = sprintf('%.2f',($du / $dt) * 100);

		/* and we formate the size from bytes to MB, GB, etc. */
		$df = formatSize($df);
		$du = formatSize($du);
		$dt = formatSize($dt);

		function formatSize( $bytes )
		{
				$types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
				for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
						return( round( $bytes, 2 ) . " " . $types[$i] );
		}

		?>
		<style>
		<!--
		.progress {
			border: 2px solid silver;
			margin 0px auto;
			background: silver;
			height: 32px;
			width: 420px;
		}
		.progress .prgbar {
				background: rgb(247,247,247);
				width: <?php echo $dp; ?>%;
				height: 32px;
				z-index: 999;
		}
		.progress .prgtext {
				color: black;
				text-align: center;
				font-size: 13px;
				padding: 9px 0 0;
				width: 420px;
				position: absolute;
				z-index: 1000;
		}
		.progress .prginfo {
				margin: 3px 0;
				color: black;
		}
		-->
		</style>
		<div class='progress'>
			<div class='prgtext'><?php echo $dp; ?>% Disk Used</div>
			<div class='prgbar'></div>
			<div class='prginfo'>
					<span style='float: left;'><?php echo "$du of $dt used"; ?></span>
					<span style='float: right;'><?php echo "$df of $dt free"; ?></span>
					<span style='clear: both;'></span>
			</div>
		</div>