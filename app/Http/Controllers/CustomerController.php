<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Brokers;
use Illuminate\Http\Request;
use DB;


class CustomerController extends Controller
{
    private $customers;
    private $brokers;

    public function __construct(Customers $customers, Brokers $brokers) {
        $this->customers = $customers;
        $this->brokers = $brokers;
    }

    public function index()
    {
        
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->customers->create($data);

        return redirect('listcustomer');
    }


    public function show($id)
    {
        $customers['customers'] = DB::table('customers')->where('id', $id)->first();
        return view('formUpdateCustomer', $customers);
    }

    
    public function update(Request $request, $id)
    {
        $request = $request->all();
        $customers = $this->customers->find($id);
        $customers->update($request);

        return redirect('listcustomer');
    }

    public function destroy($id)
    {
        $customers = $this->customers->find($id);
        $customers->delete();

        return redirect('listcustomer');
    }

    public function formCustomerCreate() {
        
        $brokers = $this->brokers->all();
        
        return view('formCustomer')->with('brokers', $brokers);
    }

    public function listCustomer() {
        $customers = $this->customers->all();

        $brokerName = [];
        foreach ($customers as $h) {
            $brokerName[$h->id] = [];
            if (gettype($h->preferencial_broker) == 'array') {
                foreach ($h->preferencial_broker as $broker) {
                    array_push($brokerName[$h->id], Brokers::find($broker));
                }
            } else {
                array_push($brokerName[$h->id], Brokers::find($h->preferencial_broker));
            }
            
        }

        $result['customers'] = $customers;
        $result['brokerName'] = $brokerName;


        
        
        
        return view('listCustomer')->with('customers', $result);
    }
}
