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
        $user = Auth::user();
        // dd(json_decode($user->medicalRecords,true));
        
        echo $user->medicalRecords;
        // echo json_encode(
        //     [
        //         "pastMedicalHistory" => [
        //             "allergies" => [
        //                 "Milk",
        //                 "Peanut 1",
        //                 "Soy",
        //                 'Mefenamic Acid',
        //                 "Peanut 1",
        //                 "Soy",
        //                 'Mefenamic Acid'
        //             ],
        //             "skinDisease" => [
        //                 "Warts",
        //                 "Acne"
        //             ],
        //             "diabetes" => "None",
        //             "hepatitis" => "None",
        //             "hypertension" => "Present",
        //             "others" => "None"
        //         ],

        //         "familyHistory" => [
        //             "bronchialAsthma" => "None",
        //             "hypertension" => "Present",
        //             "tubercolosis" => "None",
        //             "others" => "None"
        //         ],

        //         "personalAndSocialHistory" => [
        //             "smoker" => [
        //                 "sticksPerDay" => "5 sticks",
        //                 "packsPerYear" => "73 packs"
        //             ],
        //             "alcoholic" => "Yes",
        //             "medications" => [
        //                 "none"
        //             ]
        //         ],

        //         "hospitalizations" => "None",
        //         "operations" => "None",
        //         "reviewOfSystems" => [
        //             "skin" => "Normal",
        //             "opthamologic" => "Normal",
        //             "cardiovascular" => "Weak",
        //             "respiratory" => "Weak",
        //             "hematology" => "Normal",
        //         ]
        //     ]
        // );
    }

    public function fetchProfile() {

        $user = Auth::user();
        // dd(json_decode($user->profile, true));
        echo $user->profile;
        // echo json_encode(
        //     [
        //         "name" => [
        //             "lastName" => "Juguilon",
        //             "firstName" => "Prince Carlo",
        //             "middleName" => "Padilla"
        //         ],
        //         "address" => "123 Anywhere St., ",
        //         "phoneNumber" => "09082279309",
        //         "birthdate" => "June 29 1999",
        //         "age" => "20",
        //         "sex" => "Male",
        //         "email" => "princejoogie@gmail.com",
        //         "emergencyContact" => [
        //             "name" => "Maria",
        //             "relationship" => "Mother",
        //             "phone" => "09082279308",
        //         ]
        //     ]
        // );
    }
}