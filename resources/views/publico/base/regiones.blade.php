@extends('layout.app')

@section('title')
    Regiones - Publicidad Sin Hambre
@endsection

@section('content')
<section class="informacion-asociacion">
    <div class="info-container">
        <h1 class="text-center mb-4">Regiones</h1>
        <p class="text-center">Descubre las regiones donde las ONGs están trabajando para combatir el hambre.</p>
        <div class="info-layout">
            <!-- Cards organizadas verticalmente -->
            <div class="info-details">
                <div class="region-card">
                    <h2>Occidente</h2>
                    <p>ONGs de la zona occidente del país</p>
                    <a href="explorar" class="btn">Ver más</a>
                </div>
                <div class="region-card">
                    <h2>Centro</h2>
                    <p>Organizaciones enfocadas en la zona centro del país</p>
                    <a href="explorar" class="btn">Ver más</a>
                </div>
                <div class="region-card">
                    <h2>Norte</h2>
                    <p>Proyectos en toda la zona norte y fronteriza del país</p>
                    <a href="explorar" class="btn">Ver más</a>
                </div>
                <div class="region-card">
                    <h2>Sur</h2>
                    <p>Iniciativas en la región sur del país</p>
                    <a href="explorar" class="btn">Ver más</a>
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
        // Inicializa el mapa centrado en México sin controles de zoom
        const map = L.map('map', {
            zoomControl: false // Desactiva los controles de zoom
        }).setView([23.6345, -102.5528], 5); // Coordenadas de México

        // Añade una capa de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Marcadores para las regiones de México con información de ONGs
        const regions = [
            { 
                lat: 25.6866, 
                lng: -100.3161, 
                title: "Norte - Monterrey", 
                info: "ONG: Ayuda Norte. Proyectos enfocados en la frontera norte del país.",
                image: "{{ asset('imagenes/ong-norte.jpg') }}" // Ruta de la imagen
            },
            { 
                lat: 20.6668, 
                lng: -103.3918, 
                title: "Occidente - Guadalajara", 
                info: "ONG: Manos Solidarias. Apoyo a comunidades rurales en Jalisco.",
                image: "{{ asset('imagenes/ong-occidente.jpg') }}" // Ruta de la imagen
            },
            { 
                lat: 19.4326, 
                lng: -99.1332, 
                title: "Centro - Ciudad de México", 
                info: "ONG: Unidos por el Centro. Iniciativas urbanas en la CDMX.",
                image: "{{ asset('imagenes/ong-centro.jpg') }}" // Ruta de la imagen
            },
            { 
                lat: 17.9895, 
                lng: -92.9281, 
                title: "Sur - Villahermosa", 
                info: "ONG: Esperanza del Sur. Proyectos agrícolas en Tabasco.",
                image: "{{ asset('imagenes/ong-sur.jpg') }}" // Ruta de la imagen
            }
        ];

        // Añade los marcadores al mapa con popups que incluyen imágenes
        regions.forEach((region) => {
            L.marker([region.lat, region.lng])
                .addTo(map)
                .bindPopup(`
                    <b>${region.title}</b><br>
                    <img src="${region.image}" alt="${region.title}" style="width: 100%; height: auto; border-radius: 8px; margin-top: 10px;"><br>
                    ${region.info}
                `);
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

.region-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
}

.region-card h2 {
    color: #e67e22;
    font-size: 1.5rem;
}

.region-card p {
    margin: 10px 0;
}

.region-card .btn {
    background-color: #e67e22;
    color: #fff;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.region-card .btn:hover {
    background-color: #d35400;
}

.info-image-card {
    flex: 1 1 60%;
    max-width: 60%;
    text-align: center;
}

#map {
    width: 100%;
    height: 100%; /* Cambia la altura para que se ajuste dinámicamente */
    min-height: 855px; /* Establece una altura mínima para evitar que sea demasiado pequeño */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.leaflet-control-attribution {
    display: none !important;
}
</style>