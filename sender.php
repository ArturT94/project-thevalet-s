<?php
if ($_POST['param']) {
  $param = json_decode($_POST['param']);
  echo json_encode($param);
}
