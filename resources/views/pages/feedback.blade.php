@extends('layouts.main')

@section('title', 'Отзывы')

@section('content')

<h3>All Feedback</h3>
@if (session('successMsg'))
<div class="alert alert-success" role="alert">
  {{ session('successMsg') }}
</div>
@endif


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Дата</th>
        <th scope="col">Email</th>
        <th scope="col">Отзыв</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($feedback as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ date('d.m.Y', time($post->created_at)) }}</td>
                <td>{{ $post->email }}</td>
                <td><a href="{{ route('feedback.show', $post) }}">{{Str::limit($post->message, 10)}}</a></td>
            </tr>   
        @endforeach

    </tbody>
  </table>
@endsection