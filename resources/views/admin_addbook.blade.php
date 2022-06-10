
@extends('home')
@section('add_book')

     
           
    <form method="POST" action="{{route('savebook')}}" >
        @csrf
       <center>
    <div style="width: 50%">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Book Name</label>
        <input type="text" name="bname" class="form-control" id="formGroupExampleInput" placeholder="BookName">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Auther Name</label>
        <input type="text" name="aname" class="form-control" id="formGroupExampleInput" placeholder="AutherName">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Published Date</label>
        <input type="date" name="pdate" class="form-control" id="formGroupExampleInput2" placeholder="Publish Date">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Shelf No</label>
        <input type="text" name="shelfno" class="form-control" id="formGroupExampleInput2" placeholder="Shelf">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" id="formGroupExampleInput2" placeholder="Price">
      </div>
    <button class="btn btn-primary">Save</button>
    </div>

    
</center>


@endsection