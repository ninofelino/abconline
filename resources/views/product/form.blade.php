<div class="form-group {{ $errors->has('barcode') ? 'has-error' : ''}}">
   
    <label for="style" class="col-md-4 control-label">{{ 'Style' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="style" type="text" id="style" value="{{ $product->style or ''}}" >
        {!! $errors->first('style', '<p class="help-block">:message</p>') !!}
    </div>

    <label for="barcode" class="col-md-4 control-label">{{ 'Barcode' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="barcode" type="text" id="barcode" value="{{ $product->barcode or ''}}" >
        {!! $errors->first('barcode', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="col-md-4 control-label">{{ 'Category' }}</label>
    <div class="col-md-6">
        <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"sepatu":"Sepatu","tas":"Tas","fasion":"Fashion"}', true) as $optionKey => $optionValue)

   
        <option value="{{ $optionKey }}" {{ (isset($product->category) && $product->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gambar') ? 'has-error' : ''}}">
    <label for="gambar" class="col-md-4 control-label">{{ 'Gambar' }}</label>
    <div class="col-md-6">
       <?php
         echo DNS1D::getBarcodeHTML("4445645656", "C39");
       ?>
        <input class="form-control" name="gambar" type="file" id="gambar" onchange="readURL(this);"  value="{{ $product->gambar or ''}}" >
        {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
