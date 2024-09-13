<?php
$dbh = new PDO('mysql:host=localhost;dbname=buoi5php', 'root', '');

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO `my_contacts` (`full_names`, `gender`, `contact_no`, `email`, `city`, `country`) 
        VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";

$stmt = $dbh->prepare($sql);

$full_names = 'Poseidon';
$gender = 'Male';
$contact_no = '541';
$email = 'poseidon@sea.oc';
$city = 'Troy';
$country = 'Ithaca';

$stmt->execute([
    ':full_names' => $full_names,
    ':gender' => $gender,
    ':contact_no' => $contact_no,
    ':email' => $email,
    ':city' => $city,
    ':country' => $country
]);

echo "Poseidon has been successfully added to your contacts list<br>";

$sql = "UPDATE `my_contacts` SET `contact_no` = :contact_no, `email` = :email WHERE `id` = :id";
$stmt = $dbh->prepare($sql);

$contact_no = '786';
$email = 'poseidon@ocean.oc';
$id = 5;

$stmt->execute([
    ':contact_no' => $contact_no,
    ':email' => $email,
    ':id' => $id
]);

echo "ID number $id has been successfully updated<br>";

$sql = "DELETE FROM `my_contacts` WHERE `id` = :id";
$stmt = $dbh->prepare($sql);
$id = 13;

$stmt->execute([':id' => $id]);

echo "ID number $id has been successfully deleted<br>";

$sql = "SELECT * FROM my_contacts";
$stmt = $dbh->query($sql);

if ($stmt->rowCount() > 0) {
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
} else {
    echo "No records found.<br>";
}

$dbh = null;