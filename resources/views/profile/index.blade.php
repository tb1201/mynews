@extends('layouts.profilefront')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="col-md-10 mx-auto">
            @foreach($posts as $post)
                <div class="row">
                    <label class="col-md-2">氏名</label>
                    <div class="col-md-10">
                        {{ Str::limit($post->name, 150) }}
                    </div>
                    <label class="col-md-2">性別</label>
                    <div class="col-md-10">
                        {{ $post->gender == 'man' ? '男' : '女' }}
                    </div>
                    <label class="col-md-2">趣味</label>
                    <div class="col-md-10">
                        {{ Str::limit($post->hobby, 150) }}
                    </div>
                    <label class="col-md-2">自己紹介</label>
                    <div class="col-md-10 break">
                        {{ Str::limit($post->introduction, 1500) }}
                    </div>
                </div>
                <hr color="#c0c0c0">
            @endforeach
        </div>
    </div>
@endsection