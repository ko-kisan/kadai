@extends('layouts.profile')
@section('title','プロフィールページ')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<h2>プロフィールページ</h2>
			<form class="" action="{{action('Admin\ProfileController@create')}}" method="post" enctype="multipart/form-data">
				@if(count($errors)>0)
				<ul>
					@foreach($errors->all() as $e)
					<li>{{$e}}</li>
					@endforeach
				</ul>
				@endif
				<div class="form-group row">
					<label class="col-md-2" for="name">氏名</label>
					<div class="col-md-10">
						<input class="form-control"type="text" name="name" value="{{old('name')}}">
					</div>
				</div>

				<div class="form-group row">
						<label for="gender" class="col-md-2">性別</label>
						<div class="col-md-2">

							<label >	男性 <input type="radio" name="gender" value="{{old('gender')}}"></label>
						</div>
						<div class="col-md-2">
							<label for="gender">
								女性 <input type="radio" name="gender" value="{{old('gender')}}">
							</label>
						</div>
				</div>

				<div class="form-group row">
					<label for="hobby" class="col-md-2">趣味</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="hobby" value="">例；テニス・プログラミングなど
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2" for="introduction">自己紹介欄</label>
					<div class="col-md-10">
						<textarea class="form-control" name="introduction" rows="8" cols="200" placeholder="ここに記入して下さい"></textarea>
					</div>
				</div>
				{{csrf_field()}}
				<input type="submit" class="btn btn-primary" value="送信">
			</form>
		</div>
	</div>
</div>
@endsection
