<?php
$day = date ("D");
switch ($day) {
    case "Sun" : $hari = "Minggu"; break;
	case "Mon" : $hari = "Senin"; break;
	case "Tue" : $hari = "Selasa"; break;
	case "Wed" : $hari = "Rabu"; break;
	case "Thu" : $hari = "Kamis"; break;
	case "Fri" : $hari = "Jumat"; break;
	case "Sat" : $hari = "Sabtu"; break;
	default    : $hari = "Kiamat";
}
$month = date ("M");
switch ($month){
	case "Jan" : $bulan = "Januari" break;
	case "Feb" : $bulan = "Februari" break;
	case "Mar" : $bulan = "Maret" break;
	case "Apr" : $bulan = "April" break;
	case "May" : $bulan = "Mei" break;
	case "Jun" : $bulan = "Juni" break;
	case "Jul" : $bulan = "Juli" break;
	case "Aug" : $bulan = "Augustus" break;
	case "Sep" : $bulan = "September" break;
	case "Oct" : $bulan = "Oktober" break;
	case "Nov" : $bulan = "November" break;
	case "Des" : $bulan = "Desember" break;
    default    : $bulan = "Zaman Purba";
}	
echo "Hari ini hari <b>$hari</b>";
echo "Bulan<b>$bulan</b>";	
?>	