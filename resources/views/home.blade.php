<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .h1 {
            background-color: rgb(0, 0, 88);
            width: 100%;
            font-size: 30px;
            font-family: Georgia;
            text-align: center;
            font-weight: bold;
            color: white;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #04AA6D;
            color: white;
        }

        a:link {
            text-decoration: none;
        }

        a {
            color: white;
        }

        .kk {
            background-color: rgb(0, 0, 63);
            font-size: large;
            font-family: Georgia;
        }

        .mm {
            background-color: rgb(0, 143, 143);
            color: white;
            width: 40%;
            text-align: center;
            border-radius: 5px;
            font-size: 20px;
            font-family: 'Gill Sans', sans-serif;
            font-weight: bold;
        }

        .search {
            width: 500px;
            height: 40px;
            margin-bottom: 30px;
            text-align: center;
            font-size: 25px;
            font-family: Georgia;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <h1 class="h1">User Data</h1>
    <div class="container">
        <div class="card">
            <div class="card-title"></div>
            <div class="card-body">
                <div class="divbtn"></div>
                <div class="mm">{{ session('msg') }}</div>
                <br /><br />
                <form class="col-9">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="Search by Title & Author"
                            value="{{ $search }}" class="search" />

                        <button class="btn btn-outline-primary">
                            Search
                        </button>
                        <a href="{{ url('/') }}">
                            <button class="btn btn-outline-success" type="button">
                                Reset
                            </button>
                        </a>
                    </div>
                </form>
                <table id="customers">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($crudArr as $crud)
                            <tr>
                                <td>{{ $crud->id }}</td>
                                <td>{{ $crud->name }}</td>
                                <td>{{ $crud->email }}</td>
                                <td>{{ $crud->address }}</td>
                                <td>{{ $crud->phone }}</td>
                                <td>
                                    <a href="edit/{{ $crud->id }}" class="btn btn-outline-success">Edit</a>
                                    &nbsp;
                                    <a href="delete/{{ $crud->id }}" class="btn btn-outline-danger">Delete</a>
                                    &nbsp;
                                    <a href="detail/{{ $crud->id }}" class="btn btn-outline-info">View</a>
                                </td>
                                <div class=""></div>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="kk" colspan="6"><a href="add">Add Row</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
