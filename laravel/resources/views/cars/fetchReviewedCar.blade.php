<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All cars</title>
</head>

<body>

<div class="row pt-3">
    <div class="col-3"></div>
    <div class="col-6">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>Make</td>
                <td>Model</td>
                <td>Review</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <td>{{$review->make}}</td>
                    <td>{{$review->model}}</td>
                    <td>{{$review->review}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>

</html>