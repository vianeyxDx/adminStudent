<x-app>

    <h2>Crud estudiante</h2>

    @foreach ($estudiantes as $estudiante)
        <h2>{{ $estudiante->nombre }}</h2>
    @endforeach

</x-app>