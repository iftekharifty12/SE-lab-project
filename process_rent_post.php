<?php
include("templete/db_connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $ownerName = $conn->real_escape_string($_POST['ownerName']);
    $phoneNumber = $conn->real_escape_string($_POST['phoneNumber']);
    $propertyType = $conn->real_escape_string($_POST['propertyType']);
    $location = $conn->real_escape_string($_POST['location']);
    $area = $conn->real_escape_string($_POST['area']);
    $price = $conn->real_escape_string($_POST['price']);
    $details = $conn->real_escape_string($_POST['details']);
    $bedBath = $conn->real_escape_string($_POST['bedBath']);

    // Handle file upload for image
    $targetDirectory = "uploads/"; // Specify your target directory
    $targetFile = $targetDirectory . basename($_FILES["propertyImage"]["name"]);
    move_uploaded_file($_FILES["propertyImage"]["tmp_name"], $targetFile);
    $imageFilename = $targetFile;

    // SQL query to insert data into the table
    $sql = "INSERT INTO property_posts (owner_name, phone_number, property_type, location, area, price, details, bed_bath, image_filename)
            VALUES ('$ownerName', '$phoneNumber', '$propertyType', '$location', '$area', '$price', '$details', '$bedBath', '$imageFilename')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>