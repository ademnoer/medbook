<?php
/**
 * Description of users
 */
class users
{
    public function check() {
        $result = array(
          'meta' => array('code' => 200)  
        );
        header('Content-Type: application/json');
        echo json_encode($result);
        exit;
    } 
}

?>