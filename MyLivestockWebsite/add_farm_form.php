<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Farm Location</title>
</head>
<body>

    <h1>Add a New Farm Location</h1>

    <form action="server/add_farm.php" method="POST">
        <label for="name">Farm Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="lat">Latitude:</label>
        <input type="text" id="lat" name="lat" required><br>

        <label for="lng">Longitude:</label>
        <input type="text" id="lng" name="lng" required><br>

        <label for="livestock">Available Livestock:</label>
        <input type="text" id="livestock" name="livestock"><br>

        <label for="description">Farm Description:</label>
        <textarea id="description" name="description" rows="5" required></textarea><br>

        <button type="submit">Add Farm</button>
    </form>

</body>
</html>
