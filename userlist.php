<!DOCTYPE html>
<html>
<head>
	<title>Collapse sidebar in Bootstrap 4</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link href="https://unpkg.com/tabulator-tables@4.9.3/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables@4.9.3/dist/js/tabulator.min.js"></script>

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
        <h1 class="h2 font-weight-bold">Users Page List</h1>
       </div>
       <div class="row">
       <div id="user_table"></div>
       </div>
     </div>
    </main>
   </div>
  </div>
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

var jsonfile;
var Myfun = function() {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }
    };

    xhttp.open("GET", "https://jsonplaceholder.typicode.com/users" , true);
    xhttp.send();
}

Myfun()
setInterval(Myfun(), 10000)
function myFunction(xhttp) {
    jsonfile = JSON.parse(xhttp.responseText);
    console.log(jsonfile);
    var table = new Tabulator("#user_table", {
        data:jsonfile, 
        autoColumns:false, 
        tooltips:true,           
        addRowPos:"top",         
        history:true,           
        pagination:"local",     
        paginationSize:7,         
        movableColumns:true,      
        resizableRows:true,
        initialSort:[             //set the initial sort order of the data
            {column:"name", dir:"asc"},
        ],
        columns:[    
            {title:"Name", field:"name"},
            {title:"Username", field:"username"},
            {title:"Email", field:"email"},
            {title:"City", field:"address.city"},
        ],
    });
}
</script>


</body>
</html>