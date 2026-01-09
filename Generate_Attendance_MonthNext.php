<?php 
include('Connect.php');


$MonthNext = date('m/Y',strtotime($Date_Start.'+1 month'));

  $CutDate = explode('/',$MonthNext);
  $MonthStep_Next = $CutDate['0'];
  $Years_Num_Next = $CutDate['1'];

  $AttID = $AccID.'-'.$MonthStep_Next;

$NumDateNext = cal_days_in_month(CAL_GREGORIAN,$MonthStep_Next, $Years_Num_Next);

if($NumDateNext == 31)
{
				$SQL_Add = "INSERT INTO attendance_tb (`Att_ID`,`Att_Day`,`Att_Date`,`Att_MonthYear`,`Acc_ID`)
				VALUES
                ('$AttID-001', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/01')))."' , '".date('01/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-002', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/02')))."' , '".date('02/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-003', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/03')))."' , '".date('03/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-004', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/04')))."' , '".date('04/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-005', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/05')))."' , '".date('05/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-006', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/06')))."' , '".date('06/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-007', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/07')))."' , '".date('07/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-008', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/08')))."' , '".date('08/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-009', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/09')))."' , '".date('09/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-010', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/10')))."' , '".date('10/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-011', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/11')))."' , '".date('11/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-012', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/12')))."' , '".date('12/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-013', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/13')))."' , '".date('13/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-014', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/14')))."' , '".date('14/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-015', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/15')))."' , '".date('15/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-016', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/16')))."' , '".date('16/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-017', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/17')))."' , '".date('17/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-018', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/18')))."' , '".date('18/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-019', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/19')))."' , '".date('19/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-020', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/20')))."' , '".date('20/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-021', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/21')))."' , '".date('21/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-022', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/22')))."' , '".date('22/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-023', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/23')))."' , '".date('23/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-024', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/24')))."' , '".date('24/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-025', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/25')))."' , '".date('25/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-026', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/26')))."' , '".date('26/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-027', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/27')))."' , '".date('27/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-028', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/28')))."' , '".date('28/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-029', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/29')))."' , '".date('29/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-030', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/30')))."' , '".date('30/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-031', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/31')))."' , '".date('31/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID')";
				$addResult = $conn->query($SQL_Add);
                // $conn->query($SQL_Add);
}

if($NumDateNext == 30)
{
				$SQL_Add = "INSERT INTO attendance_tb (`Att_ID`,`Att_Day`,`Att_Date`,`Att_MonthYear`,`Acc_ID`)
				VALUES
                ('$AttID-001', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/01')))."' , '".date('01/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-002', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/02')))."' , '".date('02/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-003', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/03')))."' , '".date('03/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-004', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/04')))."' , '".date('04/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-005', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/05')))."' , '".date('05/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-006', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/06')))."' , '".date('06/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-007', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/07')))."' , '".date('07/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-008', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/08')))."' , '".date('08/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-009', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/09')))."' , '".date('09/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-010', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/10')))."' , '".date('10/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-011', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/11')))."' , '".date('11/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-012', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/12')))."' , '".date('12/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-013', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/13')))."' , '".date('13/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-014', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/14')))."' , '".date('14/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-015', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/15')))."' , '".date('15/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-016', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/16')))."' , '".date('16/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-017', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/17')))."' , '".date('17/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-018', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/18')))."' , '".date('18/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-019', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/19')))."' , '".date('19/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-020', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/20')))."' , '".date('20/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-021', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/21')))."' , '".date('21/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-022', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/22')))."' , '".date('22/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-023', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/23')))."' , '".date('23/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-024', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/24')))."' , '".date('24/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-025', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/25')))."' , '".date('25/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-026', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/26')))."' , '".date('26/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-027', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/27')))."' , '".date('27/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-028', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/28')))."' , '".date('28/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-029', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/29')))."' , '".date('29/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-030', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/30')))."' , '".date('30/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID')
				";
				$addResult = $conn->query($SQL_Add);
}

if($NumDateNext == 29)
{
				$SQL_Add = "INSERT INTO attendance_tb (`Att_ID`,`Att_Day`,`Att_Date`,`Att_MonthYear`,`Acc_ID`)
				VALUES
                ('$AttID-001', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/01')))."' , '".date('01/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-002', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/02')))."' , '".date('02/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-003', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/03')))."' , '".date('03/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-004', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/04')))."' , '".date('04/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-005', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/05')))."' , '".date('05/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-006', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/06')))."' , '".date('06/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-007', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/07')))."' , '".date('07/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-008', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/08')))."' , '".date('08/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-009', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/09')))."' , '".date('09/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-010', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/10')))."' , '".date('10/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-011', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/11')))."' , '".date('11/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-012', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/12')))."' , '".date('12/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-013', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/13')))."' , '".date('13/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-014', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/14')))."' , '".date('14/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-015', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/15')))."' , '".date('15/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-016', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/16')))."' , '".date('16/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-017', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/17')))."' , '".date('17/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-018', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/18')))."' , '".date('18/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-019', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/19')))."' , '".date('19/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-020', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/20')))."' , '".date('20/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-021', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/21')))."' , '".date('21/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-022', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/22')))."' , '".date('22/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-023', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/23')))."' , '".date('23/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-024', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/24')))."' , '".date('24/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-025', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/25')))."' , '".date('25/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-026', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/26')))."' , '".date('26/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-027', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/27')))."' , '".date('27/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-028', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/28')))."' , '".date('28/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-029', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/29')))."' , '".date('29/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' , '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID')
				";
				$addResult = $conn->query($SQL_Add);
}

if($NumDateNext == 28)
{
				$SQL_Add = "INSERT INTO attendance_tb (`Att_ID`,`Att_Day`,`Att_Date`,`Att_MonthYear`,`Acc_ID`)
				VALUES
                ('$AttID-001', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/01')))."' ,  '".date('01/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-002', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/02')))."' ,  '".date('02/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-003', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/03')))."' ,  '".date('03/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-004', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/04')))."' ,  '".date('04/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-005', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/05')))."' ,  '".date('05/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-006', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/06')))."' ,  '".date('06/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-007', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/07')))."' ,  '".date('07/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-008', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/08')))."' ,  '".date('08/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-009', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/09')))."' ,  '".date('09/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-010', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/10')))."' ,  '".date('10/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-011', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/11')))."' ,  '".date('11/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-012', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/12')))."' ,  '".date('12/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-013', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/13')))."' ,  '".date('13/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-014', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/14')))."' ,  '".date('14/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-015', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/15')))."' ,  '".date('15/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-016', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/16')))."' ,  '".date('16/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-017', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/17')))."' ,  '".date('17/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-018', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/18')))."' ,  '".date('18/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-019', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/19')))."' ,  '".date('19/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-020', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/20')))."' ,  '".date('20/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-021', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/21')))."' ,  '".date('21/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-022', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/22')))."' ,  '".date('22/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-023', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/23')))."' ,  '".date('23/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-024', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/24')))."' ,  '".date('24/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-025', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/25')))."' ,  '".date('25/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-026', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/26')))."' ,  '".date('26/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-027', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/27')))."' ,  '".date('27/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID'),
                ('$AttID-028', '".date('l', strtotime(date($Years_Num_Next.'/'.$MonthStep_Next.'/28')))."' ,  '".date('28/'.$MonthStep_Next.'/'.$Years_Num_Next.'')."' ,  '".date(''.$MonthStep_Next.'/'.$Years_Num_Next.'')."', '$AccID')
				";
				$addResult = $conn->query($SQL_Add);
}









           


?>