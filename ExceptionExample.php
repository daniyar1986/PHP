<?php

$file = 'namespace.php';
//
//if (!file_exists($file)){
//    throw new Exception('File not found');
//}

try{
    if (!file_exists($file)){
        throw new Exception('File not found');
    }
} catch (Exception $exception){
    echo $exception->getMessage();
}

class NewException extends Exception{

}