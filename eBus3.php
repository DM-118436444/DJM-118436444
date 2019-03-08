<!DOCTYPE html>
<html>
   
        <style> 
            body{
                background-color: #00B0FF;
            }
        </style>
    
    
    <body>
           <h1>Purchase Receipt</h1>
       <?php
       
       session_start();
       $totalValue = $_POST['txtTotal'];
       $fullNameValue = $_POST['txtName'];
       echo "The Name is : ".$fullNameValue.".";
       echo"<br></br>";
       echo"The total value is:  ".$totalValue.".";
       ?>
     
    
    </body>
       </html>

