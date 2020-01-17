<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SelectionSortController extends Controller
{
    public function post(Request $request)
    {
        $list = $request->input("list");
        $list = json_decode($list);
        return $this->selectionSort($list);
    }

    private function selectionSort(array $array)
    {
        for ($i=0; $i<count($array); $i++)
        {
            // Position des kleinsten Elements suchen
            $minpos=$i;
            for ($j=$i+1; $j<count($array); $j++)
            {
                if ($array[$j]<$array[$minpos])
                {
                    $minpos=$j;
                }
            }
                // Elemente vertauschen
            $tmp=$array[$minpos];
            $array[$minpos]=$array[$i];
            $array[$i]=$tmp;
        }
        return $array;
    }
}