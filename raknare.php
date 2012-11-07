<?php
error_reporting(0);
  function calc()
   {

    $sum;
     if($_POST['calc']=="+")
	   {
	     $sum = $_POST["n1"]+$_POST["n2"];
		 echo "$sum";
	   }
	   
	  elseif($_POST['calc']=="-")
	  {
	     $sum = $_POST["n1"]-$_POST["n2"];
		 echo "$sum";
	  }
	  
	  elseif($_POST['calc']=="*")
	  {
	     $sum = $_POST["n1"]*$_POST["n2"];
		 echo "$sum";
	  }
	  
	  elseif($_POST['calc']=="/")
	  {
	     $sum = $_POST["n1"]/$_POST["n2"];
		 echo "$sum";
	  }
	  
	  elseif($_POST['calc']=="%")
	  {
	     $sum = $_POST["n1"]%$_POST["n2"];
		 echo "$sum";
	  }
	  
	  elseif($_POST['calc']=="^")
	  {
		 echo pow($_POST["n1"],$_POST["n2"]);
	  }
	  
	  elseif($_POST['calc']=="x^(1/n)")
	  {  
		 echo pow($_POST["n1"],(1/$_POST["n2"]));
	  }
	  
	  else
	  {
		 echo "Välj Räknesätt!";
	  }
	  
   }
?>


<html>
 <body>
  <?php calc(); ?>
 </body>
</html>