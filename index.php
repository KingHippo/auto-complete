
<html>
	<head>
		<title>City Population</title>

        <!-- STYLE CSS -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <!-- JAVASCRIPT -->
		<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<link rel="stylesheet" href="css/jquery-ui.css" media="screen" title="no title" charset="utf-8">
        <script type="text/javascript">
        	jQuery(document).ready(function(){
				$('#regionsearch').autocomplete({
					source : 'search.php',
					minLength : 3,
				});
			});
        </script>

	</head>
    <body>

        <form action="" method="post">
			Régions: <input name="region" id="regionsearch" type="text" />
        </form>

   	</body>
</html>
