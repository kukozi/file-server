<?php
	switch($_SERVER["SCRIPT_NAME"]) {
		case "/about.php":
			$CURRENT_PAGE = "About";
			$PAGE_TITLE = "About Me";
			break;
		case "/contact.php":
			$CURRENT_PAGE = "Contact";
			$PAGE_TITLE = "Contact Me";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "kukozi's File Server";
	}
?>