<?php
session_start();
$username = $_SESSION['username'];
//$username = $_POST['username'];


$connect = mysqli_connect('localhost', 'root', '') or die('Database could not connect');
$select = mysqli_select_db( $connect, 'jamfms') or die('Database could not select');

$selectname = "SELECT * from jamfms_r_useraccount as a inner join jamfms_r_accounttype as b on a.acctype_fk = b.acctypeid  where a.username = '$username'";
$nameresult = mysqli_query($connect, $selectname) or die('Bad query: $sql'); 

while ($row = mysqli_fetch_assoc($nameresult) ) {
    $fname = $row['fname'];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $name = $fname .' '. $mname .' '.$lname;
    $userrole = $row['acctype_name'];
    $uid = $row['useraccountID'];
}


if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: login.php');
    exit();
}
if( isset($_POST["logout"]))
{


	$transtype = $_POST['transtype'];
	$insert = "INSERT INTO `audit_trail`( `userid`, `transtype`, `transdatetime`) VALUES ($uid, '$transtype', CURRENT_TIMESTAMP)";
        $audittrail = mysqli_query($connect, $insert) or die("Bad query");
        echo $insert;
        header('Location: login.php');

}



?>