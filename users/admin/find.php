<?php

include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>



<div class="container-fluid">
    <div class ="card-shadow-mb-4">
    <div class ="card-header-py-3">
    <h5 class ="m-0 font-weight-bold text-dark">Find a Documents</h5>
    <?php
$stat = stat("lfupload/DFD.docx");
echo "<br> Accessed: ";
$atime = $stat["atime"];
echo date("Y M D h:i:s", $atime);
echo "<br> Modified: ";
$mtime = $stat["mtime"];
echo date("Y M D h:i:s", $mtime);
echo "<br> Created: ";
$ctime = $stat["ctime"];
echo date("Y M D h:i:s", $ctime);
echo "<br>User ID of owner: " .$stat["uid"];
echo "<br>Group ID of owner: " .$stat["gid"];
echo "<br>Inode device type: " .$stat["rdev"];
echo "<br>Size in bytes: " .$stat["size"];
echo "<br>Last inode change (as Unix timestamp): " .$stat["ctime"];
echo "<br>Blocksize of filesystem IO (if supported): " .$stat["blksize"];
echo "<br>Number of blocks allocated: " .$stat["blocks"];
?>


<iframe src="https://docs.google.com/viewer?url=<lfupload/DFD.docx>"></iframe>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
