<html>
    <head>
        <style>
            h1{
          color:red;
          font-style:unset;
      }
        table{
            border-style:solid;
            border-width:2px;
            border-color:green;
            font-family: normal;
  background-color: white;
  border:4px solid green;
  width:40%;
  height:160px;
  padding:center;
  margin-left: auto;
  margin-right: auto;
    }
    body{
        background-color: white;
    }
        
        </style>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
        </head>
        <body>
        
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Choose your Food</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="id" value="<?php if(isset($_GET['id'])){echo $_GET['id'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-danger">View</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","kitchen");

                                    if(isset($_GET['id']))
                                    {
                                        $id = $_GET['id'];

                                        $query = "SELECT * FROM form3 WHERE id1='$id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo "images/".$row['image'];?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $row['fname']; ?></h5 class="card-title"><?=$row['price']; ?><h6>
    
    <a href="order.html" class="btn btn-danger">Order now</a>
  </div>
</div>
                                                <!-- <div class="form-group mb-3">
                                                    
                                                    <img src="<?php echo "images/".$row['image'];?>">
                                                </div>
                                                <div class="form-group mb-3">
                                                    
                                                    <input type="text" value="<?= $row['fname']; ?>" class="form-control">
                                                </div> -->
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        
           
        </body>
</html>
