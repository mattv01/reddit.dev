{!! csrf_field() !!}
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
		<label for="title">Title:</label> 
		<input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="title">
		@if ($errors->has('title'))
			{{$errors->first('title')}}
		@endif
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
		<label for="url">URL:</label>
		<input class="form-control" type="text" name="url" value="{{ old('url') }}" placeholder="url">
		@if ($errors->has('url'))
			{{$errors->first('url')}}
		@endif
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
		<label for="content">Content:</label>
		<textarea class="form-control" name="content" rows="5" cols="40" placeholder="content">{{ old('content') }}</textarea>
	</div>
</div>