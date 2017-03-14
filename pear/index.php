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

// Instantiate the HTML_QuickForm2 object
$form = new HTML_QuickForm2('AddCourse','get');

// Set defaults for the form elements
$form->addDataSource(new HTML_QuickForm2_DataSource_Array(array(
    'title' => 'PHP Training'
)));

// Add some elements to the form
$fieldset = $form->addElement('fieldset')->setLabel('Add course');
$title = $fieldset->addElement('text', 'title', array('size' => 50, 'maxlength' => 255))
    ->setLabel('Enter course title:');
$description = $fieldset->addElement('textarea', 'description', array('rows' => 10, 'cols' => 128))
    ->setLabel('Enter course description:');
$gender_m = $fieldset->addElement('radio','male')->setLabel('Gender');
$fieldset->addElement('submit', null, array('value' => 'Send!'));

// Define filters and validation rules
$title->addFilter('trim');
$title->addRule('required', 'Please enter course title');


$description->addFilter('trim');
$description->addRule('required', 'Please enter course description');


// Try to validate a form
if ($form->validate()) {
    echo '<h1>'. htmlspecialchars($title->getValue()).'</h1>';
    echo '<p>Hello, ' . htmlspecialchars($title->getValue()) . '!</p>';
    exit;
}

// Output the form
echo $form;

?>
</body>
</html>