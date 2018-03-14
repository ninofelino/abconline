@extends('layouts.app')

@section('content')


 {{ Form::open(array('url'=>'search','files'=>true)) }}
  
  <div class="row">
        
            <div class="col-md-6">
                <br/>
                {!! Form::file('photo', array('class' => 'form-control')) !!}
            </div>
            <div class="col-md-6">
                <br/>
                <button type="submit" class="btn btn-primary">Upload Image</button>
                <input type="" name="name" value="art"/>
            </div>
        </div> 

  
  {{ Form::close() }}
@endsection