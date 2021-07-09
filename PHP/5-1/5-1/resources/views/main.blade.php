@extends('layouts.base')

@section('title','ホーム')

@section('content')
    <div class="main_column">
        <p>つぶやこう</p>
        <div class="errorArea">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <p style="color:red;">{{ $error }}</p>
                @endforeach
            @endif
        </div>
        <div class="inputArea">
            <form action="/main" method="post">
            @csrf
            <input class="mutterInput" name="body" placeholder="いまどうしてる？"><br>
            <input class="submitBtn" type="submit" value="つぶやく">
            </form>
        </div>

        <div class="mutterList">
            @foreach ($dataList as $data)
                <div class="mutter">
                    <div class="info clearfix">
                        <p class="user_id">{{ $data->user_id }}</p>
                        <p class="date">{{ $data->created_at }}</p>
                    </div>
                    <p class="body">{{ $data->body }}</p>
                    <a href="/main/delete?id={{ $data->id }}" class="deleteBtn" style="color:red;">削除</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection