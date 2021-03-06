@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    @if (Auth::check())
        <p>USER: {{ $user->name . ' (' . $user->email . ')' }}</p>
    @else
        <p>※ログインしていません(<a href="/login">ログイン</a> <a href="/register">登録</a>)</p>
    @endif
    <table>
        <tr>
            <th><a href="/hello?sort=name">name</a></th>
            <th><a href="/hello?sort=mail">mail</a></th>
            <th><a href="/hello?sort=age">age</a></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mail }}</td>
                <td>{{ $item->age }}</td>
            </tr>
        @endforeach
    </table>
    {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection