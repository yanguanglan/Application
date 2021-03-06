<?php

//Route::get('/', array('as'=>'home', 'uses'=>'TopicController@index'));

Route::get('signup', array('uses'=>'UserController@create'));

Route::post('user/store', array('uses'=>'UserController@store'));

Route::get('login', array('uses'=>'SessionController@create'));

Route::post('session/store', array('uses'=>'SessionController@store'));

Route::get('session/forgot_password', array('uses'=>'SessionController@reminderCreate'));

Route::post('session/forgot_password', array('uses'=>'SessionController@reminderStore'));

Route::get('password/reset/{token}', array('uses'=>'SessionController@resetCreate'));

Route::post('password/reset/{token}', array('uses'=>'SessionController@resetStore'));

Route::get('logout', array('uses'=>'SessionController@destroy'));

Route::get('settings', array('uses'=>'UserController@profileIndex'));

Route::get('settings/profile', array('uses'=>'UserController@profileEdit'));

Route::put('settings/profile', array('uses'=>'UserController@profileUpdate'));

Route::get('settings/password', array('uses'=>'UserController@edit'));

Route::put('settings/password', array('uses'=>'UserController@update'));

Route::get('settings/avatar', array('uses'=>'UserController@editAvatar'));

Route::post('settings/avatar', array('uses'=>'UserController@updateAvatar'));

Route::post('settings/avatar/upload', array('uses'=>'UserController@uploadAvatar'));

Route::get('node/{pretty}', array('uses'=>'NodeController@index'))->where('name', '[\-A-Za-z]+');

Route::get('notification', array('uses'=>'NotificationController@index'));

Route::put('notification/{id}', array('uses'=>'NotificationController@mark'));

Route::get('t/{id}', array('as'=>'topic', 'uses'=>'TopicController@show'))->where('id', '[0-9]+');

Route::get('topic/create', array('uses'=>'TopicController@create'));

Route::put('topic/{id}/update', array('uses'=>'TopicController@update'))->where('id', '[0-9]+');

Route::put('topic/{id}/frozen', array('uses'=>'TopicController@frozenToggle'))->where('id', '[0-9]+');

Route::delete('topic/{id}', array('uses'=>'TopicController@destroy'))->where('id', '[0-9]+');

Route::post('topic/store', array('uses'=>'TopicController@store'));

Route::get('topic/{id}', array('uses'=>'TopicController@edit'))->where('id', '[0-9]+');

Route::get('topic/{id}/count', array('uses'=>'TopicController@viewCount'))->where('id', '[0-9]+');

Route::post('topic/{id}/like', array('uses'=>'TopicController@like'))->where('id', '[0-9]+');

Route::get('u/{username}', array('as'=>'userIndex', 'uses'=>'UserController@show'));

Route::get('u/{username}/topics', array('as'=>'userTopics', 'uses'=>'UserController@show'));

Route::get('u/{username}/followers', array('as'=>'userFollowers', 'uses'=>'UserController@show'));

Route::get('u/{username}/following', array('as'=>'userFollowing', 'uses'=>'UserController@show'));

Route::get('u/{username}/replies', array('uses'=>'UserController@show'));

Route::post('reply/store', array('uses'=>'ReplyController@store'));

Route::get('reply/{id}', array('uses'=>'ReplyController@edit'));

Route::put('reply/{id}', array('uses'=>'ReplyController@update'));

Route::post('user/follow', array('uses'=>'RelationshipController@toggle'));

Route::post('user/unfollow', array('uses'=>'RelationshipController@toggle'));

Route::get('user/relationship/{username}', array('uses'=>'RelationshipController@relationship'));

// App::missing(function($exception)
// {
//     return Response::view('errors.404', array(), 404);
// });

// App::error(function($exception, $code)
// {
//     switch ($code) {
//         case '403':
//             return Response::view('errors.403', array(), 403);
//             break;

//         default:
//             return Response::view('errors.500', array(), 500);
//             break;
//     }
// });

Route::get('~master', array('as'=>'master', 'uses'=>'MasterController@index'));

Route::post('~master/node/store', array('uses'=>'MasterController@nodeStore'));

Route::get('~users', array('uses'=>'PageController@users'));

Route::get('~sites', array('uses'=>'PageController@sites'));

Route::get('about', array('uses'=>'PageController@about'));

Route::get('wiki', array('uses'=>'PageController@wiki'));

Route::get('app', function()
{
    var_dump(App::environment());
});

Route::group(array('domain'=>'ghost.nhn.io'), function()
{
    Route::get('/', 'ghost\UserController@index');
});

Route::group(array('prefix'=>'api/v1'), function()
{

});
