@extends('layouts.default')
<style>
form{
	width:1000px;
	margin:0 auto;
}

.inputs{
	overflow: hidden;
	margin-bottom: 20px;
}
.label{
	float: left;
	margin-right: 20px;
	width:135px;
	padding-left: 10px;
}
.input_form{
	float: left;
	width:300px;
}
input[type="text"],
input[type="email"],
textarea{
	border: solid 1px #e0e0e0;
	border-radius:5px;
	padding:8px;
	font-size: 15px;
}
textarea{
	height: 100px;
}
.btn-area{
	text-align: center;
}
input[type="submit"]{
	background: black;
	border: none;
	color: #fff;
	font-size:15px;
	font-weight:bold;
	padding: 10px 20px;
	margin: 0 10px;
	border-radius: 10px;
}

</style>

@section('title','add')

@section('content')
  <form action="/index/confirm" method="post">
  @csrf
    <div class="inputs">
      <label class="label">お名前<span class="sub">※</span>
        <ul>
          <li><input type="text" name="fullname" value="{{old('fullname')}}"></li>
        </ul>
    </div>    
    <div class="inputs">
      <label class="label">性別<span class="sub">※</span></label>
        <ul>
          <li><input type="radio" name="gender" value="1"checked>男性</li>
          <li><input type="radio" name="gender" value="2">女性</li>
        </ul>
    </div>
    <div class="inputs">
      <label class="label">メールアドレス<span class="sub">※</span>
        <ul>
          <li><input type="text" name="email" value="{{old('email')}}"></li>
        </ul>
    </div>
    <div class="inputs">
      <label class="label">>郵便番号<span class="sub">※</span>
        <ul>
          <li>〒<input type="text" name="postcode" value="{{old('postcode')}}"></li>
        </ul>
    </div>
    <div class="inputs">
      <label class="label">住所<span class="sub">※</span>
        <ul>
          <li><input type="text" name="address" value="{{old('address')}}"></li>
        </ul>
    </div>
    <div class="inputs">
      <label class="label">建物名<span class="sub">※</span>
      <dd>
        <ul>
          <li><input type="text" name="building_name" value="{{old('building_name')}}"></li>
        </ul>
    </div>
    <div class="inputs">
      <label class="label">ご意見<span class="sub">※</span>
      <dd>
        <ul>
          <li><input type="text" maxlength="120" name="option" value="{{old('option')}}"></li>
        </ul>
    </div>

    <input class="submit" type="submit" value="確認">

@endsection
