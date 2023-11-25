<html>

<script src="./js/jquery-3.5.1.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.easing.min.js"></script>
<script src="./js/alert.min.js"></script>
<script type="text/javascript">
function myFn() {
    swal.fire("success", '', "success").then(okay => {
        if (okay) {
            window.location.replace("");
        }
    });

}
</script>

</html>
<?php

require_once "./config.php";
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $image = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $image = base64_encode(file_get_contents(addslashes($image)));

    $insert = $conn->query("INSERT into pic  VALUES (Null,'" . $image . "', NOW())");

    echo '<script type="text/javascript">
    myFn();
    </script>';
}