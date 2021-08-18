<!DOCTYPE html>
<html>
<head>
	<title>Collapse sidebar in Bootstrap 4</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <link rel="stylesheet" href="naufal.css">
</head>
<body>


<div class="wrapper">
<?php include 'navbar.php' ?>
<div id="content">
  <div class="container-fluid">
   <div class="row">
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     <div class="container-fluid">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 font-weight-bold">Edit Profile Page</h1>
       </div>
       <div class="row">
        <div class="col-lg-7 col-sm col-12">
        <div class="form-group row">
          <label class="col-lg-3 col-12 col-form-label">Profile Photo</label>
          <div class="col my-auto">
           <div class="custom-file">
            <input id="leave_files_input" type="file" accept="image/*,.pdf" class="custom-file-input" multiple>
            <label for="leave_files_input" class="custom-file-label">Choose file...</label>
           </div>
          </div>
         </div>
         <div class="form-group row">
          <div id="leave_filesdisplay" class="col">
          </div>
         </div>
         <div class="form-group row">
          <label class="col-lg-3 col-12 col-form-label">Name</label>
          <div class="col my-auto">
           <input name="leave_reference" type="text" class="form-control" value="" >
          </div>
         </div>
         <div class="form-group row">
          <label class="col-lg-3 col-12 col-form-label">Email</label>
          <div class="col my-auto">
           <input name="leave_reference" type="text" class="form-control" value="" >
          </div>
         </div>
         <div class="form-group row">
          <label class="col-lg-3 col-12 col-form-label">Mobile Number</label>
          <div class="col my-auto">
           <input name="leave_reference" type="text" class="form-control" value="" >
          </div>
         </div>
         <div class="form-group row">
          <label class="col-lg-3 col-12 col-form-label" for="leave_type_input">Occupation</label>
          <div class="col my-auto">
           <div class="row">
            <div class="col-12">
             <select class="form-control custom-select" id="leave_type_input" name="leave_type">
              <option value="paid">Government Agencies</option>
              <option value="unpaid">Academicians</option>
              <option value="sick">Companies</option>
              <option value="marriage">Customers</option>
             </select>
            </div>
           </div>
          </div>
         </div>
         <div class="form-group row">
            <label class="col-md-3 col-12 col-form-label">Address</label>
                <div class="col my-auto">
                    <div class="row">
                    <div class="col-12">
                    <textarea class="form-control" rows="2" id="request_purpose_input" name="request_purpose"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-12 col-form-label">Gender</label>
                <div class="col my-auto">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>
                </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-12 col-form-label">Two Factor Authentication</label>
                <div class="col my-auto">
                    <div class="row">
                    <div class="col-12">
                    <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                    </label>
                    </div>
                </div>
            </div>
        </div>
         <div class="form-group row">
          <div class="col text-right">
           <button id="leave_reset_button" class="mb-2 btn btn-danger">Cancel</button>
           <button id="leave_submit_button" class="mb-2 btn btn-primary" onclick="document.getElementById('id01').style.display='block'">Save</button>
          </div>
         </div>
        </div>
       </div>
     </div>
    </main>
   </div>
  </div>
</div>


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container popup">
      <h1>Confirm Update</h1>
      <p>Are you sure you want to update your account?</p>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-primary">Yes</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger">Cancel</button>
      </div>
    </div>
  </form>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>


</body>
</html>