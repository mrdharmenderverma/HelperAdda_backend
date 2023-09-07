<?php 
// include 'login/database/_dbconnect.php';  

$api_url = 'http://localhost/helper\html\rest_api/service_provider_api.php';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
// $user_data = $response_data->data;

// Cut long data into small & select only first 10 records
$user_data = array_slice($response_data, 0, 100);

// Print data if need to debug
// print_r($user_data);
// $num = mysqli_num_rows($response_data);

// Traverse array and display user data
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/">
<!-- Head -->
<?php $title ='Service Provider - Helper Adda'; $page = 'service provider'; $active = 'form'; require 'Components/head.php';?>
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
                        <h4 class="fw-bold text-center py-3 mb-4">Service Provider Query</h4>

                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <h5 class="card-header">Table Basic</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Address</th>
                                            <th>Query</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Message</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <?php foreach($user_data as $user)
                                          {
                                    ?>
                                        <tr>
                                            <td><i class="fab fa-react fa-lg text-info me-3"></i>
                                                <strong><?php echo $user->id;?></strong>
                                            </td>
                                            <td><?php echo $user->name;?></td>
                                            <td><?php echo $user->lname?></td>
                                            <td> <?php echo $user->address?></td>
                                            <td><?php echo $user->query?></td>
                                            <td><?php echo $user->email?></td>
                                            <td><?php echo $user->mobile?></td>
                                            <td><?php echo $user->message?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#example<?php echo $user->id;?>"
                                                            ><i
                                                                class="bx bx-edit-alt me-2"></i>Edit</a>
                                                        <a class="dropdown-item"
                                                            href="delete?id=<?php echo $user->id;?>"><i
                                                                class="bx bx-trash me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="example<?php echo $user->id;?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Service Provicer Details Update</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <input type="hidden" class="form-control" id="" name="id"
                                                                        value="<?php echo $user->id;?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="first_name" class="form-label">First
                                                                            Name</label>
                                                                        <input type="text" class="form-control" id="first_name"
                                                                            aria-describedby="emailHelp" name="fname" value="<?php echo $user->name;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="last_name" class="form-label">Last Name</label>
                                                                        <input type="text" class="form-control" id="last_name"
                                                                            aria-describedby="emailHelp" name="lname" value="<?php echo $user->lname;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3">
                                                                    <label for="address" class="form-label">Address</label>
                                                                    <input type="text" class="form-control" id="address"
                                                                        aria-describedby="emailHelp" name="address" value="<?php echo $user->address;?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3">
                                                                    <label for="email_address" class="form-label">Email Address</label>
                                                                    <input type="email" class="form-control" id="email_address"
                                                                        aria-describedby="emailHelp" name="email" value="<?php echo $user->email;?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="form_query" class="form-label">Query</label>
                                                                        <input type="text" class="form-control" id="form_query"
                                                                            aria-describedby="emailHelp" name="query" value="<?php echo $user->query;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="form_mobile" class="form-label">Mobile</label>
                                                                        <input type="text" class="form-control" id="form_mobile"
                                                                            aria-describedby="emailHelp" name="mobile" value="<?php echo $user->mobile;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3">
                                                                    <label for="form_message" class="form-label">Message</label>
                                                                    <input type="text" class="form-control" id="form_message"
                                                                        aria-describedby="emailHelp" name="message" value="<?php echo $user->message;?>">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Basic Bootstrap Table -->

                    </div>
                    <!-- / Content -->                            
                    

                    <!-- Footer -->
                    <?php require 'Components/footer.php';?>
                    <!-- /Footer -->