<?php



// Test for another video
// $email = $_POST['email'];
// echo $email;
// // Test for another video end
// $con = new mysqli("localhost","root","","myemaildata");
// if($con->connect_error){
//     die("Failed to Connect: ".$con->$connect_error)
// }
// else{
//     $stmt = $con->prepare("select * from registration where email = ?");
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $stmt_result = $stmt->get_result();

// }

$email ="";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $conn = new mysqli("localhost","root","","myemaildata");
	// $conn = new mysqli("nnmeqdrilkem9ked.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306",
	//  "uvekkor8ppw3s39i", "oy2hci2sbtwbhs3a", "mk9b4mpsfztl7h0x");
	$cmd = "INSERT into email value ('$email');";
	if(mysqli_query($conn, $cmd)){
        echo ""; 
        // echo ""; 
	}else{
		"try again"; 
	}
}
?> 