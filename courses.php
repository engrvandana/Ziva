<!--Start Including Header-->
<?php 
include('./dbConnection.php');
include('./mainInclude/header.php');
?>
<!--End Including Header-->

<!--Start course page Banner-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/courses.png" alt="courses" class="img-fluid" style="object-fit:cover; box-shadow:10px;"/>
    </div>
</div>
<!--End course page Banner-->

<!-- Start All Course -->
<div class="container mt-5">
    <h1 class="text-center">All Course</h1>
    <div class="row mt-4">
    <?php
       $sql = "SELECT * FROM courses";
       $result = $conn->query($sql);
       if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
             $course_id = $row['course_id'];
             echo '
               <div class="col-sm-4 mb-4">
                 <a href="coursedetails.php?course_id='.$course_id.' " class="btn" style="text-align: left; padding:0px;
                 "><div class="card">
                 <img src="'.str_replace('..' ,'.' , $row['images'] ).' " class="card-img-top" alt="Python" />
                 <div class="card-body">
                    <h5 class="card-title"> '.$row['course_name'].'</h5>
                    <p class="card-text" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">'.$row['description'].'</p>
                 </div>
                 <div class="card-footer">
                 <p class="card-text d-inline">Price: <small> <del>&#x20B1 3000</del> </small> <span class="font-weight-bolder">&#x20B1 '.
                 $row['price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='. $course_id. '">Enroll</a>  
              </div>
          </div></a>
        </div>
        ';
      }
   }
 ?> 
 </div>  <!-- End All Course Row -->
</div>
<!-- End All Course -->

 <!--Start Including Footer and Login Signup and Admin login Functionalities-->
<?php
include('./mainInclude/footer.php');
?>
<!--End Including Footer-->