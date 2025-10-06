<body>
    <h1>Personas</h1>

    <form action="/bebida" method="POST">
        @csrf
        Nombre <input type="text" name="nombre"> <br>
        Apellido <input type="text" name="apellido"> <br>
        Telefono <input type="text" name="telefono"> <br>

        <input type="submit" value="Agregar Bebida"><br><br>
    </form>


    @if (session("personaAgregada"))
        <strong>Persona agregada correctamente</strong>
    @endif

    @foreach ($personas as $persona);
        <div>
            {{$persona->nombre}} - {{$persona->apellido}} <br>
        </div>
    @endforeach
</body>