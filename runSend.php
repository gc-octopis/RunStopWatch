<?php

if(isset($_POST['Data'])){
    $JSON = $_POST['Data'];
    file_put_contents("data.json", $JSON);
}