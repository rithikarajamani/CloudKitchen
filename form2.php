<?php
    $msg="";
    if (isset($_POST['upload'])){
        //  $target="images/".basename($_FILES['image']['name']);
        $db=mysqli_connect("localhost","root","","kitchen");
        // $nameuser =$_POST['nameuser'];
        
        $optradio=$_POST["optradio"];
        $option1=$_POST["option1"];
        $option2=$_POST["option2"];
        $option3=$_POST["option3"];
        $option4=$_POST["option4"];
        $option5=$_POST["option5"];
        $option6=$_POST["option6"];
        $option7=$_POST["option7"];
        $option8=$_POST["option8"];
        $option9=$_POST["option9"];
        $option10=$_POST["option10"];
        $option11=$_POST["option11"];
        $option12=$_POST["option12"];
        $option13=$_POST["option13"];
        $option14=$_POST["option14"];
        $option15=$_POST["option15"];
$open=$_POST["open"];
$close=$_POST["close"];
$opt1=$_POST["opt1"];
$opt2=$_POST["opt2"];
$opt3=$_POST["opt3"];
$opt4=$_POST["opt4"];
$opt5=$_POST["opt5"];
$opt6=$_POST["opt6"];
$opt7=$_POST["opt7"];


       

         $sql="INSERT INTO form2(optradio,option1,option2,option3,option4,option5,option6,option7,option8,option9,option10,option11,option12,option13,option14,option15,open,close,opt1,opt2,opt3,opt4,opt5,opt6,opt7)VALUES('$optradio','$option1','$option2','$option3','$option4','$option5','$option6','$option7','$option8','$option9','$option10','$option11','$option12','$option13','$option14','$option15','$open','$close','$opt1','$opt2','$opt3','$opt4','$opt5','$opt6','$opt7')";
        mysqli_query($db,$sql);
        // if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        //     $msg="Image uploaded";
        //     header("Location: cusid.php");
        // }
        // else{
        //     $msg="there is problem";
        // }
         header("Location: form3.html ");
exit();
    }
    
?>