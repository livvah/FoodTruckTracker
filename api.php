<?php

$db = new mysqli('localhost', 'gmorancr_phpuser', 'fcb5296', 'gmorancr_FoodTrucks');

if ($db->connect_errno > 0) {
	 die('Unable to connect to database [' . $db->connect_error . ']');
}


function getFoodTrucksAtLocation($locationID) {

   	$user = $db -> escape_string($user);
   	$sql = "SELECT locationID, truckName FROM FoodTruckLocation, FoodTruck where FoodTruckLocation.truckID = FoodTruck.truckID and $locationID = FoodTruckLocation.locationID";

   	if (!$result = $db->query($sql)) {
		die('There was an error running the query [' . $db->error . ']');
   	}
   	while($row = $result->fetch_assoc()) {
		echo $row['truckName'] . '<br />';

   	}
   	$result->free();

}

function getFoodTruckMenuItems($truckName){

	$user = $db -> escape_string($user);
	$sql = "SELECT menuItemName, menuItemPrice, from Menu, FoodTruck where Menu.truckID = FoodTruck.truckID and FoodTruck.truckName = $truckName"

	while($row = $result->fetch_assoc()) {
	echo $row['menuItemName']
	echo $row['menuItemPrice'] . '<br />';

	}

	$result->free();

}

function getFoodTruckHours($truckName){

	$user = $db -> escape_string($user);
	$sql = 	"SELECT openingTime, closingTime, daysOpen from Hours, FoodTruck where Hours.hoursID = FoodTruck.hoursID and FoodTruck.truckName = $truckName"

	while($row = $result->fetch_assoc()) {
	echo $row['openingTime']
	echo $row['closingTime']
	echo $row['daysOpen']. '<br />';

	$result->free();

}

function getFoodTruckRating($truckName){

	$user = $db -> escape_string($user);
	$sql = "SELECT ratingNumber, customerName from Rating, CustomerRating, Customer, FoodTruck where Rating.ratingID = CustomerRating.ratingID and Customer.customerID = CustomerRating.customerID and Rating.truckID = FoodTruck.truckID and FoodTruck.truckName = $truckName "

	while($row = $result->fetch_assoc()) {
	echo $row['ratingNumberg']
	echo $row['customerName'] . '<br />';

	$result->free();

}

function getFoodTruckContact($truckName){

	$user = $db -> escape_string($user);
	$sql = "SELECT truckPhone, truckEmail from FoodTruck where truckName = $truckName"


	while($row = $result->fetch_assoc()) {
	echo $row['truckPhone']
	echo $row['truckEmail'] . '<br />';

	$result->free();

}

function addNewFoodTruck($hoursID, $openingTime, $closingTime, $daysOpen, $truckID, $truckName, $truckPhone, $truckEmail, $menuID, $menuItemName, $menuItemPrice){

	insert into Hours values(hoursID, openingTime , closingTime, daysOpen);
	insert into FoodTruck values(truckID, truckName, truckPhone, truckEmail, hoursID);
	insert into Menu values(menuID, menuItemName, menuItemPrice, truckID);

}

function addNewRating(){

	insert into 

}

else{

	getFoodTrucksAtLocation($locationID);

	getFoodTruckMenuItems($truckName);

	getFoodTruckHours($truckName);

	getFoodTruckRating($truckName);

	getFoodTruckContact($truckName);

	addNewFoodTruck($hoursID, $openingTime, $closingTime, $daysOpen, $truckID, $truckName, $truckPhone, $truckEmail, $menuID, $menuItemName, $menuItemPrice)

}


?>
