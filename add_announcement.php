<?php
include_once 'database.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $announcement = $_POST['announcement'];
 $recipient = $_POST['recipient'];
 $announcer_name = $_POST['announcer_name'];
 // variables for input data
 
 // sql query for inserting data into database
 
$sql_query = "INSERT INTO announcements(announcement,recipient,announcer_name) VALUES('$announcement','$recipient','$announcer_name')";
mysql_query($sql_query);
        
        // sql query for inserting data into database
 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Announcement</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Add New Announcement</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post"z>
    <table align="center">
    <tr>
    <td align="center"><a href="announcements.php">Main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="announcement" placeholder="Announcement" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="recipient" placeholder="Recipient" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="announcer_name" placeholder="Announcer" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>