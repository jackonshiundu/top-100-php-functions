<?php
echo '<h1>PHP built-In Functions</h1>';
//one
echo '1' ." "."count()";//returns an int
echo  "<br>";
$name=array("ning","Jackon",array('Blue','red','Orange'));
echo count($name,COUNT_RECURSIVE);
echo  "<br>";
//the recursive parameter in a multi-dimention array its used to count the values of the nested array otherwise COUNT_NORMAL is used by default
//used case
 for($i=0;$i<count($name);$i++){
    echo $name[$i][$i]."<br>";
} 
echo "<hr>";
//two
echo "2"." ". "is_array()";
echo  "<br>";
 //returns a boolean
 if(is_array($name)){
    echo 'THis is an array';
}else{
     echo 'CAnnot loop through an array';
 }
 echo "<hr>";

 //three
echo '3'." ".'substr()';//returns a string
echo  "<br>";
 $school='Mount Kenya University';
 echo substr($school,0,6);

 echo "<hr>";
 //four
 echo  "<br>";
 echo '4'." ".'in_array()';//returns a boolean
// we also have the third parameter that checks the types too
echo  "<br>";
 if(in_array('jackon',$name,true)){
    echo 'yes';

}else{
     echo 'No';
 }
 echo "<hr>";
 //five
 echo  "<br>";
 echo '5'." ".'explode()';//returns a array
 echo  "<br>";
 $text="red,orange,blue,grenn,purple,yellow";
 $textarray=explode(",",$text,3);
 print_r($textarray);
 echo "<hr>";
 //six
 echo  "<br>";
 echo '6'." ".'str_replace()';//returns a midex datatype
 $vowels=array('a','b','c');
 $text="red,orange,blue,grenn,purple,yellow";
$bodytag=str_replace($vowels,"",$text);
echo  "<br>";
echo $bodytag ;
echo "<hr>";

//seven
echo  "<br>";
echo '7'." ".'implode()';//returns a string
echo  "<br>";
$name=array("ning","Jackon",'Blue','red','Orange');
$glued=implode('|',$name);
echo $glued;
echo "<hr>";

//eight
echo  "<br>";
echo '8'." ".'strlen()';
echo  "<br>";

//returns an integer
$school='Mount Kenya University';
echo strlen($school);
//nine
echo "<hr>";
echo  "<br>";
echo '9'." ".'array_merge()';
echo  "<br>";
$vowels=array('a','b','c');
$text="red,orange,blue,grenn,purple,yellow";
$textarray=explode(',',$text);
print_r(array_merge($vowels,$textarray));
//Ten
echo "<hr>";
echo  "<br>";
echo '10'." ".'Strops()';
echo  "<br>";
$text="red,orange,blue,grenn,purple,yellow";
echo strpos($text,'blue');
echo "<hr>";
echo  "<br>"; 
//it returns a formatted string
echo '11'." ".'printf()';
echo  "<br>";
$number=6;
$animal='dog';
$location='Uthiru';
$number2=43;
$insect='Bee';
$format='There are %d %s by the %s ,and %f %s';
//the order must be the same as placed in the tamplate
echo printf($format,$number,$animal,$location,$number2,$insect);
echo "<hr>";
echo  "<br>"; 
//it strips whitespaces and other characters from the beginning and end of a string
echo '12'." ".'trim()';
echo  "<br>";
$text='jackon Shiundu ';
echo trim($text,'ju');
//the code below removes any spaces sarounding the text
echo trim($text);

echo "<hr>";
echo  "<br>"; 
//used to convert a string to lower case
echo '13'." ".'strtolower()';
echo  "<br>";
$text='JACKON';
echo strtolower($text);
echo "<hr>";
echo  "<br>"; 
//checks if a file exixts in the spacified path.
echo '14'." ".'file_exists()';
echo  "<br>";
$file='D:\php\notes\php15.docx';
if(file_exists($file)){
    echo 'yes it exists';
}else{
    echo 'no it doesn\'t it exists';
}
echo "<hr>";
echo  "<br>"; 
//checks if a variable is a string
echo '15'." ".'is_string()';
echo  "<br>";
$text='hello world';
if(is_string($text)){
    echo "yes i is a is_string";
}else{
    echo 'not string';
}
echo "<hr>";
echo  "<br>"; 
//checks if a variable is a string
echo '16'." ".'file_get_contents()';
echo  "<br>";
/* $files=file_get_contents('https://google.com');
echo $files; */
echo "<hr>";
echo  "<br>"; 
//checks if a variable is a string
echo '17'." ".'array_key_exists()';
$array=array('year'=>2000,'month'=>'January');
if(array_key_exists('year',$array)){
    echo '<br>';
    echo 'Hello';
}
echo "<hr>";
echo  "<br>"; 
//checks if a variable is a string
echo '18'." ".'array_keys()';
$array=array('year'=>2000,'month'=>'January');
print_r(array_keys($array)) ;
?>