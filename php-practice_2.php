<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します \n";
for ($i = 1; $i <= 100; $i++) {
    $text = $i;
    $tic = $i % 4 ? false : true;
    $tac = $i % 5 ? false : true;
    if ($tic && $tac) {
        $text = 'tic-tac';
    } elseif($tic) {
        $text = 'tic';
    } elseif($tac) {
        $text = 'tac';
    }
    echo "\n" . $text;
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

// 問題１
$user_b = $personalInfos[1];
echo $user_b['name'] . 'の電話番号は' . $user_b['tel'] . 'です。';

// 問題２
$index = 0;
foreach ($personalInfos as $personalInfo) {
    $index++;
    echo "\n" . $index . '番目の' . $personalInfo['name'] . 'のメールアドレスは' . $personalInfo['mail'] . 'で、電話番号は' . $personalInfo['tel'] . 'です。';
}

// 問題３
$ageList = [25, 30, 18];
foreach ($ageList as $index => $age) {
    $personalInfos[$index]['age'] = $age;
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

// Q4 オブジェクト-2
$yamada->attend('PHP'); // 確認のうえ上記の定義を修正

// Q5 定義済みクラス
// 問題１
$Datetime = new DateTime;
echo $Datetime->modify('-1 month')->format('Y-m-d');

// 問題２
$baseDate = new DateTime('1992-4-25');
echo $Datetime->diff($baseDate)->format('%a');


?>