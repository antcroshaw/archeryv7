@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
   <div class="card-header">
       Scores
   </div>
   <div class="card-body">
    <br>
         
       
       

        <table class="table table-striped table-hover table-bordered table-responsive">
            <thead class="thead-dark">
              <tr>
                <th scope="col">
                Archer Name
                </th>
                <th scope="col">
                 Round
                </th>
                <th scope="col">
                 Score
                </th>
                <th scope="col">
                    Location
                </th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($scores as $score )
                <tr>
                    
                    <td>{{ $score->archer->name }}</td>
                    <td>{{ $score->round->name }}</td>
                    <td>{{ $score->score }}</td>
                    <td>{{ $score->location }}</td>
                    <td> <a type="button" class="btn btn-sm btn-warning " href="{{ route('Scores.edit',$score) }}">Edit</a></td>

                    <td> <form method="POST" action="{{ route('Scores.destroy', $score->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form></td>
                </tr>
                @endforeach
               
            </tbody>
        </table> 
        <div class="pagination justify-content-center">
            {{ $scores->links() }}
            </div>
       <br>
       <p><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a> | <a href="{{ route('Scores.create') }}" type="button" class="btn btn-light btn-sm">add Score + </a></p>

    </div>
</div>
</div>
</div>

@endsection


