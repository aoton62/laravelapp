@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menuber')
  @parent
  更新ページ
@endsection

@section('content')
  <form action="/hello/edit" method="post">
    @csrf
    <table>
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
      <tr><th>mail: </th><td><input type="email" name="mail" value="{{$form->mail}}"></td></tr>
      <tr><th>age: </th><td><input type="number" name="age" value="{{$form->age}}"></td></tr>
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
