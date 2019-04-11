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
        
        return view('listCustomer')->with('customers', $customers);
    }
}
