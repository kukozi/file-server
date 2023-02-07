<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
<?php include("includes/post-parser.php");?>
<?php
//file_put_contents('files/reports/post_file.txt', file_get_contents('php://input'), FILE_APPEND);
// $file = 'files/reports/test.txt';
// $text = file_get_contents('php://input'); 
// file_put_contents($file, $text, FILE_APPEND);
?>
OK
<?php else: ?>
<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>
<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>Proceed with caution</h2>
	<p>Also, some kind of text should have been pasted here. But it wasn't for no apparent reason &#x1F937;</p>
</div>
<?php include("includes/footer.php");?>
</body>
</html>
}
<?php endif ?>
