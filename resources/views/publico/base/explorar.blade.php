@extends('layout.app')

@section('title')
    Explorar - Publicidad Sin Hambre
@endsection

@section('content')
<section class="informacion-asociacion">
    <div class="info-container">
        <h1 class="text-center mb-4">Explorar</h1>
        <div class="info-layout">
            <!-- Cards organizadas verticalmente -->
            <div class="info-details">
                <!-- Card para "Introducción" -->
                <div class="info-card">
                    <h2>Introducción</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Descubre las regiones, asociaciones y toda la información relevante para unirte a la lucha contra el hambre.
                    </p>
                </div>

                <!-- Card para "Mapa Interactivo" -->
                <div class="info-card">
                    <h2>Mapa Interactivo</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Explora las regiones en el mapa interactivo para obtener más información sobre las iniciativas locales.
                    </p>
                </div>
            </div>

            <!-- Mapa interactivo al lado derecho -->
            <div class="info-image-card">
                <div id="map" style="height: 400px; width: 100%;"></div>
            </div>
        </div>
    </div>
</section>
@endsection

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Leaflet JavaScript -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Inicializa el mapa sin controles de zoom
        const map = L.map('map', {
            zoomControl: false, // Desactiva los controles de zoom
            attributionControl: false // Desactiva las etiquetas de atribución
        }).setView([20.0, -100.0], 3); // Ajusta las coordenadas y el zoom

        // Añade una capa de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '' // Deja vacío el campo de atribución
        }).addTo(map);

        // Marcadores de las ciudades más importantes del continente Americano
        const markers = [
            { lat: 19.4326, lng: -99.1332, title: "Ciudad de México, México." },
            { lat: 40.7128, lng: -74.0060, title: "Nueva York, Estados Unidos" },
            { lat: 34.0522, lng: -118.2437, title: "Los Ángeles, Estados Unidos" },
            { lat: -34.6037, lng: -58.3816, title: "Buenos Aires, Argentina" },
            { lat: -23.5505, lng: -46.6333, title: "São Paulo, Brasil" },
            { lat: -22.9068, lng: -43.1729, title: "Río de Janeiro, Brasil" },
            { lat: -12.0464, lng: -77.0428, title: "Lima, Perú" },
            { lat: -33.4489, lng: -70.6693, title: "Santiago, Chile" },
            { lat: 4.7110, lng: -74.0721, title: "Bogotá, Colombia" },
            { lat: 10.4806, lng: -66.9036, title: "Caracas, Venezuela" },
            { lat: 45.4215, lng: -75.6972, title: "Ottawa, Canadá" },
            { lat: 49.2827, lng: -123.1207, title: "Vancouver, Canadá" },
            { lat: 25.7617, lng: -80.1918, title: "Miami, Estados Unidos" },
            { lat: 18.4655, lng: -66.1057, title: "San Juan, Puerto Rico" },
            { lat: 21.1619, lng: -86.8515, title: "Cancún, México" },
            { lat: 20.6668, lng: -103.3918, title: "Guadalajara, México" },
            { lat: 25.6866, lng: -100.3161, title: "Monterrey, México" }
        ];

        // Añade los marcadores al mapa
        markers.forEach((marker) => {
            L.marker([marker.lat, marker.lng])
                .addTo(map)
                .bindPopup(marker.title);
        });
    });
</script>

<style>
/* Estilos adaptados del diseño base */
.info-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    padding-bottom: 100px;
}

.info-layout {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
}

.info-details {
    flex: 1 1 35%;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transition: all 0.3s ease;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    position: relative;
    overflow: hidden;
}

.info-card h2 {
    margin-top: 0;
    color: #e67e22;
    font-size: 1.5rem;
}

.info-image-card {
    flex: 1 1 60%;
    max-width: 60%;
    text-align: center;
}

#map {
    width: 100%;
    min-height: 450px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Oculta las etiquetas de atribución con CSS */
.leaflet-control-attribution {
    display: none !important;
}
</style>