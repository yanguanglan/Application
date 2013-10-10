@extends('layouts.master')

@section('app')

	<ul>
		@foreach($user->followers as $follower)
			<li><span class="mini-avatar">{{ HTML::image($follower->profile->avatar_square_url) }}</span></li>
		@endforeach
	</ul>

@stop

@section('sidebar')

	<div class="nice-box">

		<ul class="nice-tabs">
			<li><a href="{{ URL::route('userIndex', $user->username) }}">{{ Lang::get('page.user_info') }}</a></li>
			<li><a href="{{ URL::route('userTopics', $user->username) }}">{{ Lang::get('page.user_topics') }}</a></li>
			<li><a href="{{ URL::route('userFollowing', $user->username) }}">{{ Lang::get('page.user_following') }}</a></li>
			<li class="active"><a href="{{ URL::route('userFollowers', $user->username) }}">{{ Lang::get('page.user_followers') }}</a></li>
		</ul>

	</div>

@stop