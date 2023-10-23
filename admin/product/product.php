<?php
include '../layout/linke.php';
include '../layout/header.php';
include '../layout/sidebar.php';

include '../db/db.php';
if(isset($_GET['id'])){
$id=$_GET['id'];
$data="SELECT*FROM product where id='$id'";
$result=mysqli_query($con,$data);
$row=mysqli_fetch_assoc($result);
}

?>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <!-- <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Add Product</span>
                </a>
              </div>End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Add Product</h5>
                    <!-- <p class="text-center small">Enter your personal details to create account</p> -->
                  </div>
                   <?php
                   if(!isset($_GET['id'])){
                   ?>
                  <form class="row g-3 needs-validation" novalidate method="post" action="http://localhost/E_commerce_core_php/admin/insert/register_insert.php" enctype="multipart/form-data">
                    <div class="col-12">
                    <label for="cars">Choose a Category:</label><br>
                    <select name="cat">
                   <?php
                   $select="SELECT*FROM category ";
                   $res=mysqli_query($con,$select);
                   while($show=$cat=mysqli_fetch_assoc($res)){
                   ?>
                     <option value="<?php echo $show['id'];?>"><?php echo $show['name'];?></option>
                     <?php } ?>
                     </select>
                    </div>
                   
                    <div class="col-12">
                      <label for="yourName" class="form-label">Product Name</label>
                      <input type="text" name="pname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Title</label>
                      <input type="title" name="title" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Description</label>
                      <input type="text" name="des" class="form-control" id="yourEmail" required>
                      <!-- <div class="invalid-feedback">Please enter a valid Email adddress!</div> -->
                    </div>
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Price</label>
                      <input type="text" name="price" class="form-control" id="yourEmail" required>
                      <!-- <div class="invalid-feedback">Please enter a valid Email adddress!</div> -->
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Brand</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <input type="text" name="brand" class="form-control"  required>
                        <!-- <div class="invalid-feedback">Please choose a username.</div> -->
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Image</label>
                      <input type="file" name="img" class="form-control"  required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="product" type="submit">Add Product</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a></p>
                    </div>
                  </form>
                  <?php
                   }else{
                    ?>
               
               <form class="row g-3 needs-validation" novalidate method="post" action="http://localhost/E_commerce_core_php/admin/update/update.php" enctype="multipart/form-data">
                <input type="hidden" name="pid" value="<?php echo $row['id'];?>" required>

                <div class="col-12">
                    <label for="cars">Choose a Category:</label><br>
                    <select name="cat">
                   <?php
                   $select="SELECT*FROM category ";
                   $res=mysqli_query($con,$select);
                   while($show=$cat=mysqli_fetch_assoc($res)){
                   ?>
                     <option value="<?php echo $show['id'];?>"><?php echo $show['name'];?></option>
                     <?php } ?>
                     </select>
                    </div>
                   
                    <div class="col-12">
                      <label for="yourName" class="form-label">Product Name</label>
                      <input type="text" name="pname" value="<?php echo $row['name'];?>" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Title</label>
                      <input type="title" name="title" value="<?php echo $row['title'];?>" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Description</label>
                      <input type="text" name="des" value="<?php echo $row['description'];?>" class="form-control" id="yourEmail" required>
                      <!-- <div class="invalid-feedback">Please enter a valid Email adddress!</div> -->
                    </div>
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Price</label>
                      <input type="text" name="price" value="<?php echo $row['price'];?>" class="form-control" id="yourEmail" required>
                      <!-- <div class="invalid-feedback">Please enter a valid Email adddress!</div> -->
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Brand</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <input type="text" name="brand" value="<?php echo $row['brand'];?>" class="form-control"  required>
                        <!-- <div class="invalid-feedback">Please choose a username.</div> -->
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Image</label>
                      <input type="file" name="img" class="form-control"  >
                      <div class="invalid-feedback">Please enter your password!</div>
                      <img src="../product/product_image/<?php echo $row['image'];?>" style="height: 100px;">
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="product_update" type="submit">Add Product</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a></p>
                    </div>
                  </form>
            <?php
               }
                  ?>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>