<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function search(Request $request){

        if ($request->ajax()){

            $data=Post::where('VINumber', 'like','%'.$request->search.'%')
            ->orwhere('CarRegistratioN', 'like','%'.$request->search.'%')
            ->orwhere('CarMake', 'like','%'.$request->search.'%')
            ->orwhere('CarModel', 'like','%'.$request->search.'%')
            ->orwhere('CarMileage', 'like','%'.$request->search.'%')
            ->orwhere('CheckEngine', 'like','%'.$request->search.'%')
            ->orwhere('Lights', 'like','%'.$request->search.'%')
            ->orwhere('ParkSensor', 'like','%'.$request->search.'%')
            ->orwhere('AirSuspension', 'like','%'.$request->search.'%')
            ->orwhere('AutoTailGate', 'like','%'.$request->search.'%')
            ->orwhere('SlipDifferential', 'like','%'.$request->search.'%')->get();

            $output = '';
            if(count($data)>0){

                $output ='
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">VINumber</th>
                    <th scope="col">CarRegistration</th>
                    <th scope="col">CarMake</th>
                    <th scope="col">CarModel</th>
                    <th scope="col">CarMileage</th>
                    <th scope="col">CheckEngine</th>
                    <th scope="col">Lights</th>
                    <th scope="col">ParkSensor</th>
                    <th scope="col">AirSuspension</th>
                    <th scope="col">AutoTailGate</th>
                    <th scope="col">SlipDifferential</th>
                </tr>
                </thead>
                <tbody>';

                    foreach($data as $row){
                        $output .='
                        <tr>
                        <th scope="row">'.$row->VINumber.'</th>
                        <td>'.$row->CarRegistration.'</td>
                        <td>'.$row->CarMake.'</td>
                        <td>'.$row->CarModel.'</td>
                        <td>'.$row->CarMileage.'</td>
                        <td>'.$row->CheckEngine.'</td>
                        <td>'.$row->Lights.'</td>
                        <td>'.$row->ParkSensor.'</td>
                        <td>'.$row->AirSuspension.'</td>
                        <td>'.$row->AutoTailGate.'</td>
                        <td>'.$row->SlipDifferential.'</td>
                        </tr>
                        ';
                    }



             $output .= '
                 </tbody>
                </table>';


            }

            else{
                $output .= 'Not found';
            }

            return $output;
        }




    }


}
