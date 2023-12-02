<?php
    $msg="";
    if (isset($_POST['upload'])){
         $target="images/".basename($_FILES['image']['name']);
        $db=mysqli_connect("localhost","root","","kitchen");
        // $nameuser =$_POST['nameuser'];
        
        $id1=$_POST["id1"];
        $fname=$_POST["fname"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];


         $image= $_FILES['image']['name'];
        
        $sql="INSERT INTO form3(id1,fname,price,quantity,image)VALUES('$id1','$fname','$price','$quantity','$image')";
        mysqli_query($db,$sql);
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            $msg="Image uploaded";
             header("Location: ressuccess.html");
        }
        else{
            $msg="there is problem";
        }
        // header("Location: cusid.php ");
exit();
    }
    
?>