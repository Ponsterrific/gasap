<?php
include_once 'database.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM announcements WHERE announcement_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
  $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $announcement = $_POST['announcement'];
 $recipient = $_POST['recipient'];
 $announcer_name = $_POST['announcer_name'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE announcements SET announcement='announcement',recipient='$recipient',announcer_name='$announcer_name' WHERE announcement_id=".$_GET['edit_id'];
        mysql_query($sql_query));
 // sql query for update data into database 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Announcement</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="announcement" placeholder="Announcement" value="<?php echo $fetched_row['announcement']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="recipient" placeholder="Recipient" value="<?php echo $fetched_row['recipient']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="announcer_name" placeholder="Announcer" value="<?php echo $fetched_row['announcer_name']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>