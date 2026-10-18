<?php
// Lab 2B: PHP Functions and Basic Objects

echo '<h1>Lab 2B: Functions and Objects</h1>';

echo '<h2>1. Function with Parameters and Return Value</h2>';
function formatName($first, $middle, $last)
{
    $first = ucfirst(strtolower($first));
    $middle = ucfirst(strtolower($middle));
    $last = ucfirst(strtolower($last));
    return $first . ' ' . $middle . ' ' . $last;
}
echo formatName('mARIA', 'lee', 'CHEN') . '<br>';

echo '<h2>2. Function That Returns an Array</h2>';
function cleanNameParts($first, $middle, $last)
{
    return [
        ucfirst(strtolower($first)),
        ucfirst(strtolower($middle)),
        ucfirst(strtolower($last))
    ];
}
$nameParts = cleanNameParts('mARIA', 'lee', 'CHEN');
echo $nameParts[0] . '<br>';

echo '<h2>3. Variable Scope</h2>';
$first = 'Maria';
$last = 'Chen';
function buildFullName()
{
    global $first, $last;
    return $first . ' ' . $last;
}
echo buildFullName() . '<br>';
function buildFullName2($first, $last)
{
    return $first . ' ' . $last;
}
echo buildFullName2($first, $last) . '<br>';

echo '<h2>4. Static Variable</h2>';
function nextTicketNumber()
{
    static $number = 0;
    $number++;
    return $number;
}
echo nextTicketNumber() . '<br>';
echo nextTicketNumber() . '<br>';

echo '<h2>5. User Class</h2>';
class User
{
    public $name;
    public $email;

    public function display()
    {
        return $this->name;
    }
}
$user = new User();
$user->name = 'Maria Chen';
$user->email = 'maria@example.com';
echo $user->display() . '<br>';

echo '<h2>6. Constructor and Password Hashing</h2>';
class User2
{
    public $name;
    private $passwordHash;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }
}
$user2 = new User2('Maria Chen', 'sample-password');
echo '<pre>';
print_r($user2);
echo '</pre>';
