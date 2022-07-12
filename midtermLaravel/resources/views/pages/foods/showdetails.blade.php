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
    <title>Details</title>
</head>
<body class="" style="width:50%, align:center">
    <div class="wrapper row" style="width:40%">
    <div class="product-img col">
      <img src="/images/{{ $food->img }}" alt="" style="width: 20rem;">
    </div>
    <div class="product-info col" >
      <div class="product-text">
        <h1>{{ $food->name }}</h1>
        <p><span>{{$food->price}} 000 VND</span></p>
        <p>Có xuất xứ từ vùng Địa Trung Hải thực vật có hoa thuộc nhóm hai lá mầm với các lá tạo thành một cụm đặc hình gần như hình cầu.Là một loại rau hữu cơ rất dễ nhận biết,khó có thể nhầm lẫn</p>
      </div>
      <div class="product-price-btn">

      </div>
    </div>
  </div>
</body>
</html>