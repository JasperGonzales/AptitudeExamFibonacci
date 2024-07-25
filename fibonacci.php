<?php 

    $num = isset($_POST["num"]) ? $_POST["num"] : 0;
    $list = [];
    $temp_num = 0;

    for($index = 0; $index < $num; $index++) {

        if($index < 2){
            $list[$index] = $index;
        }
        else {
            $list[$index] = $list[$index - 1] + $list[$index - 2];
        }

    }

    echo json_encode($list);
?>