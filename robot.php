<?php
    // ロボットをクラスを作成
    // イメージとしてはドラえもん
    // ネコ型ロボットを大量生産するための設計書を定義し、実際にロボットを作る

    // クラス (設計書)
    class Robot {
        // プロパティ
        // オブジェクトが持つ情報
        private $name;
        private $food;
        private $gender;

        // コンストラクタ
        function __construct($namae, $tabemono, $seibetu) {
            $this->name = $namae;
            $this->food = $tabemono;
            $this->gender = $seibetu;
        }

        // プロパティに値をセットするためのメソッド
        public function setName($namae) { // セッター
            $this->name = $namae;
        }
        public function getName() { // ゲッター
            return $this->name;
        }

        public function setFood($tabemono) { // セッター
            $this->food = $tabemono;
        }
        public function getFood() { // ゲッター
            return $this->food;
        }

        public function getGender() { // ゲッター
            return $this->gender;
        }

        // メソッド
        private function talk() {
            if ($this->gender === 'male') {
                echo 'こんにちは。僕の名前は' . $this->name . 'です。<br>';
            } else {
                echo 'こんにちは。私の名前は' . $this->name . 'です。<br>';
            }
        }

        private function eat() {
            echo '好きな食べものは' . $this->food . 'です。<br>';
        }

        public function greeting() {
            $this->talk();
            $this->eat();
        }
    }


    // インスタンス化
    $doraemon = new Robot('ドラえもん', 'どら焼き', 'male'); // 変数自体がオブジェクト
    // プロパティをアロー演算子使って呼び出す際、$は省略する必要があります。
    // $doraemon->$name = "ドラえもん"; // ☓
    // $doraemon->name = "ドラえもん";     // ◯
    // $doraemon->food = "どら焼き";
    // $doraemon->setName('ドラえもん');
    // $doraemon->setFood('どら焼き');
    // $doraemon->talk();
    // $doraemon->eat();
    $doraemon->greeting();

    $doramichan = new Robot('ドラミちゃん', 'チーズケーキ', 'female');
    $doramichan->greeting();

    // $kid = new Robot();



