<?php
session_start();
include 'db.php';
$categoy="select * from category where status='Active' ORDER BY id DESC limit 6";
$result=mysqli_query($con,$categoy);
?>
 <!-- header section strats -->
 <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            Ecommerce
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">
                Shop
              </a>
            </li>
            <!-- <li class="nav-item"> -->
              <!-- <a class="nav-link" href="shop.php"> -->
                <!-- Category   -->
              <!-- </a> -->
              <div class="dropdown">
              <button class="dropbtn"> Category </button>
            <div class="dropdown-content">
            <?php
      while($cat=mysqli_fetch_assoc($result)){
      ?>
<a href="shop.php?id=<?php echo $cat['id'];?>"> <?php echo $cat['name']?></a>

<?php }?>
</div>
              </div>
            <!-- </li> -->
            <li class="nav-item">
              <a class="nav-link" href="why.php">
                Why Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.php">
                Testimonial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
          <?php if(isset($_SESSION['email'])){?>
          <div class="dropdown">
              <button class="dropbtn"><?php print_r($_SESSION['name']); ?></button>
            <div class="dropdown-content">
            
      
          <a href="logout.php">logout</a>


                 </div>
              </div>
            

              <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
             
              
            
            

            <?php
            }else{?>
             <a href="">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
             
           <?php } ?>
            <a href="add_to_cart.php">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->


