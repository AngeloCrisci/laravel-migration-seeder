@extends("layouts.app")

@section("page-title", "MainTrains")

@section("main-content")
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Ora di Partenza</th>
                <th scope="col">Giorno della Partenza</th>
                <th scope="col">Ora dell'arrivo</th>
                <th scope="col">Giorno dell'arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Vagone</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($trains as $train )
              <tr>
                <th scope="row"> {{$train->id}}</th>
                <td>{{$train->company}}</td>
                <td>{{$train->station_departure}}</td>
                <td>{{$train->station_arrival}}</td>
                <td>{{$train->time_of_the_departure}}</td>
                <td>{{$train->day_of_the_departure}}</td>
                <td>{{$train->time_of_the_arrival}}</td>
                <td>{{$train->day_of_the_arrival}}</td>
                <td>{{$train->train_code}}</td>
                <td>{{$train->wagons}}</td>
                <td>{{$train->on_time ? "si" : "no"}}</td>
                <td>{{$train->suspended ? "si" : "no"}}</td>
              </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
@endsection
