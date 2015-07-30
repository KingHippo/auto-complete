<?php include('db.php'); ?>
<html>
	<head>
		<title>City Population</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- JQUERY STYLE CSS -->
		<link rel="stylesheet" href="css/jquery-ui.css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
    <body>

			<div class="row">
				<div class="small-6 columns">
				<form method="post" action="result.php">
			City Name: <input name="regionsearch" id="regionsearch" type="text" />
				<button class="btn" type="submit">Search</button>
				</form>

      <?php

        if($_POST[regionsearch]=='') {
          echo "<p>Type something before searching!</p>";
        } else {
          echo "<table>";
            echo "<thead>";
              echo "<tr>";
                echo "<th>population</th>";
                echo "<th>City</th>";
                echo "<th>Slug</th>";
              echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

        // VARIABLE FOR SEARCH TERM
        $regionsearch = $_POST['regionsearch'];
        // USER QUERY
        $query = $db->prepare("SELECT * FROM population WHERE location LIKE :regionsearch");
        // BIND PARAMETERS
        $query->bindParam(':regionsearch', $regionsearch);
        // EXECUTE STATEMENT
        $query->execute();
        // SEARCH DATABASE AND DISPLAY INFO
        $queryResult = $query->fetchAll();
        foreach ($queryResult as $row) {
          echo"<tr>";
            echo"<td>".$row[0]."</td>";
            echo"<td>".$row[1]."</td>";
            echo"<td>".$row[2]."</td>";
          echo"</tr>";
          }
          echo "</tbody>";
          echo "</table>";
					echo "</div>";
					echo "</div>";
        }
       ?>

       <!-- JAVASCRIPT -->
 			<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
 			<script type="text/javascript" src="js/jquery-ui.js"></script>
 			<!-- JQUERY AUTOCOMPLETE OPTIONS -->
 			<script type="text/javascript">
 				jQuery(document).ready(function(){
 					$('#regionsearch').autocomplete({
 					source : 'search.php',
 					minLength : 3,
 					});
 				});
 			</script>
			<script src="js/vendor/jquery.js"></script>
			<script src="js/foundation.min.js"></script>
			<script>
				$(document).foundation();
			</script>
   	</body>
</html>
