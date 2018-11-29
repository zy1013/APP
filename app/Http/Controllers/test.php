<?php
function myException($exception) {
  echo "Top level Exception:" . $exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncau');
?>