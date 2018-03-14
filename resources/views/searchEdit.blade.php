@extends('layouts.app')

@section('content')

<div class="container">
    Search
  
<canvas id="canvas" width="100" height="100">
    
</canvas>
 <input type="file" accept="image/*" capture="camera" />
  
  <img src="/images/thumbnail/te.jpg">
{{$data}}
<h1>Edit</h1>

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
       
        {"data":"filename"},{"data":"idproduct"},{"data":"filename"},
    
      ],
      "columnDefs": [
            {
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`.
                "render": function ( data, type, row ) {
                    return '<a href="">extends</a><img src="images/thumbnail/'+data+'" style="width=300px;height=300px;" /><button class="btn btn-primary
                    ">Edit</button>';

                },
                "targets": 0 // column index 
             }

        ]
        


        }
        );
} );    
</script>

@endsection