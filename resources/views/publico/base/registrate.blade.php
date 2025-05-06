@extends('layout.app')

@section('title')
    Regístrate - Publicidad Sin Hambre
@endsection

@section('content')
<section class="informacion-asociacion">
    <div class="info-container">
        <h1 class="text-center mb-4">Regístrate</h1>
        <div class="info-layout">
            <!-- Card para la imagen grande -->
            <div class="info-image-card">
                <img src="{{ asset('imagenes/pexels-rdne-6646852.jpg') }}" alt="Regístrate" class="info-image">
            </div>

            <!-- Cards organizadas verticalmente -->
            <div class="info-details">
                <!-- Card para "Formulario de Registro" -->
                <div class="info-card">
                    <h2>Formulario de Registro</h2>
                    <div class="info-content" style="display: block;"> <!-- Siempre visible -->
                        <form action="/registro" method="POST">
                            <div class="form-group">
                                <label for="name">Nombre completo:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Quiero registrarme como:</label>
                                <select id="role" name="role">
                                    <option value="donante">Donante</option>
                                    <option value="voluntario">Voluntario</option>
                                    <option value="ong">ONG</option>
                                </select>
                            </div>
                            <button type="submit" class="btn">Registrarme</button>
                        </form>
                    </div>
                </div>

                <!-- Card para "¿Ya tienes una cuenta?" -->
                <div class="info-card">
                    <h2>¿Ya tienes una cuenta?</h2>
                    <div class="info-content" style="display: block;"> <!-- Siempre visible -->
                        <p>Si ya tienes una cuenta, puedes iniciar sesión aquí:</p>
                        <a href="/ingresar" class="btn btn-secondary">Iniciar Sesión</a>
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

.info-content {
    display: block; /* Siempre visible */
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
.form-group select,
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

.btn-secondary {
    background-color: #ddd;
    color: #000;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-secondary:hover {
    background-color: #bbb;
}
</style>