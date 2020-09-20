@extends('layouts.admin')
@section('title','登録済みニュースの一覧')

@section('content')
	<div class="container">
		<div class="row">
			<h2>ニュース一覧</h2>
		</div>
		<div class="row">
			<div class="col-md-4">
				<a href="{{action('Admin\NewsController@add')}}" role="button" class="btn btn-primary">新規作成</a>
			</div>
			<div class="col-md-8">
				<form class="" action="{{action('Admin\NewsController@index')}}" method="get">
					<div class="form-group row">
						<label class="col-md-2" for=""></label>
					</div>
				</form>
			</div>
		</div>
	</div>
