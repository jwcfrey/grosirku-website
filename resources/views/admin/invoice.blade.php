<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print PDF</title>
</head>
<body>

    <center>
        <h3>Nama Customer : {{$data->name}}</h3>
        <h3>Alamat : {{$data->rec_address}}</h3>
        <h3>Nomor HP : {{$data->phone}}</h3>

        <h3>Nama Produk : {{$data->product->title}}</h3>
        <h3>Harga : {{$data->product->price}}</h3>
        <img src="products/{{$data->product->image}}" alt="">
    </center>

</body>
</html>