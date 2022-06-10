@extends('admindashboard')
@section('viewnew')

<div>
    <center>
        <div style="width: 80%">
          
      <table   class="table table-success table-striped" height=100 width=100>
        
       
        <thead>
          <tr>
            <th scope="col">name</th>
            <th scope="col">Date of birth</th>
            <th scope="col">Gender</th>
            <th scope="col">Email id</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($viewdata as $data)
          <tr>
            <th scope="row">{{$viewdata->firstitem()+$loop->index}}</th>
      
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
           
            <td>{{$data->date_of_birth}}</td> 
        
            <td><a href="{{route('view_userreg',$data->id)}}" class="btn btn-primary">View</a></td>
              <td><a href="{{route('upview',$edit->id)}}" class="btn btn-primary">Edit</a></td> 
          
          </tr>
              @endforeach
        </tbody>
          
         
       
      </table> 
      <div>{{$viewdata->links()}}</div>
      </div>
      </center>
      
      
      
      
</div>
@endsection