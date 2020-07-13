@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menuber')
  @parent
  削除ページ
@endsection

@section('content')
  <form action="/hello/del" method="post">
    @csrf
    <table>
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr><th>name: </th><td>{{$form->name}}</td></tr>
      <tr><th>mail: </th><td>{{$form->mail}}</td></tr>
      <tr><th>age: </th><td>{{$form->age}}</td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
  </form>
  <p>
    <a href="/hello">戻る</a>
  </p>
@endsection

@section('footer')
  <small>&copy;2020 aoto iwata</small>
@endsection
