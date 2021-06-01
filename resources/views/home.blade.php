<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <h1>Matriks</h1>


        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <td colspan="2">
                        Data Sebelum
                    </td>
                    <td colspan="2">
                        Data Sesudah
                    </td>
                </tr>
                <tr>
                    <td>Uraian</td>
                    <td>Jumlah</td>
                    <td>Uraian</td>
                    <td>Jumlah</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $rows)
                <tr>
                    @foreach ($rows as $row)
                    <td>{{$row}}</td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>