<?php include 'login/database/_dbconnect.php';  
 ?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
>
    <!-- Head -->
    <?php require 'Components/head.php';?>
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
              <h4 class="fw-bold py-3 mb-4">Category List</h4>
              <!-- Category Table -->
              <div class="card">
                <h5 class="card-header text-center">All Category</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>S.No.</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    
                    <?php 
                        $selectQuery = "SELECT * FROM `categories`";
                        $sql = mysqli_query($conn, $selectQuery);

                        while($num = mysqli_fetch_assoc($sql))
                        {                        
                    ?>                    
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $num['id'];?></strong></td>
                            <td><?php echo $num['category'];?></td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Sapiente incidunt reiciendis quod molestiae nesciunt <br>qui eos dicta sequi eaque sed!</td>
                            <td><img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" style="max-width:50%;"/></td>
                            <td><?php if($num['active'] >  0){ echo $inactive = "<span class='badge bg-label-primary me-1'>Active</span>"; }else
                                {
                                    echo $active ="<span class='badge bg-label-warning me-1'>InActive</span>";
                                }?>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="?sno=<?php echo $num['id'];?>"
                                    data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="<?php echo $num['id'];?>"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                            </td>
                        </tr>                  
                    </tbody>
                    <?php }?>                    
                  </table>
                </div>
              </div>
              <!--/ Bootstrap Dark Table -->              
            </div>
            <!-- / Content -->
            
            <div class="mt-3">
                <!-- Button trigger modal -->
           

                <!-- Modal -->
                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Update Category</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" id="categoryName" class="form-control" placeholder="Category Name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" id="categoryName" class="form-control" placeholder="Category Name" />
                            </div>
                        </div>                        
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>                

            <!-- Footer -->
            <?php require 'Components/footer.php';?>
            <!-- /Footer -->