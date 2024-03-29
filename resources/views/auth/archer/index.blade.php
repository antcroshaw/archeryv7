@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
    <div class="card-header">
        Archers
    </div>
    <div class="card-body px-2 ">
        @if ($message = session('message'))
        <div class="alert alert-success">
          {{ $message }}
        </div>
        @endif
    </div>
          <table class="table p-2 table-striped table-hover table-bordered table-responsive ">
             <thead class="thead-dark">
               <tr>
                 <th scope="col">
                 Archer Name
                 </th>
                 <th scope="col">Edit</th>
                 <th scope="col">Delete</th>
               </tr>
             </thead>
             <tbody>
                 @foreach ($archers as $archer )
                 <tr>
                     
                    <td><a href="{{ route('Archers.show', $archer->id) }}" class="text-decoration-none text-secondary"> {{ $archer->name }}</a></td>
                     <td>  <a type="button" class="btn btn-warning " href="{{ route('Archers.edit',$archer->id) }}">Edit</a></td>
 
                     <td> <form method="POST" onsubmit="return confirm('The archer will be removed permanently. Are you sure?')" action="{{ route('Archers.destroy', $archer->id) }}">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger">Delete</button>
                     </form></td>
                 </tr>
                 @endforeach
                 
             </tbody>
         </table> 
        <br>
        <p><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a> | <a href="{{ route('Archers.create') }}" type="button" class="btn btn-light btn-sm">add Archer + </a></p>

 </div>
 </div>
 </div>
 </div>
 
 @endsection
 