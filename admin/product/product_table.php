<?php
include '../layout/linke.php';
include '../layout/header.php';
include '../layout/sidebar.php';
include '../db/db.php';
$data="SELECT * FROM product";
$result=mysqli_query($con,$data);
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Category_id</th>
                    <th scope="col">Name</th>
                    <!-- <th scope="col">Tilte</th>
                    <th scope="col">Description</th> -->
                    <th scope="col">Brand</th>
                     <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Status</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while($row=mysqli_fetch_assoc($result)){
                  ?>
                  <tr>
                    <th scope="row"><?php echo $row['id'];?></th>
                    <th><?php echo $row['cat_id'];?></th>
                    <td><?php echo $row['name'];?></td>
                    <!-- <td><?php ////echo $row['title'];?></td>
                    <td><?php // echo $row['description'];?></td>-->
                     <td><?php echo $row['brand'];?></td> 
                    <td><?php echo $row['price'];?></td>
                    <td><img src="../product/product_image/<?php echo $row['image'];?>" style="height: 100px;"></td>
                    <td><?php echo $row['created_at'];?></td>
                    <td><?php echo $row['updated_at'];?></td>
                    <td><button><a href="product.php?id=<?php echo $row['id'];?>">Edit</a></button></td>
                    <td><button><a href="http://localhost/E_commerce_core_php/admin//delete/delete.php?p_id=<?php echo $row['id'];?>">Delete</a></button></td>
                    <td><button><a href="http://localhost/E_commerce_core_php/admin//status/status.php?p_id=<?php echo $row['id'];?>"><?php echo $row['status'];?></a></button></td>
                    
                  </tr>
             <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php include '../layout/footer.php';?>