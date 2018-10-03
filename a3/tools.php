
<!--

This one automatically adds the PRE tags around the var_dump output so you get nice formatted arrays.
-->
<?php

function var_dump_pre($mixed = null) {
  echo '<pre>';
  var_dump($mixed);
  echo '</pre>';
  return null;
}

?>


<!--This one returns the value of var_dump instead of outputting it.-->
<?php

function var_dump_ret($mixed = null) {
  ob_start();
  var_dump($mixed);
  $content = ob_get_contents();
  ob_end_clean();
  return $content;
}

?>
