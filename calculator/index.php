<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>calculatrice</title>
</head>
<body>

    <center>
        <form method="post">  
            <input type="number" name="a" /><br><br>  
            <input type="number" name="b" /><br><br>  
            <input  type="submit" name="+" value="+">  
            <input  type="submit" name="-" value="-">  
            <input  type="submit" name="/" value="/">  
            <input  type="submit" name="*" value="*">
            <br><br>   
        </form>  

        <?php  
            if(isset($_POST['+']))  
            {  
                $number1 = $_POST['a'];  
                $number2 = $_POST['b'];  
                $sum =  $number1+$number2;     
                echo "c = ".$sum;   
            }
            if(isset($_POST['-']))  
            {  
                $number1 = $_POST['a'];  
                $number2 = $_POST['b'];  
                $sum =  $number1-$number2;     
                echo "c = ".$sum;   
            } 
            if(isset($_POST['/']))  
            {  
                $number1 = $_POST['a'];  
                $number2 = $_POST['b']; 
                if ( $number2 == 0 )
                {
                    echo "impossible on divise pas sur 0 " ; 
                }else
                {
                    $sum =  $number1/$number2;     
                    echo "c = ".$sum; 
                } 
            } 
            if(isset($_POST['*']))  
            {  
                $number1 = $_POST['a'];  
                $number2 = $_POST['b'];  
                $sum =  $number1*$number2;     
                echo "c = ".$sum;   
            }   
        ?>
    </center>
   
</body>
</html>
