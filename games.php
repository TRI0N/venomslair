<?php

require_once 'login.php'; 

//This is the string to connect to the database server
$global_dbh = mysql_connect($hostname, $username, $password) or die("Could not connect to database: " . mysql_error());

// This connects you to the database
mysql_select_db($db, $global_dbh) or die("Could not select database: " . mysql_error());

function display_db_query($query_string, $connection, $header_bool, $table_params) {
	// perform the database query
	$result_id = mysql_query($query_string, $connection) or die("display_db_query:" . mysql_error());
	// find out the number of columns in result
	$column_count = mysql_num_fields($result_id) or die("display_db_query:" . mysql_error());
	// Here the table attributes from the $table_params variable are added
	print("<TABLE $table_params >\n");
	// optionally print a bold header at top of table
	if($header_bool) {
		print("<TR>");
		for($column_num = 0; $column_num < $column_count; $column_num++) {
			$field_name = mysql_field_name($result_id, $column_num);
			print("<TH>$field_name</TH>");
		}
		print("</TR>\n");
	}
	// print the body of the table
	while($row = mysql_fetch_row($result_id)) {
		print("<TR ALIGN=LEFT VALIGN=TOP>");
		for($column_num = 0; $column_num < $column_count; $column_num++) {
			print("<TD>$row[$column_num]</TD>\n");
		}
		print("</TR>\n");
	}
	print("</TABLE>\n"); 
}

function display_db_table($tablename, $connection, $header_bool, $table_params) {
	$query_string = "SELECT title, console, last_updated FROM games ORDER BY title ASC";
	display_db_query($query_string, $connection, $header_bool, $table_params);
}
?>
<html>
<head>
<title>My Games</title>
<?php include('header.php'); ?>
</head>
<body>
	<div id="menu"><?php include('menu.php'); ?></div>	
<div id="content">
<span class="boldmed">This will be updated as I get new games and I am able add them to the database</span><br />
<!-- <a href="http://venomslair.com/crook.php">depth</a> -->
<br />
<span class="boldunder">My Gamer Tag</span><br />
I have a XBOX One and I play on XBOX Live.  I am mostly playing GTA V and World of Tanks but I do play a few others.  If you would like to connect with me on XBOX live, please send a request for my gamertag through the helpdesk link on the left and I will send it to you.<br />
<br />
<table>
<tr class="table">
<td>
<?php
//In this example the table name to be displayed is static, but it could be taken from a form
$table = "games";

display_db_table($table, $global_dbh, TRUE, "border='1'");

mysql_close($global_dbh);
?>
</td>
</tr>
</table>
<br />
<br />
<?php include('footer.php'); ?>
</div>
</body>
</html>