@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">Импорт CSV</div>

                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">CustomerId</th>
                                    <th scope="col">Number of calls within the same continent</th>
                                    <th scope="col">Total Duration of calls within the same continent</th>
                                    <th scope="col">Total number of all calls</th>
                                    <th scope="col">Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rows[0] as $key => $value)
                                    <tr>
                                        <th scope="row">{{ $value[0] }}</th>
                                        <td>{{ $value[1] }}</td>
                                        <td>{{ $value[2] }}</td>
                                        <td>{{ $value[3] }}</td>
                                        <td>
                                            <?php $info = Info::getContinent($value[4]); ?>
                                            <b>Continent: </b>
                                            {{ $info->continent_name }}<br>
                                            <b>Country: </b>
                                            {{ $info->country_code }}({{ $info->country_name }})<br>

                                            <b>Geonames API: </b>
                                            {{ Info::getGeoNames($info->zip, $info->country_code)->status->message }}<br>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
