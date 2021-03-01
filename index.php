<!DOCTYPE html>
<html>
    <head>
        <title>PRIME NUMBER CHECKER</title>
        
    </head>
    <body bgcolor="#358597" text="#F4A896">
<h1 align="center">PRIME NUMBER CHECKER</h1>
<center>
    <form action="#" method="POST" >
         <label>Enter a Number</label>
        <input type="text" name="num1">
        <input type="SUBMIT" name="" value="Find">
    
    </form>
    </center>
    <hr>
    <?php
 function prime($n)
 {
   $i=2;
   while($n%$i==0)
   {
  return 0;
  $i++;

   }
return 1;
}
?>
<?php
 $submitted = isset($_POST['num1']);
 if($submitted){
  if(prime($_POST['num1']))
  {
    echo "<font size='6'>" .$_POST['num1']." is a Prime number </font>" ;
  }
  else
  {
      echo "<font size='6'>". $_POST['num1'] ." is not Prime Number</font>";
  }

 }


?>



    </body>
</html>