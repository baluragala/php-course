<html>
<head></head>
<body>
<p>You have entered below details</p>

<p>Title : <?php echo $_POST['title'] ?></p>

<p>Description : <?php echo $_POST['description'] ?></p>
<?php
if(isset($_FILES["file_course_contents"])) {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["file_course_contents"]["name"]);
    move_uploaded_file($_FILES["file_course_contents"]["tmp_name"], $target_file);
    var_dump($_FILES);
}else{
    echo "NO FILE UPLOADED";
}
?>
<body>
</html>
