<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <p>{{ $print }} </p> --}}


    <table border="2">
        <th>name</th>
        <th>email</th>
        <th>password</th>
        @foreach ($users as $item)

        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->password }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
