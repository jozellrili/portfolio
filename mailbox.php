<?php
include('./database/db_connection.php');
include('test_input.php');

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($message)) {
	$sql = ("INSERT INTO mailbox (fname, lname, email, phone, message) VALUES ('$fname', '$lname', '$email', '$phone', '$message')");
	mysqli_query($con, $sql);
}
else {
	echo '
		<script type="text/javascript">
			alert("fill all the required fields!");
		</script>
	';
}

?>