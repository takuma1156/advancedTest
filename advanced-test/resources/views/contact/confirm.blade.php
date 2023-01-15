@extends('layouts.default')

<style>

</style>

@section('content')
<h2>内容確認</h2>

<form action="/index/thanks" method="name">
  @csrf

  <label>お名前</label>
  {{$items['fullname']}}
  <input type="hidden" name="fullname" value="{{$items['fullname']}}">
  
  <label>性別</label>
  {{$items['gender']}}
  <input type="hidden" name="fullname" value="{{$items['gender']}}">
  
  <label>メールアドレス</label>
  {{$items['email']}}
  <input type="hidden" name="fullname" value="{{$items['email']}}">
  
  <label>郵便番号</label>
  {{$items['postcode']}}
  <input type="hidden" name="fullname" value="{{$items['postcode']}}">
  
  <label>住所</label>
  {{$items['address']}}
  <input type="hidden" name="fullname" value="{{$items['address']}}">
  
  <label>建物名</label>
  {{$items['building_name']}}
  <input type="hidden" name="fullname" value="{{$items['building_name']}}">
  
  <label>ご意見</label>
  {{$items['option']}}
  <input type="hidden" name="fullname" value="{{$items['option']}}">
  
  <input class="submit" type="submit" value="送信">
  <a href="{{route('contact.index')}}">修正する</a>

</form>
@endsection

