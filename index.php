<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
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
				</div>
			</div>

			<!-- JAVASCRIPT -->
			<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
			<script type="text/javascript" src="js/jquery-ui.js"></script>
			<!-- JQUERY AUTOCOMPLETE OPTIONS -->
			<script type="text/javascript">
				$(document).ready(function(){
					$('#regionsearch').autocomplete({
					source : 'search.php',
					minLength : 3,
					});
				});
			</script>
   	</body>
</html>
