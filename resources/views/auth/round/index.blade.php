@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">

   <div class="card-header">
       Rounds
   </div>
   <div class="card-body">
 
     <div class="card-body px-2 ">
      @if ($message = session('message'))
      <div class="alert alert-success">
        {{ $message }}
      </div>
      @endif
  </div>
         <table class="table table-striped table-hover table-bordered table-responsive">
            <thead class="thead-dark">
              <tr>
                <th scope="col">
                Name
                </th>
                <th scope="col">
                 Location
                </th>
                <th scope="col">
                 Category
                </th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($rounds as $round )
                <tr>
                    
                    <td><a href="{{ route('Rounds.show', $round->id) }}" class="text-decoration-none text-secondary"> {{ $round->name }}</a></td>
                    <td>{{ $round->location }}</td>
                    <td>{{ $round->category->name }}</td>
                    <td><a type="button" class="btn btn-warning " href="{{ route('Rounds.edit',$round->id) }}">Edit</a>
                    </td>
                    <td> <form method="POST" onsubmit="return confirm('The round will be removed permanently. Are you sure?')" action="{{ route('Rounds.destroy', $round->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form></td>
                    
                </tr>
                @endforeach
            </tbody>
          </table> 
         <br>
         <p><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
           | <a href="{{ route('Rounds.create') }}" type="button" class="btn btn-light btn-sm">add Round + </a></p>

        </div>
</div>
</div>
</div>

@endsection
