<?php
	include_once("connection.php");
?>

<html>
<head>
	<title>Login and Registration</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<!--using for ajax later-->
	<script type="text/javascript">
	$(document).on("submit", "#world_list", function(){
        $.post($(this).attr('action'),
            $(this).serialize(),
            function(data)
            {
                $('#results').html(data.results);
            }, "json");
        return false;
	});
    //$('#world_list').submit();

	</script>

</head>
<body>

	<h1>Country Info</h1>
	
    <form id="world_list" action="process.php" method="post">
        <select name="pick_country">
            <!--<option>-pick a country-</option>-->
            <option>Argentina</option>
            <option>China</option>
            <option>Germany</option>
        </select>
            <input type="hidden" name="action" value="world_stats" />
            <input type="submit" value="Check Info" />
	</form>

<div id="results"></div>
</body>
</html>
