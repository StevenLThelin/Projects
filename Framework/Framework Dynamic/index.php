<?php
require('inc/classes.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<?php
echo "Hi";
echo "<br />";

return $db->selectQuery('title_title','title');

?>
</body>
</html>






<?php
/*
$results = $Database->Query('tut_content');
foreach ($results as $result): ?>


    <div><?php echo $result; </div>
<?php endforeach; */?>