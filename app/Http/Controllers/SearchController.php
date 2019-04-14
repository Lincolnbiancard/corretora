<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use DB;

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

        // QUERY COM RELACIONAMENTO 
        $found = $this->model
            ->select('h.*', 's.name AS share_name', 'c.name AS customer_name')
            ->from('history AS h')
            ->join('shares AS s', 's.id', '=', 'h.id_share')
            ->join('customers AS c', 'c.id', '=', 'h.id_customer')
            ->where('c.name', 'LIKE', '%' . $request->search . '%')
            ->get();    
        
        return view($this->view)->with($param, $found);
    }
}
