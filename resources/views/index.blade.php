<!DOCTYPE html>
<html>
<head>
    <title>Student Database</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>

<div class='container mt-4'>
    <h1 class='mb-3'>Customer's Data</h1>

    <table class='table table-bordered table-striped'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Birthday</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data_customer as $customer)
            <tr>
                <td>{{ $customer->Name }}</td>
                <td>{{ $customer->Email }}</td>
                <td>{{ $customer->Address }}</td>
                <td>{{ $customer->Gender }}</td>
                <td>{{ $customer->PhoneNumber }}</td>
                <td>{{ $customer->Birthday }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>

</body>
</html>
