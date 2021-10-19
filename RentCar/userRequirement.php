<?php
	
	setcookie("Vehicle_Rent", "Rent Vehicles", time() + 86400);

	$custName = $_POST['customerName'];
	$nicNum = $_POST['idNumber'];
	$route = $_POST['routeDestination'];
	$numOfPassengers = $_POST['numOfPassengers'];
	$date = $_POST['date'];

	
	$conn = new mysqli("localhost:3307","root","","dogdata");

	$insert_query = "CALL insertData ('$custName','$nicNum','$route','$numOfPassengers','$date')";

	if(mysqli_query($conn,$insert_query)){
		echo '<script type = "text/javascript">';
		echo 'alert("your Request Saved")';
		echo '</script>';
	}
	mysqli_close($conn);


	class Vehicle{
		public function Category01(){
			echo "<center>";
			echo "<h4>Vehicle Category 01</h4>";
			echo "Maruty Suzuki : Rs70 for one KM";echo "<br>";
			echo "Passo : Rs85 for one KM";echo "<br>";
		}

		public function Category02(){
			echo "<center>";
			echo "<h4>Vehicle Category 02</h4>";
			echo "Toyota Corolla 121 : Rs 100 for one KM";echo "<br>";
			echo "Suzuki Wagon : Rs 90 for one KM";echo "<br>";
			echo "Toyota Premio and Allion : Rs 120 for one KM";echo "<br>";
			echo "Honda Vezel : Rs 110 for one KM";echo "<br>";
		}

		public function Category03(){
			echo "<center>";
			echo "<h4>Vehicle Category 03</h4>";
			echo "Toyota Noah Van : Rs 150 for one KM";echo "<br>";
			echo "DFSK Glory car : Rs 140 for one KM";echo "<br>";
		}

		public function Category04(){
			echo "<center>";
			echo "<h4>Vehicle Category 04</h4>";
			echo "Toyota KDH Van : Rs 170 for one KM";echo "<br>";
			echo "Nissan Caravan : Rs 165 for one KM";echo "<br>";
		}
	}

	$obj = new Vehicle;
	echo "<center><h2> Vehicles for Rent </h2><br><h3>You can select from this categories</h3></center>";
	if ($numOfPassengers <= 4){
		$obj -> Category01();
		$obj -> Category02();	
	}elseif($numOfPassengers == 5){
		$obj -> Category02();
	}elseif ($numOfPassengers > 5 && $numOfPassengers <= 7) {
		$obj -> Category03();
	}elseif ($numOfPassengers > 7 && $numOfPassengers <= 13) {
		$obj -> Category04();
	}else{
		echo "We have no vehicle for your strength";
	}

	
?>