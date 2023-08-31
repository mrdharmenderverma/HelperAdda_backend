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
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Default</h5>
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">
                          We'll never share your details with anyone else.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                

                <!-- Form controls -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Form Controls</h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInput1" class="form-label">Read only</label>
                        <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1" placeholder="Readonly input here..." readonly="">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Read plain</label>
                        <input type="text" readonly="" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1" value="email@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Example select</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected="">Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Datalist example</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                          <option value="San Francisco"></option>
                          <option value="New York"></option>
                          <option value="Seattle"></option>
                          <option value="Los Angeles"></option>
                          <option value="Chicago"></option>
                        </datalist>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>
                        <select multiple="" class="form-select" id="exampleFormControlSelect2" aria-label="Multiple select example">
                          <option selected="">Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
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

                              

                <div class="col-xl-6">
                  <!-- HTML5 Inputs -->
                  <div class="card mb-4">
                    <h5 class="card-header">HTML5 Inputs</h5>
                    <div class="card-body">
                      <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Text</label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" value="Sneat" id="html5-text-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-search-input" class="col-md-2 col-form-label">Search</label>
                        <div class="col-md-10">
                          <input class="form-control" type="search" value="Search ..." id="html5-search-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                          <input class="form-control" type="email" value="john@example.com" id="html5-email-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-url-input" class="col-md-2 col-form-label">URL</label>
                        <div class="col-md-10">
                          <input class="form-control" type="url" value="https://themeselection.com" id="html5-url-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-tel-input" class="col-md-2 col-form-label">Phone</label>
                        <div class="col-md-10">
                          <input class="form-control" type="tel" value="90-(164)-188-556" id="html5-tel-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-password-input" class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                          <input class="form-control" type="password" value="password" id="html5-password-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-number-input" class="col-md-2 col-form-label">Number</label>
                        <div class="col-md-10">
                          <input class="form-control" type="number" value="18" id="html5-number-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Datetime</label>
                        <div class="col-md-10">
                          <input class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="html5-datetime-local-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                        <div class="col-md-10">
                          <input class="form-control" type="date" value="2021-06-18" id="html5-date-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-month-input" class="col-md-2 col-form-label">Month</label>
                        <div class="col-md-10">
                          <input class="form-control" type="month" value="2021-06" id="html5-month-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-week-input" class="col-md-2 col-form-label">Week</label>
                        <div class="col-md-10">
                          <input class="form-control" type="week" value="2021-W25" id="html5-week-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-time-input" class="col-md-2 col-form-label">Time</label>
                        <div class="col-md-10">
                          <input class="form-control" type="time" value="12:30:00" id="html5-time-input">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-color-input" class="col-md-2 col-form-label">Color</label>
                        <div class="col-md-10">
                          <input class="form-control" type="color" value="#666EE8" id="html5-color-input">
                        </div>
                      </div>
                      <div class="row">
                        <label for="html5-range" class="col-md-2 col-form-label">Range</label>
                        <div class="col-md-10">
                          <input type="range" class="form-range mt-3" id="html5-range">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- File input -->
                  <div class="card">
                    <h5 class="card-header">File input</h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                      <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple="">
                      </div>
                      <div>
                        <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                        <input class="form-control" type="file" id="formFileDisabled" disabled="">
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