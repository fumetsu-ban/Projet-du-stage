@extends('base')
@section('titre')
    {{ $titre }}
@endsection
@section('main')

<div class="col-md-10 content right-div">
    

    <div class="col-md-6 mx-auto my-5 shadow p-3 ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{ route('time_plan.store') }}"  enctype="multipart/form-data" >
            @csrf
            {{-- ['jour','heur_beg','heur_end','groupe_id'] --}}

            <div class="row">

                <div class="mb-3">
                    <label for="time_beg" class="form-label">Time start: </label>
                    <input value="00:00" type="time" name="heur_beg" class="form-control" >
                </div>
                
                <div class="mb-3">
                    <label for="time_beg" class="form-label">Time start: </label>
                    <input value="00:00" type="time" name="heur_beg" class="form-control" >
                </div>
                
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection