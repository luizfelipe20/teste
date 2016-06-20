@include("pages/header");
	
	<div class="container">
		<form action="{{ url('edite_post/'.$posts->id) }}" method="post" enctype="multipart/form-data">
		  {!! csrf_field() !!}
		  <div class="form-group">
		    <label for="titleEdite">Title</label>
		    <input type="text" name="Title" class="form-control" id="titlePost" placeholder="Title" value="{{ $posts->Title}}" />
		  </div>
		  <div class="form-group">
		    <label for="ContentEdite">Content</label>
		    <input type="text" name="Content" class="form-control" id="contentPost"
		     placeholder="Content" value="{{$posts->Content}}" />
		  </div>
		  <div class="form-group">
		    <label for="AuthorEdite">Autor</label>
		    <input type="text" name="Author" class="form-control" id="textPost" value="{{ $posts->Author }}" />
		  </div>
		  <div class="form-group">
		    <label for="dateEdite">Data</label>
		    <input type="date" name="Date" class="form-control" id="datepost" value="{{ $posts->Date}}" />
		  </div>
		  
		  <button type="submit" class="btn btn-default">Save Change</button>
		</form>
	</div>
@include("pages/header");