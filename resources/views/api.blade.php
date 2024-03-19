<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body style="background-color: #2d3748">
<div style="display: flex; margin-top: 150px; align-items: center; justify-content: center; flex-direction: column">
    <div style="width: 400px; ">
        <h1 class="text-center text-light">FIND IP</h1>
        <form action="{{ route('findIp') }}" method="POST">
            @csrf
            <div class="d-flex text-center">
                <input placeholder="670.240.10.25" value="{{ $ipAddress ?? '' }}" type="text" name="api" class="form-control">
                <button class="btn btn-primary">FIND</button>
            </div>
        </form>

        @if(session()->has('errors'))
            <span class="text-danger">Please enter a valid IP address</span>
        @endif

          @if(!empty($data) && $data)
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th scope="row" class="text-light">City</th>
                        <td class="text-light">{{ $data['geoplugin_city'] ?? '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-light">Country</th>
                        <td class="text-light">{{ $data['geoplugin_countryName'] ?? '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-light">Continent</th>
                        <td class="text-light">{{ $data['geoplugin_continentName'] ?? '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-light">Latitude</th>
                        <td class="text-light">{{ $data['geoplugin_latitude'] ?? '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-light">Longitude</th>
                        <td class="text-light">{{ $data['geoplugin_longitude'] ?? '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-light">Timezone</th>
                        <td class="text-light">{{ $data['geoplugin_timezone'] ?? '' }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-light">Currency</th>
                        <td class="text-light">{{ $data['geoplugin_currencyCode'] ?? '' }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        @endif

    </div>
</div>
</body>
</html>
