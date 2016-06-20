@include("pages/header");
	<div class="container">
		<h1>Criate Posts</h1>
		<form action="{!! url('criate_post') !!}" method="post" enctype="multipart/form-data">
		  {!! csrf_field() !!}
		  <div class="form-group">
		    <label for="Title">Titulo</label>
		    <input type="text" name="Title" class="form-control" id="titlepost" placeholder="Title">
		  </div>
		  <div class="form-group">
		    <label for="Content">Conteúdo</label>
		    <textarea rows="4" cols="50"" name="Content" class="form-control" id="contentpost"> </textarea> 
		  </div>
		  <div class="form-group">
		    <label for="Author">Autor</label>
		    <input type="text" name="Author" class="form-control" placeholder="Author" id="textpost">
		  </div>
		  <div class="form-group">
		    <label for="date">Data</label>
		    <input type="date" name="Date" class="form-control" id="datepost">
		  </div>
		  
		  <button type="submit" class="btn btn-default">Salvar</button>
		</form>
	</div>
@include("pages/header");