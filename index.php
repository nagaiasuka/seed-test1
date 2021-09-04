<?php
print "PHP総合テスト";
print "<br><br><br>";

//問題１
print "1.FizzBuzz問題";
print "<br><br>";
for($i = 1; $i <= 100; $i++){
    if($i % 15 ===0){
        print "FizzBuzz";
        print "<br>";
    } elseif($i % 3 ===0){
        print "Fuzz";
        print "<br>";
    } elseif($i % 5 ===0){
        print "Buzz";
        print "<br>";
    } else{
        print $i;
        print "<br>";
    }
}
print "<br><br><br>";


//問題２
print "2.素数問題";
print "<br><br>";

for($s = 1; $s <=10000 ; $s++){

    $point = 0;

    for($j =1; $j <= $s;$j++){
        if($s % $j == 0){
            $point += 1;
        }
    }

    if ($point ==2){
        print $s ."<br>";
    }

}
print "<br><br><br>";

//問題3
print "3.5次元配列";
print "<br><br>";

$prf =[
    ['name' => 'Asuka','age' => '23','gender' => '男','from' => '熊本','like' => '肉','bad'=> '虫']
    
];

print $prf[0]['age'];

?>