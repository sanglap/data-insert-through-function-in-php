<?php
include_once 'execute.php'; 

{	
	function insertqueryfunction($dbfield,$table) {
   $count = 0;
   $fields = '';

   foreach($dbfield as $col => $val) {
      if ($count++ != 0) $fields .= ', ';
      $col = ($col);
      $val = ($val);
      $fields .= "`$col` = '$val'";
   }
   
   $query = "INSERT INTO $table SET $fields;";
   return $query;
     
} 
	 if(isset($_POST['save']))
{

    // Report all errors
error_reporting(E_ALL);

    // Same as error_reporting(E_ALL);
     ini_set("error_reporting", E_ALL);
     $Email = $_POST['Email'];
     $Password = $_POST['Password'];
     
     $dbfield = array("Email"=>$Email, "Password"=>$Password);

     $querytest =  insertqueryfunction($dbfield,'sanglap');

     if ($conn->query($querytest) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
}  
?>