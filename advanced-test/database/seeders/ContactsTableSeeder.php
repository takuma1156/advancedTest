<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'fullname' => '氏家 拓馬',
            'gender' =>1,
            'email' =>'aaa@aaa',
            'postcode' => '111-1111',
            'address' => '東京嗚呼区あああ11-111',
            'building_name' => 'ビルディング1',
            'option' => 'これはテストです',
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'テスト 一郎',
            'gender' =>1,
            'email' =>'bbb@ccc',
            'postcode' => '222-2222',
            'address' => '東京嗚呼区あああ22-222',
            'building_name' => 'ビルディング2',
            'option' => 'これはテスト2です',
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'テスト 次郎',
            'gender' =>1,
            'email' =>'ccc@ccc',
            'postcode' => '333-3333',
            'address' => '東京嗚呼区あああ333-3333',
            'building_name' => 'ビルディング3',
            'option' => 'これはテスト3です',
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'テスト 花子',
            'gender' =>2,
            'email' =>'ddd@ddd',
            'postcode' => '444-4444',
            'address' => '東京嗚呼区あああ444-4444',
            'building_name' => 'ビルディング4',
            'option' => 'これはテスト4です',
        ];
        Contact::create($param);
    }
}
