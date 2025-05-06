
    @extends('layout.app')
    @section('title')
    Inicio    
    @endsection
    @section('content')
<!-- Hero Section -->
<section class="hero">
    <video autoplay muted loop class="hero-video">
        <source src="{{ asset('vecteezy_india-distributing-food-to-poor-people_5877286.mp4') }}" type="video/mp4">
        Tu navegador no soporta la etiqueta video.
    </video>
    <div class="hero-content">
        <div class="container">
            <h1>Lucha contra el hambre con Publicidad Sin Hambre</h1>
            <p>Conectamos donantes, voluntarios y ONGs para crear un impacto real en la lucha contra el hambre.</p>
            <div class="hero-buttons">
                <a href="/search" class="btn">Ver ONGs</a>
                <a href="/register" class="btn btn-secondary">Hacer una donación</a>
            </div>
        </div>
    </div>
</section>


    <!-- Sección "Cómo Funciona" -->
    <section class="how-it-works">
        <div class="container">
            <h2>¿Cómo Funciona?</h2>
            <div class="steps">
                <div class="step">
                    <i class="fas fa-search"></i>
                    <h3>Encuentra ONGs</h3>
                    <p>Descubre organizaciones que luchan contra el hambre en todo el mundo.</p>
                </div>
                <div class="step">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h3>Contribuye</h3>
                    <p>Haz una donación o únete como voluntario para apoyar su causa.</p>
                </div>
                <div class="step">
                    <i class="fas fa-share-alt"></i>
                    <h3>Difunde</h3>
                    <p>Comparte su trabajo en redes sociales para darles más visibilidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección "ONGs Destacadas" -->
    <section class="featured-ongs">
        <div class="container">
            <h2>ONGs Destacadas</h2>
            <div class="ong-list">
                <div class="ong-card">
                    <img src="{{ asset('imagenes/close-up-people-volunteer-teamwork-putting-finger-star-shapehands-togetherstack-handsunity-teamwork-world-environment-day.jpg') }}" alt="ONG 1">
                    <h3>Banco de Alimentos</h3>
                    <p>Distribuye alimentos a comunidades necesitadas en todo el país.</p>
                    <a href="info-a-ba" class="btn">Saber más</a>
                </div>
                <div class="ong-card">
                    <img src="{{ asset('imagenes/closeup-diverse-people-joining-their-hands.jpg') }}" alt="ONG 2">
                    <h3>Acción contra el Hambre</h3>
                    <p>Trabaja para erradicar el hambre en zonas de conflicto y desastres.</p>
                    <a href="info-a-ach" class="btn">Saber más</a>
                </div>
                <div class="ong-card">
                    <img src="{{ asset('imagenes/elderly-person-children-holding-plant.jpg') }}" alt="ONG 3">
                    <h3>Alimentos para Todos</h3>
                    <p>Proporciona comidas nutritivas a niños en situación de pobreza.</p>
                    <a href="info-a-apt" class="btn">Saber más</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección "Únete a la Causa" -->
    <section class="join-us">
        <div class="container">
            <h2>Únete a la Causa</h2>
            <p>Tu apoyo puede marcar la diferencia. <a href="ingresar">¡Contribuye hoy mismo!</a></p>
        </div>
    </section>


    @endsection
  
