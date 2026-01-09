<?php 
		$Today = date('Y-m-d 00:00');
		$SQLServiice = "Select * from publicservice_tb where Site_ID = '$Login_Site' and PBS_DateStart < '$Today' and PBS_DateStop is null";
		$queryService=mysqli_query($conn,$SQLServiice);
		while ($data_Service=mysqli_fetch_array($queryService)) 
		{	
			$PBSID = $data_Service['PBS_ID'];
			$PBSDateStart = $data_Service['PBS_DateStart'];
			$randDate = new DateTime($PBSDateStart);
			$timeStop = clone $randDate;
			$stopHour = mt_rand(1, 2);
			$stopMinute = mt_rand(0, 59);
			$timeStop->modify("+{$stopHour} hours +{$stopMinute} minutes");
			$AddTimeStop = $timeStop->format('Y-m-d H:i');
			
			 $Updatetime = "UPDATE `publicservice_tb` SET `PBS_DateStop`='$AddTimeStop' WHERE PBS_ID='$PBSID'";
			if ($conn->query($Updatetime)==TRUE)
			{
				
			}
		}
?>