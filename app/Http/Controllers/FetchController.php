<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class FetchController extends Controller
{

    private $prevStep;

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
        $user = Auth::user();

        if(empty($user->steps)) {
            return '[""]';
        }


        // echo json_encode(
        //     [
        //         [
        //             "X-ray",
        //             "description",
        //             true
        //         ],
        //         [
        //             "test_2",
        //             "test_22",
        //             false
        //         ],
        //         [
        //             "title",
        //             "test_22",
        //             false
        //         ]
        //     ]
        // );

        $prevStep = $user->steps;

        return $prevStep;
    }

    public function fetchUser() {
        $id = $_GET['id'];

        $users = User::WHERE('id', $id)->get();
        echo json_encode($users);
    }

    public function AddStep() {
        $department = $_POST['department'];
        $status = $_POST['status'];
        $description = $_POST['description'];

        $status = strtolower($status) == "true" ? true : false;

        $steps = json_decode($this->fetchSteps());
        if ($steps == json_decode('[""]')) {
            $steps = [
                [
                    $department,
                    $description,
                    $status
                ]
            ];
        } else {
            $steps[] = [
                $department,
                $description,
                $status
            ];    
        }

        User::where('id', Auth::id())->update(['steps' => json_encode($steps)]);
        return redirect()->action('HomeController@index');
    }

    public function postSteps(Request $request) {
    
    }

    public function getSteps($id) {
        $steps = User::select('steps')->where('id', $id)->first();
        return $steps;
    }

    public function deleteSteps($id) {
        $steps = User::find($id);
        $steps->steps = null;
        $steps->save();
        return response()->json(['message' => 'Steps Deleted'], 200);
    }
}