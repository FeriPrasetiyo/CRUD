<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Company</a>
        </div>
    </nav>
    <div class="container-fluit">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">ID company</th>
                                            <th scope="col">company name</th>
                                            <th scope="col">company email</th>
                                            <th scope="col">company address</th>
                                            <th scope="col">company phone</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        @foreach($companies as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->company_id }}</td>
                                            <td>{{ $item->company_name }}</td>
                                            <td>{{ $item->company_email }}</td>
                                            <td>{{ $item->company_address }}</td>
                                            <td>{{ $item->company_phone }}</td>

                                            <td>
                                                <a href="{{ url('/companys/' . $item->company_id . '/edit') }}" title="edit"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                <form method="POST" class="d-inline" action="{{ url('/companys/' . $item->company_id . '/delete') }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $employees->withQueryString()->links('pagination::bootstrap-5') !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                    <a href="/companys/create">
                                    <button type="button" class="btn btn-primary">New company</button>
                                    </a>
                                    </div>
                                    <div class="col">
                                    <a href="/employees">
                                    <button type="button" class="btn btn-success">Employees</button>
                                </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>