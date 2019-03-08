<?php
session_start();
$fullNameValue = "";
$totalValue =""; 

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html>
    <head     
        <title>eBusiness 2</title>
        <style>
            #roundedborder{
             border-radius: 25px;
             border: 2px solid black;
             padding: 20px;
             width: 200px;
             height: 150px;
             background-color: #00B0FF;
        </style>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
               <center>
                   <table cellspacing="10" id="roundedborder">
                       <tr>
                               <td><b></b></td>
                           <td><b>Enter in your details below</b></td>
                       </tr>
                     
                       <tr>
                           <td><b>Name</b></td>
                           <td><input type="text" id="txtName" name="txtName" required value="" /></td>
                       </tr>
                    
                       <tr>
                           <td><b>Phone Number</b></td>
                           <td><input type="text" id="txtNum" name="txtNum" value=""  required onkeypress="return isNumber(event)"/></td>
                       </tr>
                       
                       <tr>
                           <td><b>PIN</b></td>
                           <td><input type="text" id="txtPassword" name="txtPassword" onkeypress="return isNumber(event)" value="" required /></td>
                       </tr>
                       
                       <tr>
                           <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                       </tr>
                   </table>
             </center>
             <center>
                 <br></br>
                 <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Proceed with Purchase"/>
             </center>
        </form>
     </div>
      
     <script> // This code was adapted from: https://stackoverflow.com/questions/7295843/allow-only-numbers-to-be-typed-in-a-textbox */
         function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>

    </body>
</html>
