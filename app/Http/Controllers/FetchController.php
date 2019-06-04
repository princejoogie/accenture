<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class FetchController extends Controller
{

    public function fetchData() {
        $user = Auth::user();

        return json_encode(
            [
                "name" => $user->name,
                "email" => $user->email
            ]
        );
    }

    public function fetchSteps() {

        //connect to db
        // $user = Auth::user();

        // if(empty($user->steps)) {
        //     return '[""]';
        // }

        //return $user->steps;

        echo json_encode(
            [
                "step_1" => [
                    "X-ray",
                    "description",
                    true
                ],
                "step_2" => [
                    "test_2",
                    "test_22",
                    false
                ],
                "step_3" => [
                    "title",
                    "test_22",
                    false
                ]
            ]
        );
    }

    public function fetchUser() {
        $id = $_GET['id'];

        $users = User::WHERE('id', $id)->get();
        echo \json_encode($users);
    }

    public function AddStep() {
        $department = $_POST['department'];
        $status = $_POST['status'];
        $description = $_POST['description'];

        echo $department." | ".$status." | ".$description;
    }

}

// class Data {
//     var $datas = array(
//         "No Title",
//         "No Description",
//         false
//     );

//     function __contruct($title, $description, $finsihed) {
//         this->$datas[0] = $title;
//         this->$datas[1] = $description;
//         this->$datas[2] = $finsihed;
//     }
// }