@extends('admin.layouts.app')

@section('main-content')

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <div class="container-fluid">
		    <div class="row mb-2">
		      <div class="col-sm-6">
		        <h1>Text Editors</h1>
		      </div>
		      <div class="col-sm-6">
		        <ol class="breadcrumb float-sm-right">
		          <li class="breadcrumb-item"><a href="#">Admin</a></li>
		          <li class="breadcrumb-item active">Post Editor</li>
		        </ol>
		      </div>
		    </div>
		  </div><!-- /.container-fluid -->
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
			    <div class="col-md-12">
			    	<!-- general form elements -->
	           		<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Tag</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form role="form">
							<div class="card-body">
							  <div class="form-group">
							    <label for="name">Title</label>
							    <input type="text" class="form-control" name="name" id="title" placeholder="Title">
							  </div>
							  <div class="form-group">
							    <label for="slug">Slug</label>
							    <input type="text" class="form-control" id="slug" placeholder="Slug">
							  </div>
							  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
			        </div>
			        <!-- /.card -->
			    </div>
			    <!-- /.col-->
		  	</div>
			  <!-- ./row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

@endsection