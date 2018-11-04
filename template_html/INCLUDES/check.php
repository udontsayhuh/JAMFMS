<?php 



if (isset ($_POST['username'])) {
$connect = mysqli_connect('localhost', 'root', '') or die('Database could not connect');
$select = mysqli_select_db( $connect, 'jamfms') or die('Database could not select');
$username = mysqli_real_escape_string($connect,$_POST['username']);
 $check = mysqli_query($connect, "SELECT username FROM jamfms_r_useraccount where username = '$username'");
 $checkrows = mysqli_num_rows($check);

if ($username==NULL)
	echo "Choose a username";
elseif (strlen($username) <=6) 
	echo "Username should be more than 6 characters!";

	
	elseif ($checkrows == 1) {
		echo "Username is already taken!";
	}


}
/*$connect = mysqli_connect('localhost', 'root', '') or die('Database could not connect');
$select = mysqli_select_db( $connect, 'jamfms') or die('Database could not select');
if(isset($_POST["user_name"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["user_name"]);
 $query = "SELECT * FROM jamfms_r_useraccount WHERE username = '".$username."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
*/

?>