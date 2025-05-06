@extends('layout.app')

@section('title')
    Contáctanos - Publicidad Sin Hambre
@endsection

@section('content')
<section class="informacion-asociacion">
    <div class="info-container">
        <h1 class="text-center mb-4">Contáctanos</h1>
        <div class="info-layout">
            <!-- Card para la imagen grande -->
            <div class="info-image-card">
                <img src="{{ asset('imagenes/pexels-rdne-6646852.jpg') }}" alt="Contáctanos" class="info-image">
            </div>

            <!-- Cards organizadas verticalmente -->
            <div class="info-details">
                <!-- Card para "Formulario de Contacto" -->
                <div class="info-card">
                    <h2>Formulario de Contacto</h2>
                    <div class="info-content" style="display: block;"> <!-- Siempre visible -->
                        <form action="/contacto" method="POST">
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Mensaje:</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn">Enviar</button>
                        </form>
                    </div>
                </div>

                <!-- Card para "Información de Contacto" -->
                <div class="info-card">
                    <h2>Información de Contacto</h2>
                    <i class="fas fa-chevron-down toggle-info"></i>
                    <div class="info-content">
                        <p>Si necesitas más información, puedes contactarnos directamente:</p>
                        <ul>
                            <li><strong>Email:</strong> <a href="mailto:contacto@publicidadsinhambre.org">contacto@publicidadsinhambre.org</a></li>
                            <li><strong>Teléfono:</strong> +123 456 789</li>
                            <li><strong>Horario de Atención:</strong> Lunes a Viernes, 9:00 AM - 6:00 PM</li>
                        </ul>
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