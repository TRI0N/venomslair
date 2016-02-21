<?php
//error_reporting(E_ALL) ;

// Set Time Zone Central
date_default_timezone_set('America/Chicago') ;

// Reguest The Log File To Be Viewed
$logFile = $_REQUEST['log_page'] ;
?>
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>IRC Logs</title>
<link rel="stylesheet" href="../../css/mySTYLE.css" />
<div id="mast">
<img src="../../navimages/mast.jpg" width="700" height="100" border="0" alt="mast.jpg" />
</div>
<script type="text/javascript">
// Dynamic Display of Log Files
function showLog() {
   document.getElementById('log_view').style.display = 'none';
   document.getElementById('log_view').style.display = 'block';
}
</script>
<div id="menu"><?php include('../../menu.php'); ?></div>

</head>

<body>
<div id="log_selector">
<h1>Archive Logs for #wwiv</h1>
<table>
<tr>
<td>
2016 Logs
</td>
<td>
2015 Logs
</td>
<td>
2014 Logs
</td>
</tr>
<tr>
<td>
<?php
// Select The Files - Date Is Set Here
$files=glob("wwiv.log.2016*.html") ;

// Build The Drop Box A Tear Apart Filename for Formating
echo '<form method="post" action="" name="log_selector" class="log_selector" enctype="multipart/form-data">' ;
echo '<select name="log_page">' ;
foreach ($files as $file) {
$fileParts = explode( ".", $file ) ;
$fileDate = $fileParts[2] ;
$timestamp = strtotime($fileDate) ;
$day = date('l', $timestamp) ;
var_dump($day) ;
$dateBreak = (str_split($fileDate, 4)) ;
$fileName = (str_split($dateBreak[1], 2)) ;
echo '<option value="'.$file.'">'.$fileName[0].'-'.$fileName[1].' ('.$day.')</option>' ;
}
echo '</select>' ;
echo ' ' ;
echo '<input class="submit" type="submit" value="Display Log" name="submit" onclick="javascript:showLog();">' ;
echo '</form>' ;
?>
</td>
<td>
<?php
// Select The Files - Date Is Set Here
$files=glob("wwiv.log.2015*.html") ;

// Build The Drop Box A Tear Apart Filename for Formating
echo '<form method="post" action="" name="log_selector" class="log_selector" enctype="multipart/form-data">' ;
echo '<select name="log_page">' ;
foreach ($files as $file) {
$fileParts = explode( ".", $file ) ;
$fileDate = $fileParts[2] ;
$timestamp = strtotime($fileDate) ;
$day = date('l', $timestamp) ;
var_dump($day) ;
$dateBreak = (str_split($fileDate, 4)) ;
$fileName = (str_split($dateBreak[1], 2)) ;
echo '<option value="'.$file.'">'.$fileName[0].'-'.$fileName[1].' ('.$day.')</option>' ;
}
echo '</select>' ;
echo ' ' ;
echo '<input class="submit" type="submit" value="Display Log" name="submit" onclick="javascript:showLog();">' ;
echo '</form>' ;
?>
</td>
<td>
<?php
// Select The Files - Date Is Set Here
$files=glob("wwiv.log.2014*.html") ;

// Build The Drop Box A Tear Apart Filename for Formating
echo '<form method="post" action="" name="log_selector" class="log_selector" enctype="multipart/form-data">' ;
echo '<select name="log_page">' ;
foreach ($files as $file) {
$fileParts = explode( ".", $file ) ;
$fileDate = $fileParts[2] ;
$timestamp = strtotime($fileDate) ;
$day = date('l', $timestamp) ;
var_dump($day) ;
$dateBreak = (str_split($fileDate, 4)) ;
$fileName = (str_split($dateBreak[1], 2)) ;
echo '<option value="'.$file.'">'.$fileName[0].'-'.$fileName[1].' ('.$day.')</option>' ;
}
echo '</select>' ;
echo ' ' ;
echo '<input class="submit" type="submit" value="Display Log" name="submit" onclick="javascript:showLog();">' ;
echo '</form>' ;
?>
</td>

</tr>
</table>
</div>
<div id="log_view">
<!-- LOGS WILL BE DISPLAYED HERE -->
<?php
if ($logFile)
{
include ($logFile) ;
}
?>
</div>
</body>

</html>
