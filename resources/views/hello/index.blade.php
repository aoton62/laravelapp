@extends('layouts.helloapp')

@section('title', 'Index')

@section('menuber')
  @parent
  インデックスページ
@endsection

@section('content')
<p>
  <a href="/hello/add">新規追加</a>
</p>
<table>
  <tr>
    <th>Name</th>
    <th>Mail</th>
    <th>Age</th>
    <th></th>
    <th></th>
  </tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->age}}</td>
      <td><a href="/hello/edit?id={{$item->id}}">編集</a></td>
      <td><a href="/hello/del?id={{$item->id}}">削除</a></td>
    </tr>
  @endforeach
</table>
@endsection

@section('footer')
  <small>&copy;2020 aoto iwata</small>
@endsection
