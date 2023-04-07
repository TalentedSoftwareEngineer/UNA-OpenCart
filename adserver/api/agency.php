<?php

// validate the agency name parameter
if (!isset($_POST['agencyName']) || empty($_POST['agencyName'])) {
    die('Invalid agency name parameter');
}

$agencyName = $_POST['agencyName'];

// validate the contact name parameter
if (!isset($_POST['contactName']) || empty($_POST['contactName'])) {
    die('Invalid contact name parameter');
}

$contactName = $_POST['contactName'];

// validate the contact email parameter
if (!isset($_POST['emailAddress']) || !filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL)) {
    die('Invalid contact email parameter');
}

$contactEmail = $_POST['emailAddress'];

// create the agency object
$agency = new stdClass();
$agency->agencyName = $agencyName;
$agency->contactName = $contactName;
$agency->contactEmail = $contactEmail;

print_r($agency);
?>
