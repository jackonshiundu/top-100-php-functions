<?php
const BR= '<br>';
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
echo pre_r($results)
?>