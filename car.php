<?php
    $car = new Car();
    // プロパティに直接アクセス
    // $car->speed = 5000;
    // プロパティ$speedに値をセットするためのメソッドを実行
    // $car->setSpeed(100);
    // 入力された値のチェックができる

    // privateなメソッドになっているので、オブジェクト側から参照できない
    // $car->showSpeed();

    $car->start();
    $car->run();

    // $car_speed = $car->getSpeed();
    echo '時速' . $car->getSpeed() . 'km/h';

    class Car {
        // プロパティ
        private $speed; // クラス内に定義されたグローバルな変数

        // コンストラクタ
        function __construct() {
            // $speedプロパティを初期化
            $this->speed = 60;
        }

        // 時速を設定するメソッド
        public function setSpeed($jisoku) { // セッター
            if (0 <= $jisoku && $jisoku <= 200) {
                $this->speed = $jisoku;
            }
        }
        public function getSpeed() { // ゲッター
            return $this->speed;
        }


        // 時速を表示するメソッド
        private function showSpeed() {
            echo '時速' . $this->speed . 'km/hで走っています。<br>';
        }

        // エンジンをかける
        function start() {
            echo 'エンジンをかけました。<br>';
        }

        // 走る
        function run() {
            echo '走り出しました。<br>';
            $this->showSpeed();
        }
    }
