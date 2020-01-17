<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class QuickSortController extends Controller
{
    public function post(Request $request)
    {
        $list = $request->input("list");
        $list = json_decode($list);

        return $this->quickSort($list);
    }
    private function quickSort(array $array)
    {
        if(count($array) < 2) 
        {
            return $array;
        }
        // left & right initialise 
        $left = $right = array();
        // reset — Setzt den internen Zeiger eines Arrays auf sein erstes Element
        reset($array);
        // pivot key festlegen -> key — Liefert einen Schlüssel eines Arrays
        $pivot_key = key($array);
        // array_shift — Liefert und entfernt das erste Element eines Arrays
        $pivot = array_shift($array);
        // key value durchlauf
        foreach($array as $k => $v) {
            // check if pivot is bigger than v 
            if($v < $pivot)
            {   
                $left[$k] = $v;
            }
            else
            {
                $right[$k] = $v;
            }
        }
        // merge the following -> quickSort the left , pivot and quicksort the right 
        return array_merge($this->quickSort($left), array($pivot_key => $pivot), $this->quickSort($right));
    }
}