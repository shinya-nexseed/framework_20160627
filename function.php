<?php
    // 関数の復習

    // 定義
    // function 関数名(引数1, 引数2) {
    //     処理
    // }

    // 実行
    // 関数名(引数1, 引数2);

    // 引数と戻り値
    function add($num1, $num2) {
        $result = $num1 + $num2;
        return $result;
    }

    $add_result = add(10, 22);
    echo $add_result;
?>
