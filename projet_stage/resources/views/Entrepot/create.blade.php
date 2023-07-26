@extends('base')
@section("titre")
    Liste dans l'entrepot
@endsection
@section('main')


<div class="col-md-6 mx-auto shadow p-3 ">
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
    <form method="post" action="{{ route('store') }}"  enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label for="libelle" class="form-label">Libelle : </label>
            <input value="{{old('theme')}}" type="text" name="libelle" class="form-control " id="libelle" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="adresse" class="form-label">Adresse</label>
      <input type="text"   value="{{old('adresse')}}" name="adresse" class="form-control" id="adresse">
    </div>
    <div class="mb-3">
        <label for="capacite_max" class="form-label">Capacite_max</label>
      <input type="number"   name="capacite_max" class="form-control" id="capacite_max">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
      <input type="text"   name="type" class="form-control" id="type">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @endsection

{{--    public function create()
    {
        return view('themes/create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'theme' => 'required|max:30|unique:themes',
            'niveau' => 'required|max:10',
            'photo'=>'image'
        ]); --}}