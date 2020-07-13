@extends('layouts.helloapp')

@section('title', 'Show')

@section('menuber')
  @parent
  詳細ページ
@endsection

@section('content')
    @csrf
  @if ($items != null)
    @foreach($items as $item)
    <table>
      <tr><th>id: </th><td>{{$item->id}}</td></tr>
      <tr><th>name: </th><td>{{$item->name}}</td></tr>
    </table>
    @endforeach
  @endif
@endsection

@section('footer')
  <small>&copy;2020 aoto iwata</small>
@endsection
