<html>   
<head>
    <title>Calculator</title>
    <script language="javascript" type= "text/javascript">
        function packageTotal() {
                var x = 5;
                var y = 10;
                var p = x + y * 12;
                var b = y *12;
                
          if (document.getElementById('basicProgram').checked){
              document.calculator.total.value = b;
          }else if (document.getElementById('proProgram').checked){
              document.calculator.total.value = p;
          }          
    }


    </script>
</head>

<body>
    
    <form name="calculator">  
        
     <br/>
     <input type="radio" name="programType" id="basicProgram" value="Basic"/> Basic
     <input type="radio" name="programType" id="proProgram" value="Pro" checked/> Pro
     
     <br/>
     Your total price is: <input type="text" name="total">
     
     <input type="button" value="Submit" onclick="javascript:packageTotal();">
        
    </form>
</body>
</html>
      

