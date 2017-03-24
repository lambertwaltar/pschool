<div id="left">
    <form action="search-results.html" method="GET" class='search-form'>
        <div class="search-pane">
            <input type="text" name="search" placeholder="Search here...">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
    <div class="subnav">
        <!--<div class="subnav-title">
            <a href="#" class='toggle-subnav'>
                <i class="fa fa-power-off"></i>
                <span>Logout</span>
            </a>
        </div>-->
		<?php if($_SESSION['sess_role'] =="admin")
	{?>
        <ul class="subnav-menu">
            <li>
                <a href="logout.php">Logout</a>
            </li>
            <li>
                <a href="user.php">Add Users</a>
            </li>
			<li>
                <a href="viewusers.php">Registered Users</a>
            </li>
			<!--<li>
                <a href="table.php">Create New Data Store</a>
            </li>-->
          <!--  <li>
                <a href="invitation.php">Send Invites</a>
            </li>
            <li>
                <a href="viewinvites.php">View Sent Invites</a>
            </li>-->
            
        </ul>
		<?php } ?>
		
		<?php if($_SESSION['sess_role'] =="client")
	{?>
        <ul class="subnav-menu">
            <li>
                <a href="logout.php">Logout</a>
            </li>
          <!--  <li>
                <a href="students.php">Add Student Details</a>
            </li>
			 <li>
                <a href="viewstudents.php">View Students</a>
            </li>-->
            <!--<li>
                <a href="invitation.php">Send Invites</a>
            </li>
           
            <li>
                <a href="viewusers.php">Members That Registered</a>
            </li>-->
        </ul>
		<?php } ?>
		
		<?php if($_SESSION['sess_role'] =="parent")
			{
	?>
        <ul class="subnav-menu">
            <li>
                <a href="logout.php">Logout</a>
            </li>
			<li>
                <a href="viewstudents.php">Student Records</a>
            </li>            
        </ul>
		<?php } ?>
		
    </div>

</div>