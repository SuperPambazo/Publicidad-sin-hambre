@extends('layout.app')

@section('title')
    Términos y Condiciones - Publicidad Sin Hambre
@endsection

@section('content')
<section class="informacion-asociacion">
    <div class="info-container">
        <h1 class="text-center mb-4">Publicidad Sin Hambre</h1>
        <div class="info-layout">
            <!-- Card para la imagen grande -->
            <div class="info-image-card">
                <img src="{{ asset('imagenes/pexels-rdne-6646852.jpg') }}" alt="Publicidad Sin Hambre" class="info-image">
            </div>

            <!-- Cards organizadas verticalmente -->
            <div class="info-details">
                <!-- Card para "Introducción" -->
                <div class="info-card">
                    <h2>Introducción</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Bienvenido a Publicidad Sin Hambre. Al acceder y utilizar nuestro sitio web, aceptas cumplir con los siguientes términos y condiciones. Si no estás de acuerdo con alguno de estos términos, te recomendamos que no uses nuestro sitio.
                    </p>
                </div>

                <!-- Card para "Uso del Sitio" -->
                <div class="info-card">
                    <h2>Uso del Sitio</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        El contenido de este sitio es para tu información general y uso personal. Nos reservamos el derecho de modificar o retirar cualquier parte del sitio sin previo aviso.
                    </p>
                </div>

                <!-- Card para "Propiedad Intelectual" -->
                <div class="info-card">
                    <h2>Propiedad Intelectual</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Todo el contenido, diseño y logotipos de Publicidad Sin Hambre son propiedad exclusiva de nuestra organización. Queda prohibida la reproducción no autorizada.
                    </p>
                </div>

                <!-- Card para "Limitación de Responsabilidad" -->
                <div class="info-card">
                    <h2>Limitación de Responsabilidad</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Publicidad Sin Hambre no será responsable por ningún daño directo, indirecto o consecuente que surja del uso de este sitio.
                    </p>
                </div>

                <!-- Card para "Modificaciones" -->
                <div class="info-card">
                    <h2>Modificaciones</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Podemos actualizar estos términos y condiciones en cualquier momento. Te recomendamos revisar esta página periódicamente para estar al tanto de los cambios.
                    </p>
                </div>

                <!-- Card para "Contacto" -->
                <div class="info-card">
                    <h2>Contacto</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        Si tienes alguna pregunta sobre estos términos, no dudes en contactarnos en <a href="mailto:soporte@publicidadsinhambre.org">soporte@publicidadsinhambre.org</a>.
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