<?php
    function myFunction($firstParam, $secondParam) {
        $firstResult =  strtoupper($firstParam);
        $secondResult =  strtolower($secondParam);
        $finalresult = $firstResult . $secondResult;
        return $finalresult;
    }
    echo myFunction('firstParam', 'secondParam');


?>