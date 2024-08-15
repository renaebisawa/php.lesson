【関数】
以下の条件の関数を作成して実行してください
①
・引数は取らないnoArgFunc関数
・関数を実行したときに「この関数には引数がありません。」と出力されるようにしてください。

<?php
function noArgFunc() {
    echo "この関数には引数がありません。";
}

noArgFunc();
?>


②
・2つの引数$val1(int型)と$val2(int型)を受け取るsum関数
・2つの引数を足した値を返す

<?php
function sum(int $val1, int $val2): int {
    return $val1 + $val2;
}

$result = sum(5, 10);
echo "合計 " . $result;
?>


③
・2つの引数$num(int型)を受け取るmultiply関数
・関数内で初期値を意味する変数$initを定義し10を代入してください
・$initと$numを掛けた値を返してください
・関数外で$initをechoで出力してエラーになることを確認し、なぜエラーになるか教えてください

function multiply(int $num): int {
    $init = 10; 
    return $init * $num;
}

// 関数のテスト
$result = multiply(5);
echo "結果は: " . $result . "<br>";


【クラス】
ゲームのキャラクターを作成するクラスを定義しキャラクターを3体作成してください
・プロパティは2つ以上定義してください
・コンストラクターを使用してください
・メソッドを1つ以上定義してください
※クラス名、プロパティ名、メソッド名は任意


<?php
class Character {
    public $name;
    public $gender;
    public $race;
    public $age;

    public function __construct($name, $gender, $race, $age) {
        $this->name = $name;
        $this->gender = $gender;
        $this->race = $race;
        $this->age = $age;
    }

    public function getStatus() {
        return "名前: {$this->name}, 性別: {$this->gender}, 種族: {$this->race}, 年齢: {$this->age}歳";
    }
}

$character1 = new Character("Maki", "male", "Miqote", 19);
$character2 = new Character("Nanamo", "female", "Lalafell", 21);
$character3 = new Character("Chachamu", "female", "Lalafell", 9);

echo $character1->getStatus() . "<br>";
echo $character2->getStatus() . "<br>";
echo $character3->getStatus() . "<br>";
?>

