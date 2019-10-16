<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Chúc mừng bạn {{ $customer->name }} đã đặt hàng thành công! </h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Date order</th>
        <th scope="col">Total</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"></th>
        <td>{{$bill->date_order}}</td>
        <td>{{number_format($bill->total)}} VND</td>
    </tr>
    </tbody>
</table>
</body>
</html>
