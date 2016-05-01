
	<?php

			$row = $vendor->row(0);
			echo "<div id='vendorContainer'><div id='vendorName'>VENDOR NAME</div><h1>".$row->Name."</h1></div>";
			echo "<div class='scheduleResult ".$schedule->ScheduleName."'>";
			echo "<div>Schedule: <h2>".$schedule->ScheduleName."</h2></div>";
   			echo "<div>Non-X One Rate: <h2>$".$schedule->NonXOne."</h2></div>";
   			echo "<div>X One Rate: <h2>$".$schedule->XOne."</h2></div>";
			echo "</div>";
		?>
