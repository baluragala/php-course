<html>
<head></head>
<body>
<form method="post" action="course_detail.php" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title"/>
    <label>Description</label>
    <textarea name="description"></textarea>
    <input type="hidden" name="token" value="secret"/>
    <label>Course Contents</label>
    <input type="file" name="file_course_contents">
    <input type="submit" value="Submit"/>
</form>

<body>
</html>

