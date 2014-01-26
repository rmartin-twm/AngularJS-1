<?php
    require_once('variables.php');

    // Create Database Connection
    $dbc = mysqli_connect(HOST, USER, PASSWD, DATABASE) or die ('Database Connection Fail'); 
	
    // Create Query
    $query = "SELECT quotes FROM handyquotes ORDER BY RAND() LIMIT 1";
	
    // Talk With Database And Store Data In $result
    $result = mysqli_query($dbc, $query) or die ('Query Failed');
	
	// Create An Array
	$quoteArray = array();
	while($row = mysqli_fetch_array($result)){
		array_push($quoteArray, array('quote' => $row['quotes'] ));
	}
	
    // Put Array Information Into JSON
    echo json_encode($quoteArray);
	
    // Close Database Connection
    mysqli_close($dbc);
?>