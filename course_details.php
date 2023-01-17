<?php
require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <script src="js/jquery2.js"></script> -->
		<!-- <script src="main.js"></script> -->
     <link rel="stylesheet" href="css/custom.css">
     </style>
</head>
<body>
 <?php    
        if(!isset($_GET['id'])){
            redirect("index.php");
        }
        $course = filteration($_GET);
        $res = select("SELECT * FROM `courses` WHERE course_id=?",[$course["id"]],"i");

        if(mysqli_num_rows($res)==0){
            redirect("index.php");
        }

        $data = mysqli_fetch_assoc($res);
        $result = select("SELECT * FROM `lessons` WHERE lesson_course=?",[$course["id"]],"i");
        if(mysqli_num_rows($result)==0){  
        }
        // $data_res= mysqli_fetch_assoc($result);

?>
<?php include('./mainInclude/header.php');?>
<br/>
<br/>

    <div class="container my-5">
            <div class="row">
                <div class="col-12 my-5 px-2 me-5">
                   
                    
                    <div style="font-size: 14px;">
                        
                        <div class="jumbotron jumbotron-fluid"  style="background-color: #e3f2fd;">
                            <div class="container">
                                <h1 class="display-4 text-center" style="color: rgb(55, 71, 133); font-weight:200px;"><?php echo $data["course_name"]?></h1>
                                <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
                            </div>
                        </div>
                        <h1 class="fw-bold text-center"></h1>
                    </div>
                </div>
                    <div class="col-lg-8 col-md-12 px-4">
                        <div class="card mb-4 border-0 shadow-sm rounded-3">
                            <div class="card-header bg-transparent" style="text-align:center; font-weight: 800; font-size: 30px;">
                                    Description</div>
                                <div class="card-body me-5">
                                    <div><p><?= $data["description"]?></p></div>
                                 
                                 
                                      
                                </div>
                                  <div class="card-header bg-transparent" style="text-align:center; font-weight: 800; font-size: 30px;">
                                    Goals</div>
                                <div class="card-body me-5">
                                    <li><?php echo $data["goal"]?></li>
                                   
                                      
                                </div>
                        </div>
                        <div class="card mb-4 border-0 shadow-sm rounded-3">
                            <div class="card-header bg-transparent" style="text-align:center; font-weight: 800; font-size: 30px;">
                                    Circulam</div>
                                <div class="card-body">
                                    <ul>
                                        <?php
                                      while($data_res= mysqli_fetch_assoc($result)){
                                        ?>
                                        <?php
                                        echo <<<data
                                                <li><a href="#">$data_res[lesson_name]</a></li>
                                            data;
                                            ?>
                                        <?php
                                        }
                                        ?>
                                         
                                    </ul>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 px-4">
                        <div class="card border-0 mb-3 float-lg-right shadow" style="max-width: 30rem;">
                            <div class="card-header bg-transparent border-2 shadow mb-3 mt-md-2" style="text-align:center; font-weight: 800; font-size: 30px;">
                            <?= $data["course_name"] ?></div>
                            <img style="height:250px;width:100%;" src= <?= $data["images"] ?>  alt= <?= $data["course_name"] ?>>
                          
                            <div class="card-body">
                                <h5 class="card-title">This Course Includes</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item" style="font-weight: 300; font-size: 20px;">Life Time Access</li>
                                    </ul>
                               
                            </div>
                            <h3 class="mb-3 bold">Rs. <?= $data["price"] ?></h3>
                            <div class="card-footer text-muted align-middle">
                                <!-- <?php
                                    // $product_query = "SELECT * FROM courses";
                                    // $run_query = mysqli_query($con,$product_query);
                                    // if(mysqli_num_rows($run_query) > 0){
                                    //     while($row = mysqli_fetch_array($run_query)){
                                    //         echo "
                                    //             <a href='register.php?id=$row[course_id]' class='main-btn mb-2 btn-sm'>Enroll Now</a>
                                    //         ";
                                    //         }
                                    //     }
                                ?> -->
                                
                                </div>
                                
                                
                              
                                <a href="paymentstatus.php?id=<?= $data["course_id"] ?>" class="main-btn mb-2 btn-sm" style="background-color:bisque">Enroll Now</a>
                        </div>
                    </div>         
            </div>         
        </div>
    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>
</html>