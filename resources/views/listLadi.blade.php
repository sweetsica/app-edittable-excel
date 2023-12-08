<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
    foreach ($data as $data){
        var_dump(json_decode($data,200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE));
    }
?>
</body>
