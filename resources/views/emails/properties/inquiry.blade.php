<p>
    {{ $user['name'] }} está interesado/a en la propiedad
    @if( isset($apartment))
        <strong>{{ $apartment['title'] }}</strong>,
        departamento / {{ $apartment['floor']  .' / '. $apartment['code']  }}
        de {{ $apartment['building']['address'] .' / '. $apartment['building']['location'] }}.
        {{-- {{ $building['title'] }}. --}}
    @endif
    {{-- {{ dd(get_defined_vars()) }} --}}
    {{-- {{ $building }} --}}


</p>
<p>Datos:</p>
<ul>
    <li>Nombre: {{ $user['name'] }}</li>
    <li>Email: {{ $user['email'] }}</li>
    <li>Teléfono: {{ $user['phone'] }}</li>
</ul>
<p>
    Mensaje:
    {!! nl2br($user['message']) !!}
</p>

