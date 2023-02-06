@extends('layouts.app')
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ایجاد وظیفه جدید</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">وظیفه ها</a></li>
              <li class="breadcrumb-item active">داشبورد ورژن 2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
 <div class="card card-success card-outline">
	
	<!-- /.card-header -->
	<!-- form start -->
	<form method="post" action="{{route('job.update',$job->id)}}" enctype="multipart/form-data">
		  @csrf
		  {{method_field('PATCH')}}
		<div class="card-body">
			<div class="row">
				<div class="col-lg-5">
			<div class="form-group">
				<label for="exampleInputEmail1">نام وظیفه</label>
				<input type="text" name="pr_name" class="form-control"  value="{{$job->Pr_name}}">
				<b style="color: red">{{$errors->first('pr_name')}}</b>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="form-group">
				<label for="exampleInputPassword1">نام وظیفه به انگلیسی</label>
				<input type="text"  name="en_name" class="form-control" value="{{$job->En_name}}">
				<b style="color: red">{{$errors->first('en_name')}}</b>
			</div>
		</div>
		</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">تایید</button>
				</div>
	</form>
	</div>

	</form>
	   </div><!-- /.container-fluid -->
    </section>
@endsection