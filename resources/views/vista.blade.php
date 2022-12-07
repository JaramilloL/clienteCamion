<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>cliente</title>
</head>
<body class="bg-dark">

    @foreach ($json as $resF)
    <div class="row">
        <div class="col-md-6">
                <div class="card flex-wrap mb-2 border-danger" style="width: 18rem;">
                    <img src={{ $resF["foto"] }} class="card-img-top">
                    <div class="card-body">
                      <p class="card-text">{{ $resF["marca"] }}</p>
                      <p class="card-text">{{ $resF["modelo"] }}</p>
                      <p class="card-text">{{ $resF["color"] }}</p>
                      <p class="card-text">{{ $resF["destino"] }}</p>
                      <p class="card-text">{{ $resF["placas"] }}</p>
                      <p class="card-text">{{ $resF["tipo"] }}</p>
                      <p class="card-text">{{ $resF["capasidad"] }}</p>
                      <p class="card-text">{{ $resF["precio"] }}</p>
                      <p class="card-text">{{ $resF["estatus"] }}</p>
                    </div>
                  </div>
                </div>
            </div>
        @endforeach
</body>
</html>