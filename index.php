<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <div class="container-fluid parent">
         <div class="row justify-content-center ">
             <div class="col-md-6">
             <form method="POST"> 
                 <div class="row border border-primary me-5 bg-dark child">
                 
                     <div class="col-md-3 offset-1 text-center ">
                     <div class="text-white mt-5"> 
                     <b >PHP <br>
                     CALCULATOR</b>
                     </div>
                     
                 </div>
                 
                 <div class="col-md-3  ms-5 mt-4">
                     <div class="my-3">
                     <input type="text" name="num1" placeholder="ENTER NUMBER">
                     </div>
                     <div>
                     <input type="text" name="num2" placeholder="ENTER NUMBER">
                     </div>
                     <div class="mt-3">
                         <select name="operation">
                             <option>Select</option>
                             <option value="add">ADD</option>
                             <option value="sub">SUB</option>
                             <option value="mul">MULT</option>
                             <option value="div">DIV</option>
                             <option value="mod">MOD</option>
                             <option value="pow">POW</option>
                             <option value="sqr">SQR</option>
                         </select>
                     </div>
                     
                 </div>
                 <div class="text-center mt-3 ms-5 mb-5">
                         <input class="btn btn-primary " type="submit" value="submit" name="submit">
                      </div>
                      </form>
                      <p class="text-white text-center">
                          
                          <?php
                              if(isset($_REQUEST['submit']))
                              {
                                  $num1 = $_REQUEST['num1'];
                                  $num2 = $_REQUEST['num2'];
                                 // echo "{$num1} {$num2}";
                                 $operation = $_REQUEST['operation'];

                                 switch($operation)
                                 {
                                     case "add":$sum = $num1+$num2;
                                           echo "The addition of two numbers is {$sum}";
                                           break;
                                     case "sub":$sub = $num1-$num2;
                                           echo "The subtraction of two numbers is {$sub}";
                                           break;
                                     case "mul":$mul = $num1*$num2;
                                           echo "The multipication of two numbers is {$mul}";
                                           break;
                                     case "div":$div = $num1/$num2;
                                           echo "The division of two numbers is {$div}";
                                           break;
                                     case "mod":$mod = $num1%$num2;
                                           echo "The modulus of two number sis {$mod}";
                                           break;
                                     case "pow":$pow =pow($num1,$num2);
                                           echo "The power of two numbers is {$pow}";
                                           break;
                                     
                                     default: echo "Sorry it's not exist!";
                                 }
                              }
                          ?>
                      </p>
                 </div>
                
             </div>    
             
         </div>
        
     </div>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.js"></script>
     <script src="js/popper.js"></script>  
</body>
</html>