<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

                <div>
                    <div class="text-light">
                        <span class="">City</span> <span>{{ $data['geoplugin_city'] }}</span>
                    </div>
                    <div class="text-light">
                        <span class="">Country</span> <span>{{ $data['geoplugin_city'] }}</span>
                    </div>
                    <div class="text-light">
                        <span class="">Continent</span> <span>{{ $data['geoplugin_city'] }}</span>
                    </div>
                    <div class="text-light">
                        <span class="">Latitude</span> <span>{{ $data['geoplugin_city'] }}</span>
                    </div>
                    <div class="text-light">
                        <span class="">Longitude</span> <span>{{ $data['geoplugin_city'] }}</span>
                    </div>
                    <div class="text-light">
                        <span class="">Timezone</span> <span>{{ $data['geoplugin_city'] }}</span>
                    </div>
                    <div class="text-light">
                        <span class="">Currency</span> <span>{{ $data['geoplugin_city'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
