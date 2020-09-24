@extends('layouts.admin')

@section('title','プロフィール編集ページ')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<h2>プロフィール編集</h2>
				<form class="" action="{{action('Admin\ProfileController@update')}}" method="post" enctype="multipart/form-data">
					@if(count($errors)>0)
					<ul>
						@foreach($errors->all() as $e)
						<li>{{$e}}</li>
						@endforeach
					</ul>
					@endif
					<div class="form-group row">
						<label class="col-md-2" for="name">名前</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="name" value="{{$profile_form->name}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2" for="gender">性別</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="gender" value="{{$profile_form->gender}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2" for="hobby">趣味</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="hobby" value="{{$profile_form->hobby}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2" for="introduction">自己紹介欄</label>
						<div class="col-md-10">
							<textarea name="introduction" class="form-control" rows="2" cols="200">{{$profile_form->introduction}}</textarea>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-10">
							<input type="hidden" name="id" value="{{$profile_form->id}}">
							{{csrf_field()}}
							<input type="submit" class="btn btn-primary" name="" value="変更">
						</div>
					</div>
				</form>
				<div class="row mt-5">
					<div class="col-md-4 mx-auto">
						<h2>履歴</h2>
						<ul class="list-group">
							@if ($profile_form->_profile_histories != NULL)
								@foreach ($profile_form->_profile_histories as $profile_history)
								<li class="list-group-item">{{$profile_history->edited_at}}</li>
								@endforeach
							@endif
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
