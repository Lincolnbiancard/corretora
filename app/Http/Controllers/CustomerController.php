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
        $customers = $this->customers->get();
        
        return view('listcustomer')->with('customers', $customers);
    }

    public function store(Request $request)
    {
        $customer = $this->customers->create($request->except('over_brokers'));
        $overBrokers = $request->over_brokers;

        $customer->overBrokers()->attach($overBrokers);

        return redirect('customer');
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

        return redirect('customer');
    }

    public function destroy($id)
    {
        $customers = $this->customers->find($id);
        $customers->delete();

        return redirect('customer');
    }

    public function formCustomerCreate() {
        
        $brokers = $this->brokers->all();
        
        return view('formCustomer')->with('brokers', $brokers);
    }

    public function csv()
    {
        return view('csv');
    }

    public function upload(Request $request)
    {
        $file = fopen($request->file('archive'), 'r');
        $customersId = [];
        $items = [];

        while (($line = fgetcsv($file)) !== FALSE) {
            foreach($line as $key => $value)
            {
                $line[$key] = utf8_encode($value);
            }
            $items[] = $line;
        }       

        $dataCostumers = array_map(function($item){
            return [
                'name' => $item[0],
                'preferencial_broker' => $item[1],
                'over_brokers' => $item[2]
            ];
        }, $items);

        foreach ($dataCostumers as $item) {
            $overBrokers = array_pop($item);

            $customer = $this->customers->create($item);
            $customer->overBrokers()->attach(explode('-', $overBrokers));

            array_push($customersId, $customer->id);
        }

        $customers = $this->customers->findMany($customersId);

        return redirect('customer')->with('newCostumers', $customers);
    }
}
