@extends('admindashboard')
@section('approve')



<div style="width: 50%">
<div class="mb-3">
<form action="{{route('approve')}}" method="POST">
    @csrf
    <table style="color: royalblue">
     <input type="hidden" name="id" value="{{$viewreg->id}}">
     <tr>
  <td> <label for="formGroupExampleInput" class="form-label">Name:</td> <td>{{$viewreg->name}} <br></td></tr>
   <tr> <td><label for="formGroupExampleInput" class="form-label">DOB:</td><td>{{$viewreg->date_of_birth}}<br></td></tr>
    <tr> <td> <label for="formGroupExampleInput" class="form-label">gender:</td><td>{{$viewreg->gender}} <br></td></tr>
      <tr> <td> <label for="formGroupExampleInput" class="form-label">Qualification:</td><td>{{$viewreg->qualification}} <br></td></tr>
   <tr> <td> <label for="formGroupExampleInput" class="form-label">Hobbies:</td><td>{{$viewreg->hobbies}} <br></td></tr>
  <tr> <td>  <label for="formGroupExampleInput" class="form-label">Email:</td><td>{{$viewreg->email}} <br></td></tr>
   <tr> <td><label for="formGroupExampleInput" class="form-label">Myself:</td><td>{{$viewreg->myself}} <br></td></tr>
  <tr> <td> <label for="formGroupExampleInput" class="form-label">Photo:</td><td>{{$viewreg->image}} <br></td></tr>     <tr> <td> <label for="formGroupExampleInput" class="form-label">Password:</td><td>{{$viewreg->password}} <br></td></tr>
  <tr><td><button type="submit" class="btn btn-primary btn-block" name="approve" >Approve</button></td><td><button type="submit" class="btn btn-primary btn-block" name="cancel" >Reject</button></td> </tr>

</table>
    </form>
    
    
    
    
    

</div>
</div>
@endsection