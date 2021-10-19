<?php


include_once '../lib/helpers.php';
// include_once '../lib/helpersLogin.php';


echo "<!DOCTYPE html>";
echo "<html lang='en'>";

// <!-- header -->
include_once '../view/partials/header.php';
echo "<body>";
echo "<div class='wrapper'>";

	// <!-- navbar -->
	include_once '../view/partials/navbar.php';

	// <!-- sidebar -->
	include_once '../view/partials/sidebar.php';

	
	if (isset($_GET['modulo'])) {
		resolve();
	}else{
		// <!-- home -->
		include_once '../view/partials/home.php';
	}
	
echo "</div>";

echo "</body>";


// <!-- footer -->
include_once '../view/partials/footer.php';



echo "</html>";



?>