<?php

	include_once '../lib/helpers.php';
	// include_once '../lib/helpersLogin.php';

	echo "<!DOCTYPE html>";
	echo "<html lang='es'>";

	// <!-- header -->
		include_once '../view/partials/header.php';

		echo "<body>";
		
			// <!-- navbar -->
			include_once '../view/partials/navbar.php';
			// <!-- sidebar -->
			include_once '../view/partials/sidebar.php';
			
			echo "<div class='wrapper'>";

				echo '<div class="main-panel">';

			
					if (isset($_GET['modulo'])) {
						resolve();
					}else{
						// <!-- home -->
						include_once '../view/partials/home.php';
					}

					include_once '../view/partials/copy.php';

				echo '</div>';
		
			echo "</div>";

		echo "</body>";


	// <!-- footer -->
	include_once '../view/partials/footer.php';



	echo "</html>";



	?>