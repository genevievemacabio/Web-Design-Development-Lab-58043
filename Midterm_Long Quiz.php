<html>
   
   <head>
      <title>Long Quiz Midterm</title>
   </head>
   
   <body>
   <h3> Problem 1 </h3>
	<?php
         $Salary_Rate = 600;
         $Salary = 0;
		 $Taxable_Amount = 0;
		 $Net_Pay = 0;
         
		 echo "Salary Rate: $Salary_Rate<br>";
         $Salary = $Salary_Rate * 15;
         echo "<br>Salary: $Salary<br/>";
         
         $Taxable_Amount = .30 * $Salary;
         echo "<br>TaxableAmount: $Taxable_Amount<br/>";
         
         $Net_Pay = $Salary - $Taxable_Amount;
         echo "<br>Net Pay: $Net_Pay<br/>";
     ?>
	<h3> <br>Problem 2</br> </h3>
	<?php
		 $sumOf50 = 0; // declare sum variable 
		 for($num=1; $num<=50; $num++)
		{
			$sumOf50 += $num; // getting sum of 50 numbers from 1 to 50 
		}
		echo "The sum of the numbers from 1 to 50 is $sumOf50"; // printing the sum of 50 numbers 
	?>
   
   </body>
</html>