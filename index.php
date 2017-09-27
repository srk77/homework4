<?php
	$obj = new main();
  	$text = "my text";
    	$obj->printthis($text);
      
       	$array = array(1,2,3,4,5,6,7);
	$obj->printArray($array);

        $array1 = array(2,4,6);
	$array2 = array(1,3,5,7);
	$array3 = array(1,4,5,7);
	$input_array = array("WelcOme" => 1, "WorlD" => 4);
	$obj->changeCase($input_array);

	$obj->mergeArray($array1,$array2);
        $obj->prodArray($array1);
        $obj->reverseArray($array1);
        $obj->sumArray($array2);
        $obj->padArray($array1);
        $obj->diffArray($array2,$array3);
        $obj->addElements($array1);
	$obj->arrayValues($array3);
        
     /* String Variables */

         $num = 6;
	 $location = 'kolhapur';
	 $format = 'I love %d my %s';
	 $obj->formatString($num,$location,$format);

         $name = 'Shweta Kumthekar';
	 $obj->padString($name);
	 
	 $obj->repeatString($location);
	 
	 /*$obj->shuffleString($name);
 	  
	  $str1='Welcome to WSD Course';
	 $obj->splitString($str1);
  	 $obj->countWord($str1);
	 $obj->stringLength($name);
	 $obj->reverseString($name);
	 $str2=	" WSD is a very interesting subject and I LIKE it ";
	 $obj->toUpper($str2);
	 $obj->toLower($str2);
*/
         class main {
 
        public function __construct() 
	{

        	echo 'hello World </br>';
	}
	public function printthis($text) 
	{
		echo '<h1>print function demo </h1>';
	 	print($text);
    	 	echo '<hr>';
        }

         public function changeCase($input_array)
	 	{
		echo '<h1>array case change function</h1>';
		print_r(array_change_key_case($input_array,CASE_UPPER));
	       echo '<hr>';
	       }

	  public function printArray($array) 
	  {
	  	echo '<h1>array print function</h1>';
	  	print_r($array);
	  	echo '<hr>';
	  }
	  public function mergeArray($array1,$array2)
          {
            echo '<h1>array merge function</h1>';
	    print_r(array_merge($array1,$array2));
            echo '<hr>';
	  }
          public function prodArray($array1)
	  {
           echo '<h1>array product function</h1>';
          echo "product(a) = " . array_product($array1) . "\n";
	  echo '<hr>';
	 }
          public function reverseArray($array1)
	  {
              echo '<h1>array reverse function</h1>';
	      print_r(array_reverse($array1)); 
	      echo '<hr>';
	  }
          public function sumArray($array2)
	  {
           echo '<h1>array sum function</h1>';
	   echo "sum(array2) = " . array_sum($array2) . "\n";
           echo '<hr>';
          }
          public function padArray($array1)
	  {
           echo '<h1>array padding function</h1>';
	    print_r(array_pad($array1,5,9));
	   echo '<hr>';
	  }

          public function diffArray($array2,$array3)
	  {
          echo '<h1>array difference function</h1>';
          print_r(array_diff($array2,$array3));
	  echo '<hr>';
          }

	  public function addElements($array1)
	  {
	  echo '<h1>Array sum function</h1>';
	  echo '<h3array elements function </h3>';
	  print_r($array1);
	  echo '<br>';
	  echo "sum = " . array_sum($array1) . "\n";
	  echo '<hr>';
  	} 
        
         public function arrayValues($array3)
	  {
	   echo '<h1>array values function</h1>';
	   print_r(array_values($array3));
	   echo '<hr>';
	   echo '<h1>------------- String Functions --------------</h1>';
	   echo '<hr>';
	  }

         public function formatString($num,$location,$format)
	          {
		           echo '<h1>1. Format String Function</h1>';
			            echo sprintf($format, $num, $location);
                           echo '<hr>';
			   }
	public function padString($name)
	 	{
		echo '<h1>2. Padding String Function</h1>';
		echo str_pad($name, 20, "--", STR_PAD_BOTH);
		echo '<hr>';
	        }
        public function repeatString($location)
	{
	echo '<h1>3. Repeat String Function</h1>';
	echo str_repeat($location, 10);
	echo '<hr>';
	}

    
 public function __destruct() 
	   {
           	echo '</br> I\'m Done';
            } 
    }
?>
