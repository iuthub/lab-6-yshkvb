
<!-- 1. /quick/ 
2./^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
3./\+998-\d{2}-\d{3}-\d{4}/
4. /\s/
5. /[^0-9.,]/
6. /[\n]/
7. /\[(.*?)\]/-->



<?php

	$pattern="";
	$text="";
	$replaceText="";
	$replacedText="";

	$match="Not checked yet.";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$pattern=$_POST["pattern"];
	$text=$_POST["text"];

	$replaceText=$_POST["replaceText"];
	$replacedText=preg_match($pattern, $text);
	$replacedText=preg_replace($pattern, $replaceText, $text);
	if(preg_match($pattern, $text)) {
						$match="Match!";

					} else {
						$match="Does not match!";
					}
}
//preg_match($pattern, $text, $replacedText);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="regex_valid_form.php" method="post">
		<dl>
			<dt>Pattern</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<dt>Text</dt>
			<dd><input type="text" name="text" value="<?= $text ?>"></dd>

			<dt>Replace Text</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>

			<dt>Output Text</dt>
			<dd><?=	$match ?></dd>

			<dt>Replaced Text</dt>

			<!-- extract word from brackets -->
			<!-- <dd> <code><?=	$replacedText[1] ?></code></dd> -->
			<dd> <code><?=	$replacedText ?></code></dd>
			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>

	</form>
</body>
</html>
