@extends('layouts.default')
@section('content')
  id
  <p>{{$tweet->tweet_id}}</p>
  username
  <p>{{$tweet->tweet_user}}</p>
  body
  <p>{{$tweet->tweet_body}}</p>
@endsection