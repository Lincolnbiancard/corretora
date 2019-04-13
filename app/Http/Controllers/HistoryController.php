<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Brokers;
use App\Models\History;
use App\Models\Shares;
use DB;

class HistoryController extends Controller
{
    private $history;
    private $customers;
    private $brokers;
    private $shares;

    public function __construct(Customers $customers, Brokers $brokers, Shares $shares, History $history) {
        $this->customers = $customers;
        $this->brokers = $brokers;
        $this->shares = $shares;
        $this->history = $history;
    }

    public function index($param = null, Request $request)
    {

        if (is_null($param)) {
            $history = $this->history->all();
        } else if (strlen($param) == 1 && !is_numeric($param)) {
            $history = $this->history
            ->where('name', 'LIKE', $param . '%');
        } 
        
        return view('listHistory')->with('history', $history);
    }

    
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request = $request->all();
        $history = $this->history->create($request);

        $history = $this->history->all();
        $shares = $this->shares->all();
        $customers = $this->customers->all();

        // Diminuir AMOUNT das AÇÔES
        foreach ($history as $h) {
            if($h->type === 'compra'){
                foreach ($shares as $share) {
                    $historic = $this->shares->update([
                        'amount'  => $share->amount -= $hmquantity
                    ]);
                    DB::commit();
                }
            }else {
                foreach ($shares as $share) {
                    $historic = $this->shares->update([
                        'amount'  => $share->amount += $h->quantity
                    ]);
                    DB::commit();
                }
            }
        }

        return redirect('formhistory');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }

    public function formHistory(){
        $history = $this->history->all();
        $shares = $this->shares->all();
        $customers = $this->customers->all();

        
        return view('formHistory')->with('shares', $shares)->with('customers', $customers);
    }

    public function search(Request $request){
        $history = $this->history
            ->where('name', 'LIKE', '%' . $request->criterio . '%')
            ->orWhere('id', $request->criterio)
            ->paginate(15);
        
        return view('listHistory', [
            'history' => $history,
            'criterio' => $request->criterio
            ])->with('history', $history)
                ->with('customers', $customers)
                ->with('brokers', $brokers);
    }

}
