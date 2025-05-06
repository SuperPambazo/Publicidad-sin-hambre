@extends('layout.app')

@section('title')
    Ingresar - Publicidad Sin Hambre
@endsection

@section('content')
<section class="informacion-asociacion">
    <div class="info-container">
        <h1 class="text-center mb-4">Ingresar</h1>
        <div class="info-layout">
            <!-- Contenedor para las cards y la imagen -->
            <div class="info-content">
                <!-- Cards organizadas verticalmente -->
                <div class="info-cards">
                    <!-- Card para el formulario de inicio de sesión -->
                    <div class="info-card">
                        <h2>Inicio de Sesión</h2>
                        <form action="/login" method="POST">
                            <div class="form-group">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn">Ingresar</button>
                        </form>
                    </div>

                    <!-- Card para el registro -->
                    <div class="info-card">
                        <h2>¿No tienes una cuenta?</h2>
                        <a href="/register" class="btn btn-secondary">Regístrate</a>
                    </div>
                </div>

                <!-- Imagen al lado derecho -->
                <div class="info-image">
                    <img src="{{ asset('imagenes/pexels-rdne-6646852.jpg') }}" alt="Publicidad Sin Hambre" class="image">
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
    flex-direction: column;
    gap: 20px;
    margin-top: 20px;
}

.info-content {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
    align-items: flex-start;
}

.info-cards {
    flex: 1 1 40%;
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

.info-card h2 {
    margin-top: 0;
    color: #e67e22;
    font-size: 1.5rem;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

button.btn {
    background-color: #e67e22;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button.btn:hover {
    background-color: #d35400;
}

a.btn-secondary {
    display: inline-block;
    background-color: #ddd;
    color: #333;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

a.btn-secondary:hover {
    background-color: #bbb;
}

.info-image {
    flex: 1 1 50%;
    text-align: center;
}

.info-image .image {
    width: 100%;
    height: auto;
    border-radius: 8px;
    object-fit: cover;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
