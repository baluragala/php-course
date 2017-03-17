<html>
<head></head>
<body>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    {foreach $d as $dept}
        <tr>
            <td>{$dept->getDeptNo()}</td>
            <td>{$dept->getDeptName()}</td>
        </tr>
    {/foreach}

    <form>
        <input type="text"/>
    </form>
</table>
</body>
</html>