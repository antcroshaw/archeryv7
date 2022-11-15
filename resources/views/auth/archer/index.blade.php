@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
    <div class="card-header">
        Archers
    </div>
    <div class="card-body">
          <table class="table table-striped table-hover table-bordered table-responsive">
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
                     
                     <td>{{ $archer->name }}</td>
                     <td>  <a type="button" class="btn btn-warning " href="{{ route('Archers.edit',$archer->id) }}">Edit</a></td>
 
                     <td> <form method="POST" action="{{ route('Archers.destroy', $archer->id) }}">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger">Delete</button>
                     </form></td>
                 </tr>
                 @endforeach
                 
             </tbody>
         </table> 
        <br>
        <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
 </div>
 </div>
 </div>
 </div>
 
 @endsection
 