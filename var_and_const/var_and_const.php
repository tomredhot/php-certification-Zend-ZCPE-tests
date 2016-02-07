<?php
/*
### CREATOR : MALLEN Thomas
### PROJECT : php-certification-tests
### WEBSITE : http://www.thomas-mallen.fr/
### WEBSITE : http://www.dotlab.fr/
### 2016
### 
*/ 

// dynamic Var
$a="b";
$b="Hello, I'm a var"; 
echo $$a;
echo '<hr />';

// Dynamic Var No Name
$a="";
${''}="Hello, I'm a var with empty name"; 
echo $$a;
echo '<hr />';


// Global Var
function testFunction(){
	echo $GLOBALS['a'];
}
$a="Hi, I'm a global var, write in a function";
testFunction();
echo '<hr />';  

// isset
$a="";
$b="I'm alive";
if(isset($a)){ echo '$a is set<br />';}
if(isset($b)){ echo '$b is set<br />';}
if(TRUE === isset($a)){ echo '$a is set<br />';}
unset($b); 
if(!isset($b)){ echo '$b is unset<br />';}
echo '<hr />';  

// CONSTANTE
define('constant1', 'value of constant 1'); 
define('Constant2','1122', TRUE); // CASE UNSENSITIVE
const constant3 = 123; // CASE SENSITIVE

echo 'value of constant1 : '.constant1.'<br />'; 
echo 'value of Constant2 : '.Constant2.'<br />'; 
echo 'value of constant2 : '.constant2.'<br />';
echo 'value of constant3 : '.constant3.'<br />'; 
function testConst(){
	echo 'Value of constant 3 by function : '.constant3;
}
testConst(); 
echo '<hr />';  
echo Undefinedconstant; // RETURN E_NOTICE & STRING
echo '<hr />'; 



