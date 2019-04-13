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
        $customers = $this->customers->with('brokers')->get();
        
        return view('listcustomer')->with('customers', $customers);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->customers->create($data);

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
}
