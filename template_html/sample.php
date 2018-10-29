 <?php

 include('INCLUDES/connect.php');

 $tablesql = "SELECT *, IF (A.useracc_status = 0,'Active', 'inactive') AS userstatus FROM jamfms_r_useraccount as A inner join jamfms_r_accounttype as B ON B.acctypeid = A.acctype_fk where useracc_status = 0 ORDER BY A.useraccountID DESC";
                                                $tableresult = mysqli_query($connect, $tablesql) or die("Bad query: $sql");

                                                while ($row = mysqli_fetch_assoc($tableresult)) {
                                                	$ID = $row['useraccountID'];
                                                    $fname = $row['fname'];
                                                    $mname = $row['mname'];
                                                    $lname = $row['lname'];
                                                    $acctype = $row['acctype_name'];
                                                    $status = $row['userstatus'];

if ($status == "Active"){
                                              
                                          		echo 'Active';
                                          	}
                                          	
                                          			else if ($status == "inactive")
                                          	
                                          		echo 'inactive';
                                          }
?>