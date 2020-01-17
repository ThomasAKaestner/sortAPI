<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BubbelSortController extends Controller
{
    public function post(Request $request)
    {
        $list = $request->input("list");
        $list = json_decode($list);
        return $this->bubbelSort($list);
    }

    private function bubbelSort(array $list)
    {   
        $comparisons= 0;
        do
        {
            $swapped = false;
            for($i = 0; $i < sizeOf($list)-1; $i++)
            {
                if($list[$i] > $list[$i+1] && isset($list[$i+1]))
                {
                    $comparisons++;
                    $temp = $list[$i];
                    $list[$i] = $list[$i+1];
                    $list[$i+1] = $temp;
                    $swapped = true;
                }
            
            }
            
        }
        while($swapped);
        $result = [
            "comparisons" => $comparisons,
            "list" => $list
        ];
        return $result;
    }
}
