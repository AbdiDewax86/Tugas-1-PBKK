<!DOCTYPE html>
<html>
<head>
    <title>View Student Records</title>
</head>
<body>
    <table border = "1">
        <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Street</td>
            <td>City</td>
            <td>State</td>
            <td>Zip Code</td>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->customer_id }}</td>
            <td>{{ $customer->first_name }}</td>
            <td>{{ $customer->last_name }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->street }}</td>
            <td>{{ $customer->city }}</td>
            <td>{{ $customer->state }}</td>
            <td>{{ $customer->zip_code }}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>