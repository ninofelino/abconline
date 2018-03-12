@extends('layouts.app')

@section('content')

<form action="{{ url('user/upload')}}" class="dropzone" id="my-awesome-dropzone">
    dropzone
</form>
<form action="/file-upload" class="dropzone">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</form>
<form action="/file-upload"
      class="dropzone"
      id="my-awesome-dropzone"></form>
 <?php
         echo Form::open(array('url' => '/fileUpload','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('image');
         echo Form::submit('Upload File');
         echo Form::close();
      ?>



@if (count($errors) > 0)

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>
@endif

{!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data')) !!}

<div class="row cancel">

    <div class="col-md-4">

        {!! Form::file('image', array('class' => 'image')) !!}

    </div>

    <div class="col-md-4">

        <button type="submit" class="btn btn-success">Create</button>

    </div>

</div>
{!! Form::close() !!}

@endsection