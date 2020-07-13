@extends('layouts.helloapp')

@section('title', 'Add')

@section('menuber')
  @parent
  新規作成ページ
@endsection

@section('content')
  <form action="/hello/add" method="post">
    @csrf
    <table>
      <tr><th>name: </th><td><input type="text" name="name"></td></tr>
      <tr><th>mail: </th><td><input type="email" name="mail"></td></tr>
      <tr><th>age: </th><td><input type="number" name="age"></td></tr>
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
