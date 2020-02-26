
<?php
function IsPrime($n) {
    for($x=2; $x<$n; $x++) {
        if($n % $x ==0)
        { return false;}
    }
    return true;
}
$a = IsPrime(13);
echo $a ? 'prime number.' :  'Not a Prime Number.';
?>
