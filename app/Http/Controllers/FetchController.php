<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        // $user = Auth::user();

        // if(empty($user->steps)) {
        //     return '[""]';
        // }

        // echo Hash::make("qweqweqwe");

        
        $data = json_encode(
            [
                "past" => [
                    'valOne' => [
                        'valTwo' => "tangina"
                    ]
                ],
                "present" => "tnainga"
            ]
        );

        // echo $data;
        $record = json_decode($data, true);
        dd($record);
        // $prevStep = $user->steps;

        // return $prevStep;
    }

    public function fetchUser() {
        $id = $_GET['id'];

        $users = User::WHERE('cardid', $id)->get();
        echo json_encode($users);
    }

    public function DoctorView() {
        $id = $_GET['id'];
        $data = User::find($id);
        return view('doctor')->with(
            'data', $data
        );
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

    public function fetchRecords() {
        echo json_encode(
            [
                "pastMedicalHistory" => [
                    "allergies" => [],
                    "skinDisease" => "",
                    "diabetes" => "",
                    "hepatitis" => "",
                    "hypertension" => "",
                    "others" => ""
                ],

                "familyHistory" => [
                    "bronchialAsthma" => "",
                    "hypertension" => "",
                    "hypertension" => "",
                    "tubercolosis" => "",
                    "others" => ""
                ],

                "personalAndSocialHistory" => [
                    "smoker" => [
                        "sticksPerDay" => "",
                        "packsPerYear" => ""
                    ],
                    "alcoholic" => "",
                    "medications" => []
                ],

                "hospitalizations" => "",
                "operations" => '',
                "reviewOfSystems" => [
                    "skin" => "",
                    "opthamologic" => "",
                    "cardiovascular" => "",
                    "respiratory" => "",
                    "hematology" => "",
                ]
            ]
        );
    }

    public function fetchProfile() {
        echo json_encode(
            [
                "name" => [
                    "lastName" => "",
                    "firstName" => "",
                    "middleName" => ""
                ],
                "address" => "",
                "phoneNumber" => "",
                "birthdate" => "",
                "age" => "",
                "sex" => "",
                "email" => "",
                "emergencyContact" => [
                    "name" => "",
                    "relationship" => "",
                    "phone" => "",
                ]
            ]
        );
    }
}