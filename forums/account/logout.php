<?php
if(isset($_GET['log_out']))
{
session_destroy();
?>
<?php
echo '<meta HTTP-EQUIV="REFRESH" content="0; url=login.php">';
}
?>