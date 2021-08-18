<nav id="sidebar">
    <div class="sidebar-header">
    <button type="button" id="sidebarCollapse" class="btn btn-light">
                <i class="fas fa-align-left"></i>
                <span>Toggle Sidebar</span>
        </button>
    </div>
    <div class="col">
        <h1 class ="nav-text">1Lynx</h1>
        <h3 class ="nav-text">Technical Test by Naufal Fathur</h3>
    </div>
    <ul class="list-unstyled components">
    <li class="active">
            <a href="index.php" role="page" data-toggle="page">
                <i class="fas fa-user-friends"></i>
                <span class ="nav-text">Welcome</span>
            </a>
        </li> 
        <li>
            <a href="editpage.php" role="page" data-toggle="page">
                <i class="fas fa-edit"></i>
                <span id ="nav-text">Edit Profile page</span>
            </a>
        </li>
        <li>
            <a href="userlist.php" role="page" data-toggle="page">
                <i class="fas fa-list"></i>
                <span class ="nav-text">Display All Users page</span>
            </a>
        </li>
    </ul>
    <ul class="list-unstyled components">
    </ul>
</nav>

<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>