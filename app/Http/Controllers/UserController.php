<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $pagination = [
            "total"=>200,
            "per_page"=>10,
            "current_page"=>1,
            "last_page"=>20,
            "next_page_url"=>"http://vuetable.ratiw.net/api/users?sort=name%7Casc&per_page=10&page=2",
            "prev_page_url"=>null,
            "from"=>1,
            "to"=>10,
            "data"=>[]
        ];

        $case = [
            "id"=>'?',
            "name"=>"Abbey Sanford",
            "nickname"=>"quia",
            "email"=>"ygoldner@example.org",
            "birthdate"=>"1999-06-20",
            "gender"=>"M",
            "group_id"=>"5",
            "created_at"=>"2016-08-20 05:24:32",
            "updated_at"=>"2016-08-20 05:24:32",
            "group"=>null,
            "address"=>
                array(
                    "id"=>'?',
                    "user_id"=>"?",
                    "line1"=>"8237 Jackeline Valleys Suite 227\nSouth Stephaniafort, IL 21739-7531",
                    "line2"=>"New Caledonia",
                    "zipcode"=>"96255",
                    "mobile"=>"104-224-0578x6515",
                    "fax"=>"00982100678"
                )
        ];

        for($i=1;$i<=10;$i++){
            $case['id'] = $i;
            $case['address']['id'] = $i;
            $case['address']['user_id'] = $i;
            $pagination['data'][] = $case;
        }

        return response()->json($pagination);

    }
}
