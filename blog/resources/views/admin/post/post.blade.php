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
							<h3 class="card-title">Post</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form role="form">
							<div class="card-body">
							  <div class="form-group">
							    <label for="title">Title</label>
							    <input type="text" class="form-control" id="title" placeholder="Title">
							  </div>
							  <div class="form-group">
							    <label for="subtitle">Sub Title</label>
							    <input type="text" class="form-control" id="subtitle" placeholder="Sub Title">
							  </div>
							  <div class="form-group">
							    <label for="slug">Slug</label>
							    <input type="text" class="form-control" id="slug" placeholder="Slug">
							  </div>
							  <div class="form-group">
			                    <label for="exampleInputFile">File input</label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
			                        <label class="custom-file-label" for="image">Choose file</label>
			                      </div>
			                      <div class="input-group-append">
			                        <span class="input-group-text" id="">Upload</span>
			                      </div>
			                    </div>
			                  </div>
							  <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status">
							    <label class="form-check-label" for="exampleCheck1">Publish</label>
							  </div>
							</div>
							{{-- wsywig editor --}}
							<div class="card card-outline card-info">
						        <div class="card-header">
						          <h3 class="card-title">
						            Body
						          </h3>
						          <!-- tools box -->
						          <div class="card-tools">
						            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
						                    title="Collapse">
						              <i class="fas fa-minus"></i></button>
						          </div>
						          <!-- /. tools -->
						        </div>
						        <!-- /.card-header -->
						        <div class="card-body pad">
						          <div class="mb-3">
						            <textarea class="textarea" name="body" placeholder="Place some text here"
						                      style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
						          </div>
						        </div>
					      	</div>
							<!-- /.card-body -->
							<div class="card-footer">
							  <button type="submit" class="btn btn-primary">Submit</button>
							</div>
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