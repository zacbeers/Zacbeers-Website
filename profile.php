<?php
require_once 'core/init.php';
//keep below http headers && before echo output
include_once 'header.php';
if(Session::exists('profile')) {
    echo Session::flash('profile') . '<br />';
    
}
$user = new User();
if($user->isLoggedIn()) {
?>
<p>Hello <?php echo "<a href='profile.php'>" . escape($user->data()->username) . "</a><br/>What would you like to do today?"; ?></p>
    <ul>
        <li><a href="addproject.php">Add Project</a></li>
        <li><a href="projectlist.php?action=edit">Edit Existing Project</a></li>
        <li><a href="projectlist.php?action=delete">Delete Existing Project</a></li>
        <li><a href="addlab.php">Add Lab</a></li>
        <li><a href="lablist.php?action=edit">Edit Existing Lab</a></li>
        <li><a href="lablist.php?action=delete">Delete Existing Lab</a></li>
        <li><a href="addblog.php">Add Blog Post</a></li>
        <li><a href="bloglist.php?action=edit">Edit Existing Blog Post</a></li>
        <li><a href="bloglist.php?action=delete">Delete Existing Blog Post</a></li>
        <li><a href="update.php">Edit Profile</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
<?php 
}
include_once 'footer.php';