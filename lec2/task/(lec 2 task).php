<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    echo"lec 2 task";
    echo"<br>";

    $product=['meat','chiken','fish'];
    echo$product[1];
    echo"<br>";
    $product[2]='fissh';    
    var_dump($product[2]);
    echo"<pre>";
    var_dump($product);
    echo"<pre>";
    echo"<br>";

    $clothes=['black'=>'t-shirt','white'=>'cap','gray'=>'scarve'];
    echo$clothes['black'];
    echo"<br>";
    echo$clothes['white'];
    echo"<br>";
    echo$clothes['gray'];
    echo"<br>";

$english=[
['thanks'=>'thx','you'=>'U'],
['are'=>'R','jan'=>'january']
];
echo"<br>";

 $month=[
 ['january'=>'jan',
 'february'=>'feb',
 'march'=>'mar',
 'ebril'=>'abr'],
 ['may'=>'may',
'june'=>'jun',
'october'=>'oct',]
 ];
 var_dump($month);
 echo "<br>";


 $a=10;
    $v=6.3;
    var_dump($a*$v);
    var_dump($a+$v);
    var_dump($a-$v);
    var_dump($a/$v);
    var_dump($a**$v);
    echo "<br>";

    $x='ahmed';
    $x .='this is my name'; 
    var_dump($x);

    var_dump(10<=>8 );
    $is_user_logged_in=true;
    if( $is_user_logged_in==true){
        echo '<button> logout </button>';
    }else{
        echo '<button> login </button>';
    }
    
    echo"<br>";

$x=10;
$b=16;
$m='2';
$f=0;
$h=2.0;
var_dump(fdiv($x,$$f));
var_dump(fmod($x,$b));

echo "<br>";
$x=20;

echo "<br>";

$x=$y=2000;
$x=($y=13)+52;

echo "<br>";
$k=20;
$k=$k+9;

echo "<br>";

$d="beso";
$d="that one correct";
var_dump($d);

echo'<br>';
$proglangs=['toyota','borsh','marsedes'];
foreach($proglangs as $k=>$lang){
    echo $k.'>'.$lang.':: <br>' ;
}
$langs_fram = ['php' => 'laravel' , 'java' => 'spring' , 'ruby' => 'rails'];
foreach($langs_fram as $data=>$student){
echo $data.'-'.$student.'<br>';
}

$user=[
'name'=>'mostafa',
'email'=>'mostafa@gmail',
'pass'=>'jhgjh533',
];




     































































    ?>
</body>
</html>