<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //入力フォームを表示させる※バリデーション
    public function index(Request $request)
    {
        return view('contact.index',);
    }

    //確認ページを表示させる
    public function confirm(Request $request)
    {
        $items = $request->all();
        return view('contact.confirm',['items'=>$items]);
    }

    //add.phpで入力した情報を保存する
    public function create(Request $request)
    {
        $contact = new Contact;
        $form = $request->all();
        unset($form['_token']);
        $contact->fill($form)->save();
        return redirect('/index');
    }

    //thanks画面を表示させる
    public function thanks()
    {
        return view('contact.thanks');
    }
}
