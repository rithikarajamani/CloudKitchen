<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "./connection.php";
    
    $sql = sprintf("SELECT * FROM new
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            // header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
    <title>Document</title>
    <style>
         .back{
            background-image:url("cafe.jpg");
            min-height: 350px;
            height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
          
            
        }
        hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
  border-color: black;
} 
        #f1{
            font-size:25px;
            
    animation-duration: 8s;
    animation-name: slidein;
    animation-iteration-count: infinite;
        }

#ani{
    animation-duration: 8s;
    animation-name: slidein;
    animation-iteration-count: infinite;
}


        @keyframes slidein {
  0% {
    margin-left: 0%;
  }
  50% {
    margin-left: 300px;
  }
  100% {
    margin-left: 0%;
  }
}
        #f2{
            font-size:40px;

        }
        #f3{
            font-size:20px;
            
        }
        #f4{
            color:dodgerblue;
        }
        .definition{
            min-height:300px;
            background-color: white;
        }
        .card{
            width:160px;
           
        }
        #c2{
            -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
  -moz-box-shadow:3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
  box-shadow:3px 3px 5px 6px rgb(24, 180, 241);  /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
        }
        #c1 {
            box-shadow: inset 0 0 10px #0e0d0d;
        }

        .working{
            min-height:300px;
            background-color:grey;
            background-image:url(how.jpg); 
              
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
        }
       
        .question{
            background-color: white;
        }
        .image{
            min-height:200px;
            background-color:grey;
            background-image:url(image.jpg); 
              
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
        }

        #h:hover {
  color: yellow;
  
}
#h1:hover {
  color: yellow;
  
}
#h1{
    border:1px solid white;
    border-radius:5px;
    padding:5px;

}



.cc{
    /* min-height: 500px; */
    background-color:white;
}



.carousel-control-prev-icon{
    height:30px;
    width:30px;
    margin-left: 100px;
    outline: rgb(12, 12, 12);
    background-color: rgba(0, 0, 0, 0.3);
    background-size: 100%, 100%;
    border-radius: 50%;
    border: 1px solid black;
    box-shadow: inset 0 0 10px #0e0d0d;
}
.carousel-control-next-icon{
    height:30px;
    width:30px;
    margin-right: 150px;
    border-radius: 50%;
    border: 1px solid black; 
    background-color:rgb(250, 14, 214);
    box-shadow: inset 0 0 10px #0e0d0d;
    /* outline: rgb(241, 69, 163);
    
    background-size: 100%, 100%;
   
    */
}


.benefits{
    min-height:400px;
    background-color: white;
    
}

#bimage:hover{
    background-image:url("first.png");
    width:100px;
    height:500px;
  background-repeat: no-repeat;
  
}
#bimage{
   
  background-repeat: no-repeat;
  width:100px;
    height:500px;
    background-image:url("second.png");
}



#h5{
    box-shadow: inset 0 0 10px black;
}

    </style>
</head>
<body>
    <div class="container-fluid">
    <div class="back text-light">
        <nav class="navbar navbar-expand-sm">

            <div class="container-fluid">
            
              <ul class="navbar-nav">
                
                <li class="nav-item ps-5">
                  <a class="nav-link text-light" href="#" id="font">CLOUD KITCHEN</a>
                </li>
              </ul>


              <form class="d-flex justify-content-end">
                <a href="sample.html" style="text-decoration:none;color: white;"  class="me-4 "><div class="text-center">
                    <!-- Button HTML (to Trigger Modal) -->
                    <a href="#myModal" style="text-decoration:none;color: white;" class="trigger-btn" data-toggle="modal" ><p id="l1">Login</p></a>
                </div></a>
                <a href="#" style="text-decoration:none;color: white;"><div class="text-center">
                    <!-- Button HTML (to Trigger Modal) -->
                    <a href="#myModal1" style="text-decoration:none;color: white;" class="trigger-btn ml-4" data-toggle="modal"><p id="l1">Signup</p></a>
                </div></a>
              </form>

            </div>
          
          </nav>
<div class="row mt-5">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-7">
        
           <h1>Register your Restaurant on CLOUD KITCHEN</h1> 
          <p id="f1">and get more customers...</p>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm">
        <button class="btn btn-primary" type="button">Register your restaurant</button>
        <button class="btn btn-primary" type="button">Already Registered?Login now</button>
    </div>
    
</div>
          


         
    </div>


<div class="definition">
    <div class="row">
        <div class="col-sm-3">

        </div>
    <div class="col-sm-7 text-dark mt-5" id="f2">
        Why should you partner with cloud kitchen?
    </div>
</div>

<div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8 mt-3 text-secondary" id="f3">
       Cloud Kitchen enables you to get 60% more revenue, 10x new customers and boost 
         
    </div>
</div>
<div class="text-center text-secondary" id="f3">
    your brand  visibility by providing insights to improve your business.
</div>

<div class="row mt-5 mb-5">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-2">
        <div class="card" id="c1">
            <div class="card-body">
              <h4 id="f4">1000+cities</h4>
              in India
             
            </div>
          </div>
    </div>
    <div class="col-sm-2">
        <div class="card"  id="c1">
            <div class="card-body">
              <h4 id="f4">3lakh+</h4>
              restaurant listings
             
            </div>
          </div>
    </div>
    <div class="col-sm-2">
        <div class="card"  id="c1">
            <div class="card-body">
              <h4 id="f4">5.0 crore+</h4>
             monthly orders
            </div>
          </div>
    </div>
</div>
    </div>





    <div class="working"><br>
        <div class="text-center">
            <h1>How it works?</h1>
        </div>
        <br>
        
        <div class="row">
            
            <div class="col-sm-2">

            </div>
            <div class="col-sm-3">
                <div class="card " id="c2" style="width:280px;">
                    <div class="card-body">
                        <img src="text.png" style="width:100px;height:90px;" class="rounded-circle mx-auto d-block">
                      <br> <p class="text-center"><strong>Step 1</strong></p>
                        <p  style="color:grey;"><strong>Create your page on cloud kitchen</strong></p>
                        <p  style="color:grey;">Help users discover your place by creating a listing on Cloud kitchen</p>

                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card"  id="c2" style="width:280px;">
                    <div class="card-body">
                        <img src="scooter.jpg" style="width:100px;height:100px;" class="rounded-circle mx-auto d-block">
                       <br> <p class="text-center"><strong>Step 2</strong></p>
                        <p  style="color:grey;"><strong>Register for online ordering</strong></p>
                     <p style="color:grey;">And deliver orders to millions of customers with ease</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card" id="c2" style="width:280px;">
                    <div class="card-body">
                        <img src="deliver.png" style="width:100px;height:100px;" class="rounded-circle mx-auto d-block">
                      <br>  <p class="text-center"><strong>Step 3</strong></p>
                        <p  style="color:grey;"><strong>Start receiving orders online</strong>
                  Manage orders on our partner app,web dashboard or API partners</p>
                    </div>
                  </div>
            </div>
        </div>
        <br><br>
    </div>

<div class="question">
<h1 class="text-center mt-4">Already have your restaurant listed?</h1>
<h6 class="text-center text-secondary text-large mt-3">Search here and claim the ownership of your restaurant</h6>

<div class="input-group mx-auto mt-4 mb-5">
    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
    <button type="button" class="btn btn-outline-primary">search</button>
  </div>

</div>

<div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8">
        <div class="image mx-auto rounded-3">
            <div class="overlay">
                <h1 class="text-light">Start your journey with Cloud Kitchen</h1>
                    <p class="text-light mt-3">Create your restaurant page and register for online ordering</p>
                    <button class="btn btn-primary mt-4" type="button">Start now...</button>
            </div>
            </div>
    </div>
</div>

<div class="cc mt-5"><br>
    <h1 class="text-center">Our products</h1>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12">
                <div id="inam" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                             <div class="container">
                                 <div class="row ml-5" >
                                     <div class="col-sm-12 col-lg-3 mr-5">
                                         <div class="card mx-auto" style="width: 300px;">
                                             <img src="order.jpg" class="card-img-top">
                                             <div class="card-body">
                                                 <h4 class="card-title">Listings</h4>
                                                 <p class="card-text">A free app that allows you to manage your Zomato listing directly from your smartphone</p>
                                                 <a href="#">Learn More</a>
                                                 <img src="next.png" style="width:20px;height: 20px;">
                                                 
                                             </div>
                                             
                                         </div>
                                         
                                     </div>
                                     <div class="col-sm-12 col-lg-3 mr-5">
                                         <div class="card mx-auto" style="width: 300px;">
                                             <img src="fooddeliver.jpg" class="card-img-top">
                                             <div class="card-body">
                                                 <h4 class="card-title">Online Ordering</h4>
                                                 <p class="card-text">Start taking orders online from millions of users near you and deliver with Zomato...</p>
                                                 <a href="#">Learn More</a>
                                                 <img src="next.png" style="width:20px;height: 20px;">
                                                 
                                             </div>
                                             
                                         </div>
                                         
                                     </div>
                                     <div class="col-sm-12 col-lg-3">
                                         <div class="card mx-auto" style="width: 300px;">
                                             <img src="cafe2.jpeg" class="card-img-top">
                                             <div class="card-body">
                                                 <h4 class="card-title">Pro</h4>
                                                 <p class="card-text">Drive more users to dine-in at your place by partnering with Zomato’s loyalty program</p>
                                                 <a href="#">Learn More</a>
                                                 <img src="next.png" style="width:20px;height:20px;">
                                                 
                                             </div>
                                             
                                         </div>
                                         
                                     </div>
                                     
                                 </div>
                                 
                             </div>
    
                            
                        </div>
                        <div class="carousel-item">
                             <div class="container">
                                 <div class="row ml-5">
                                     <div class="col-sm-12 col-lg-3 mr-5">
                                         <div class="card" style="width: 300px;">
                                             <img src="zomato.jpg" class="card-img-top">
                                             <div class="card-body">
                                                 <h4 class="card-title">Advertise</h4>
                                                 <p class="card-text">For every marketing dollar spent, Zomato returns over 8x the investment...</p>
                                                 <a href="#">Learn More</a>
                                                 <img src="next.png" style="width:20px;height: 20px;">
                                                 
                                             </div>
                                             
                                         </div>
                                         
                                     </div>
                                     <div class="col-sm-12 col-lg-3 mr-5">
                                         <div class="card" style="width: 300px;">
                                             <img src="wheel.jpg" class="card-img-top">
                                             <div class="card-body">
                                                 <h4 class="card-title">Events</h4>
                                                 <p class="card-text">Partner with us for India’s grandest food & entertainment carnival - “Zomaland”...</p>
                                                 <a href="#">Learn More</a>
                                                 <img src="next.png" style="width:20px;height: 20px;">
                                                 
                                             </div>
                                             
                                         </div>
                                         
                                     </div>
                                     <div class="col-sm-12 col-lg-3">
                                         <div class="card" style="width: 300px;">
                                             <img src="pure.jpeg" class="card-img-top">
                                             <div class="card-body">
                                                 <h4 class="card-title">Hyperpure</h4>
                                                 <p class="card-text">Supplies fresh and high quality ingredients to restaurant for serving delicious meals...</p>
                                                 <a href="#">Learn More</a>
                                                 <img src="next.png" style="width:20px;height: 20px;">
                                                 
                                             </div>
                                             
                                         </div>
                                         <div class="benefits mt-5">

<h1 class="text-center" style="font-weight: bold;">What do you get on sign-up</h1>
<pre><h3 class="text-center" style="color:grey;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Cloud kitchen Partner Platform helps you take your business to new heights 
instantly with no hassle and 100% transparency!</h3></pre>

<div class="row">
    <div class="col-sm-3">

    </div>
<div class="col-sm-5">


    <img src="round.png" style="width:30px;height:30px;float:left;" >
    <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Restaurant Partner App</h2>
    <pre><h4 style="color:gray;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"">  Manage all your orders on your
  smartphone with our Android app</h4></pre>



  <img src="number-2.png" style="width:30px;height:30px;float:left;" >
  <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    Restaurant Partner web dashboard</h2>
  <pre><h4 style="color:gray;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"">  Manage all your orders on your desktop 
  or laptop</h4></pre>



<img src="number-3.png" style="width:30px;height:30px;float:left;" >
<h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">API integration</h2>
<pre><h4 style="color:gray;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"">  Manage all your orders on your existing 
  Point of Sale (POS) or third party
  software
</h4></pre>
</div>
<div class="col-sm-4" id="bimage">
   
    
</div>

</div>

</div>



<div class="last1">



    <ul class="navbar-nav">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-md-6">
                <li class="nav-item">
                    <a class="nav-link" href="#"  style="color:black;font-size:30px;font-family:fantasy;">CLOUD KITCHEN</a>
                  </li>
            </div>
            <div class="col-sm-1">
                <div class="dropdown" style="border:1px solid white;width: 90px;" id="h5">
                    <button type="button" class="btn btn-md dropdown-toggle" data-bs-toggle="dropdown">
                     English
                    </button>    
                  </div>
            </div>
        </div>
        
      </ul>



   
    <div class="row justify-content-center">
        <div class="col-sm-2">
            <Strong>
                COMPANY
            </Strong>
            <P>Who we are</P>
            <p>Blog</p>
            <p>Careers</p>
            <p>Report Fraud</p>
            <p>Contact</p>
            <p>Investor Relations</p>
        </div>
        <div class="col-sm-2">
            <Strong>
           FOR FOODIES
            </Strong>
            <P>Code of conduct</P>
            <p>Community</p>
            <p>Blogger help</p>
            <p>Mobile aps</p>
            
        </div>
        <div class="col-sm-2">
            <Strong>
               FOR RESTAURANTS
            </Strong>
            <P>Add restaurants</P>
           
        </div>
        <div class="col-sm-2">
            <Strong>
                FOR YOU
            </Strong>
            <P>Privacy</P>
            <p>Terms</p>
            <p>Security</p>
            <p>Report Fraud</p>
            <p>Site map</p>
           
        </div>
      </div>
      <hr style="width:20%;">



</div>





</div> 

</body>
</html>
                                         