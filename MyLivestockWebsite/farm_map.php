<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Locations - My Livestock Website</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        /* Set the height of the map */
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <!-- Other menu items -->
            </ul>
        </nav>
    </header>

    <main>
        <h1>Farm Locations</h1>
        <p>Check out the available livestock and plan your visit to our farms.</p>

        <!-- Map Container -->
        <div id="map"></div>
    </main>

    <footer>
        <p>&copy; 2024 Farm Fresh Livestock. All rights reserved.</p>
    </footer>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Initialize the map
        const map = L.map('map').setView([-29.8587, 31.0218], 10); // Default location (Durban, South Africa)

        // Set the OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Fetch farm data from the database
        fetch('server/get_farm_data.php')
            .then(response => response.json())
            .then(farmLocations => {
                farmLocations.forEach(farm => {
                    const marker = L.marker([farm.lat, farm.lng]).addTo(map);
                    marker.bindPopup(`
                        <h3>${farm.name}</h3>
                        <p>${farm.description}</p>
                        <p><strong>Available Livestock:</strong> ${farm.livestock}</p>
                    `);
                });
            })
            .catch(error => console.log('Error loading farm data:', error));
    </script>

</body>
</html>

