<meta charset="UTF-8">
<?php 

date_default_timezone_set('Asia/Bangkok');
 
 
$dateOfBirth = '2002-12-09'; 
$currentDate  = date('Y-m-d'); 
 
echo 'ชื่อ นายณภัทร สายทองสุข : ' .$dateOfBirth;
echo '<hr>';
echo 'รหัสนักศึกษา 644259030';
echo '<hr>';
echo 'มหาวิทยาลัย ราชภัฎนครปฐม';
echo '<hr>';

 
$diff = abs(strtotime($currentDate) - strtotime($dateOfBirth));
 
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


echo date('d/m/Y', strtotime($dateOfBirth));
echo '<h4> นายณภัทร สายทองสุข มีอายุ : ';
printf("%d ปี, %d เดือน, %d วัน\n", $years, $months, $days);
echo '<hr>';
echo 'อยู่ชั้นปีที่  2';



?>