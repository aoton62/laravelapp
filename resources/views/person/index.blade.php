@extends('layouts.helloapp')

@section('title', 'Index')

@section('menuber')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
  <tr><th>Data</th><tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->getData()}}</td>
    </tr>
  @endforeach
  </table>
</table>
@endsection

@section('footer')
  <small>&copy;2020 aoto iwata</small>
@endsection
