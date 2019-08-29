{{ $user['name'] }} está interesado en la propiedad <strong>{{ $apartment['title'] }}</strong>,
departamento {{ $apartment['floor'] }} / {{ $apartment['code']  }}
de {{ $apartment['building']['address'] }} / {{ $apartment['building']['location'] }}.

Mensaje:
{!! nl2br($user['message']) !!}

