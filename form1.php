<?php
    $msg="";
    if (isset($_POST['upload'])){
         $target="images/".basename($_FILES['image']['name']);
        $db=mysqli_connect("localhost","root","","kitchen");
        // $nameuser =$_POST['nameuser'];
        
        $name=$_POST["name"];
        $address=$_POST["address"];
$id=$_POST["id"];
$state=$_POST["state"];
$number=$_POST["number"];
$ownername=$_POST["ownername"];
$ownernumber=$_POST["ownernumber"];
$email=$_POST["email"];
$image= $_FILES['image']['name'];


        // $image= $_FILES['image']['name'];
        
        $sql="INSERT INTO form1(name,address,id,state,number,ownername,ownernumber,email,image)VALUES('$name','$address','$id','$state','$number','$ownername','$ownernumber','$email','$image')";
        mysqli_query($db,$sql);
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            $msg="Image uploaded";
             header("Location: form2.html");
        }
        else{
            $msg="there is problem";
        }
        // header("Location: cusid.php ");
exit();
    }
    
?>