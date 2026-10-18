<?php
// Lab 2: PHP Expressions and Control Structures

echo '<h1>Lab 2A: Expressions and Control Structures</h1>';

echo '<h2>1. Expressions and Operators</h2>';
$x = -5;
$y = 3 * (abs(2 * $x) + 4);
echo "The value of y is: $y<br>";

echo '<h2>2. Comparisons</h2>';
var_dump(2 > 1);
var_dump(2 == 3);
var_dump("5" == 5);
var_dump("5" === 5);

echo '<h2>3. Unary Operators</h2>';
$c = 5;
$negative = -$c;
$positive = +$c;
$incremented = ++$c;
echo "Unary minus: $negative<br>Unary plus: $positive<br>Pre-increment: $incremented<br>";

echo '<h2>4. Operator Precedence</h2>';
echo 2 + 3 * 4;
echo '<br>';
echo (2 + 3) * 4;
echo '<br>';

echo '<h2>5. Assignment Associativity</h2>';
$level = $score = $time = 0;
echo "Level: $level, Score: $score, Time: $time<br>";

echo '<h2>6. Equality and Assignment</h2>';
$number = 5;
$text = "5";
$other = 6;
var_dump($number == $text);
var_dump($number === $text);
var_dump($number == $other);

echo '<h2>7. Logical Operators</h2>';
$a = 1;
$b = 0;
var_dump($a && $b);
var_dump($a || $b);
var_dump(!$b);

echo '<h2>8. Scholarship Decision with if...else</h2>';
$gpa = 3.59;
if ($gpa >= 3.7) {
    echo 'Student receives a scholarship.<br>';
} else {
    echo 'Student does not receive a scholarship.<br>';
}

echo '<h2>9. Scholarship Decision with if...elseif...else</h2>';
if ($gpa >= 3.7) {
    echo 'Full scholarship<br>';
} elseif ($gpa >= 3.5) {
    echo 'Partial scholarship<br>';
} else {
    echo 'No scholarship<br>';
}

echo '<h2>10. Access Status</h2>';
$status = 'pending';
switch ($status) {
    case 'approved':
        echo 'Access approved<br>';
        break;
    case 'pending':
        echo 'Access pending<br>';
        break;
    default:
        echo 'Access not approved<br>';
}

echo '<h2>11. While Loop</h2>';
$fuel = 10;
while ($fuel > 1) {
    echo 'There is enough fuel<br>';
    $fuel--;
}

echo '<h2>12. Multiplication Table</h2>';
for ($i = 1; $i <= 12; $i++) {
    echo "12 x $i = " . (12 * $i) . '<br>';
}
