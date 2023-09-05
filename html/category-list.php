<?php 
include 'login/database/_dbconnect.php';  

$api_url = 'http://3.6.48.68/social_app/public/api/categories';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
// $user_data = $response_data->data;

// Cut long data into small & select only first 10 records
$user_data = array_slice($response_data, 0, 100);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data

?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/">
<!-- Head -->
<?php $page = 'category list'; $active = 'category'; $title ='Category List - Helper Adda';  require 'Components/head.php';?>
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
                                    
                                    <?php foreach ($user_data as $user)                                     
                                      	{                                              
                                    ?>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong><?php echo $user->id;?></strong></td>
                                            <td><?php echo $user->category;?></td>
                                            <td><?php $desc = $user->category_desc;  echo wordwrap($desc, 90,"<br>\n");?></td>
                                            <td><img src="<?php echo$user->image?>" alt="Avatar"
                                                    class="rounded-circle" style="max-width:50%;" /></td>
                                            <td><?php if(($user->active) >  0){ echo $inactive = "<span class='badge bg-label-success me-1'>Active</span>"; }else
                                                    {
                                                        echo $active ="<span class='badge bg-label-danger me-1'>InActive</span>";
                                                    }?>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="edit?sno=<?php echo $user->id;?>"
                                                            data-bs-toggle="modal" data-bs-target="#basicModal"><i
                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="delete?sno=<?php echo $user->id;?>" data-bs-toggle="modal"
                                                                    data-bs-target="#modalToggle"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>
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

                    <!-- Pagination -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card mb-4">
                            <!-- Basic Pagination -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="demo-inline-spacing">
                                            <!-- Basic Pagination -->
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination">
                                                    <li class="page-item first">
                                                        <a class="page-link" href="javascript:void(0);"><i
                                                                class="tf-icon bx bx-chevrons-left"></i></a>
                                                    </li>
                                                    <li class="page-item prev">
                                                        <a class="page-link" href="javascript:void(0);"><i
                                                                class="tf-icon bx bx-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="javascript:void(0);">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0);">2</a>
                                                    </li>
                                                    <li class="page-item ">
                                                        <a class="page-link" href="javascript:void(0);">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0);">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0);">5</a>
                                                    </li>
                                                    <li class="page-item next">
                                                        <a class="page-link" href="javascript:void(0);"><i
                                                                class="tf-icon bx bx-chevron-right"></i></a>
                                                    </li>
                                                    <li class="page-item last">
                                                        <a class="page-link" href="javascript:void(0);"><i
                                                                class="tf-icon bx bx-chevrons-right"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <!--/ Basic Pagination -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="categoryName" class="form-label">Category Name</label>
                                                <input type="text" id="categoryName" class="form-control"
                                                    placeholder="Category Name" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="categoryName" class="form-label">Category Name</label>
                                                <input type="text" id="categoryName" class="form-control"
                                                    placeholder="Category Name" />
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
                    
                    <!-- Delete Model -->
                    <div class="col-lg-4 col-md-6">
                        <div class="mt-3">                                                
                            <!-- Modal 1-->
                            <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1"
                                style="display: none" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <form action="delete.php" method="GET">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalToggleLabel">Delete Record</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <input type="type" name="category_id" id="" >
                                        <div class="modal-body">Are Your Sure Want Delete</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" type="submit" name="delete_record">
                                                Delete
                                            </button>
                                        </div>
                                      </form>  
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        
                    </div>

                    <!-- Footer -->
                    <?php require 'Components/footer.php';?>
                    <!-- /Footer -->