@extends('layout.app')

@section('title')
    Información de la Asociación - The Hunger Project
@endsection

@section('content')
<section class="informacion-asociacion">
    <div class="info-container">
        <h1 class="text-center mb-4">The Hunger Project</h1>
        <div class="info-layout">
            <!-- Card para la imagen grande -->
            <div class="info-image-card">
            <img src="{{ asset('imagenes/elderly-person-children-holding-plant.jpg') }}" alt="ONG 1" class="info-image">    
            </div>

            <!-- Cards organizadas verticalmente -->
            <div class="info-details">
                <!-- Card para "Misión" -->
                <div class="info-card">
                    <h2>Misión</h2>
                    <i class="fas fa-chevron-down toggle-info"></i> <!-- Ícono para desplegar -->
                    <p class="info-content">
                        El Programa Mundial de Alimentos proporciona asistencia alimentaria en emergencias y trabaja con las comunidades para mejorar la nutrición y construir resiliencia.
                    </p>
                </div>

                <!-- Card para "Visión" -->
                <div class="info-card">
                    <h2>Visión</h2>
                    <i class="fas fa-chevron-down toggle-info"></i> <!-- Ícono para desplegar -->
                    <p class="info-content">
                        Un mundo sin hambre donde todas las personas puedan vivir con dignidad.
                    </p>
                </div>

                <!-- Card para "Actividades" -->
                <div class="info-card">
                    <h2>Actividades</h2>
                    <i class="fas fa-chevron-down toggle-info"></i> <!-- Ícono para desplegar -->
                    <ul class="info-content">
                        <li>Distribución de alimentos en emergencias.</li>
                        <li>Programas de alimentación escolar.</li>
                        <li>Desarrollo de infraestructuras agrícolas.</li>
                    </ul>
                </div>

                <!-- Card para "Contacto" -->
                <div class="info-card">
                    <h2>Contacto</h2>
                    <i class="fas fa-chevron-down toggle-info"></i> <!-- Ícono para desplegar -->
                    <p class="info-content">
                        <strong>Email:</strong> info@wfp.org<br>
                        <strong>Teléfono:</strong> +111 222 333
                    </p>
                    <a href="ingresar" class="info-btn">Donar ahora</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<style>
.info-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    padding-bottom: 100px; /* Espacio inferior para evitar que choque con el footer */
}

.info-layout {
    display: flex;
    flex-wrap: wrap; /* Permite que los elementos se ajusten en pantallas pequeñas */
    gap: 20px; /* Espaciado entre la imagen y las cards */
    margin-top: 20px;
}

.info-image-card {
    flex: 1 1 60%; /* La imagen ocupa el 60% del ancho */
    max-width: 60%; /* Limita el ancho máximo al 60% */
    text-align: center;
}

.info-image {
    width: 100%;
    height: auto;
    border-radius: 8px; /* Bordes redondeados */
    object-fit: cover; /* Asegura que la imagen se ajuste correctamente */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.info-details {
    flex: 1 1 35%; /* Las cards ocupan el 35% del ancho */
    display: flex;
    flex-direction: column; /* Organiza las cards verticalmente */
    gap: 20px; /* Espaciado entre las cards */
}

.info-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transition: all 0.3s ease; /* Transición suave */
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* Asegura que el contenido esté al inicio */
    height: auto; /* Ajusta dinámicamente la altura */
    min-height: 60px; /* Altura mínima para mostrar solo el título */
    position: relative; /* Para posicionar el ícono dentro de la card */
    overflow: hidden; /* Oculta el contenido que exceda el tamaño */
}

.info-card.expanded {
    height: auto; /* Permite que la altura se ajuste automáticamente al contenido */
}

.toggle-info {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 1.2rem;
    color: #e67e22;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.toggle-info.rotate {
    transform: rotate(180deg); /* Rotar el ícono al desplegar */
}

.info-content {
    display: none; /* Oculta la información por defecto */
    margin-top: 15px;
    transition: all 0.3s ease;
}


.info-card h2 {
    margin-top: 0;
    color: #e67e22;
    font-size: 1.5rem;
}

.info-card ul {
    padding-left: 20px;
    text-align: left;
}

.info-card ul li {
    margin-bottom: 10px;
}

.info-card .info-btn {
    display: none;
    background-color: #e67e22;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.info-card .info-btn:hover {
    background-color: #000;
}

.info-card p,
.info-card ul {
    display: none; /* Oculta la información por defecto */
    transition: all 0.3s ease; /* Transición suave */
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.toggle-info');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            const card = this.parentElement; // La card actual
            const infoContent = card.querySelector('.info-content');
            

            if (card.classList.contains('expanded')) {
                // Oculta la información
                infoContent.style.display = 'none';
                card.classList.remove('expanded'); // Reduce el tamaño de la card
                this.classList.remove('rotate'); // Rota el ícono hacia arriba
                this.style.color = '#e67e22'; // Cambia el color del ícono al colapsar
                
            } else {
                // Muestra la información
                infoContent.style.display = 'block';
                card.classList.add('expanded'); // Agranda la card
                this.classList.add('rotate'); // Rota el ícono hacia abajo
                this.style.color = '#000'; // Cambia el color del ícono al desplegar
            }
        });
    });
});
</script>