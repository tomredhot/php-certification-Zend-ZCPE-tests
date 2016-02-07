<?php
/*
### CREATOR : MALLEN Thomas
### PROJECT : php-certification-tests
### WEBSITE : http://www.thomas-mallen.fr/
### WEBSITE : http://www.dotlab.fr/
### 2016
### 
*/ 
namespace dmd; 
class test{}

namespace dmd2; 
class test2{}
class test{}

namespace myApp; 
echo substr('...This substr is a global function (because no exist is this namespace)...', 3, 69); 
echo '<br />';
echo __NAMESPACE__; 

//use dmd\test; // FOR CALL dmd\test without alias
use dmd\test, dmd2\test2; // FOR CALL dmd\test & dmd2\test2 without alias

use dmd\test as dmd1T, dmd2\test as dmd2T; // FOR CALL WITH ALIAS (NB same class name can be used)

