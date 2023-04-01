<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 9 CRUD Example Tutorial</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('schools.create') }}"> Create</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>s.name</th>
                    <th> adresse</th>
                    <th> nump</th>
                    <th> fax</th>
                    <th> site</th>
                    <th> email</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schools as $school)
                    <tr>
                        <td>{{ $school->id}}</td>
                        <td>{{ $school->schoolname}}</td>
                        <td>{{ $school->schooladresse}}</td>
                        <td>{{ $school->phonenum }}</td>
                        <td>{{ $school->faxnum}}</td>
                        <td>{{ $school->website}}</td>
                        <td>{{ $school->email}}</td>
                        
                        <td>
                            <form action="{{ route('schools.destroy',$school->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('schools.edit',$school->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $schools->links() !!}
    </div>
</body>