<?php
/*
### CREATOR : MALLEN Thomas
### PROJECT : php-certification-tests
### WEBSITE : http://www.thomas-mallen.fr/
### WEBSITE : http://www.dotlab.fr/
### 2016
### 
*/ 
//declare(encoding='UTF-8'); // ONLY EXCEPTION BEFORE namespace FOR NO E_PARSE ERROR 
/*
namespace myApp\testNamespace;
class mysql{}

namespace myOtherApp;
class mysql{}

namespace myThirdApp {
	class mysql{}
} 
// FOR THIS EXEMPLE, RETURN "Cannot mix bracketed namespace declarations with unbracketed namespace declarations"

namespace {
	class mysql{}
}
// NAMESPACE GLOBAL
// FOR THIS EXEMPLE, RETURN "Cannot mix bracketed namespace declarations with unbracketed namespace declarations"
*/


namespace myApp\testNamespace\db\adapter{
	class mysql{  }
}

namespace myTestApp{
	echo get_class(new \myApp\testNamespace\db\adapter\mysql); // RETURN myApp\testNamespace\db\adapter\mysq
	echo '<br />'; 
}

namespace myApp\testNamespace\db{
	class mysql{  }
	echo get_class(new adapter\mysql); // RETURN myApp\testNamespace\db\adapter\mysql
	echo '<br />'; 
	echo mysql::class; // RETURN myApp\testNamespace\db\mysql
	echo '<br />'; 
	echo get_class(new mysql); // RETURN myApp\testNamespace\db\mysql
	echo '<br />'; 
	echo __NAMESPACE__; // RETURN myApp\testNamespace\db
}
