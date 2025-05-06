@extends('layout.app')
@section('title')
Preguntas Frecuentes
@endsection
@section('content')
<section class="faq">
    <div class="faq-container">
        <!-- Cards del lado izquierdo -->
        <div class="faq-cards">
            <div class="card" data-question="¿Qué es Publicidad Sin Hambre?">
                <h3>¿Qué es Publicidad Sin Hambre?</h3>
                <p class="answer" style="display: none;">
                    Es una plataforma que conecta donantes, voluntarios y ONGs para luchar contra el hambre en el mundo.
                </p>
            </div>
            <div class="card" data-question="¿Cómo puedo donar?">
                <h3>¿Cómo puedo donar?</h3>
                <p class="answer" style="display: none;">
                    Puedes hacer una donación directamente a través de nuestra plataforma o contactar a las ONGs asociadas.
                </p>
            </div>
            <div class="card" data-question="¿Cómo me registro como voluntario?">
                <h3>¿Cómo me registro como voluntario?</h3>
                <p class="answer" style="display: none;">
                    Regístrate en nuestra plataforma y selecciona la opción "Voluntariado" para conocer las oportunidades disponibles.
                </p>
            </div>
            <div class="card" data-question="¿Cómo puedo contactar a una ONG?">
                <h3>¿Cómo puedo contactar a una ONG?</h3>
                <p class="answer" style="display: none;">
                    En la sección "Explorar", encontrarás información de contacto de cada ONG.
                </p>
            </div>
        </div>

        <!-- Imagen del lado derecho -->
        <div class="faq-image">
        <img src="{{ asset('imagenes/PublicidadSinHambreFV.png') }}" alt="Imagen de ONG" >
        </div>
        
    </div>
</section>
<style>
.container {
    max-width: 1200px;
    max-height: 1200px;
    margin: 0 auto;
    padding: 20px;
    padding-bottom: 100px;
}

.faq-container {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Dos columnas iguales */
    gap: 2rem; /* Espaciado entre columnas */
    align-items: start; /* Alinea los elementos al inicio */
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.faq-cards {
    display: flex;
    flex-direction: column; /* Alinea las cards verticalmente */
    gap: 1.5rem; /* Espaciado entre las cards */
}

.faq-image img {
    background-color: transparent;
    width: 100%; /* Asegura que la imagen ocupe todo el ancho disponible */
    height: auto; /* Mantiene la proporción de la imagen */
    border-radius: 8px; /* Opcional: bordes redondeados */
    max-width: 100%; /* Asegura que la imagen no exceda el ancho de su contenedor */
    max-height: 100%; /* Asegura que la imagen no exceda la altura de su contenedor */
    object-fit: cover; /* Asegura que la imagen se ajuste correctamente al contenedor */
    transition: transform 0.3s ease; /* Transición suave al pasar el mouse */
    padding-top: 100px; /* Espacio superior para evitar que choque con el header */
    padding-bottom: 100px; /* Espacio inferior para evitar que choque con el footer */
}

.card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transition: all 0.3s ease;
    text-align: center;
    cursor: pointer;
    min-height: 200px; /* Establece una altura mínima para las cards */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Asegura que los elementos estén distribuidos */
}

.card h3 {
    margin-top: 0;
    color:  #FFA500;
    font-size: 1.25rem;
    transition: opacity 0.3s ease; /* Transición suave para la pregunta */
}

.card .answer {
    font-size: 1rem;
    color: #666;
    margin-top: 15px;
    visibility: hidden; /* Oculta la respuesta sin eliminar su espacio */
    opacity: 0; /* Hace que la respuesta sea invisible */
    transition: visibility 0s, opacity 0.3s ease; /* Transición suave */
    height: auto; /* Asegura que la respuesta ocupe su espacio */
}

.card:hover .answer {
    visibility: visible; /* Muestra la respuesta */
    opacity: 1; /* Hace que la respuesta sea visible */
}

.card:hover h3 {
    opacity: 0; /* Oculta la pregunta al pasar el mouse */
}

.card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.faq-cards .card');

    cards.forEach(card => {
        // Evento al pasar el mouse
        card.addEventListener('mouseenter', function () {
            const question = this.querySelector('h3');
            const answer = this.querySelector('.answer');
            question.style.display = 'none'; // Ocultar la pregunta
            answer.style.display = 'block'; // Mostrar la respuesta
            this.style.boxShadow = '0 6px 12px rgba(0, 0, 0, 0.2)'; // Aumentar sombra
        });

        // Evento al salir el mouse
        card.addEventListener('mouseleave', function () {
            const question = this.querySelector('h3');
            const answer = this.querySelector('.answer');
            question.style.display = 'block'; // Mostrar la pregunta
            answer.style.display = 'none'; // Ocultar la respuesta
            this.style.transition = 'all 0.3s ease';
            this.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)'; // Restaurar sombra
        });
    });
});
</script>
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
@endsection