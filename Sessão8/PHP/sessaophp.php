<?php
/*for ($i=1; $i <=10 ; $i++) { 
    $color = ($i % 2) ? '#eee' : '#bbb';
    echo '<div style="background:'.$color.'">the current value is'.$i.'</div>';
}*/
function randomColor(){
    $rcolor = '#';
    for ($i=0; $i < 6 ; $i++) { 
        $randNum = rand(0,15);
        switch($randNum) {
            case 10: $randNum = 'A';
            break;
            case 11: $randNum = 'B';
            break;
            case 12: $randNum = 'C';
            break;
            case 13: $randNum = 'D';
            break;
            case 14: $randNum = 'E';
            break;
            case 15: $randNum = 'F';
            break;
         }
        $rcolor .= $randNum;
    }

    return $rcolor;
}
echo '<div style=" padding:15px;background-color:'.randomColor().';color:'.randomColor().'">
Randomize the colors this area
</div>';
$a = 5;
$b = 10;
function mathFuncion()
{
    global $a, $b;
    $c = $a + $b;
    $a++;
    $b--;
    echo 'the value of c is ' . $c . ', the value of b is ' . $b . 
    ' and the value of a is ' . $a . '<br>';
}
for ($i=0; $i < 6 ; $i++) { 
    mathFuncion();
}

?>