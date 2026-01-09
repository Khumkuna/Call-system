<?php 
include('Connect.php');


$MonthNow = date('m/Y',strtotime($Date_Start));
  $CutDate = explode('/',$MonthNow);
  $MonthStep_Now = $CutDate['0'];
  $Years_Num_Now = $CutDate['1'];

  $AttID = $AccID.'-'.$MonthStep_Now;

$NumDateNow = cal_days_in_month(CAL_GREGORIAN,$MonthStep_Now, $Years_Num_Now);

if($NumDateNow == 31)
{
				$SQL_Add = "INSERT INTO attendance_tb (`Att_ID`,`Att_Day`,`Att_Date`,`Att_MonthYear`,`Acc_ID`)
				VALUES
                ('$AttID-001', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/01')))."' , '".date('01/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-002', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/02')))."' , '".date('02/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-003', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/03')))."' , '".date('03/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-004', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/04')))."' , '".date('04/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-005', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/05')))."' , '".date('05/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-006', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/06')))."' , '".date('06/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-007', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/07')))."' , '".date('07/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-008', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/08')))."' , '".date('08/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-009', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/09')))."' , '".date('09/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-010', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/10')))."' , '".date('10/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-011', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/11')))."' , '".date('11/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-012', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/12')))."' , '".date('12/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-013', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/13')))."' , '".date('13/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-014', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/14')))."' , '".date('14/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-015', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/15')))."' , '".date('15/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-016', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/16')))."' , '".date('16/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-017', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/17')))."' , '".date('17/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-018', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/18')))."' , '".date('18/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-019', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/19')))."' , '".date('19/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-020', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/20')))."' , '".date('20/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-021', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/21')))."' , '".date('21/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-022', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/22')))."' , '".date('22/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-023', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/23')))."' , '".date('23/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-024', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/24')))."' , '".date('24/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-025', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/25')))."' , '".date('25/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-026', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/26')))."' , '".date('26/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-027', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/27')))."' , '".date('27/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-028', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/28')))."' , '".date('28/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-029', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/29')))."' , '".date('29/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-030', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/30')))."' , '".date('30/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-031', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/31')))."' , '".date('31/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID')";
				$addResult = $conn->query($SQL_Add);
                // $conn->query($SQL_Add);
}

if($NumDateNow == 30)
{
				$SQL_Add = "INSERT INTO attendance_tb (`Att_ID`,`Att_Day`,`Att_Date`,`Att_MonthYear`,`Acc_ID`)
				VALUES
                ('$AttID-001', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/01')))."' , '".date('01/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-002', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/02')))."' , '".date('02/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-003', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/03')))."' , '".date('03/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-004', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/04')))."' , '".date('04/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-005', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/05')))."' , '".date('05/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-006', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/06')))."' , '".date('06/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-007', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/07')))."' , '".date('07/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-008', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/08')))."' , '".date('08/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-009', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/09')))."' , '".date('09/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-010', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/10')))."' , '".date('10/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-011', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/11')))."' , '".date('11/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-012', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/12')))."' , '".date('12/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-013', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/13')))."' , '".date('13/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-014', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/14')))."' , '".date('14/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-015', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/15')))."' , '".date('15/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-016', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/16')))."' , '".date('16/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-017', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/17')))."' , '".date('17/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-018', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/18')))."' , '".date('18/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-019', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/19')))."' , '".date('19/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-020', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/20')))."' , '".date('20/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-021', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/21')))."' , '".date('21/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-022', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/22')))."' , '".date('22/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-023', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/23')))."' , '".date('23/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-024', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/24')))."' , '".date('24/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-025', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/25')))."' , '".date('25/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-026', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/26')))."' , '".date('26/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-027', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/27')))."' , '".date('27/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-028', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/28')))."' , '".date('28/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-029', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/29')))."' , '".date('29/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-030', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/30')))."' , '".date('30/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID')
				";
				$addResult = $conn->query($SQL_Add);
}

if($NumDateNow == 29)
{
				$SQL_Add = "INSERT INTO attendance_tb (`Att_ID`,`Att_Day`,`Att_Date`,`Att_MonthYear`,`Acc_ID`)
				VALUES
                ('$AttID-001', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/01')))."' , '".date('01/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-002', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/02')))."' , '".date('02/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-003', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/03')))."' , '".date('03/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-004', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/04')))."' , '".date('04/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-005', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/05')))."' , '".date('05/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-006', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/06')))."' , '".date('06/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-007', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/07')))."' , '".date('07/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-008', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/08')))."' , '".date('08/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-009', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/09')))."' , '".date('09/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-010', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/10')))."' , '".date('10/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-011', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/11')))."' , '".date('11/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-012', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/12')))."' , '".date('12/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-013', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/13')))."' , '".date('13/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-014', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/14')))."' , '".date('14/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-015', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/15')))."' , '".date('15/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-016', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/16')))."' , '".date('16/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-017', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/17')))."' , '".date('17/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-018', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/18')))."' , '".date('18/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-019', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/19')))."' , '".date('19/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-020', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/20')))."' , '".date('20/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-021', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/21')))."' , '".date('21/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-022', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/22')))."' , '".date('22/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-023', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/23')))."' , '".date('23/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-024', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/24')))."' , '".date('24/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-025', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/25')))."' , '".date('25/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-026', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/26')))."' , '".date('26/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-027', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/27')))."' , '".date('27/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-028', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/28')))."' , '".date('28/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-029', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/29')))."' , '".date('29/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' , '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID')
				";
				$addResult = $conn->query($SQL_Add);
}

if($NumDateNow == 28)
{
				$SQL_Add = "INSERT INTO attendance_tb (`Att_ID`,`Att_Day`,`Att_Date`,`Att_MonthYear`,`Acc_ID`)
				VALUES
                ('$AttID-001', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/01')))."' ,  '".date('01/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-002', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/02')))."' ,  '".date('02/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-003', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/03')))."' ,  '".date('03/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-004', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/04')))."' ,  '".date('04/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-005', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/05')))."' ,  '".date('05/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-006', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/06')))."' ,  '".date('06/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-007', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/07')))."' ,  '".date('07/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-008', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/08')))."' ,  '".date('08/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-009', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/09')))."' ,  '".date('09/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-010', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/10')))."' ,  '".date('10/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-011', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/11')))."' ,  '".date('11/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-012', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/12')))."' ,  '".date('12/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-013', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/13')))."' ,  '".date('13/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-014', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/14')))."' ,  '".date('14/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-015', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/15')))."' ,  '".date('15/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-016', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/16')))."' ,  '".date('16/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-017', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/17')))."' ,  '".date('17/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-018', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/18')))."' ,  '".date('18/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-019', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/19')))."' ,  '".date('19/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-020', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/20')))."' ,  '".date('20/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-021', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/21')))."' ,  '".date('21/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-022', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/22')))."' ,  '".date('22/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-023', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/23')))."' ,  '".date('23/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-024', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/24')))."' ,  '".date('24/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-025', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/25')))."' ,  '".date('25/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-026', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/26')))."' ,  '".date('26/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-027', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/27')))."' ,  '".date('27/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID'),
                ('$AttID-028', '".date('l', strtotime(date($Years_Num_Now.'/'.$MonthStep_Now.'/28')))."' ,  '".date('28/'.$MonthStep_Now.'/'.$Years_Num_Now.'')."' ,  '".date(''.$MonthStep_Now.'/'.$Years_Num_Now.'')."', '$AccID')
				";
				$addResult = $conn->query($SQL_Add);
}

?>