@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
    	
    	@csrf

    	<div class="row">
    		<div class="col-8 offset-2">    	

    			<div class="row pb-2">
					<h1>Add new Post</h1>
				</div>	

    			<div class="form-group row">

    	            <label for="caption" class="col-form-label">Post Caption</label>

	                <input id="caption" 
	                type="text" 
	                name="caption"
	                class="form-control @error('caption') is-invalid @enderror" 
	                caption="caption" 
	                value="{{ old('caption') }}" 	                 
	                autocomplete="caption" 
	                autofocus>
	
	                @error('caption')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
    	            
    	        </div>

    	        <div class="form-group row">
    	        	<label for="image" class="col-form-label">Post Image</label>

    	        	<input type="file" class="form-control-file" id="image" name="image">

    	        	@error('image')	                    
	                    <strong>{{ $message }}</strong>	                    
	                @enderror
    	        </div>

    	        <div class="row pt-2">
    	        	
    	        	<button class="btn btn-primary">Add new Post</button>

    	        </div>
    	
    		</div>
    	</div>
    </form>
</div>
@endsection
