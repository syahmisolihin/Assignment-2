<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Customer's Form</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>

    <body>
        <div class='container mt-4'>
    <h1 class='mb-3'>Customer's Data</h1>

    <form action="/view" method="post">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name">

            <label>Email</label>
            <input type="text" class="form-control" name="email">
            
            <label>Address</label>
            <input type="text" class="form-control" name="address">

            <label>Gender</label>
            <input type="text" class="forn-control" name="gender">

            <label>Phone Number</label>
            <input type="text" class="form-control" name="phoneNumber">

            <label>Birthday</label>
            <input type="date" class="form-control" name="birthday">


        </div>

        
        <button type="submit" class="btn btn-success">Submit je</button>
        <a href="{{ route('customer.index') }}">Back to List</a>
    </form>




    </div>


        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>

    </body>


</html>