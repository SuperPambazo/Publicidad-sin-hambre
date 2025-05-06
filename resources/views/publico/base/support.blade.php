@extends('layout.app')

@section('title')
    Soporte - Publicidad Sin Hambre
@endsection

@section('content')
<section class="informacion-asociacion">
    <div class="info-container">
        <h1 class="text-center mb-4">Soporte</h1>
        <div class="info-layout">
            <!-- Card para la imagen grande -->
            <div class="info-image-card">
                <img src="{{ asset('imagenes/pexels-rdne-6646852.jpg') }}" alt="Soporte" class="info-image">
            </div>

            <!-- Cards organizadas verticalmente -->
            <div class="info-details">
                <!-- Card para "¿Necesitas Ayuda?" -->
                <div class="info-card">
                    <h2>¿Necesitas Ayuda?</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <p class="info-content">
                        En Publicidad Sin Hambre estamos aquí para ayudarte. Si tienes alguna pregunta, problema o sugerencia, no dudes en contactarnos.
                    </p>
                </div>

                <!-- Card para "Preguntas Frecuentes" -->
                <div class="info-card">
                    <h2>Preguntas Frecuentes</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <div class="info-content">
                        <ul>
                            <li><strong>¿Cómo puedo donar?</strong> Visita nuestra página de donaciones y sigue los pasos indicados.</li>
                            <li><strong>¿Dónde se utilizan las donaciones?</strong> Todas las donaciones se destinan a programas de alimentación y desarrollo comunitario.</li>
                            <li><strong>¿Cómo puedo ser voluntario?</strong> Envíanos un correo a <a href="mailto:voluntarios@publicidadsinhambre.org">voluntarios@publicidadsinhambre.org</a>.</li>
                        </ul>
                    </div>
                </div>

                <!-- Card para "Contacto Directo" -->
                <div class="info-card">
                    <h2>Contacto Directo</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <div class="info-content">
                        <p>Si no encuentras la respuesta que buscas, contáctanos directamente:</p>
                        <ul>
                            <li><strong>Email:</strong> <a href="mailto:soporte@publicidadsinhambre.org">soporte@publicidadsinhambre.org</a></li>
                            <li><strong>Teléfono:</strong> +123 456 789</li>
                            <li><strong>Horario de Atención:</strong> Lunes a Viernes, 9:00 AM - 6:00 PM</li>
                        </ul>
                    </div>
                </div>

                <!-- Card para "Formulario de Contacto" -->
                <div class="info-card">
                    <h2>Formulario de Contacto</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <div class="info-content">
                        <form>
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Mensaje:</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn">Enviar Mensaje</button>
                        </form>
                    </div>
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

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.btn {
    background-color: #e67e22;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #000;
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