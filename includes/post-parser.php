<?php
file_put_contents('files/reports/post_file.txt', file_get_contents('php://input'), FILE_APPEND);
?>
