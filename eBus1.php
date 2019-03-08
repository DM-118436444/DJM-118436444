<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>     
        <meta charset="utf-8"/>
        <title>EBusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <style>
            #roundedborder{
             border-radius: 25px;
             border: 2px solid black;
             padding: 20px;
             width: 200px;
             height: 150px;
             background-color: #00B0FF;
            }
            
            
            
            
        </style>
    </head>
    <body>
        <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
                <h1>Services Calculator</h1>
                <hr />
                <center>
                    <table cellspacing="10" id="roundedborder">
                        <tr>
                            <td><b>Services</b></td>
                        </tr>
                        <tr>
                            <td>Blockchain</td>
                            <td><input type="radio" id="Blockchain"  name="rdoGroup" value="1000" required=""/></td>
                        </tr>
                        <tr>
                            <td>Autonomous Things</td>
                            <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000"
                        </tr>
                         <tr>
                             <td>Immersive Experience</td>
                            <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                        </tr>                   
                    </table>
                </center>
                <br />
                
                
                <center>
                    <table cellspacing="10" id="roundedborder">
                <tr> 
                    <td><b></b></td>
                    <td><b>Amount</b></td>
                </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>                   
                </tr>
                <tr>
                    <td>-Discount @10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly/></td>
                </tr>
                <tr>
                    <td>+VAT @20%</TD>
                    <td><input type="text" id="txtVat" name="txtVat" readonly/></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>                    
                </tr>
                    </table>
                </center>
                
                
             <br />
             <center>
                 <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                 <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                 <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
             </center>       
            </form>
        </div>
            
            <script type="text/javascript">
                function calcSub()  {
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                    var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
   
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        subAmount = Blockchain;
                        calculation(subAmount);
                    }
                    else if (document.getElementById('AutonomousThings').checked) {
                        document.intCalc.txtSubTot.value = AutonomousThings; 
                        subAmount = AutonomousThings;
                        calculation(subAmount);
                    }
                    
                    else if (document.getElementById('ImmersiveExperience').checked){
                             document.intCalc.txtSubTot.value = ImmersiveExperience;
                             subAmount = ImmersiveExperience;
                             calculation(subAmount);
            }                 
        }
    
    function calculation(parm$Total){
        var subTotal = parseFloat(parm$Total);
        var discCalc = parseFloat(subTotal * .10);
        var vatCalc = parseFloat(subTotal * .20);
        var total = parseFloat(subTotal - discCalc + vatCalc);
        
        document.intCalc.txtDisc.value = discCalc;
        document.intCalc.txtVat.value = vatCalc;
        document.intCalc.txtTotal.value = total;        
    }
    
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
        document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
        document.getElementById("txtTotal").value="";
    }
    </script>
       
  </body>
</html>





