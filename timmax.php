<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $arr = [
        [1,3,5,7,9,44],
        [2,4,6,2,3,6,9],
    ];
    function timmax($arr){
        $max = $arr[0][0];
        for ($i=0; $i < count($arr); $i++){
            for($j=0; $j < count($arr[$i]); $j++){
                if($arr[$i][$j] > $max){
                    $max = $arr[$i][$j];
                }
            }
        }
        return $max;
    }
    echo "Max is: " . timmax($arr);
?>
</body>
</html>