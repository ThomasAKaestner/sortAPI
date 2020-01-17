<?php

namespace App\Http\Controllers;

class SortController extends Controller
{
    public function get()
    {
        return "<h1>Sort API</h1><br>
        <ul>
            <li>Bubbel Sort API: http://localhost:8080/sort/bubble</li>
            <li>Quick Sort: http://localhost:8080/sort/quick</li>
            <li>Selection Sort API:http://localhost:8080/sort/selection</li>
            <li>Insertion Sort API: http://localhost:8080/sort/insertion</li>
            <li>Merge Sort API:http://localhost:8080/sort/merge</li>
        </ul>
        ";
    }
}