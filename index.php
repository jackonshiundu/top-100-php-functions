<?php
defined('BR') OR define('BR','<br>');
const HR= '<hr>';

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
echo '<h1>PHP built-In Functions</h1>';
//one
echo '1' ." "."count()";//returns an int
echo  BR;
$name=array("ning","Jackon",array('Blue','red','Orange'));
echo count($name,COUNT_RECURSIVE);
echo  BR;
//the recursive parameter in a multi-dimention array its used to count the values of the nested array otherwise COUNT_NORMAL is used by default
//used case
 for($i=0;$i<count($name);$i++){
    echo $name[$i][$i].BR;
} 
echo HR;
//two
echo "2"." ". "is_array()";
echo  BR;
 //returns a boolean
 if(is_array($name)){
    echo 'THis is an array';
}else{
     echo 'CAnnot loop through an array';
 }
 echo HR;

 //three
echo '3'." ".'substr()';//returns a string
echo  BR;
 $school='Mount Kenya University';
 echo substr($school,0,6);

 echo HR;
 //four
 echo  BR;
 echo '4'." ".'in_array()';//returns a boolean
// we also have the third parameter that checks the types too
echo  BR;
 if(in_array('jackon',$name,true)){
    echo 'yes';

}else{
     echo 'No';
 }
 echo HR;
 //five
 echo  BR;
 echo '5'." ".'explode()';//returns a array
 echo  BR;
 $text="red,orange,blue,grenn,purple,yellow";
 $textarray=explode(",",$text,3);
 print_r($textarray);
 echo HR;
 //six
 echo  BR;
 echo '6'." ".'str_replace()';//returns a midex datatype
 $vowels=array('a','b','c');
 $text="red,orange,blue,grenn,purple,yellow";
$bodytag=str_replace($vowels,"",$text);
echo  BR;
echo $bodytag ;
echo HR;

//seven
echo  BR;
echo '7'." ".'implode()';//returns a string
echo  BR;
$name=array("ning","Jackon",'Blue','red','Orange');
$glued=implode('|',$name);
echo $glued;
echo HR;

//eight
echo  BR;
echo '8'." ".'strlen()';
echo  BR;

//returns an integer
$school='Mount Kenya University';
echo strlen($school);
//nine
echo HR;
echo  BR;
echo '9'." ".'array_merge()';
echo  BR;
$vowels=array('a','b','c');
$text="red,orange,blue,grenn,purple,yellow";
$textarray=explode(',',$text);
print_r(array_merge($vowels,$textarray));
//Ten
echo HR;
echo  BR;
echo '10'." ".'Strops()';
echo  BR;
$text="red,orange,blue,grenn,purple,yellow";
echo strpos($text,'blue');
echo HR;
echo  BR; 
//it returns a formatted string
echo '11'." ".'printf()';
echo  BR;
$number=6;
$animal='dog';
$location='Uthiru';
$number2=43;
$insect='Bee';
$format='There are %d %s by the %s ,and %f %s';
//the order must be the same as placed in the tamplate
echo printf($format,$number,$animal,$location,$number2,$insect);
echo HR;
echo  BR; 
//it strips whitespaces and other characters from the beginning and end of a string
echo '12'." ".'trim()';
echo  BR;
$text='jackon Shiundu ';
echo trim($text,'ju');
//the code below removes any spaces sarounding the text
echo trim($text);

echo HR;
echo  BR; 
//used to convert a string to lower case
echo '13'." ".'strtolower()';
echo  BR;
$text='JACKON';
echo strtolower($text);
echo HR;
echo  BR; 
//checks if a file exixts in the spacified path.
echo '14'." ".'file_exists()';
echo  BR;
$file='D:\php\notes\php15.docx';
if(file_exists($file)){
    echo 'yes it exists';
}else{
    echo 'no it doesn\'t it exists';
}
echo HR;
echo  BR; 
//checks if a variable is a string
echo '15'." ".'is_string()';
echo  BR;
$text='hello world';
if(is_string($text)){
    echo "yes i is a is_string";
}else{
    echo 'not string';
}
echo HR;
echo  BR; 
//checks if a variable is a string
echo '16'." ".'file_get_contents()';
echo  BR;
/* $files=file_get_contents('https://google.com');
echo $files; */
echo HR;
echo  BR; 
//checks if a variable is a string
echo '17'." ".'array_key_exists()';
$array=array('year'=>2000,'month'=>'January');
if(array_key_exists('year',$array)){
    echo '<br>';
    echo 'Hello';
}
echo HR;
echo  BR; 
//checks if a variable is a string
echo '18'." ".'array_keys()';
$array=array('year'=>2000,'month'=>'January');
print_r(array_keys($array)) ;
echo HR;
echo  BR; 
//returns an array that has data about the current date
echo '19'." ".'getDate()';
$time=getDate();
pre_r($time);
echo HR;
echo  BR; 
//returns the current date and time with spacified format and time stamps
echo '20'." ".'date()';
echo date('d/m/y g.i:s',time());
//at the G place you can replace with G for a 24hrs system
//07/03/23 3.49:07-is the output
echo HR;
echo  BR; 
//returns the name of the parent directory
echo '21'." ".'dirname()';
echo BR;
echo dirname('D:\php\notes\php done',2);
//D:\php-will be the output
echo BR;
echo dirname(__DIR__);
echo BR;
print __DIR__;
//__DIR__ is a bult in global variable that is used to get the directory in whitch the current file is seating
//used case
echo BR;
include_once(__DIR__.'/include.php');
print BR;
include_once(dirname(__DIR__).'/controlstructres.php');

echo BR;
echo  BR; 
//returnsreturns a boolean if a given function exists
//works on both userdefined and bult ni--in
echo '22'." ".'function_exists()';
echo BR;
echo function_exists('time');
echo HR;
echo  BR; 
//it applies a call back to the elements of a given array
//it retusrns an array
echo '23'." ".'array_map()';

function square($num){
   return $num*$num;
}
$numbers=array(2,3,4,5,6,9,7,8,10);
pre_r(array_map('square',$numbers));//instead of a call back you can put a null value and that will create an array of arrays

echo HR;
echo  BR; 
//it returns the name and class of an aobject
echo '24'." ".'get_class()';
class Animal{
    function class_name(){
        echo 'My Class name is '.get_class($this);
    }
}
echo  BR; 
$tiger=new Animal;
echo get_class($tiger);
echo  BR; 
echo $tiger->class_name();

echo HR;
echo  BR; 
//it returns the true if a class  exists
echo '25'." ".'class_exists()';
echo  BR; 
if(class_exists('Animal')){
    echo 'Yes the class exists';
}
echo HR;
echo  BR; 
//it returns the true if a the value given is an object
echo '26'." ".'is_object()';
if(is_object($tiger)){
    echo  BR; 
    echo " is an abject of class".get_class($tiger);
}
echo HR;
echo  BR; 
//it returns the JSON representative of a word
echo '27'." ".'json_encode()';
echo  BR; 
echo json_encode($school);
echo  BR; 
echo $school;
echo HR;
echo  BR; 
//checks if a variable is null and returns true or false
echo '28'." ".'is_null()';
echo  BR; 
echo is_null($school)?'Null':'Not null';

echo HR;
echo  BR; 
//it is used to sort array elements is null and returns true or false
echo '29'." ".'sort()';
echo  BR; 
$people=array(
    1=>array(
        'year'=>2000,
        'age'=>23,
    ),
    2=>array(
        'year'=>1994,
        'age'=>30,
    ),
);
function getage($item){
    return $item['age'];
}
$results= array_map( 'getage',$people);
echo sort($results);
pre_r(sort($results));
echo pre_r($results);
echo HR;
echo  BR; 
//it is finds whether a variale is a number or numeric string
echo '30'." ".'is_numeric()';
echo  BR; 
$numbers=array(200 ,20,'43',null,'jackon');
foreach ($numbers as $key => $value) {
    if(is_numeric($value)){
        echo var_export($value).'is numeric'. BR;
    }
    else {
        echo var_export($value).'is not numeric'. BR;

    }
}
echo HR;
echo  BR; 
//it returns a value with its representation bassicly whet is on the page above
echo '31'." ".'Var_export(value)';
echo  BR; 
$name='jackon';
echo var_export($name);
//'jackon'-output
echo HR;
echo  BR; 
//shifts an array off the beggining of an array
echo '32'." ".'array_shify(array)';
echo  BR; 
$stack=array('banana','orange','apple','mango');

$fruit=array_shift($stack);
echo $fruit;

pre_r($stack);
echo HR;
echo  BR; 
//checks whether a givesn name constant exists and returns a bool
echo '33'." ".'defined(value)';
echo  BR; 
echo defined('BR')?'Yes':'NO';
echo HR;
echo  BR; 
//used to form constant variables with their values
echo '34'." ".'define(name,value)';
echo  BR; 
defined('BR') OR define('BR','<br>');
echo HR;
echo  BR; 
//checks if a given string is a directory or not
echo '35'." ".'is_dir()';
echo BR;

echo is_dir('D:\php\notes')?'yes':'no';
echo HR;
echo  BR; 
//converts json string into php array
echo '36'." ".'json_decode()';
echo BR;
$json='{"A":1,"V":2,"K":3,"I":4,"R":5}';
pre_r(json_decode($json));
echo HR;
echo  BR; 
//used to redirect to a spacified page
echo '37'." ".'header()';
echo BR;
//header('location:index.php');
//this will redirect the user in  5 seconds
//header('refresh:5');
echo HR;
echo  BR; 
//used to convert a string to uppercase
echo '38'." ".'strtoupper()';
echo BR;
echo strtoupper('hello');
echo HR;
echo  BR; 
//returns all the array values in an array
echo '39'." ".'array_values()';
echo BR;
$names=array('a'=>'jackon','b'=>'tervor','c'=>'dev','d'=>'ronald');
pre_r(array_values($names));
echo HR;
echo  BR; 
//calculates the md5 hash of a string
//returns a character as a 32-character hexadecimal number 
echo '40'." ".'md5()';
echo BR;
$image='orange pepper_7.jpg';
echo md5($image);
//c3c5961464633080f3d3357894f99db9-will be the output
echo HR;
echo  BR; 
//checks if a method exists in a class
echo '41'." ".'method_exists()';
echo  BR; 
class Human{
    public function eat(){
    }
        
    }
$i=new Human;

echo method_exists($i,'eat')?'yes':'no';
//yes-will be the output
echo HR;
echo  BR; 
//write data to a file 
//its identical to calling fopen() fwrite() fclose()
//LOCK_EX parameter prevents other people from writing
echo '41'." ".'file_put_contents()';
echo BR;
$content='It is a good day to die';
file_put_contents('cheat-code.txt',$content);
$more ='but we are not dieing';
file_put_contents('cheat-code.txt',$more,FILE_APPEND |LOCK_EX);
$current=file_get_contents('cheat-code.txt');
echo $current;
$current .='(, HELLO EVERYONE)';
echo $current;
echo HR;
echo  BR; 
//strips other characters from the end of a string
echo '42'." ".'rtrim()';
echo BR;
$string='We are all one ';
var_dump($string);
echo BR;
$newString=rtrim($string);
var_dump($newString);
$masterString=rtrim($newString ,'one');
var_dump($masterString);
echo HR;
echo  BR; 
//removes the last value of an array
echo '43'." ".'array_pop()';
echo BR;
$cards=array('spades','hearts','clubs','diamond');
pre_r($cards);
$card=array_pop($cards);
pre_r($cards);
echo HR;
echo  BR; 
//deletes a file and return boolean id deleted or not
echo '44'." ".'unlink()';
echo BR;
echo unlink('cheat-code.txt')?'deleted ':'not deleted';
echo HR;
echo  BR; 
//returns the trailing name of a path without returning the entire path
echo '45'." ".'basename()';
echo BR;
$dir='D:\php\notes\php1.docx';
echo basename($dir);
echo BR;
//php1.docx-is the output
echo basename($dir,'.docx');
//php1-is the output
echo HR;
echo  BR; 
//converts unix path to absolute windows path
echo '46'." ".'realpath()';
echo BR;
$dir='\php\notes';
echo realpath($dir);
//D:\php\notes-will be the output
echo HR;
echo  BR; 
//it calls the callback given by the first parameter
echo '47'." ".'call_user_func()';
echo BR;
function favourite_game($game,$type){
    echo "I love $game  is is my favourite $type of game";
}
call_user_func('favourite_game','Witcher3','XBOX 360');

/* class Cards{
    public function pick_card(){
        $cards=array('King','Queen','Jack','Ace','Ten');
        echo $cards[array_rand($cards)];
    }
}
call_user_func(array('Cards','pick_card'));
call_user_func('Cards::pick_card'); */
//I love Witcher3 is is my favourite XBOX 360 of game-is the output
echo HR;
echo  BR; 
//call a callback with an array of parameters
echo '48'." ".'call_user_func_array()';
echo BR;
function favourite_games($games,$type,$year)
{
    echo "I love to play $type   $games games since  $year";
}
$function_name='favourite_games';
$parameters=array('board','scrabble','2020');
call_user_func_array($function_name,$parameters);
//I love to play scrabble board games since 2020 is the output
echo HR;
echo  BR; 
//opens a file or url
echo '49'." ".'fopen()';
$file=fopen("names.txt","r");
echo BR;
echo HR;
echo  BR; 
//returns the current unix timestamp with micro -seconds
echo '50'." ".'microtime()';
//setting the true value returns a sort instead of a string
$timestart=microtime(true);
usleep(3000000);//2 seconds ,i micro second =1,000,000 micro seconds
$time_end=microtime(true);
$time_elapsed=$time_end-$timestart;
echo "Wasted $time_elapsed";
//will be he output Wasted 3.0066070556641
echo BR;
echo HR;
echo  BR; 
//closes an open file file pointer and returns true on success or false for failure
echo '51'." ".'fclose()';
echo BR;
$file=fopen('newfile.txt','w');
fwrite($file,'Hello World');
fclose($file);
echo BR;

echo HR;
echo  BR; 
//finds whether the type of a variable is an integer and returns either true or false
echo '52'." ".'is_int()';
echo BR;
$nums=array('23',34,null,'30.4',true,false);
echo '<pre>';
foreach ($nums as $value) {
    echo "is_int(";
    var_export($value);
    echo ")=";
    var_dump(is_int($value));
}
/* is_int('23')=bool(false)
is_int(34)=bool(true)
is_int(NULL)=bool(false)
is_int('30.4')=bool(false)
is_int(true)=bool(false)
is_int(false)=bool(false)--is the output */
echo HR;
echo  BR; 
//it checks if the string provided is a file or not
echo '53'." ".'is_file()';
echo BR;
var_dump(is_file('D:\php\notes\php21.docx'));
//bool(true)-it is a file since we just formed it in the same directory 
echo HR;
echo  BR; 
//used to extract the slice of the array-the numbers are counting from zero
echo '54'." ".'array_slice()';
echo BR;
$cards=array('dice','hearts','diamond','jack','flower');
$chunk=array_slice($cards,2,4);
pre_r($chunk);
/* (
    [0] => diamond
    [1] => jack
    [2] => flower
) -is the output*/
echo HR;
echo  BR; 
//capitalizes the first letter of a string
echo '55'." ".'ucfirst()';
echo BR;
$name='jackon shiundu';
echo ucfirst($name);
$name='JACKON SHIUNDU';
echo BR;
echo ucfirst(strtolower($name));
//Jackon shiundu
//Jackon shiundu-is the output
echo HR;
echo  BR; 
//guesses the interger value of a variable
echo '56'." ".'intval()';
echo BR;
$values=array(45,5.6,'67',false,9,'-43','+42',null,'042',true);
echo '<pre>';
foreach ($values as $value) {
   echo  intval($value);echo BR;
}
/* 45
5
67
1
9
-43
42
0
42-is the output */
echo HR;
echo  BR; 
//repeats the string as spacified by the second parameter
echo '57'." ".'str_repeat()';
echo BR;
echo str_repeat('__-#$-->',10).BR;
/* __-#$-->__-#$-->__-#$-->__-#$-->__-#$-->__-#$-->__-#$-->__-#$-->__-#$-->__-#$-->-is the output */
echo HR;
echo  BR; 
//used to  create a storable representation of a value
echo '58'." ".'serialize()';
echo BR;
//s:size:value
echo serialize('Jackon shiundu').BR;//s:14:"Jackon shiundu";
echo serialize(10).BR;//i:10;
echo serialize(array('name'=>'Jackon','school'=>'MKU','city'=>'Nairobi'));//a:3:{s:4:"name";s:6:"Jackon";s:6:"school";s:3:"MKU";s:4:"city";s:7:"Nairobi";}
echo HR;
echo  BR; 
//filters elements of an array using a callback function
echo '59'." ".'array_filter()';
echo BR;
function filter($value){
    return ($value===44);
}
$values=array(44,5.6,'67',false,9,44,'+42',null,'042',true);

$result=array_filter($values,'filter');
pre_r($values);
pre_r($result);
/* (
    [0] => 44
    [5] => 44
)-result */
echo HR;
echo  BR; 
//is used to assign values from an array to the list of variables in one operation 
echo '60'." ".'list()';
echo BR;
$arr=array('Apple','Dog','Rose');
list($a,$b,$c)=$arr;
echo "I have fruit $a","I have pet $b","I have flower $c".BR;//I have fruit AppleI have pet DogI have flower Rose-will be the output
//to get the second value in the array
list(,$b,)=$arr;
echo $b//Dog

?>