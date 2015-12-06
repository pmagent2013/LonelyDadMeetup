<?php
function my_events(){
	$query = mysql_query("SELECT DISTINCT * FROM events, users WHERE events.uid = users.uid AND events.event_time > UNIX_TIMESTAMP(NOW()) AND events.uid != '".$_SESSION['uid']."' ORDER BY events.loc_zip ASC LIMIT 100 ");
	$counter = 0;
    while($row = mysql_fetch_array($query)){
    	$tags="";
		foreach (explode(',', $row['event_tags']) as $Characteristics){
			$tags .= '<span class="label">'.$Characteristics.'</span> ';
		}

		echo '<table width="100%">
  			<tr>
    			<th>
    				<b>'.$row['event_name'].'</b>
    				<table width="100%" style="border: solid 0px #dddddd">
						<tr>
							<th width="50px"><i class="fa fa-'.$row['event_category'].' fa-5x"></i></th>
							<th>'.$row['event_info'].'<br> By: '.$row['fname'].' '.substr($row['lname'], 0, 1).'.<br>'.$tags.'</th>
						</tr>
					</table>
				</th>
    			<th width="50px"><center><h5><b>'.$row['loc_zip'].' miles</b></h5><a href="#JoinEvent&id='.$row['id'].'" class="radius small button">Join Event</a>'.timeago($row[event_time]).'</h5></center></th>
  			</tr>
		</table>';
			$counter++;
    }
	if($counter == 0){
		echo "</ul></div><hr><center><font color='red'>We found no results.</font><hr>";
	}elseif($counter == 100){
		echo "</ul></div><hr><center><font color='red'>Limited to 100 results....</font><center><hr>";
	}
}
?>


	<div class="row">
	<h1> Browse Events </h1>
	<?php my_events(); ?>
