<html>
<head>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/13/2017
 * Time: 9:52 AM
 */
// Load the main class
require_once 'HTML/QuickForm2.php';


$user = 'root';
$pass = '';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=employees', $user, $pass
        , [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $sql = 'SELECT * from departments';
    $depts=[];
    foreach ($pdo->query($sql) as $row) {
        $depts[$row['dept_no']] = $row['dept_name'];
    }
    var_dump($depts);

    $pdo = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


// Instantiate the HTML_QuickForm2 object
$form = new HTML_QuickForm2('AddCourse', 'get');

// Set defaults for the form elements
$form->addDataSource(new HTML_QuickForm2_DataSource_Array(array(
    'name' => '',
    'department' => ''
)));

// Add some elements to the form
$fieldset = $form->addElement('fieldset')->setLabel('Add Employee');
$name = $fieldset->addElement('text', 'name', array('size' => 50, 'maxlength' => 255))
    ->setLabel('Enter Name:');
$department = $fieldset->addElement('select', 'department')
    ->setLabel('Select department:')
    ->loadOptions($depts);

$fieldset->addElement('submit', null, array('value' => 'Send!'));

// Define filters and validation rules
$name->addFilter('trim');
$name->addRule('required', 'Please enter name');

$department->addFilter('trim');
$department->addRule('required', 'Please enter course description');


// Try to validate a form
if ($form->validate()) {
    echo '<h1>' . htmlspecialchars($name->getValue()) . '</h1>';
    echo '<p>Hello, ' . htmlspecialchars($name->getValue()) . '!</p>';
    exit;
}

// Output the form
echo $form;

?>
</body>
</html>