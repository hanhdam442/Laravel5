@extends('layout.master')

@section('content')
<div class="main-admin" style="margin-top: 20px;">
<div class="container">
<div class="head">
	<div class="row search">
	  <div class="col-xs-6">
		<h4>Lists products</h4>
	  </div>
	  <div class="col-xs-6 head-right">
		<a href="javascript:void(0)" class="btn btn-success" role="button" data-toggle="modal" data-target="#addproduct" >Add product</a>
		<a href="javascript:void(0)" class="btn btn-danger" id="cldelete">Delete</a>
	  </div>
	</div>
</div>
<div class="table">
	<form action="{{ URL::action('ProductController@delProduct') }}" method="post" id="frdelete">
	<table class="table table-hover">
		<thead>
			<tr>
				<td><input type="checkbox" id="select_all"/></td>
				<td>ID</td>
				<td>Name</td>
				<td>Categry</td>
				<td>Price</td>
				<td>Description</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($items as $item)
				<tr>
					<td> <input type="checkbox" name="cid[]" value="{{$item->id}}"></td>
					<td data-toggle="modal" data-target="#masp{{$item->id}}">{{$item->id}}</td>
					<td data-toggle="modal" data-target="#masp{{$item->id}}">{{$item->name}}</td>
					<td data-toggle="modal" data-target="#masp{{$item->id}}">{{$item->name_cat}}</td>
					<td data-toggle="modal" data-target="#masp{{$item->id}}">{{$item->price}}</td>
					<td data-toggle="modal" data-target="#masp{{$item->id}}">{{$item->desc}}</td>
				</tr>

			<!-- Modal edit -->
<div class="modal fade in" id="masp{{$item->id}}" role="dialog">
    <div class="modal-dialog">
	<form method="post" action="{{ URL::action('ProductController@editProduct') }}" enctype="multipart/form-data">
      <div class="modal-content">
    	<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit product</h4>
        </div>
        <div class="modal-body sp">
        	<div class="row">
        		<label for="description" class="col-sm-3 control-label">Name product</label>
				<div class="col-sm-9">
					<span><input type="text" class="form-control" name="name" value="{{$item->name}}"></span>
				</div>
        	</div>
        	<div class="row">
        		<label for="description" class="col-sm-3 control-label">Category</label>
				<div class="col-sm-9">
					<select name="cat_id" class="form-control" style="width:200px">
						@foreach ($cats as $cat)
							<option value="{{$cat['id']}}" <?php if($cat['id']==$item->cat_id) echo 'selected'; ?> >{{$cat['name']}}</option>
						@endforeach
					</select>
				</div>
        	</div>
        	<div class="row">
        		<label for="description" class="col-sm-3 control-label">Price</label>
				<div class="col-sm-9">
					<span><input type="number" name="price" value="{{$item->price}}" class="form-control"></span>
				</div>
        	</div>
        	<div class="row">
        		<label for="description" class="col-sm-3 control-label">Description</label>
				<div class="col-sm-9">
					<span><input type="text" name="desc" value="{{$item->desc}}" class="form-control"></span>
				</div>
        	</div>
        </div>
        <div class="modal-footer">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="id" value="{{$item->id}}">
          <button type="submit" class="btn btn-default">Edit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cance</button>
        </div>
      </div>
	</form>
	</div>
</div>

			@endforeach
		</tbody>
	</table>
	</form>
</div>
<!-- Modal Add -->
<div class="modal fade in" id="addproduct" role="dialog">
    <div class="modal-dialog">
	<form method="post" action="{{ URL::action('ProductController@addProduct') }}" enctype="multipart/form-data">
      <div class="modal-content">
    	<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add new product</h4>
        </div>
        <div class="modal-body sp">
        	<div class="row">
        		<label for="description" class="col-sm-3 control-label">Name product</label>
				<div class="col-sm-9">
					<span><input type="text" class="form-control" name="name"></span>
				</div>
        	</div>
        	<div class="row">
        		<label for="description" class="col-sm-3 control-label">Category</label>
				<div class="col-sm-9">
					<select name="cat_id" class="form-control" style="width:200px">
						@foreach ($cats as $cat)
							<option value="{{$cat['id']}}">{{$cat['name']}}</option>
						@endforeach
					</select>
				</div>
        	</div>
        	<div class="row">
        		<label for="description" class="col-sm-3 control-label">Price</label>
				<div class="col-sm-9">
					<span><input type="number" name="price" class="form-control"></span>
				</div>
        	</div>
        	<div class="row">
        		<label for="description" class="col-sm-3 control-label">Description</label>
				<div class="col-sm-9">
					<span><input type="text" name="desc" class="form-control"></span>
				</div>
        	</div>
        </div>
        <div class="modal-footer">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn btn-default">Add new</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cance</button>
        </div>
      </div>
	</form>
	</div>
</div>
</div>
</div>
<div></div>
<script>
// Check all check box
$('#select_all').change(function() {
    var checkboxes = $(this).closest('form').find(':checkbox');
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});

$(document).ready(function($) {
	$('#cldelete').click(function(){
    	//event onclick delete	    	

    	if (confirm("Are you sure you want to delete the selected items?")) {
    		document.getElementById("frdelete").submit();
    	};
    });
});
</script>
@endsection