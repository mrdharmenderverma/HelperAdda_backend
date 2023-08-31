<!DOCTYPE html>


<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
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
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                            <td>Cook</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Sapiente incidunt reiciendis quod molestiae nesciunt <br>qui eos dicta sequi eaque sed!</td>
                            <!-- <td><img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" /></td> -->
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Cook"
                                    >
                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>                          
                                    
                                </ul>
                            </td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                            </td>
                        </tr>                    
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                            <td>Cook</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Sapiente incidunt reiciendis quod molestiae nesciunt <br>qui eos dicta sequi eaque sed!</td>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller"
                                    >
                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>                          
                                    
                                </ul>
                            </td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                            </td>
                        </tr>                    
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                            <td>Cook</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Sapiente incidunt reiciendis quod molestiae nesciunt <br>qui eos dicta sequi eaque sed!</td>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller"
                                    >
                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>                          
                                    
                                </ul>
                            </td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                            </td>
                        </tr>                    
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Bootstrap Dark Table -->              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php require 'Components/footer.php';?>
            <!-- /Footer -->