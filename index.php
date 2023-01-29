<?php
	$title = "Sushi Rolls Recipe";

    $ingredients = array("Sushi Rice", "Nori seaweed sheets", "Soy sauce", "Wasabi", "Pickled ginger", "Sashimi-grade fish");

    $steps = array("Cook the sushi rice according to package instructions.", "Place a sheet of nori seaweed on a sushi mat.", "Spread a layer of cooked sushi rice on top of the nori.", "Arrange slices of sashimi-grade fish on top of the rice.", "Roll the sushi using the mat, gently pressing down to shape it into a tight cylinder.", "Repeat with remaining ingredients.", "Slice the sushi rolls into bite-sized pieces.", "Serve with soy sauce, wasabi, and pickled ginger.");
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?= $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<h1><?= $title; ?></h1>

	<h2>Ingredients:</h2>
	<ul>
		<?php
			foreach ($ingredients as $ingredient) {
				echo "<li>" . $ingredient . "</li>";
			}
		?>
	</ul>

	<h2>Steps:</h2>
	<ol>
		<?php
			foreach ($steps as $step) {
				echo "<li>" . $step . "</li>";
			}
		?>
	</ol>

    <h2>
        Enjoy!
    </h2>

    <figure>
        <img id="sushipic" src="https://imgs.search.brave.com/8MZbpQd_Bk0Ok3Sp2xxjY2CHNm8Ru09YgmKToMLhel0/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9nZXQu/cHhoZXJlLmNvbS9w/aG90by9kaXNoLWZv/b2Qtc2VhZm9vZC1m/aXNoLWphcGFuLWdv/dXJtZXQtY3Vpc2lu/ZS1kZWxpY2lvdXMt/cmljZS1hc2lhbi1m/b29kLXN1c2hpLWph/cGFuZXNlLXJvbGwt/cmF3LXdhc2FiaS1t/YWtpLW9yaWVudGFs/LXRyYWRpdGlvbmFs/LWhvcnMtZC1vZXV2/cmUtamFwYW5lc2Ut/Y3Vpc2luZS1naW1i/YXAtY2FsaWZvcm5p/YS1yb2xsLTEyMDE2/ODEuanBn" alt="Photo of some delicious sushi" height="300px" width="400px">
    </figure>
</body>
</html>