@extends('layout.app')
@section('title')
Listado de ONGs
@endsection
@section('content')
<body>
    <!-- Sección "listado de ongs" -->
<section class="featured-ongs">
    <div class="container">
        <h2>ONGs Registradas</h2>
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
            <div class="ong-card">
                <img src="{{ asset('imagenes/vecteezy_team-of-young-and-diversity-volunteer-worker-group-enjoy_11273559.jpg') }}" alt="ONG 3">
                <h3>World Food Programme (WFP)</h3>
                <p>Se asocia con diferentes comedores comunitarios para proveer alimentos en zonas marginadas.</p>
                <a href="info-a-wfp" class="btn">Saber más</a>
            </div>
            <div class="ong-card">
                <img src="{{ asset('imagenes/ongs-5480911_1280.jpg') }}" alt="ONG 3">
                <h3>Feeding America</h3>
                <p>Se Distribuye por todo el continente</p>
                <a href="info-a-fa" class="btn">Saber más</a>
            </div>
            <div class="ong-card">
                <img src="{{ asset('imagenes/pexels-rdne-6646852.jpg') }}" alt="ONG 3">
                <h3>The Hunger Project</h3>
                <p>Proporciona comidas nutritivas a niños en situación de pobreza.</p>
                <a href="info-a-thp" class="btn">Saber más</a>
            </div>
        </div>
    </div>
</section>

    </body>
@endsection