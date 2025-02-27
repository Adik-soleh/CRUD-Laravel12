<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Products </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f7f7f7, #e3e3e3);
        }
        .container {
            max-width: 900px;
        }
        h3 {
            font-weight: bold;
            color: #333;
            border-bottom: 3px solid #0d6efd;
            display: inline-block;
            padding-bottom: 5px;
        }
        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #198754;
        }
        .product-stock {
            font-size: 1.1rem;
            font-weight: bold;
            color: #0d6efd;
        }
    </style>
</head>
<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded">
                    <div class="card-body p-3">
                        <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded w-100">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-lg rounded">
                    <div class="card-body">
                        <h3>{{ $product->title }}</h3>
                        <hr/>
                        <p class="product-price">Rp {{ number_format($product->price,2,',','.') }}</p>
                        <p class="mt-3">{!! $product->description !!}</p>
                        <hr/>
                        <p class="product-stock">Stock: {{ $product->stock }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
