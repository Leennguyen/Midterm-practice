<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Food</title>
</head>

<body>
    <h1 class="text-center">Food</h1>
    <div class="text-end">
        <a role="button" href="{{ route('foods.create') }}" class="btn btn-primary">Create</a>
    </div>
    <div class="container-md">
        <div class="row" style="gap:10px">
            @foreach ($foodList as $food)
            <div class="card" style="width: 18rem;">
                <img src="/images/{{ $food->img }}" alt="" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $food->name }}</h5>
                    <p class="card-text">{{ $food->price }}</p>
                    <a href="{{ route('foods.show', $food->id) }}" class="btn btn-primary" >Details</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    {{--<table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>img</th>
                <th>name</th>
                <th>price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @if (empty($foodList))
                <tr>
                    <td colspan="5">
                        No data is available!
                    </td>
                </tr>
            @else
                @foreach ($foodList as $food)
                    <tr>
                        <td>{{ $food->id }}</td>
                        <td><img src="/images/{{ $food->img }}" alt="" style="width: 5rem;"></td>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->price }}</td>
                        <td>{{ $food->idCategory }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>--}}
</body>

</html>
