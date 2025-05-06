@extends('layout.app')

@section('title')
    Política de Privacidad - Publicidad Sin Hambre
@endsection

@section('content')
<section class="informacion-asociacion">
    <div class="info-container">
        <h1 class="text-center mb-4">Política de Privacidad</h1>
        <div class="info-layout">
            <!-- Card para la imagen grande -->
            <div class="info-image-card">
                <img src="{{ asset('imagenes/pexels-rdne-6646852.jpg') }}" alt="Política de Privacidad" class="info-image">
            </div>

            <!-- Cards organizadas verticalmente -->
            <div class="info-details">
                <!-- Card para "Introducción" -->
                <div class="info-card">
                    <h2>Introducción</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        En Publicidad Sin Hambre, valoramos tu privacidad y nos comprometemos a proteger tus datos personales. Esta política explica cómo recopilamos, usamos y protegemos tu información.
                    </p>
                </div>

                <!-- Card para "Información que Recopilamos" -->
                <div class="info-card">
                    <h2>Información que Recopilamos</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Podemos recopilar información personal como tu nombre, dirección de correo electrónico y datos de navegación cuando interactúas con nuestro sitio.
                    </p>
                </div>

                <!-- Card para "Uso de la Información" -->
                <div class="info-card">
                    <h2>Uso de la Información</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Utilizamos tu información para mejorar nuestros servicios, personalizar tu experiencia y enviar actualizaciones relevantes sobre nuestras actividades.
                    </p>
                </div>

                <!-- Card para "Protección de Datos" -->
                <div class="info-card">
                    <h2>Protección de Datos</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Implementamos medidas de seguridad para proteger tu información contra accesos no autorizados o uso indebido.
                    </p>
                </div>

                <!-- Card para "Cookies" -->
                <div class="info-card">
                    <h2>Cookies</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Nuestro sitio utiliza cookies para mejorar la experiencia del usuario. Puedes desactivarlas en la configuración de tu navegador, pero esto podría afectar la funcionalidad del sitio.
                    </p>
                </div>

                <!-- Card para "Tus Derechos" -->
                <div class="info-card">
                    <h2>Tus Derechos</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Tienes derecho a acceder, corregir o eliminar tus datos personales. Para ejercer estos derechos, contáctanos en <a href="mailto:privacidad@publicidadsinhambre.org">privacidad@publicidadsinhambre.org</a>.
                    </p>
                </div>

                <!-- Card para "Cambios en la Política" -->
                <div class="info-card">
                    <h2>Cambios en la Política</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Podemos actualizar esta política de privacidad en cualquier momento. Te recomendamos revisarla periódicamente.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

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

.info-image-card {
    flex: 1 1 60%;
    max-width: 60%;
    text-align: center;
}

.info-image {
    width: 100%;
    height: auto;
    border-radius: 8px;
    object-fit: cover;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

.info-card.expanded {
    height: auto;
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
    transform: rotate(180deg);
}

.info-content {
    display: none;
    margin-top: 15px;
    transition: all 0.3s ease;
}

.info-card h2 {
    margin-top: 0;
    color: #e67e22;
    font-size: 1.5rem;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.toggle-info');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            const card = this.parentElement;
            const infoContent = card.querySelector('.info-content');

            if (card.classList.contains('expanded')) {
                infoContent.style.display = 'none';
                card.classList.remove('expanded');
                this.classList.remove('rotate');
                this.style.color = '#e67e22';
            } else {
                infoContent.style.display = 'block';
                card.classList.add('expanded');
                this.classList.add('rotate');
                this.style.color = '#000';
            }
        });
    });
});
</script>