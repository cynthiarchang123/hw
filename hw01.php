<h3>質數</h3>
<table>

<?php
$n=0;
for($i=1;$i<=10;$i++){
    echo "<tr>";
    for($j=1;$j<=10;$j++){
        $n++;
        $num = fnIsPrime($n);
        //echo $num;
        echo "<td>";
        if($num == $n){
            echo "<a style=background:blue;color:#fff;border-radius:3px;padding:3px 6px;>{$n}</a>";
        }else{
            echo "<a>{$n}</a>";
        }
        echo "</td>";
    }
    echo "</tr>";
}

//fnIsPrime(13);
function fnIsPrime($a){
    //$a = 7;
    $isPrime = true;
    for($j=2;$j<$a;$j++){
        if($a % $j == 0){
            $isPrime = false;
            break;
        }
    }
    if($isPrime == 'Yes'){
        return $a;
    }
    //echo $isPrime ? 'Yes':'No';
}
?>
</table>