<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Post Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include("templete/header.php")?>

<div class="container mt-5">
    <h2>Create Property Post</h2>
    <form action="process_rent_post.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="ownerName" class="form-label">Owner Name</label>
            <input type="text" class="form-control" id="ownerName" name="ownerName" required>
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
        </div>
        <div class="mb-3">
            <label for="propertyType" class="form-label">Property Type</label>
            <select class="form-select" id="propertyType" name="propertyType" required>
                <option value="" disabled selected>Select Property Type</option>
                <option value="rent">For Rent</option>
                <option value="sell">For Sale</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <input type="text" class="form-control" id="area" name="area" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea class="form-control" id="details" name="details" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="bedBath" class="form-label">Number of Beds and Baths</label>
            <select class="form-select" id="bedBath" name="bedBath" required>
                <option value="" disabled selected>Select Beds and Baths</option>
                <option value="1">1 Bed, 1 Bath</option>
                <option value="2">2 Beds, 2 Baths</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="mb-3">
            <label for="propertyImage" class="form-label">Property Images</label>
            <input type="file" class="form-control" id="propertyImage" name="propertyImage" multiple accept="image/*">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<?php include("templete/footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
