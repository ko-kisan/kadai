@extends('layouts.admin')

@section('title','プロフィール一覧')

@section('content')
	<div class="container">
		<div class="row">
			<h2>プロフィール一覧</h2>
		</div>
		 {{--新規登録ボタン--}}
		<div class="row">
			<div class="col-md-4">
				<a href="{{action('Admin\ProfileController@add')}}" role="button" class="btn btn-primary">新規プロフィール</a>
			</div>
			{{--名前による検索--}}
			<div class="col-md-8">
				<form class="" action="{{action('Admin\ProfileController@index')}}" method="get">
					<div class="form-group row">
						<label class="col-md-2" for="cond_name">名前</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="cond_name" value="{{$cond_name}}">
						</div>
						<div class="col-md-2">
							{{csrf_field()}}
							{{--検索ボタンの追加--}}
							<input type="submit" name="btn btn-primary" value="検索">
						</div>
					</div>
				</form>
			</div>
		</div>

		{{--プロフィールリスト作成--}}

		<div class="row">
			<div class="list-profile col-md-12 mx-auto">
				<div class="row">
					<table class="table table-dark">
						<thead>

						<tr>
							<th width="10%">ID</th>
							<th width="10%">名前</th>
							<th width="10%">性別</th>
							<th width="20%">趣味</th>
							<th width="40%">自己紹介</th>
							<th width="10%">操作</th>
						</tr>
					</thead>
					{{--一覧の中身--}}
					<tbody>
						@foreach($posts as $profile)
						<tr>
							<th>{{$profile->id}}</th>
							<td>{{str_limit($profile->name,100)}}</td>
							<td>{{str_limit($profile->gender,100)}}</td>
							<td>{{str_limit($profile->hobby,100)}}</td>
							<td>{{str_limit($profile->introduction,250)}}</td>
							<td>
								<div>
									<a href="{{action('Admin\ProfileController@edit',['id'=>$profile->id])}}">編集</a>

								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
@endsection
