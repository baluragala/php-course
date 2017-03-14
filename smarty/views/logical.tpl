<html>
<body>
<table>
    <tr>
        <td>Name</td>
        <td>Roll</td>
        <td>Grade</td>
    </tr>
    {foreach item=student from=$students}
        <tr>
            <td>{$student.name}</td>
            <td>{$student.roll}</td>
            {if $student.grade=='F'}
                <td bgcolor='red'>Failed</td>
            {else}
                <td bgcolor='green'>Passed</td>
            {/if}
        </tr>
    {/foreach}
</table>
</body>
</html>