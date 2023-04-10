<?php

include('connection.php');

?>
<body>
<?php
$rid=$_POST['rid'];
$cname = $_POST['cname'];
$s1 = $_POST['dec'];
$query = 'UPDATE courses set Course_Name ="'.$cname.'",
					Course_Description ="'.$s1.'" WHERE
					Course_ID ="'.$rid.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Course Updated Successfully.");
			window.location = "addcourse.php";
		</script>
</body>