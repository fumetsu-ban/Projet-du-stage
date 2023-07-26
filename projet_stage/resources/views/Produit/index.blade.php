@extends('base')
@section('titre')
    {{ $titre }}
@endsection
@section('main')

<table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Libelle</th>
          <th>Prix</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- Replace this part with dynamic data from your backend -->
        <tr>
          <td>1</td>
          <td>Product A</td>
          <td>10.50</td>
          <td>
            <a href="#" class="btn btn-info btn-sm">Show</a>
            <a href="#" class="btn btn-primary btn-sm">Edit</a>
            <a href="#" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
        
        <!-- End of dynamic data -->
      </tbody>
    </table>

@endsection