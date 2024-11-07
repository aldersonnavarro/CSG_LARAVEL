{{-- resources/views/page/clientes.blade.php --}}
@extends('layouts.app')

@section('title', 'Clientes - C.S.G Contratistas Generales')

@section('content')
<div class="clientes-container">
    <h1 class="titulo">¡Gracias por ser parte de nuestra familia!</h1>
    <p class="agradecimiento">Nos complace informarle que nuestra empresa se viene desempeñando con éxito en el rubro de carpintería metálica teniendo como principales clientes a:</p>
    
    <div class="clientes-lista">
        <h2>Algunos de Nuestros Clientes</h2>
        <ul>
            <li class="cliente">GESTION UNO SAC</li>
            <li class="cliente">ADGAVI & ASOCIADOS SAC</li>
            <li class="cliente">SERVIPRO SRL</li>
            <li class="cliente">RAS ARQUITECTOS CONSTRUCTORES EIRL</li>
            <li class="cliente">PROMART HOMECENTER</li>
            <li class="cliente">UNIVERSIDAD DE CIENCIAS APLICADAS (UPC)</li>
            <li class="cliente">EITAL</li>
            <li class="cliente">C&J CONSTRUCTORES SAC</li>
            <li class="cliente">INTEGRAL PROJECT</li>
            <li class="cliente">LTA INGENIEROS SAC</li>
            <li class="cliente">INMOBILIARIA CASABLANCA</li>
            <li class="cliente">CONSORCIO LA MAR</li>
        </ul>
    </div>
    
    <div class="agradecimiento-container">
        <p>¡Agradecemos a todos nuestros clientes por su apoyo continuo!</p>
        <p>Su satisfacción es nuestra prioridad.</p>
    </div>

    <div class="boton-container">
        <a href="{{ route('contacto') }}" class="contacto-btn">Contáctanos</a>
    </div>
</div>
@endsection

@section('footer')
<footer style="text-align: center; padding: 10px; background-color: #f1f1f1; margin-top: 20px;">
    <p>&copy; 2024 C.S.G Contratistas Generales. Todos los derechos reservados.</p>
</footer>
@endsection
