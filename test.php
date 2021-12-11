<<<<<<< HEAD
<?php
$connection = mysqli_connect("localhost", "root", "", "ecommerce");
session_start();
require_once("include/header.php");

// echo "<script> Swal.fire('The Order Confirmed','It will be delivered within 3 to 5 working days <br><br> Thank you for your visit  ','success') </script>";
// echo "ELLO";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

require_once("include/footer.php");
=======
<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
>>>>>>> 790351ed47e41fbe1536fc4200ea0111f78d0c9c
