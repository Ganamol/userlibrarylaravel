@extends('admindashboard')
@section('viewbook')


  <div style="width: 80%">
    
<table class="table table-success table-striped" height=100 width=300>
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author Name</th>
      <th scope="col">Published Date</th>
      <th scope="col">Shelf No</th>
      <th scope="col">Price</th>
    
    </tr>
  </thead>
  <tbody>

    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$datas->firstitem()+$loop->index}}</th>

      <td>{{$data->b_name}}</td>
      <td>{{$data->a_name}}</td>
     
      <td>{{$data->p_date}}</td>
      <td>{{$data->shelf_no}}</td>
      <td>{{$data->price}}</td>
    {{-- <td><a href="{{route('deletebook',$data->id)}}" class="btn btn-primary">Delete</a></td>
      <td><a href="{{route('editview',$data->id)}}" class="btn btn-primary">Edit</a></td>  --}}
    
    </tr>
        @endforeach
  </tbody>
</table>
<div>{{$datas->links()}}</div>
</div>
</center>

@endsection