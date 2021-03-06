@extends('layouts.master')

@section('app')

<div class="nice-notice">

    @unless ($user->following->count())
        <p>{{ Lang::get('app.no_following') }}</p>
    @endunless

</div>

<ul class="users">

    @foreach($user->following as $followed)

    <li>
        <span class="avatar">
            {{ HTML::image($followed->profile->avatar_square_url) }}
        </span>
    </li>

    @endforeach

</ul>

@stop

@section('sidebar')

<div class="nice-box">

    <ul class="nice-tabs">

        <li>
            <a href="{{ URL::route('userIndex', $user->username) }}">
                {{ Lang::get('app.user_info') }}
            </a>
        </li>

        <li>
            <a href="{{ URL::route('userTopics', $user->username) }}">
                {{ Lang::get('app.user_topics') }}
            </a>
        </li>

        <li class="active">
            <a href="{{ URL::route('userFollowing', $user->username) }}">
                {{ Lang::get('app.user_following') }}
            </a>
        </li>

        <li>
            <a href="{{ URL::route('userFollowers', $user->username) }}">
                {{ Lang::get('app.user_followers') }}
            </a>
        </li>

    </ul>

</div>

@stop
