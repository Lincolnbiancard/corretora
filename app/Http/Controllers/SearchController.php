<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class SearchController extends Controller
{
    public function __construct(History $history)
    {
        $this->history = $history;
    }

    public function search($param, Request $request) 
    {
        switch ($param) {
            case 'history':
                $this->model = $this->history;
                $this->view = 'listhistory';
                break;
        }

        $found = $this->model->find($request->search);
        
        return view($this->view)->with($param, $found);
    }
}
