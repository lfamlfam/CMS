<?php
$root_dir = basename(dirname(getcwd()));
header('Location: /'.$root_dir.'/index.php?controller=User&action=login');
?>
