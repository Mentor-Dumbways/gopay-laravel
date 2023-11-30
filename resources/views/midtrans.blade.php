<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pay with Gopay | Dumbways</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Item</th>
                <th>Kuantitas</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nasi Goreng</td>
                <td>1</td>
                <td>20000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Capcay</td>
                <td>1</td>
                <td>18000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Es Jeruk</td>
                <td>1</td>
                <td>7000</td>
            </tr>
        </tbody>
    </table>
    <br>
    <form action="{{ route('proses.gopay') }}" method="POST">
        @csrf
        <label for="title">TOTAL</label>
        <input name="totalPrice" type="number" class="form-control" id="title" value="45000">
        <button type="submit" class="btn btn-primary">Bayar</button>

    </form>
</body>

</html>
