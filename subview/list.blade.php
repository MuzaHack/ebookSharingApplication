<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of books</title>
</head>
<body>
    <table>
    <tr>
            <th>Title</th>
            <th>ISBN</th>
            <th>Book Category</th>
            <th>No. of Pages</th>
        </tr>
        <tr>
            <td>{{ $title1 }}</td>
            <td>{{ $isbn1 }}</td>
            <td>{{ $genre1 }}, {{ $genre2 }}</td>
            <td>{{ $page1 }}</td>
        </tr>
        <tr>
            <td>{{ $title2 }}</td>
            <td>{{ $isbn2 }}</td>
            <td>{{ $genre3 }}, {{ $genre4 }}</td>
            <td>{{ $page2 }}</td>
        </tr>
        <tr>
            <td>{{ $title3 }}</td>
            <td>{{ $isbn3 }}</td>
            <td>{{ $genre3 }},{{ $genre1 }}</td>
            <td>{{ $page3 }}</td>
        </tr>
    
    
    </table>

    <br>
    <a href="nav">Back</a>


</body>
</html>