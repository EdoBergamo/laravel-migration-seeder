<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Treni in partenza oggi</h1>

  @if($trains->isEmpty())
    <p>Nessun treno in partenza oggi</p>

  @else
    <table>
      <thead>
        <tr>
          <th>Azienda</th>
          <th>Stazione di Partenza</th>
          <th>Stazione di Arrivo</th>
          <th>Orario di Partenza</th>
          <th>Orario di Arrivo</th>
          <th>Codice Treno</th>
          <th>Numero Carrozze</th>
          <th>Stato</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($trains as $train)
          <tr>
            <td>{{ $train->company }}</td>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->arrival_station }}</td>
            <td>{{ $train->departure_time }}</td>
            <td>{{ $train->arrival_time }}</td>
            <td>{{ $train->train_code }}</td>
            <td>{{ $train->carriage_count }}</td>
            <td>{{ $train->on_time }}</td>
            <td>
              @if ($train->canceled)
                Annullato
              @elseif ($train->on_time)
                In Orario
              @else
                In Ritardo
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</body>
</html>