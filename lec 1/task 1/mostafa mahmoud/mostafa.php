<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=
    
    print(" my first task with printf");
    
    $x=260;
    $y=$x;
    $x=200;
    echo '<br>';
    echo$y;
    echo '<br>';

    define('databasename','amazon');
    function test(){
              echo databasename ;
    }
    test();
    echo '<br>';

    $h=null;
if ($h==false){
    echo "false";
}else{
    echo "true";
};
echo '<br>';

var_dump(gettype($h));
echo '<br>';

echo PHP_INT_MAX;
echo '<br>';

echo ceil((0.2+0.1)*0.7);
echo '<br>';



echo " Interpreter";
echo '<br>';
echo(
'It converts program statements, line by line, into machine code'.'<br>'.
'Allows modification of the program while executing'
.'<br>'.'Relatively lesser time is consumed for analysis as it runs line by line');
echo '<br>';



echo" Compiler";
echo '<br>';
echo'It reads the source code and provides an executable code.'.'<br>'.
'Translates programs written in a high-level language to a language that the CPU can understand'.'<br>'
.'The process is relatively complicated and takes time for analysis.'.'<br>'.
'The executable code will be in machine-specific binary code.'.'<br>'. 
'Total run time is more and occupies a large part of the memory.';
    
    
    
    
    
    
    ?>
    
</body>
</html>