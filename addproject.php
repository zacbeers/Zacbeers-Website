<?php
require_once 'core/init.php';
//keep below http headers && before echo output
include_once 'header.php';
?>
<form action="upload.php" method="post"enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <input type="submit" value="upload">
</form>
<?php
include_once 'footer.php';