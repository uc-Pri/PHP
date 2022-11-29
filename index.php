<?php

// float 
// $val =;
// echo $val;
// var_dump((float) $val);
// $a= 1-0.3;
// $b= 0.7;
// echo $a;
// echo $b;

// if($a!=$b){
//   echo "yes";
// }
// else{
//   echo "no";
// }

// string
// $firstname="Prince";
// $lastname="sinha";

// echo $firstname .$lastname ."<br/>";
// $firstname[10]="EEEE";
// echo $firstname ."<br/>";
// echo $firstname[-1];
// var_dump($firstname);
//  Heredoc
// $x=1;
// $y=2;
// $text= <<<TEXT
// line1 $x
// line2 $y
// line3 
// TEXT;
// echo nl2br($text);
// echo "<br/>";

// Nowdoc
// $text= <<<'TEXT'
// line1 $x
// line2 $y
// line3 
// TEXT;
// echo nl2br($text);
// echo "<br/>";


// Null
// $x= null;
// echo $x;
// var_dump($x);
// var_dump(is_null($x));
// var_dump($x===null);
// var_dump($y);
// unset($x);
// var_dump($x);
// $z=NULL;
// echo "<br/>";
// var_dump((string)$z);
// echo "<br/>";
// var_dump((bool)$z);
// echo "<br/>";
// var_dump((integer)$z);

// Array 
// $program=["PHP", 'C++' ,'JAVA'];
// echo $program[1];
// var_dump(isset($program[2]));
// $program[2]="RUBY";
// echo '<pre>';
// print_r ($program);
// echo '</pre>';
// echo count($program);
// $program[]="VUE";
// echo "<br/>";
// echo count($program);
// array_push($program, "JAVASCRIPT","REACT");
// echo '<pre>';
// print_r ($program);
// echo '</pre>';

// $lang=[
//   'a'=>1,
//   'b'=>2,
//   'c'=>3,
// ];
// echo $lang['a'];
// echo '<pre>';
// print_r ($lang);
// echo '</pre>';

// $lang['d']=4;

// echo '<pre>';
// print_r ($lang);
// echo '</pre>';

// $lang['e','f','g']= 5,6,7;
// echo '<pre>';
// print_r ($lang);
// echo '</pre>';

// $lang['e']=5;
// $lang['f']=6;
// $lang['g']=7;

// echo '<pre>';
// print_r ($lang);
// echo '</pre>';

// $new='h';
// $lang[$new]=8;
// echo '<pre>';
// print_r ($lang);
// echo '</pre>';

// $array=['a', 'b'=>'2', 100=>'c', 'd' ,'e'];
// echo '<pre>';
// print_r ($array);
// echo '</pre>';

// echo array_pop($array);
// echo '<pre>';
// print_r ($array);
// echo '</pre>';

// echo array_shift($array);
// echo '<pre>';
// print_r ($array);
// echo '</pre>';

// var_dump(isset($array['b']));

// echo array_pop($array);
// echo '<pre>';
// print_r ($array);
// echo '</pre>';

// $array2=[
//   'a'=>1,
//   'b'=>2,
//   'arr'=>[['c'=>3,'d'=>4],
//   ['x'=>3,'y'=>4]],
//   'e'=>5
// ];

// echo '<pre>';
// print_r ($array2);
// echo '</pre>';

// echo $array2['arr'][1]['y'];

// Expression
// $x=12;
// $y=$x;
// echo $x;
// echo $y;

// if ($x>10){
// 	echo "Under age";
// }
// else 
// 	echo "Above age;"

// operators 

// arithmetic
// $x=20;
// $y=10;
// var_dump($x,$y);
// var_dump(+$x);
// $x= $x +$y;
// $x/=$y;
// var_dump($x%$y);
// var_dump(fmod($x,$y));
// echo "<br/>";
// $a=10;
// $b=-40;
// var_dump($a/$b);

// assignment 
// $x=$y=10;
// $x=($y=10)+10;
// $x+=3;
// var_dump($x);

// string 
// $x="hello";
// $x=$x."world";
// $x+="world";
// var_dump($x);

// comparison 
// $x='5';
// $y=5;
// var_dump($x==$y);
// var_dump($x===$y);
// var_dump(9=='hello');
// $a="hello world";
// $b=strpos($a,'w');
// if($b===false){
// 	echo "w not found";

// }
// else{
// 	echo "w found at index ". $b;
// }

// $result=$b===false?'w not found':"w found at index". $b;
// echo $result;
// Error operators
// $x=@file('abc.txt');

// increment operators
// $x=4;
// echo $x++;
// echo "<br/>";
// echo $x--;
// echo "<br/>";

// echo --$x;
// echo "<br/>";

// echo ++$x;


// logical operators
// $x=true;
// $y=false;
// var_dump($x&&$y);
// var_dump($x||$y);

// bitwise operators
// $x=6;
// $y=3;
// var_dump($x^$y);
// var_dump($x|$y);
// var_dump($x&$y);
// var_dump($x<<$y);
// var_dump($x>>$y);

// array operators

// $x=['a','b','c'];
// $y=['d','e','f'];
// $z=$x+$y;
// print_r($z);
// $x=['a','b','c'];
// $y=['d','e','f','g','h','i'];
// $z=$x+$y;
// print_r($z);
// $x=['a'=>1,'b'=>2,'c'=>3];
// $y=['d'=>4,'e'=>5];
// $z=$x+$y;
// print_r($z);
// $x=['a'=>1,'b'=>2,'c'=>3];
// $y=['a'=>4,'e'=>5];
// $z=$x+$y;
// print_r($z);


// Precedence
// $x=5+3*120;
// $y=(5+3)*120;
// echo $x;
// echo "<br/>";
// echo $y;
// $a=$b=$c=10;
// $a=5;
// $b=10;
// $c=20;
// $result=$a/$b*$c;
// var_dump($result);
// $x=true;
// $y=false;
// $z=false;
// var_dump($x&&$y||$z);


// Control st
// $score=91;
// if ($score>90) {
// 	echo "A+";
// } elseif ($score>80) {
// 	echo"A";
// }
// elseif( $score>70){
// 	echo "B";
// }
// else{
// 	echo "C";
// }


// loop
// while
// $a=0;
// while ($a > 10) {
// 	echo $a++;
// }

// echo "<br/>";
// do while 
// $i=0;
// do {
// 	echo $i++;
// }
// while($i>10)

// for loop 
// for($j=0;$j<=10;$j++){
// 	echo $j;
// }

// for each 
// $array= ['a', 'b', 'c'];
// foreach ($array as $key => $value) {
// 	echo $key .":" .$value;
// }


// switch 
// $status='fjhf';

// switch ($status) {
// 	case 'paid':
// 		echo "PAID";
// 		break;
// 	case 'decline':
// 		echo "declined";
// 		break;
// 	case 'rejected':
// 	case 'error':
// 		echo "rejected";
// 		break;

// 	default:
// 		echo "unknown";
// 		break;
// }
// match 
// $status=1;

// $display=match($status){
// 	1=>"Paid",
// 	2=>"Paid",
// 	3=>"Paid",
// 	// default "error";
// };
// echo $display;
// return 

// function sum(int $x, int $y){
// 	return $x+$y;
// }
// $a=sum(10,1222);
// echo $a;

// echo "<br/>";

// return;
// echo "hello";


// declare 

// $x=3;
// $y=9;
// $z=$x+$y;
// function onTick(){
// 	echo 'Tick<br/>';
// }
// register_tick_function('onTick');
// declare(ticks=2);

// $i=0;
// $length=10;
// while ($i <= $length) {
// 	echo $i++. "<br/>";
// }

// declare(strict_types=1);
// $x='1';
// $y=2;
// echo $x+$y;

// include 
// ob_start();
// include "index.html";
// $new=ob_get_clean();

// $new= str_replace('name','list',$new);
// echo $new;
// echo "hello";

// require 
// require "file.html";
// echo "hello";


// functions 
// function sum(int $x,int $y){
// 	return $x+$y;
// }
// $result=sum(10,11);
// echo $result;

// function prints():float{
// 	return 3.333;
// }
// var_dump(prints());

// function parameters

// function diff(int $x, int $y, int $z){
// 	return $x-$y-$z;
// }
// $result = diff(10,2,3,3);
// echo $result;
// function add( ...$numbers):float{
// 	return array_sum($numbers);
// }
// $result = add(10,2,3,3,1,1,1.2,2,3,3,4);
// echo $result;
//  somefeatures not supported below php 8 version.

// scope vaiables 

// $x=5;

// function foo($x){

// 	return $x;
// }
// $s=foo($x);
// echo $s;

// function value(){
// 	 static $val=null;
// 	if($val===null){
// 		$val= func();

// 	}
// 	return $val;
// }
// function func(){
// 	sleep(1);

// 	echo "processing";

// 	return 10;
// }
// echo value();
// echo value();
// echo value();


// variable , anonymous & arrow fucntions 

// $sum= function (...$numbers):int{
// 	return array_sum($numbers);
// };

// echo $sum(1,2,13,4);


// function sub(...$numbers):int{
// 		return array_sum($numbers);
// }

// $x='sub';

// echo $x(1,2,3,4,5);
// $x=15;
// $sum=function(...$numbers)use ($x):int{
// 	echo $x;
// 	echo "<br/>";
// 		return array_sum($numbers);
// };

// $x='sub';
// echo $sum(1,2,3,4,5);

// $array=[1,2,3,4];
// $array2= array_map(function($element){
// 	return $element*2;
// }, $array);

// print_r($array);

// $sum= function(callable $callback, ...$numbers):int{
// 	return $callback(array_sum($numbers));
// };
// echo $sum(function($element){
// 	return $element*3;
// },10,10);

// $array=[1,2,3,4];

// $array2= array_map(fn($numbers)=> $numbers*$numbers, $array);

// print_r($array2);

// date time 

// $current_time= time();
// echo $current_time;
// echo "<br/>";
// // --5 days later
// echo $current_time+5*24*60*60; 
// echo "<br/>";
// // yesterday 
// echo $current_time-24*60*60;

// // date format
// echo "<br/>";

// echo date('m/d/y g:ia') . "<br/>";
// echo date('m/d/y g:ia', $current_time+5*24*60*60) . "<br/>";
// echo date('m/d/y g:ia', $current_time-24*60*60) . "<br/>";

// echo date_default_timezone_get(). "<br/>";
// echo date_default_timezone_set('UTC'). "<br/>";

// echo date('m/d/y g:ia') . "<br/>";
// echo date('m/d/y g:ia', $current_time+5*24*60*60) . "<br/>";
// echo date('m/d/y g:ia', $current_time-24*60*60) . "<br/>";

// echo date('m/d/y', strtotime('first day of august'));
// echo  "<br/>";
// echo date('m/d/y', strtotime('last day of august'));
// echo  "<br/>";
// echo date('m/d/y', strtotime('yesterday'));
// echo  "<br/>";

// $date= date('m/d/y g:ia', strtotime('second friday of january'));

// echo "<pre>";
// print_r(date_parse($date));
// echo "</pre>";
// work with arrays in php 

// array_chunk(array $array , int $length , bool $preserve keys =false )

// chunks 
// $items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4,];
// echo "<pre>";
// print_r(array_chunk($items, 3, true));
// echo "</pre>";

// combine 
// $array = ['a', 'b', 'c', 'l'];
// $array2 = ['d', 'e', 'f', 'k'];

// echo "<pre>";
// print_r(array_combine($array, $array2));
// echo "</pre>";

// filter 

// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $odd = array_filter($array, fn($numbers) => $numbers % 2 != 0);

// $odd = array_values($odd);

// echo "<pre>";
// print_r($odd);
// echo "</pre>";

// ARRAY KEYS 
// $items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

// $keys = array_keys($items, 1, true);
// echo "<pre>";
// print_r($keys);
// echo "</pre>";

// array map 
// $items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
// $items2 = ['e' => 5, 'f' => 6, 'g' => 7, 'h' => 55555];

// $array = array_map(fn($i, $j) => $i * $j, $items, $items2);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// merge 
// $array = ['a', 'b', 'c', 'l'];
// $array2 = ['d', 'e', 'f', 'k'];
// $array3 = ['x', 'y', 'z', 'i'];
// $array4 = ['u', 'v', 'w', 'r'];

// $merged = array_merge($array, $array2, $array3, $array4);
// echo "<pre>";
// print_r($merged);
// echo "</pre>";


// reduce 

// $array = [
//     ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4],
//     ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4],
//     ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4],

// ];

// $reduce = array_reduce(
//     $array,
//     fn($sum, $item) => $sum + $item['a'] * $item['d'],
//     1000
// );

// echo $reduce;


// search and in array 
// $array = ['a', 'b', 'c', 'l'];

// $find = array_search('c', $array);

// echo $find;

// echo "hello";

// php init $ configuartion 
// var_dump(ini_get('error reporting'));
// var_dump(E_ALL);

// ini_set('error reporting', E_ALL & ~E_WARNING);

// $array = [1];

// echo $arrray[3];

// var_dump(ini_get('error_reporting'));
// ini_set('display_error', 0);

// $array = [1];

// echo $array[3];

// var_dump(ini_get('memory_limit'));

// $s = 'x';

// for ($i = 0; $i < 10; $i++) {
//     $s .= $s;
// }

// echo $s;

// error handling 

// error_reporting(E_ALL & E_WARNING);

// trigger_error('Example error', E_USER_ERROR);
// trigger_error('Example error', E_WARNING);

// echo 1;


// apache config logs 

// echo "index page";

// working with file 
// $dir = scandir(__DIR__);
// var_dump(is_file($dir[2]));

// mkdir('test');
// rmdir('test');

// if (file_exists('ello.txt')) {
//     echo filesize('ello.txt');
// } else {
//     echo "not found";
// }

// $file = fopen('foo.txt', 'r');
// var_dump($file);

// $file = fopen('foo.txt', 'r');

// while (($line = fgets($file)) === false) {
//     echo $line . "<br/>";
// }
// fclose($file);


// oop php 
//  abstraction 
//  polymorphism
//  encapsulation
//  inheritance
// oop!=mvc

// oop 
// easier to fbird_maintain_
// reusability


// class 
// require_once 'Transaction.php';
// $t = new Transaction(100, "Prince");
// $t->addTax(8);
// $t->amount = 15.66;
// var_dump($t->amount);
// var_dump($t->description);
// var_dump($t->private);

// constructor promotion 
// require_once 'Transaction.php';
// $t = new Transaction(100, "Prince");
// $t->addTax(8);
// var_dump($t->amount);
// var_dump($t->description);

// echo $t->amount;

// namespace 

// require_once 'Transaction.php';
// require_once './paddle/Transaction.php';

// var_dump(new Transaction());

// function __autoload($class)
// {
//     require "paddle/" . $class . ".php";
// }

// $x = new Transaction();
// $y = new Transaction2();

// class constants 

// require "constants.php";

// $obj = new Constants();

// echo $obj::PAY_PENDING;

// var_dump($obj->setStatus('Done'));

// echo $obj::PAY_SUCCESS;

// class Statics
// {
//     public static $var_new = 222;

//     public function __construct()
//     {
//     }
//     public static function createInstance()
//     {
//         echo self::$var_new;
//     }
// }

// $obj = new Statics();
// echo Statics::$var_new;

// echo $obj->createInstance();
// echo "<br/>";
// echo $obj->createInstance();


// require "paddle/Transaction.php";

// $transaction = new Transaction(200);

// $transaction->amount;

// $reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');

// $reflectionProperty->setAccessible(true);

// var_dump($reflectionProperty->getValue($transaction));

// inheritance 

// require "paddle/Toster.php";
// require "paddle/Tosterpro.php";

// $toaster = new Tosterpro();

// $toaster->addSlice('bread');
// $toaster->addSlice('bread');
// $toaster->addSlice('bread');
// $toaster->addSlice('bread');
// $toaster->addSlice('bread');
// $toaster->tost();


// $toaster->toast();


// abstract class 

// syntax 

// abstract class ParentClass{
//     abstract public function func1();
//     abstract public function func2($name, $color);
//     abstract public function func3():string;
// }


// abstract class ParentClass
// {
//     abstract protected function prefixName($Name);
// }

// class ChildClass extends ParentClass
// {
//     public function prefixName($Name)
//     {
//         if ($Name == "Prince") {
//             $prefix = "Mr.";

//         } else {
//             $prefix = "Mrs";
//         }
//         return "{$prefix} {$Name}";
//     }
// }

// $class = new ChildClass;
// echo $class->prefixName("Princes");

// interfaces  and polymorphism 

// interface Animal
// {
//     public function makeSound();
// }

// class Cat implements Animal
// {
//     public function makeSound()
//     {
//         echo "Meow <br/>";
//     }
// }
// class Dog implements Animal
// {
//     public function makeSound()
//     {
//         echo "Bark";
//     }
// }

// $cat = new Cat();
// $dog = new Dog();

// $animals = array($cat, $dog);

// foreach ($animals as $animal) {
//     $animal->makeSound();
// }



// magic method 

// __construct()

// __destruct()

// __sleep()

// __toString()

// __set()

// __debugInfo()

// __clone()

// __wakeup()


// class HtmlElement
// {
//     private $att = [];
//     private $tag;

//     public function __set($name, $value)
//     {
//         $this->att[$name] = $value;
//     }
// }

// $div = new HtmlElement;

// late static binding 

// class Car
// {
//     public static $name = "ODI";
//     public static function getCar()
//     {
//         return "Car is:" . self::$name;
//     }

//     public static function getOwner()
//     {
//         echo self::getCar();
//     }

// }

// class newCar extends Car
// {
//     public static function getCar()
//     {
//         return "Car is:" . self::$name . "Owner Prinsakce";
//     }
// }


// Car::getOwner();
// echo "\n";
// newCar::getOwner();
// traits 

// trait message
// {
//     public function msg()
//     {
//         echo "message";
//     }
// }
// trait message2
// {
//     public function msg2()
//     {
//         echo "message2";
//     }
// }

// class Welcome
// {
//     use message;
//     use message2;
// }

// $obj = new Welcome();
// $obj->msg();
// $obj->msg2();



// Anonymous class 

// $util->setLogger(new class {
//     public function log($msg)
//     {
//         echo $msg;
//     }
// });

// variable comaprison 

// $a = 'x';
// $b = 199;


// var_dump($a == $b);
// var_dump($a === $b);

// variablel is stored in symbol table 

// $a = $b;

// var_dump($a);
// var_dump($b);

// comments 

// single line comment 

#single line comment

// class MyClass
// {
//     public $color;
//     public $amount;
// }

// $obj = new MyClass();
// $obj->color = 'red';
// $obj->amount = 5;
// $copy = clone $obj;
// print_r($copy);


// serialize 

// echo serialize(true);
// echo "<br/>";
// echo serialize(1);
// echo "<br/>";
// echo serialize(2.5);
// echo "<br/>";
// echo serialize("hello world");
// echo "<br/>";
// echo serialize([1, 2, 3]);
// echo "<br/>";



// class Serialized
// {
//     public function __serialize(): array
//     {
//         return [
//             'id' => $this->id,
//             'amount' => $this->amount,
//             'desc' => $this->desc,
//         ];
//     }
// }
// $obj = new Serialized();


// error handling 
// if (file_exists("mytestfile.txt")) {
//     $file = fopen("mytestfile.txt");
// } else {
//     die("Error:file not present");
// }

// function customerError($errorno, $errorstr)
// {
//     echo "<b>Error:</b> [$errno] $errstr <br>";
//     echo "Ending Script";
//     die();
// }

// set_error_handler("customError", E_USER_WARNING);

// $test = 2;
// if ($test >= 1) {
//     trigger_error("Value must be 1 0r below", E_USER_WARNING);
// }

// date and time 

// echo "today is" . date("Y/m/d") . "<br/>";
// echo "today is" . date("Y.m.d") . "<br/>";
// echo "today is" . date("l") . "<br/>";


// echo "Time is " . date("h:i:sa");

// date_default_timezone_set("America/New_York");

// echo "\n";
// $d = mktime(11, 14, 54, 8, 12, 2022);
// echo date("h:i:sa", $d);

// $e = strtotime("10:30pm April 15 2024");
// echo date("h:i:sa", $e);



// iterators and iterable 
// $array = [1, 2, 34, 4];
// foreach ($array as $key => $value) {
//     echo "<br/>" . $key . "=" . $value;
// }
// echo "<br/>";

// class MyIterator implements Iterator
// {
//     private $items = [];
//     private $pointer = 0;

//     public function __construct($items)
//     {
//         $this->items = array_values($items);
//     }

//     public function current()
//     {
//         return $this->items[$this->pointer];
//     }

//     public function key()
//     {
//         return $this->pointer;
//     }

//     public function next()
//     {
//         $this->pointer++;
//     }

//     public function rewind()
//     {
//         $this->pointer = 0;
//     }

//     public function valid()
//     {
//         return $this->pointer < count($this->items);
//     }
// }

// function printIterable(iterable $myIterable)
// {
//     foreach ($myIterable as $item) {
//         echo $item;
//     }
// }

// $iterator = new MyIterator(["a", "b", "c", 1, 2, 3, 4]);
// printIterable($iterator);

// SUPERGLOBALS 

// $x = 75;
// $y = 25;

// function addition()
// {
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// addition();
// echo $z;
// echo "<br/>";

// echo $_SERVER['PHP_SELF'];
// echo "<br/>";

// echo $_SERVER['HTTP_HOST'];
// echo "<br/>";

// include "html.html ";

// include "cookies.php";

// output buffering 

// ob_start();
// echo "Hello , Welcome ";
// $ob1 = ob_get_contents();
// echo " to Tutorials Point";
// $ob2 = ob_get_contents();
// echo " Prince sinha";
// $ob3 = ob_get_contents();
// ob_end_clean();
// echo $ob1;
// echo "<br/>";
// echo $ob2;
// echo "<br/>";
// echo $ob3;

include "form.html";

?>