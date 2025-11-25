<!DOCTYPE html>
<html>

<head>
    <title>Customer Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Page Header -->
    <h1 class="bg-info text-white text-center p-4">Customer's Data</h1>

    <div class="container-fluid bg-gradient p-5">

        <form action="/" method="GET" class="d-flex flex-row flex-nowrap align-items-baseline mb-4 gap-3">

            <div class="col-auto d-flex align-items-center gap-2">
                <label class="form-label fw-bold mb-0" for="gender">Gender</label>
                <select name="gender" id="gender" class="form-select w-auto">
                    <option value="">All</option>
                    <option value="M" {{ request('gender') == 'M' ? 'selected' : '' }}>Male</option>
                    <option value="F" {{ request('gender') == 'F' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <div class="col-auto d-flex align-items-center">
                <div class="form-check mb-0">
                    <input type="checkbox" name="born_after_2000" value="1" class="form-check-input"
                        id="born_after_2000" {{ request('born_after_2000') ? 'checked' : '' }}>
                    <label class="form-check-label fw-bold" for="born_after_2000">Born after 2000</label>
                </div>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary px-4">Filter</button>
            </div>

        </form>

        <!-- Customer Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle shadow-sm bg-white">
                <thead class="table-primary">
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

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>