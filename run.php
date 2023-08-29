<?php

ini_set('display_errors', 1);

if(isset($_POST['image'])){
  $str= $_POST['image'];
  $str = json_decode($str);
  $file = str_replace('data:image/png;base64,', '', $str->data);
  $file = base64_decode($file);
  file_put_contents('run/'. $str->name . '.png', $file);

  $data = array(
    'image_source'		=> 'run/'. $str->name . '.png'
);

echo json_encode($data);
}

?>