<!DOCTYPE html>
<html>

<head>
    <title>Customer Database</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>

<body>

    <h1 class=' bg-info text-white  text-center p-4'>Customer's Data</h1>
    <div class='container-fluid bg-gradient p-5'>


        <form action="/" method="GET">
            <label>Gender:</label>
            <select name="gender">
                <option value="">All</option>
                <option value="M" {{ request('gender') == 'M' ? 'selected' : '' }}>Male</option>
                <option value="F" {{ request('gender') == 'F' ? 'selected' : '' }}>Female</option>
            </select>

            <label>
                <input type="checkbox" name="born_after_2000" value="1" {{ request('born_after_2000') ? 'checked' : '' }}>
                Born after 2000
            </label>

            <button type="submit">Filter</button>
            <hr>
        </form>


        <table class='table table-bordered table-striped bg-white'>
            <thead>
                <tr class="bg-primary bg-gradient p-3">
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
                    <tr class="bg-info bg-gradient p-3">
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->gender }}</td>
                        <td>{{ $customer->phoneNumber }}</td>
                        <td>{{ $customer->birthday }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>

</body>

</html>