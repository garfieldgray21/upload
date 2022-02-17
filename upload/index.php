<?php include 'header.php'; ?>

<div class="bodyWrapper">
  <div class="container">
    <center>
    <div class="login_Container_Wrapper login_Container_Wrapper_Borderless">
      <div class="login_Container upload_Container popularCardStyle">

      <img src="assets/img/logoTab.png" class="imgLogo">


      <div id="loginView">
        
        <h4>Upload Portal</h4>
        <p>Complete the form below to apply for visiting visa or renewal application.</p>

        <form action="scripts/createUserFolder.php" method="post" autocomplete="on" enctype="multipart/form-data">

          <div class="section_Wrapper">
          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label for="firstName" class="bmd-label-floating">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="middleName" class="bmd-label-floating">Middle Name</label>
                <input type="text" class="form-control" id="middleName" name="middleName">
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="lastName" class="bmd-label-floating">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName">
              </div>
            </div>

          </div> <!-- End Row 1 -->

          <div class="row" style="margin-top: -5px;">
            <div class="col-md-12">
              <div class="form-group">
                <label for="email" class="bmd-label-floating">Email</label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
            </div>
          </div>

          </div> <!-- End Section Wrapper -->

          <div class="section_Wrapper">
          <div class="row">

            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="schoolId" class="bmd-label-floating lable-upload">School ID: </label>
                <input type="file" name="schoolId" id="schoolId" accept="image/png, image/jpeg">
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="pp" class="bmd-label-floating lable-upload">Passport Size Photo: </label>
                <input type="file" name="pp" id="pp">
              </div>
            </div>

          </div>
          </div> <!-- End Section Wrapper -->

          <div class="section_Wrapper">
          <div class="row">

            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="passportPage" class="bmd-label-floating lable-upload">Passport Information Page: </label>
                <input type="file" name="passportPage" id="passportPage">
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="schoolId" class="bmd-label-floating lable-upload">Status Letter: </label>
                <input type="file" name="pp" id="pp">
              </div>
            </div>

          </div>
          </div>


          <div class="buttons">
            <button type="reset" class="btn btn-reset">Clear</button>
            <button type="submit" class="btn btn-send" name="upload">Upload</button>
          </div>

        </form>
      </div>


      </div> <!-- Login Card End -->
    </div> <!-- Login Container Wrapper -->
    </center>
  </div>
</div>

<?php include 'footer.php'; ?>