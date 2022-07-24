<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('update/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <label>Name</label></br>
        <input type="text" name="namep" id="namep" value="{{$contacts->id}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="emailp" id="emailp" value="{{$contacts->id}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="numbp" id="numbp" value="{{$contacts->id}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>