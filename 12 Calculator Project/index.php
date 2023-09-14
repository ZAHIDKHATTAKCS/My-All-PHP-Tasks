<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator in PHP</title>
    
  <link rel="stylesheet" href="./assets/index-fe4d30a1.css">
</head>

<body class="bg-teal-600 flex justify-center items-center mt-48">
    <div class="container flex justify-between space-x-5 bg-gray-600 rounded-lg text-sm p-20 text-white">
        <div class="">
            <p class="pl-5 border-l-4 border-teal-600 text-teal-600 font-semibold text-2xl hover:cursor-pointer">
                PHP
                <br><br>
                Calculator
            </p>
        </div>
        
        <div class="space-x-2 p-5 font-semibold">
            <form action="" method="POST">
            Enter Number : <input type="text" class="bg-transparent border-b" name="number1"><br><br><br>
            Enter Number : <input type="text" class="bg-transparent border-b" name="number2"><br><br><br>

            

            <div class="flex flex-col justify-center items-center w-72">
                <select class="text-black mx-36 p-2 hover:cursor-pointer" name="operation">
                    <option value="add">Addition +</option>
                    <option value="sub">Subtraction -</option>
                    <option value="mul">Multiplication *</option>
                    <option value="modulus">Modulus %</option>
                    <option value="div">Div /</option>
                </select><br><br>
                <button type="submit" name="submit" class="bg-teal-600 p-3 ">Submit</button>
            </div>
            
            
        </div>
        </form>
        <div>

            <p>
                <?php
                    if(isset($_POST['submit']))
                    {
                        $num1=$_POST['number1'];
                        $num2=$_POST['number2'];

                        $operation=$_POST['operation'];

                        switch($operation)
                        {
                            case "add": $sum=$num1+$num2;
                                echo "The Addition of these two numbers is ".$sum;
                                break;
                                case "sub": $sub=$num1-$num2;
                                    echo "The Subtraction of these two numbers is ".$sub;
                                    break;
                                    case "mul": $mul=$num1*$num2;
                                        echo "The Multiplication of these two numbers is ".$mul;
                                        break;
                                        case "modulus": $modulus=$num1%$num2;
                                            echo "The Modulus of these two numbers is ".$modulus;
                                            break;
                                            case "div": $div=$num1/$num2;
                                                echo "The Division of these two numbers is ".$div;
                                                break;
                                                default: echo "nothing to do with that";

                        }
                        
                    }
                    
                    ?>
            </p>
        </div>
    </div>
</body>
</html>



