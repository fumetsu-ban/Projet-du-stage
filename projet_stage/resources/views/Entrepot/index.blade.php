@extends('base')
@section('titre')
    {{-- {{ $titre }} --}}
@endsection
@section('main')

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Libelle</th>
        <th>Adresse</th>
        <th>Capacite Max</th>
        <th>Type</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- Replace this part with dynamic data from your backend -->
      @foreach ($entrepots as $entrepot)
      <tr>
        <td>{{ $entrepot->id }}</td>
        <td>{{ $entrepot->libelle }}</td>
        <td>{{ $entrepot->adresse }}</td>
        <td>{{ $entrepot->capacite_max }}</td>
        <td>{{ $entrepot->type }}</td>
        <td>
          <a href="#" class="btn btn-info btn-sm">Show</a>
          <a href="#" class="btn btn-primary btn-sm">Edit</a>
          <a href="#" class="btn btn-danger btn-sm">Delete</a>
        </td>
        @endforeach
      </tr>
      
      <!-- End of dynamic data -->
    </tbody>
  </table>


@endsection