@extends('layouts.admin')

@section('title','ニュースの編集')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 mx auto">
			<h2>ニュース編集</h2>
			<form class="" action="{{action('Admin\NewsController@update')}}" method="post" enctype="multipart/form-data">
				@if(count($errors)>0)
				<ul>
					@foreach($errors->all()as $e)
					<li>{{$e}}</li>
					@endforeach
				</ul>
				@endif
				<div class="form-group row">
					<label class="col-md-2" for="title">タイトル</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="title" value="{{$news_form->title}}">

					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2" for="body">本文</label>
					<div class="col-md-10">
						<textarea name="body" class="form-control" rows="20" cols="80">{{$news_form->body}}</textarea>
					</div>
				</div>

				<div class="form-group row">
						<label class="col-md-2" for="image">画像</label>
						<div class="col-md-10">
							<input type="file" class="form-control-file" name="image" value="">
							<div class="form-text text-info">
								設定中: {{$news_form->image_path}}
							</div>
							<div class="form-check">
								<label class="form-check-label" for="remove">
									<input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
								</label>
							</div>
						</div>
				</div>
				<div class="form-group row">
					<div class="col-md-10">
						<input type="hidden" name="id" value="{{$news_form->id}}">
						{{csrf_field()}}
						<input type="submit" class="btn btn-primary" name="" value="更新">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
