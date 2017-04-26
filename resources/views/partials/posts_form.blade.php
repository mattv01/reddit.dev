{!! csrf_field() !!}
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
		<label for="title">Title:</label> 
		<input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="title">
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
		<label for="url">URL:</label>
		<input class="form-control" type="text" name="url" value="{{ old('url') }}" placeholder="url">
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
		<label for="content">Content:</label>
		<textarea class="form-control" name="content" rows="5" cols="40" value="{{ old('content') }}" placeholder="content"></textarea>
	</div>
</div>
<input type="submit" class="btn btn-default btn-success">