@extends('layouts.app')

@section('content')

<div class="container">
    Search
  
<canvas id="canvas" width="100" height="100"></canvas>
    <table id="example"  cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>image</th>
              
            </tr>
        </thead>
       
      
     
          
    </table>

  {!! Form::open(array('route' => 'intervention.postresizeimage','files'=>true)) !!}
        <div class="row">
        
            <div class="col-md-6">
                <br/>
                {!! Form::file('photo', array('class' => 'form-control')) !!}
            </div>
            <div class="col-md-6">
                <br/>
                <button type="submit" class="btn btn-primary">Upload Image</button>
            </div>
        </div>
    {!! Form::close() !!}

</div>



<script> 
$(document).ready(function() {
    $('#example').DataTable(
        { 

        "ajax":'search',
        "columns":[
       
        {"data":"idproduct","render":function(){return '<img src="images/01.png" height="200">        <button class="btn btn-primary">Upload</button> {!! Form::open(array('route' => 'intervention.postresizeimage','files'=>true)) !!} <div class="row"><div class="col-md-6"> <br/>
                {!! Form::file('photo', array('class' => 'form-control')) !!}
            </div>
            <div class="col-md-6">
                <br/>
                <button type="submit" class="btn btn-primary">Upload Image</button>
            </div>
        </div>
    {!! Form::close() !!}
           <button class="btn btn-primary">Photo</button>'}},
         {"data":"idproduct"},
      ]
        }
    	);
} );	
</script>

@endsection
