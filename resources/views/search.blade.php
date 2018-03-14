@extends('layouts.app')

@section('content')

<div class="container">

    <table id="example"  cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>filename</th>
                              
                                               
                <th>image</th>
                 <th>image</th>
              
            </tr>
        </thead>
       
      
     
          
    </table>

 

</div>



<script> 
$(document).ready(function() {
    $('#example').DataTable(
        { 

        "ajax":'search',
        "columns":[
       
        {"data":"filename"},{"data":"idproduct"},{"data":"idproduct"},
    
      ],
      "columnDefs": [
            {
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`.
                "render": function ( data, type, row ) {
                    return '<a href="search/'+data+'/edit"><img src="images/thumbnail/'+data+'" height="200" /></a>';

                },
                "targets": 0 // column index 
             },
             {
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`.
                "render": function ( data, type, row ) {
                    return '<a href="search/'+data+'/edit">Edit</a><br>';

                },
                "targets": 1 // column index 
             },

           

        ]
        


        }
        );
} );    
</script>

@endsection