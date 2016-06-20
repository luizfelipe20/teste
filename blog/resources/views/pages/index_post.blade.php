@include("pages/header");
		
<div class="container">
  <h1>List of all Posts</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Author</th>
        <th>Date</th>
        <th>Edite</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($posts as $key => $value){ ?>
	   <tr>
      	<td>{{ $value->Title }}</td>
        <td>{{ $value->Content }}</td>
        <td>{{ $value->Author }}</td>
        <td>{{ $value->Date }}</td>
        <td><a href="{!! url('edite_post/'.$value->id) !!}" class="btn btn-primary" role="button">EDITE</a></td>
        <td><a href="{!! url('delete_post/'.$value->id) !!}" class="btn btn-danger" role="button">DELETE</a></td>

      </tr>
      <?php } ?>
      </tbody>
  </table>
  <div> 
      {!! $posts->render() !!}
  </div>
</div>
@include("pages/footer");