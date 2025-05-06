@extends('layout.app')
@section('title')
Quiénes Somos
@endsection
@section('content')
<section class="about-us">
    <div class="container-2">
        <h1 class="text-center mb-4">Quiénes Somos</h1>
        <div class="about-cards">
            <!-- Card para "Quiénes Somos" -->
            <div class="card-2" data-info="Quiénes Somos">
                <h2>Quiénes Somos</h2>
                <p class="info" style="display: none;">
                    En <strong>Publicidad Sin Hambre</strong>, somos un equipo comprometido con la lucha contra el hambre en el mundo.
                    Nuestra misión es conectar donantes, voluntarios y ONGs para crear un impacto real y duradero.
                </p>
            </div>

            <!-- Card para "Nuestra Visión" -->
            <div class="card-2" data-info="Nuestra Visión">
                <h2>Nuestra Visión</h2>
                <p class="info" style="display: none;">
                    Soñamos con un mundo donde nadie pase hambre. Queremos ser el puente que una a quienes necesitan ayuda
                    con quienes pueden brindarla.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
.container-2 {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    padding-bottom: 100px; /* Agrega espacio inferior para evitar que choque con el footer */
}

.about-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Ajusta el número de columnas automáticamente */
    gap: 1.5rem; /* Espaciado entre las cards */
    margin-top: 20px;
}

.card-2 {
    background-color: #fff; /* Fondo blanco */
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
    border-bottom: 100px solid #ddd; /* Border-bottom de 100px */
}

.card-2 h2 {
    margin-top: 0;
    color: #FFA500; /* Color naranja */
    font-size: 1.25rem;
    transition: opacity 0.3s ease; /* Transición suave para ocultar el título */
}

.card-2 .info {
    font-size: 1rem;
    color: #666;
    margin-top: 15px;
    visibility: hidden; /* Oculta la información sin eliminar su espacio */
    opacity: 0; /* Hace que la información sea invisible */
    transition: visibility 0s, opacity 0.3s ease; /* Transición suave */
    height: auto; /* Asegura que la información ocupe su espacio */
}

.card-2:hover .info {
    visibility: visible; /* Muestra la información */
    opacity: 1; /* Hace que la información sea visible */
}

.card-2:hover h2 {
    opacity: 0; /* Oculta el título al pasar el mouse */
}

.card-2:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.about-cards .card-2');

    cards.forEach(card => {
        // Evento al pasar el mouse
        card.addEventListener('mouseenter', function () {
            const title = this.querySelector('h2');
            const info = this.querySelector('.info');
            title.style.display = 'none'; // Ocultar el título
            info.style.display = 'block'; // Mostrar la información
            this.style.boxShadow = '0 6px 12px rgba(0, 0, 0, 0.2)'; // Aumentar sombra
        });

        // Evento al salir el mouse
        card.addEventListener('mouseleave', function () {
            const title = this.querySelector('h2');
            const info = this.querySelector('.info');
            title.style.display = 'block'; // Mostrar el título
            info.style.display = 'none'; // Ocultar la información
            this.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)'; // Restaurar sombra
        });
    });
});
</script>