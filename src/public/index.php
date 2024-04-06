<!-- 実践課題1(for文のデバッグ)のコードをクラス化しましょう。 -->
<?php 

class TotalCalculator {
  private $total;

  public function __construct() {
    $this->total = 0;
  }
  
  public function calculateTotal() {
    for ($i = 0; $i < 5; $i++) {
      $this->total += $i;
      var_dump($this->total);
    }
  }
}

// インスタンス化
$calculator = new TotalCalculator();

// メソッドを呼び出して処理を実行
$calculator->calculateTotal();
?>


<!-- 実践課題2(for文のデバッグ)のコードをクラス化しましょう。 -->
<?php

class TotalCalculator2 {
  private $total;

  public function __construct() {
    $this->total = 0;
  }

  public function calculateTotal() {
    for ($i = 0; $i < 15; $i++) {
      $this->total += $i;
      var_dump($this->total);
    }
  }
}

// インスタンス化
$calculator = new TotalCalculator2();

// メソッドを呼び出して処理を実行
$calculator->calculateTotal();
?>