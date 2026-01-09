<?php 

include('Connect.php');


if (isset($_POST['Gen_Date']))
{

	$_SESSION['ACC_ID']= $_POST['ACC_ID'];

}

	$ACC_ID = $_SESSION['ACC_ID'];


	for($i = 21;$i <= 32; $i++)
	{		
		$Check_NoMonth = "Select * From datetime_tb where ACC_ID = '$ACC_ID' ORDER BY DT_NoMonth DESC LIMIT 1";
		$result_Check_NoMonth =mysqli_query($conn,$Check_NoMonth);
		$row_Check_NoMonth =mysqli_fetch_array($result_Check_NoMonth);
		$DT_NoMonth = $row_Check_NoMonth['DT_NoMonth'];
		$Get_MonthYear = $row_Check_NoMonth['DT_MonthYear'];

	
		if($i==1){$MonthStep ="05"; $YearNow = "2566"; $Loopyear = "2023"; $DT_NoMonth = "01";}
		elseif($i==2){$MonthStep ="06"; $YearNow = "2566"; $Loopyear = "2023"; $DT_NoMonth = "02";}
		elseif($i==3){$MonthStep ="07"; $YearNow = "2566"; $Loopyear = "2023"; $DT_NoMonth = "03";}
		elseif($i==4){$MonthStep ="08"; $YearNow = "2566"; $Loopyear = "2023"; $DT_NoMonth = "04";}
		elseif($i==5){$MonthStep ="09"; $YearNow = "2566"; $Loopyear = "2023"; $DT_NoMonth = "05";}
		elseif($i==6){$MonthStep ="10"; $YearNow = "2566"; $Loopyear = "2023"; $DT_NoMonth = "06";}
		elseif($i==7){$MonthStep ="11"; $YearNow = "2566"; $Loopyear = "2023"; $DT_NoMonth = "07";}
		elseif($i==8){$MonthStep ="12"; $YearNow = "2566"; $Loopyear = "2023"; $DT_NoMonth = "08";}
		elseif($i==9){$MonthStep ="01"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "09";}
		elseif($i==10){$MonthStep ="02"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "10";}
		elseif($i==11){$MonthStep ="03"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "11";}
		elseif($i==12){$MonthStep ="04"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "12";}
		elseif($i==13){$MonthStep ="05"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "13";}
		elseif($i==14){$MonthStep ="06"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "14";}
		elseif($i==15){$MonthStep ="07"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "15";}
		elseif($i==16){$MonthStep ="08"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "16";}
		elseif($i==17){$MonthStep ="09"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "17";}
		elseif($i==18){$MonthStep ="10"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "18";}
		elseif($i==19){$MonthStep ="11"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "19";}
		elseif($i==20){$MonthStep ="12"; $YearNow = "2567"; $Loopyear = "2024"; $DT_NoMonth = "20";}
		elseif($i==21){$MonthStep ="01"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "21";}
		elseif($i==22){$MonthStep ="02"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "22";}
		elseif($i==23){$MonthStep ="03"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "23";}
		elseif($i==24){$MonthStep ="04"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "24";}
		elseif($i==25){$MonthStep ="05"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "25";}
		elseif($i==26){$MonthStep ="06"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "26";}
		elseif($i==27){$MonthStep ="07"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "27";}
		elseif($i==28){$MonthStep ="08"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "28";}
		elseif($i==29){$MonthStep ="09"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "29";}
		elseif($i==30){$MonthStep ="10"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "30";}
		elseif($i==31){$MonthStep ="11"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "31";}
		elseif($i==32){$MonthStep ="12"; $YearNow = "2568"; $Loopyear = "2025"; $DT_NoMonth = "32";}
		elseif($i==33){$MonthStep ="01"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "33";}
		elseif($i==34){$MonthStep ="02"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "34";}
		elseif($i==35){$MonthStep ="03"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "35";}
		elseif($i==36){$MonthStep ="04"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "36";}
		elseif($i==37){$MonthStep ="05"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "37";}
		elseif($i==38){$MonthStep ="06"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "38";}
		elseif($i==39){$MonthStep ="07"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "39";}
		elseif($i==40){$MonthStep ="08"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "40";}
		elseif($i==41){$MonthStep ="09"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "41";}
		elseif($i==42){$MonthStep ="10"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "42";}
		elseif($i==43){$MonthStep ="11"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "43";}
		elseif($i==44){$MonthStep ="12"; $YearNow = "2569"; $Loopyear = "2026"; $DT_NoMonth = "44";}
		elseif($i==45){$MonthStep ="01"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "45";}
		elseif($i==46){$MonthStep ="02"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "46";}
		elseif($i==47){$MonthStep ="03"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "47";}
		elseif($i==48){$MonthStep ="04"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "48";}
		elseif($i==49){$MonthStep ="05"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "49";}
		elseif($i==50){$MonthStep ="06"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "50";}
		elseif($i==51){$MonthStep ="07"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "51";}
		elseif($i==52){$MonthStep ="08"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "52";}
		elseif($i==53){$MonthStep ="09"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "53";}
		elseif($i==54){$MonthStep ="10"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "54";}
		elseif($i==55){$MonthStep ="11"; $YearNow = "2570"; $Loopyear = "2027"; $DT_NoMonth = "55";}
		elseif($i==56){$MonthStep ="12"; $YearNow = "2571"; $Loopyear = "2028"; $DT_NoMonth = "56";}
		elseif($i==57){$MonthStep ="01"; $YearNow = "2571"; $Loopyear = "2028"; $DT_NoMonth = "57";}
		

		
	
		$Check_ID = "Select * From datetime_tb where ACC_ID = '$ACC_ID' ORDER BY DT_ID DESC LIMIT 1";
		$result_Check_ID =mysqli_query($conn,$Check_ID);
		$row_Check_ID =mysqli_fetch_array($result_Check_ID);
		$Last_id = $row_Check_ID['DT_ID'];
		$Rest = substr($Last_id, -3);
		$Insert_id = $Rest + 1;
		$ars = sprintf("%03d", $Insert_id);
		$ref = "DT";
		$DT_ID = $ACC_ID.''.$MonthStep.''.$YearNow;

		$MY = $MonthStep.'/'.$YearNow;

		$DT_Work = "";
	
			$Years_Num = date("yyyy");
			$NumDate = cal_days_in_month(CAL_GREGORIAN,$MonthStep, $Years_Num);



			if($NumDate == 31)
				{
					$SQL_Add = "INSERT INTO `datetime_tb` (`DT_ID`,`DT_Day`,`DT_Date`,`DT_MonthYear`,`DT_Time_IN`, `DT_Time_Out`, `ACC_ID`, `DT_Remark`, `DT_Status`, `DT_Filename`, `DT_Work`, `DT_NoMonth`)
					VALUES
					('$DT_ID-001', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/01')))."' ,  '".date('01/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-002', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/02')))."' ,  '".date('02/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-003', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/03')))."' ,  '".date('03/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-004', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/04')))."' ,  '".date('04/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-005', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/05')))."' ,  '".date('05/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-006', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/06')))."' ,  '".date('06/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-007', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/07')))."' ,  '".date('07/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-008', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/08')))."' ,  '".date('08/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-009', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/09')))."' ,  '".date('09/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-010', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/10')))."' ,  '".date('10/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-011', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/11')))."' ,  '".date('11/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-012', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/12')))."' ,  '".date('12/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-013', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/13')))."' ,  '".date('13/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-014', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/14')))."' ,  '".date('14/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-015', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/15')))."' ,  '".date('15/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-016', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/16')))."' ,  '".date('16/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-017', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/17')))."' ,  '".date('17/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-018', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/18')))."' ,  '".date('18/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-019', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/19')))."' ,  '".date('19/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-020', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/20')))."' ,  '".date('20/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-021', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/21')))."' ,  '".date('21/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-022', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/22')))."' ,  '".date('22/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-023', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/23')))."' ,  '".date('23/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-024', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/24')))."' ,  '".date('24/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-025', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/25')))."' ,  '".date('25/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-026', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/26')))."' ,  '".date('26/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-027', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/27')))."' ,  '".date('27/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-028', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/28')))."' ,  '".date('28/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-029', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/29')))."' ,  '".date('29/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-030', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/30')))."' ,  '".date('30/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
					('$DT_ID-031', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/31')))."' ,  '".date('31/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth')";
					$addResult = $conn->query($SQL_Add);


					
				}
			elseif($NumDate == 30)
			{
				$SQL_Add = "INSERT INTO `datetime_tb` (`DT_ID`,`DT_Day`,`DT_Date`,`DT_MonthYear`,`DT_Time_IN`, `DT_Time_Out`, `ACC_ID`, `DT_Remark`, `DT_Status`, `DT_Filename`, `DT_Work`, `DT_NoMonth`)
				VALUES
				('$DT_ID-001', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/01')))."' ,  '".date('01/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-002', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/02')))."' ,  '".date('02/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-003', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/03')))."' ,  '".date('03/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-004', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/04')))."' ,  '".date('04/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-005', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/05')))."' ,  '".date('05/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-006', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/06')))."' ,  '".date('06/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-007', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/07')))."' ,  '".date('07/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-008', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/08')))."' ,  '".date('08/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-009', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/09')))."' ,  '".date('09/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-010', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/10')))."' ,  '".date('10/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-011', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/11')))."' ,  '".date('11/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-012', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/12')))."' ,  '".date('12/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-013', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/13')))."' ,  '".date('13/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-014', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/14')))."' ,  '".date('14/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-015', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/15')))."' ,  '".date('15/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-016', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/16')))."' ,  '".date('16/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-017', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/17')))."' ,  '".date('17/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-018', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/18')))."' ,  '".date('18/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-019', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/19')))."' ,  '".date('19/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-020', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/20')))."' ,  '".date('20/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-021', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/21')))."' ,  '".date('21/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-022', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/22')))."' ,  '".date('22/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-023', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/23')))."' ,  '".date('23/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-024', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/24')))."' ,  '".date('24/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-025', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/25')))."' ,  '".date('25/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-026', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/26')))."' ,  '".date('26/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-027', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/27')))."' ,  '".date('27/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-028', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/28')))."' ,  '".date('28/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-029', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/29')))."' ,  '".date('29/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-030', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/30')))."' ,  '".date('30/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth')";
				$addResult = $conn->query($SQL_Add);

				
			}
			elseif($NumDate == 29)
			{
				$SQL_Add = "INSERT INTO `datetime_tb` (`DT_ID`,`DT_Day`,`DT_Date`,`DT_MonthYear`,`DT_Time_IN`, `DT_Time_Out`, `ACC_ID`, `DT_Remark`, `DT_Status`, `DT_Filename`, `DT_Work`, `DT_NoMonth`)
				VALUES
				('$DT_ID-001', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/01')))."' ,  '".date('01/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-002', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/02')))."' ,  '".date('02/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-003', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/03')))."' ,  '".date('03/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-004', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/04')))."' ,  '".date('04/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-005', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/05')))."' ,  '".date('05/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-006', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/06')))."' ,  '".date('06/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-007', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/07')))."' ,  '".date('07/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-008', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/08')))."' ,  '".date('08/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-009', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/09')))."' ,  '".date('09/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-010', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/10')))."' ,  '".date('10/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-011', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/11')))."' ,  '".date('11/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-012', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/12')))."' ,  '".date('12/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-013', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/13')))."' ,  '".date('13/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-014', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/14')))."' ,  '".date('14/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-015', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/15')))."' ,  '".date('15/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-016', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/16')))."' ,  '".date('16/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-017', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/17')))."' ,  '".date('17/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-018', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/18')))."' ,  '".date('18/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-019', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/19')))."' ,  '".date('19/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-020', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/20')))."' ,  '".date('20/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-021', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/21')))."' ,  '".date('21/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-022', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/22')))."' ,  '".date('22/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-023', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/23')))."' ,  '".date('23/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-024', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/24')))."' ,  '".date('24/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-025', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/25')))."' ,  '".date('25/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-026', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/26')))."' ,  '".date('26/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-027', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/27')))."' ,  '".date('27/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-028', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/28')))."' ,  '".date('28/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-029', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/29')))."' ,  '".date('29/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth')";
				$addResult = $conn->query($SQL_Add);

				
			}
			elseif($NumDate == 28)
			{
				$SQL_Add = "INSERT INTO `datetime_tb` (`DT_ID`,`DT_Day`,`DT_Date`,`DT_MonthYear`,`DT_Time_IN`, `DT_Time_Out`, `ACC_ID`, `DT_Remark`, `DT_Status`, `DT_Filename`, `DT_Work`, `DT_NoMonth`)
				VALUES
				('$DT_ID-001', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/01')))."' ,  '".date('01/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-002', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/02')))."' ,  '".date('02/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-003', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/03')))."' ,  '".date('03/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-004', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/04')))."' ,  '".date('04/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-005', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/05')))."' ,  '".date('05/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-006', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/06')))."' ,  '".date('06/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-007', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/07')))."' ,  '".date('07/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-008', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/08')))."' ,  '".date('08/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-009', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/09')))."' ,  '".date('09/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-010', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/10')))."' ,  '".date('10/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-011', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/11')))."' ,  '".date('11/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-012', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/12')))."' ,  '".date('12/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-013', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/13')))."' ,  '".date('13/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-014', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/14')))."' ,  '".date('14/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-015', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/15')))."' ,  '".date('15/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-016', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/16')))."' ,  '".date('16/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-017', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/17')))."' ,  '".date('17/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-018', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/18')))."' ,  '".date('18/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-019', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/19')))."' ,  '".date('19/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-020', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/20')))."' ,  '".date('20/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-021', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/21')))."' ,  '".date('21/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-022', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/22')))."' ,  '".date('22/'.$MonthStep.'/'.$YearNow.'')."' ,  '".date(''.$MonthStep.'/'.$YearNow.'')."' ,'-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-023', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/23')))."' ,  '".date('23/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-024', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/24')))."' ,  '".date('24/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-025', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/25')))."' ,  '".date('25/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-026', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/26')))."' ,  '".date('26/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-027', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/27')))."' ,  '".date('27/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth'),
				('$DT_ID-028', '".date('l', strtotime(date($Loopyear.'/'.$MonthStep.'/28')))."' ,  '".date('28/'.$MonthStep.'/'.$YearNow.'')."' ,   '".date(''.$MonthStep.'/'.$YearNow.'')."','-','00:00','$ACC_ID','-','-','-','$DT_Work','$DT_NoMonth')";
				$addResult = $conn->query($SQL_Add);

				
			}

			$sql_DT="Select * from datetime_tb WHERE DT_Work ='' And ACC_ID ='$ACC_ID'";
					$query_DT=mysqli_query($conn,$sql_DT);
					while ($data_DT=mysqli_fetch_array($query_DT)) 
					{
						$GDT_Date = $data_DT['DT_Date'];
						$GDT_MonthYear = $data_DT['DT_MonthYear'];
						$GDT_ID = $data_DT['DT_ID'];

						if($GDT_MonthYear == '05/2566' || $GDT_MonthYear == '06/2566' || $GDT_MonthYear == '07/2566' || $GDT_MonthYear == '08/2566' || $GDT_MonthYear == '09/2566' || $GDT_MonthYear == '10/2566' ){ $DT_Work = "งวดงานที่ 2"; }
						if($GDT_MonthYear == '11/2566'){  
							if($GDT_Date <= '13/11/2566' )	{ $DT_Work = "งวดงานที่ 2";  } 
							elseif($GDT_Date >= '14/11/2566' &&  $GDT_Date <= '30/11/2566')	{ $DT_Work = "งวดงานที่ 3"; }
						}
						if( $GDT_MonthYear == '12/2566'|| $GDT_MonthYear == '01/2567' || $GDT_MonthYear == '02/2567' || $GDT_MonthYear == '03/2567' || $GDT_MonthYear == '04/2567' ){ $DT_Work = "งวดงานที่ 3"; }
						if($GDT_MonthYear == '05/2567'){  
							if($GDT_Date <= '11/05/2567' )	{ $DT_Work = "งวดงานที่ 3";  } 
							elseif($GDT_Date >= '12/05/2567' &&  $GDT_Date <= '31/05/2567')	{ $DT_Work = "งวดงานที่ 4"; }
						}
						if($GDT_MonthYear == '06/2567' || $GDT_MonthYear == '07/2567' || $GDT_MonthYear == '08/2567' || $GDT_MonthYear == '09/2567' || $GDT_MonthYear == '10/2567'){ $DT_Work = "งวดงานที่ 4"; }
						if($GDT_MonthYear == '11/2567'){  
							if($GDT_Date <= '07/11/2567' )	{ $DT_Work = "งวดงานที่ 4";  } 
							elseif($GDT_Date >= '08/11/2567' &&  $GDT_Date <= '30/11/2567')	{ $DT_Work = "งวดงานที่ 5"; }
						}
						
						if($GDT_MonthYear == '12/2567' || $GDT_MonthYear == '01/2568' || $GDT_MonthYear == '02/2568' || $GDT_MonthYear == '03/2568' || $GDT_MonthYear == '04/2568'){ $DT_Work = "งวดงานที่ 5"; }
						if($GDT_MonthYear == '05/2568'){  
							if($GDT_Date <= '06/05/2568' )	{ $DT_Work = "งวดงานที่ 5";  } 
							elseif($GDT_Date >= '07/05/2568' &&  $GDT_Date <= '31/05/2568')	{ $DT_Work = "งวดงานที่ 6"; }
						}
						if($GDT_MonthYear == '06/2568' || $GDT_MonthYear == '07/2568' || $GDT_MonthYear == '08/2568' || $GDT_MonthYear == '09/2568' || $GDT_MonthYear == '10/2568'){ $DT_Work = "งวดงานที่ 6"; }
						if($GDT_MonthYear == '11/2568'){  
							if($GDT_Date <= '02/11/2568' ){	$DT_Work = "งวดงานที่ 6";  } 
							elseif($GDT_Date >= '03/11/2568' &&  $GDT_Date <= '30/11/2568')	{$DT_Work = "งวดงานที่ 7"; 	}
						}




						if($GDT_MonthYear == '12/2568' || $GDT_MonthYear == '01/2569' || $GDT_MonthYear == '02/2569' || $GDT_MonthYear == '03/2569' || $GDT_MonthYear == '04/2569'){ $DT_Work = "งวดงานที่ 7"; }
						if($GDT_MonthYear == '05/2569'){  
							if($GDT_Date <= '01/05/2569' ){	$DT_Work = "งวดงานที่ 7";  } 
							elseif($GDT_Date >= '02/05/2569' &&  $GDT_Date <= '31/05/2569')	{$DT_Work = "งวดงานที่ 8"; 	}
						}
						
						
						
						if($GDT_MonthYear == '06/2569' || $GDT_MonthYear == '07/2569' || $GDT_MonthYear == '08/2569' || $GDT_MonthYear == '09/2569' ){ $DT_Work = "งวดงานที่ 8"; }
						if($GDT_MonthYear == '10/2569'){  
							if($GDT_Date <= '28/10/2569' ){	$DT_Work = "งวดงานที่ 8";  } 
							elseif($GDT_Date == '29/10/2569' &&  $GDT_Date <= '31/10/2569')	{$DT_Work = "งวดงานที่ 9"; 	} 
						}



						if($GDT_MonthYear == '11/2569' || $GDT_MonthYear == '12/2569' || $GDT_MonthYear == '01/2570' || $GDT_MonthYear == '02/2570' || $GDT_MonthYear == '03/2570'){ $DT_Work = "งวดงานที่ 9"; }
						if($GDT_MonthYear == '04/2570'){  
							if($GDT_Date <= '26/04/2570' ){	$DT_Work = "งวดงานที่ 9";  } 
							elseif($GDT_Date >= '27/04/2570' &&  $GDT_Date <= '30/04/2570')	{$DT_Work = "งวดงานที่ 10"; } 
						}

						if($GDT_MonthYear == '05/2570' || $GDT_MonthYear == '06/2570' || $GDT_MonthYear == '07/2570' || $GDT_MonthYear == '08/2570' || $GDT_MonthYear == '09/2570'){ $DT_Work = "งวดงานที่ 10"; }
						if($GDT_MonthYear == '10/2570'){  
							if($GDT_Date <= '23/10/2570' ){	$DT_Work = "งวดงานที่ 10";  } 
							elseif($GDT_Date >= '24/10/2570' &&  $GDT_Date <= '31/10/2570')	{$DT_Work = "งวดงานที่ 11"; 	} 
						}

						if($GDT_MonthYear == '11/2570' || $GDT_MonthYear == '12/2570' || $GDT_MonthYear == '01/2571' || $GDT_MonthYear == '02/2571' || $GDT_MonthYear == '03/2571'){ $DT_Work = "งวดงานที่ 11"; }
						
											

						$SQL_Account = "UPDATE datetime_tb SET DT_Work='$DT_Work' where DT_ID = '$GDT_ID'";
							if ($conn->query($SQL_Account)==TRUE) {
								header("Location:Home-User.php");
							} 
					}
	}

?>