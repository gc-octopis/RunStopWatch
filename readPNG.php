var files = <?php

$out = array();

ini_set('display_errors', 1);

foreach (glob('run/*.png') as $filename){
    $p = pathinfo($filename);
    $out[] = $p['filename'];
}

echo json_encode($out); ?>;
