@extends('layout.app')
@section('title')
Listado de ONGs
@endsection
@section('content')
<body>
    <!-- Sección "listado de ongs" -->
<section class="featured-ongs">
<h2>ONGs Registradas</h2>
    <div class="container-search">
        <div class="search-section">
            <!-- Controles de búsqueda y filtros -->
            <div class="search-filters mb-4">
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <div class="input-group">
                            <input type="text" id="ong-search" class="form-control" placeholder="Buscar ONG por nombre...">
                            <button class="btn btn-primary" id="search-button" type="button">
                                <i class="fas fa-search"></i> Buscar
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <select id="filter-category" class="form-control">
                            <option value="">Todas las categorías</option>
                            <option value="alimentos">Alimentos</option>
                            <option value="hambre">Lucha contra el hambre</option>
                            <option value="comunidad">Ayuda comunitaria</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <select id="filter-location" class="form-control">
                            <option value="">Todas las ubicaciones</option>
                            <option value="local">Local</option>
                            <option value="nacional">Nacional</option>
                            <option value="internacional">Internacional</option>
                        </select>
                    </div>
                    <div class="col-md-1 mb-3">
                        <button id="reset-filters" class="btn btn-outline-secondary" title="Restablecer filtros">
                            <i class="fas fa-undo"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lista de ONGs -->
        <div class="ong-list">
            <!-- Tarjetas de ONGs -->
            <div class="ong-card" data-name="banco de alimentos" data-category="alimentos" data-location="nacional">
                <img src="{{ asset('imagenes/close-up-people-volunteer-teamwork-putting-finger-star-shapehands-togetherstack-handsunity-teamwork-world-environment-day.jpg') }}" alt="ONG 1">
                <h3>Banco de Alimentos</h3>
                <p>Distribuye alimentos a comunidades necesitadas en todo el país.</p>
                <a href="info-a-ba" class="btn">Saber más</a>
            </div>
            <div class="ong-card" data-name="acción contra el hambre" data-category="hambre" data-location="internacional">
                <img src="{{ asset('imagenes/closeup-diverse-people-joining-their-hands.jpg') }}" alt="ONG 2">
                <h3>Acción contra el Hambre</h3>
                <p>Trabaja para erradicar el hambre en zonas de conflicto y desastres.</p>
                <a href="info-a-ach" class="btn">Saber más</a>
            </div>
            <div class="ong-card" data-name="alimentos para todos" data-category="alimentos" data-location="local">
                <img src="{{ asset('imagenes/elderly-person-children-holding-plant.jpg') }}" alt="ONG 3">
                <h3>Alimentos para Todos</h3>
                <p>Proporciona comidas nutritivas a niños en situación de pobreza.</p>
                <a href="info-a-apt" class="btn">Saber más</a>
            </div>
            <div class="ong-card" data-name="world food programme" data-category="alimentos" data-location="internacional">
                <img src="{{ asset('imagenes/vecteezy_team-of-young-and-diversity-volunteer-worker-group-enjoy_11273559.jpg') }}" alt="ONG 4">
                <h3>World Food Programme (WFP)</h3>
                <p>Se asocia con diferentes comedores comunitarios para proveer alimentos en zonas marginadas.</p>
                <a href="info-a-wfp" class="btn">Saber más</a>
            </div>
            <div class="ong-card" data-name="feeding america" data-category="alimentos" data-location="internacional">
                <img src="{{ asset('imagenes/ongs-5480911_1280.jpg') }}" alt="ONG 5">
                <h3>Feeding America</h3>
                <p>Se Distribuye por todo el continente</p>
                <a href="info-a-fa" class="btn">Saber más</a>
            </div>
            <div class="ong-card" data-name="the hunger project" data-category="hambre" data-location="internacional">
                <img src="{{ asset('imagenes/pexels-rdne-6646852.jpg') }}" alt="ONG 6">
                <h3>The Hunger Project</h3>
                <p>Proporciona comidas nutritivas a niños en situación de pobreza.</p>
                <a href="info-a-thp" class="btn">Saber más</a>
            </div>
        </div>

        <!-- Mensaje cuando no hay resultados -->
        <div id="no-results" class="alert alert-warning text-center" style="display: none;">
            No se encontraron ONGs que coincidan con tus criterios de búsqueda.
        </div>

        <!-- Contador de resultados -->
        <div id="results-count" class="text-muted text-end mt-2">
            Mostrando <span id="visible-count">0</span> de <span id="total-count">0</span> ONGs
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('ong-search');
    const searchButton = document.getElementById('search-button');
    const categoryFilter = document.getElementById('filter-category');
    const locationFilter = document.getElementById('filter-location');
    const resetButton = document.getElementById('reset-filters');
    const ongCards = document.querySelectorAll('.ong-card');
    const noResultsMessage = document.getElementById('no-results');
    const visibleCountElement = document.getElementById('visible-count');
    const totalCountElement = document.getElementById('total-count');
    
    
    // Establecer el conteo total inicial
    totalCountElement.textContent = ongCards.length;
    visibleCountElement.textContent = ongCards.length;
    
    function filterONGs() {
        const searchTerm = searchInput.value.toLowerCase();
        const categoryValue = categoryFilter.value;
        const locationValue = locationFilter.value;
        let visibleCount = 0;
        
        ongCards.forEach(card => {
            const name = card.getAttribute('data-name');
            const category = card.getAttribute('data-category');
            const location = card.getAttribute('data-location');
            
            const matchesSearch = name.includes(searchTerm) || searchTerm === '';
            const matchesCategory = categoryValue === '' || category === categoryValue;
            const matchesLocation = locationValue === '' || location === locationValue;
            
            if (matchesSearch && matchesCategory && matchesLocation) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
        
        // Actualizar contador
        visibleCountElement.textContent = visibleCount;
        
        // Mostrar u ocultar mensaje de no resultados
        if (visibleCount === 0) {
            noResultsMessage.style.display = 'block';
        } else {
            noResultsMessage.style.display = 'none';
        }
    }
    
    // Evento para el botón de búsqueda
    searchButton.addEventListener('click', filterONGs);
    
    // Evento para Enter en el campo de búsqueda
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            filterONGs();
        }
    });
    
    // Eventos para los selectores (filtran automáticamente)
    categoryFilter.addEventListener('change', filterONGs);
    locationFilter.addEventListener('change', filterONGs);
    
    // Botón para resetear filtros
    resetButton.addEventListener('click', function() {
        searchInput.value = '';
        categoryFilter.value = '';
        locationFilter.value = '';
        filterONGs();
    });

    ongCards.forEach(card => {
        // Evento al pasar el mouse
        card.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.3s ease';
            this.style.border = '2px solid #e67e22'; // Cambiar color del borde
            this.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)'; // Aplicar sombra tenue
            this.style.borderRadius = '10px'; // Redondear esquinas
            
        });

        // Evento al salir el mouse
        card.addEventListener('mouseleave', function() {
            this.style.transition = 'all 0.3s ease';
            this.style.border = '1px solid #ddd'; // Restaurar borde original
            this.style.boxShadow = 'none'; // Quitar sombra
            this.style.borderRadius = '0'; // Restaurar esquinas
            
        });
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ongCards = document.querySelectorAll('.ong-card');

    ongCards.forEach(card => {
        const description = card.querySelector('p'); // Selecciona el <p> dentro de cada tarjeta

        // Ocultar la descripción inicialmente
        description.style.visibility = 'hidden';

        // Mostrar la descripción al pasar el mouse
        card.addEventListener('mouseenter', function() {
            description.style.visibility = 'visible';
            this.style.border = '2px solid #e67e22'; // Cambiar color del borde
            this.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)'; // Aplicar sombra tenue
        });

        // Ocultar la descripción al quitar el mouse
        card.addEventListener('mouseleave', function() {
            description.style.visibility = 'hidden';
            this.style.border = '1px solid #ddd'; // Restaurar borde original
            this.style.boxShadow = 'none'; // Quitar sombra
        });
    });
});
</script>

<style>
/* Contenedor principal para la búsqueda y las tarjetas */
.container-search {
    display: flex;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    align-items: flex-start;
}

/* Sección de búsqueda */
.search-section {
    flex: 1 1 30%;
    max-width: 30%;
    background-color: #f8f9fa;
    padding: 20px;
    }

/* Lista de ONGs */
.ong-list {
    flex: 1 1 100%;
    max-width: 100%;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 90px;
   
}

/* Tarjetas de ONGs */
.ong-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 15px;
    text-align: center;
    transition: all 0.3s ease;
    max-width: 100%;
    width: 100%;
    padding-left: 50px;
    padding-bottom: 20px; 
    display: flex; /* Habilitar flexbox */
    flex-direction: column; /* Alinear contenido en columna */
    justify-content: space-between; /* Espaciar elementos */
}

/* Botones dentro de las tarjetas */
.ong-card a {
    display: inline-block;
    padding: 10px 15px;
    background-color: #FFA500;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: all 0.3s ease;
    margin-top: auto; /* Empujar el botón hacia el final */
}

.ong-card a:hover {
    background-color: #e69500;
}

/* Responsividad */
@media (max-width: 768px) {
    .container-search {
        flex-direction: column;
    }

    .search-section,
    .ong-list {
        max-width: 100%;
        flex: 1 1 100%;
    }

    .ong-list {
        grid-template-columns: 1fr; /* Una columna en pantallas pequeñas */
    }
}

/* Estilo para los inputs y selects */
.form-control {
    border: 2px solid #000;
    border-radius: 4px;
    transition: all 0.3s;
}

.form-control:focus {
    border-color: #FFA500;
    box-shadow: 0 0 0 0.2rem rgba(255, 165, 0, 0.25);
}

/* Estilo para los botones */
#search-button {
    background-color: #FFA500;
    color: #000;
    transition: all 0.3s;
}

#search-button:hover {
    background-color: #e69500;
    transform: translateY(-2px);
}

#search-button .fas {
    margin-right: 5px;
}

#reset-filters {
    color: #000;
    transition: all 0.3s;
    width: 100%;
}

#reset-filters:hover {
    background-color: #000;
    color: #FFA500;
}

/* Estilo para los iconos de Font Awesome */
.fa-search, .fa-undo {
    color: inherit;
}

/* Responsividad */
@media (max-width: 768px) {
    .col-md-5, .col-md-3, .col-md-1 {
        margin-bottom: 15px !important;
    }
}
/* Mensaje de no resultados */
#no-results {
    margin-top: 20px;
    font-size: 1rem;
    text-align: center;
    width: 100%;
}

/* Contador de resultados */
#results-count {
    text-align: right;
    font-size: 0.9rem;
    width: 100%;
}

</style>

</body>
@endsection