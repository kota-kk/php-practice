<?php
// Q1 変数と文字列
$name = '片山';
echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
$num = 5 * 4;
$half = $num / 2 ;

echo $num . "\n";
echo $half;


// Q3 日付操作
$now = date("Y年m月d日 h時m分i秒");
echo '現在時刻は、' . $now . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . "$device" . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 10;
$ageVerification = $age <= 18 ? '成人' : '未成年';
echo $ageVerification . 'です。';

// Q6 配列
$pref = [
 '茨城県',
 '栃木県',
 '群馬県',
 '埼玉県',
 '千葉県',
 '東京都',
 '神奈川県'
];
echo $pref[2] . 'と' . $pref[3] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$prefCapitals = [
 '東京都'   => '新宿区',
 '神奈川県' => '横浜市',
 '千葉県'   => '千葉市',
 '埼玉県'   => 'さいたま市',
 '栃木県'   => '宇都宮市',
 '群馬県'   => '前橋市',
 '茨城県'   => '水戸市'
];
foreach ($prefCapitals as $prefCapital) {
    echo $prefCapital . "\n";
}

// Q8 連想配列-2
foreach ($prefCapitals as $prefecture => $prefCapital) {
    if ($prefecture === '埼玉県') {
        echo $prefecture . 'の県庁所在地は、' . $prefCapital . 'です。';
    }
}


// Q9 連想配列-3
$prefs = array_merge($prefCapitals, [ '愛知県' => '名古屋市', '大阪府' => '大阪市']);
foreach ($prefs as $pref => $Capital) {
    if (array_key_exists($pref, $prefCapitals)) {
        echo $pref . 'の県庁所在地は、' . $Capital . 'です。' . "\n";
    } else {
        echo $pref . 'は関東地方ではありません。' . "\n";
    }
}


// Q10 関数-1
function hello($name) {
    return $name . 'さん、こんにちは。';
}
echo hello('山田');
echo "\n";
echo hello('太郎');

// Q11 関数-2
$price = 1000;
function calcTaxInPrice($price) {
    return $price * 1.1;
}
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
$num = 10;
function distinguishNum($num) {
    $oddOrEven = $num % 2 === 1 ? '奇数' : '偶数';
    return 'は' . $oddOrEven . 'です。';
}
echo $num . distinguishNum($num);

// Q13 関数とswitch文
$gpa = 'A';
$gpa2 = 'D';
function evaluateGrade($gpa) {
    switch ($gpa) {
        case 'A':
        case 'B':
            return "合格です。";
        case 'C':
            return "合格ですが追加課題があります。";
        case "D":
            return "不合格です。";
        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}

echo evaluateGrade($gpa);
echo "\n";
echo evaluateGrade($gpa2);




?>