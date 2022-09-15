@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">
    <div class="card-body">
        <div class="pb-8">
            @if ($errors->any())
              
                <ul class="list-group list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>


        <form action="{{ route('Archers.update' , $archer->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
            <div class="mb-3">
              <label for="name" class="form-label" >Archer Name</label>
              <input type="text" class="form-control" id="name" value="{{ $archer->name }}" name="name">
            </div>
            <div class="mb-3">
                <label for="archer" class="form-label" value="{{ $archer->DOB }}">DOB</label>
               <input type="date" name="DOB">
                </select>
              </div>
              <div class="mb-3">
                <label for="sex" class="form-label">sex</label>
                <select class="form-control" id="sex" name="sex">
                  <option value="male" {{ $archer->sex === "male" ? 'selected' : '' }}>male</option>
                  <option value="female" {{ $archer->sex === "female" ? 'selected' : '' }}>female</option>
                </select>
              </div>
            
            <button type="submit" class="btn btn-outline-secondary btn-sm">Update</button>
          </form>
  <br>
  <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
    </div>
</div>
        </div></div></div>
        @endsection
