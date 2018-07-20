<?php
//1. На PHP:
//написать такой скрипт:
//задаем переменную $n = 3,5,7 .. (любое нечетное число)
//должен строиться квадрат из цифр со стороной $n
//например, $n=5:
//00000
//00000
//00000
//00000
//00000
//
//и в этот квадрат необходимо вписать ромб, чтобы получилось вот так:
//00200
//02220
//22222
//02220
//00200

echo '
    <html>
        <body>
            <form name="authForm" method="GET" action="' . $_SERVER['PHP_SELF'] . '">
                n: <input type="text" name="n"><input type="submit">
            </form>
';
$style_o = "<span style=\"color:#AFA;\">";
$style_c = "</span>";

/** Размер стороны квадрата */
$n = isset($_GET['n']) && ($_GET['n']>1) && ($_GET['n']%2!=0)
    ?(integer)$_GET['n']
    : 3;
$center=(integer)($n/2);

for ($row = 0; $row < $n; $row++)
{
    for ($column = 0; $column < $n; $column++)
    {
        if($row<=$center)
        {
            if( !(($column)<($center-$row)) && !(($column)>($center+$row)))
            {
                echo $style_o.'1'.$style_c;
            }
            else{ echo '0';}
        }
        else
        {
            if( !($column<($center-($n-$row-1))) && !($column>($center+($n-$row-1))) )
            {
                echo $style_o.'1'.$style_c;
            }
            else { echo '0';}
        }
    }
    echo '<br/>';
}

