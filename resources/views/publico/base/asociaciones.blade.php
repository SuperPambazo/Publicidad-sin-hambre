@extends('layout.app')
@section('title')
Asociaciones
@endsection
@section('content')
<section class="asociaciones">
        <div class="container">
            <h1>Asociaciones</h1>
            <p>Conoce a las asociaciones que están haciendo la diferencia en la lucha contra el hambre.</p>
            <div class="asociacion-list">
                <div class="asociacion-card">
                    <h2>Banco de Alimentos</h2>
                    <p>Distribuye alimentos a comunidades necesitadas en todo el país.</p>
                    <a href="/asociaciones/banco-de-alimentos" class="btn">Saber más</a>
                </div>
                <div class="asociacion-card">
                    <h2>Acción contra el Hambre</h2>
                    <p>Trabaja para erradicar el hambre en zonas de conflicto y desastres.</p>
                    <a href="/asociaciones/accion-contra-el-hambre" class="btn">Saber más</a>
                </div>
                <div class="asociacion-card">
                    <h2>Alimentos para Todos</h2>
                    <p>Proporciona comidas nutritivas a niños en situación de pobreza.</p>
                    <a href="/asociaciones/alimentos-para-todos" class="btn">Saber más</a>
                </div>
            </div>
        </div>
    </section>
@endsection