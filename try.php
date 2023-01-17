<?php
include('./dbConnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Ifra css and js bootstrap 5 link !!-->
    <!-- CSS only -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
    <!-- JavaScript Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>-->
    <!--Ifra css and js bootstrap 5 link end !!-->
    <!-- fontawesome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font for ZIVA on home page -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
  
    <div class="container pt-5">
        <div class="row justify-content-center">
          
            <?php
            $sql = "SELECT * FROM courses"; $result = $conn->query($sql);
            $run_query = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($run_query)){
                    $pro_id    = $row['course_id'];
                    $pro_title=$row['course_name'];
                    $pro_cat   = $row['course_category'];
                    $pro_desc=$row['description'];
                    $pro_title = $row['course_name'];
                    $pro_price = $row['price'];
                    $pro_image = $row['images']; 
                                

            echo <<<data
                <a href="course_details.php?id= $pro_id" class="text-decoration-none ">
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                            <div class=inner style=overflow: hidden;>
                            <img class="card-img-top" src="$pro_image" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" style="overflow: hidden; text-overflow: ellipsis; 
                                white-space: nowrap;">$pro_title</h5>
                                <p class="card-text"style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                $pro_desc</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            </div>
                            </div>
                    </a>
                data;
                ?>
                <?php } ?>

          
            <!-- <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
                                
            </div>
            <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
                          
            </div> -->
        </div>

    </div>
    <h1>Learning</h1>
         <div class = "shadow-lg p-4 mb-4 bg-light">Try programming examples</div>
         <div class = "shadow-sm p-4 mb-4 bg-light">Try programming examples</div>
         <div class =" shadow-none p-4 mb-4 bg-light">Play Quiz and check your knowledge</div>
</body>
</html>

