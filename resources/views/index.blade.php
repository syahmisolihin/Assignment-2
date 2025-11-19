<!DOCTYPE html>
<html>
<head>
    <title>Student Database</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>

<div class='container mt-4'>
    <h1 class='mb-3'>Data Student</h1>

    <table class='table table-bordered table-striped'>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Gender</th>
                <th>Address</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data_student as $student)
            <tr>
                <td>{{ $student->FirstName }}</td>
                <td>{{ $student->SecondName }}</td>
                <td>{{ $student->Gender }}</td>
                <td>{{ $student->Address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>

</body>
</html>
