<?php

$uri = explode('/', $_SERVER['REQUEST_URI']);
$className = $uri[2];
$methodName = $uri[3];
$filePath = $uri[1].'/'.$className.'.php';


if($uri[1] == 'find-a-doctor') {
    require 'ajax/doctors.php';
    $obj = new doctors();
    $result = $obj->findDoctors('');
    echo "<pre>";
    var_dump($result);
    echo "</pre>";
    exit;
}
elseif($className == 'suggestions') {
    require $filePath;
    $obj = new $className;
    if($methodName == 'topics') {
        if(isset($uri[4]) && $uri[4] == 'lookup') {
            $obj->getTopics($_REQUEST['value']);
        }
        else{
            $obj->getTopics($_REQUEST['q']);
        }
    }
    if($methodName == 'insurance-carriers') {
        if(isset($uri[4]) && $uri[4] == 'lookup') {
            $obj->getInsuranceCarriers($_REQUEST['value']);
        }
        else{
            $obj->getInsuranceCarriers($_REQUEST['q']);
        }
    }
}
else{
    require $filePath;
    $obj = new $className;
    $obj->$methodName();
}

?>
