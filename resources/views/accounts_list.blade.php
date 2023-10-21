@extends('layouts.app')

@section('content')
<li class="new_registration"><a href="{{ route('registration') }}">新規登録</a></li>
    <table class="table" id="table">
        <tr>
            <th>編集</th>
            <th>削除</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>都道府県</th>
            <th>市町村</th>
            <th>番地・アパート名</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td><a href="{{route('edit',['id' => $post->id]) }}"><button class="edit">編集</button></a></td>
            <td><form action="{{ route('destroy', ['id' => $post->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="delete">削除</button>
        </form></td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->email }}</td>
            <td>{{ $post->tel }}</td>
            <td>{{ $post->prefecture}}</td>
            <td>{{ $post->cities}}</td>
            <td>{{ $post->address}}</td>
        </tr>
        @endforeach
    </table>
@endsection