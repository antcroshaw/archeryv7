@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
   <div class="card-header">
       Categories
   </div>

    <div class="card-body px-2 ">
     @if ($message = session('message'))
     <div class="alert alert-success">
       {{ $message }}
     </div>
     @endif
 </div>
   <div class="card-body">
         <table class="table table-striped table-hover table-bordered table-responsive">
            <thead class="thead-dark">
              <tr>
                <th scope="col">
                Category Name
                </th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category )
                <tr>
                    
                    <td>{{ $category->name }}</td>
                    <td>  <a type="button" class="btn btn-warning " href="{{ route('Categories.edit',$category->id) }}">Edit</a></td>

                    <td> <form method="POST" onsubmit="return confirm('The category will be removed permanently. Are you sure?')" action="{{ route('Categories.destroy', $category->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form></td>
                </tr>
                @endforeach
                
            </tbody>
        </table> 
       <br>
       <p><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a> | <a href="{{ route('Categories.create') }}" type="button" class="btn btn-light btn-sm">add Category + </a></p>
    </div>
</div>
</div>
</div>

@endsection
