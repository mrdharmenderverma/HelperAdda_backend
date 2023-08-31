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
              <h4 class="fw-bold py-3 mb-4">Add Product</h4>
              <!-- Add Category -->
              <div class="row">
                
                

                <!-- Form controls -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Form Controls</h5>
                    <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Product Category</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected="">Select Product</option>
                          <option value="Cook">Cook</option>
                          <option value="Nurse">Nurse</option>
                          <option value="Buddy">Buddy</option>
                          <option value="Event Planner">Event Planner</option>
                          <option value="Massager">Massager</option>
                          <option value="Pregnancy Care">Pregnancy Care</option>
                          <option value="Baby Sitter">Baby Sitter</option>
                          <option value="Office Boy">Office Boy</option>
                          <option value="Security Guard">Security Guard</option>
                          <option value="Laundry">Laundry</option>
                          <option value="Driver">Driver</option>
                          <option value="Bike Ride">Bike Ride</option>
                          <option value="Rickshaw Ride">Rickshaw Ride</option>
                          <option value="Delivery">Delivery</option>
                          <option value="Roadside Assist">Roadside Assist</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Product Sub-Category</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected="">Select Product Sub-Category</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="TitleProduct" class="form-label">Title Product</label>
                        <input type="text" class="form-control" id="TitleProduct" placeholder="Title Product">
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>                
                      <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Input Sizing -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Input Sizing</h5>
                    <div class="card-body">
                      <small class="text-light fw-semibold">Input text</small>

                      <div class="mt-2 mb-3">
                        <label for="largeInput" class="form-label">Large input</label>
                        <input id="largeInput" class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                      </div>
                      <div class="mb-3">
                        <label for="defaultInput" class="form-label">Default input</label>
                        <input id="defaultInput" class="form-control" type="text" placeholder="Default input">
                      </div>
                      <div>
                        <label for="smallInput" class="form-label">Small input</label>
                        <input id="smallInput" class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                      </div>
                    </div>
                    <hr class="m-0">
                    <div class="card-body">
                      <small class="text-light fw-semibold">Input select</small>
                      <div class="mt-2 mb-3">
                        <label for="largeSelect" class="form-label">Large select</label>
                        <select id="largeSelect" class="form-select form-select-lg">
                          <option>Large select</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Default select</label>
                        <select id="defaultSelect" class="form-select">
                          <option>Default select</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div>
                        <label for="smallSelect" class="form-label">Small select</label>
                        <select id="smallSelect" class="form-select form-select-sm">
                          <option>Small select</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Add Category/-->              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php require 'Components/footer.php';?>
            <!-- /Footer -->