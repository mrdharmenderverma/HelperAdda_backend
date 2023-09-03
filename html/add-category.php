<?php 
    include 'login/database/_dbconnect.php';  
    // $result = mysqli_query($conn, "SELECT * FROM `categories` WHERE parent_id = 0");
  $result = mysqli_query($conn, "SELECT * FROM `categories`");
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    >
<!-- Head -->
<?php $title ='Add Category - Helper Adda'; require 'Components/head.php';?>
<!-- /Head -->

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php require 'Components/sidebar.php';?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php require 'Components/navbar.php';?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">Add Product</h4>
                        <!-- Add Category -->
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Form Controls</h5>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="mb-3">
                                                <label for="category" class="form-label">Product Category</label>
                                                <select class="form-select" id="category-dropdown">
                                                      <option selected="">Select Product</option>
                                                      <?php while($row = mysqli_fetch_array($result)) 
                                                      {
                                                      ?>
                                                      <option value="<?php echo $row["id"];?>">
                                                        <?php echo $row["category"];?>
                                                      </option>
                                                      <?php } ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="sub-category" class="form-label">Product
                                                    Sub-Category</label>
                                                <select class="form-select" id="sub-category-dropdown">
                                                    
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="TitleProduct" class="form-label">Title Product</label>
                                                <input type="text" class="form-control" id="TitleProduct"
                                                    placeholder="Title Product">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Default file input
                                                    example</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Product
                                                    Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <!--Add Category/-->
                    </div>
                    <!-- / Content -->
                    

                    <!-- js for category dropdown -->
                    <script>
                    $(document).ready(function() {
                        $('#category-dropdown').on('change', function() {
                            var category_id = this.value;
                            $.ajax({
                                url: "sub-category.php",
                                type: "POST",
                                data: {
                                    category_id: category_id
                                },
                                cache: false,
                                success: function(result) {
                                    $("#sub-category-dropdown").html(result);
                                }
                            });

                        });
                    });
                    </script>
                    <!-- /js for category dropdown -->
                    <!-- Footer -->
                    <?php require 'Components/footer.php';?>
                    <!-- /Footer -->