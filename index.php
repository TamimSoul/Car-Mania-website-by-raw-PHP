<?php
/*
$data = ['name' => 'Hasib', 'email' => 'abc@gamil.com'];
//echo $data['name'];
extract($data);
echo $name;
*/


require_once 'vendor/autoload.php';
use App\classes\Home;

//test();

$home = new Home();
$home->index();

/*
function test($msg)
{
    echo $msg;
}
test("Hellp Test 2");
*/