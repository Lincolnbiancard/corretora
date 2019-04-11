<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brokers;
use Illuminate\Support\Facades\DB;

class BrokerController extends Controller
{

    private $brokers;

    public function __construct(Brokers $brokers) {
        $this->brokers = $brokers;
    }

    public function index()
    {
        $brokers = $this->brokers->all();

        return view('listBrokers')->with('brokers', $brokers);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->brokers->create($data);

        return redirect('/');
    }

    public function show($id)
    {
        $brokers['brokers'] = DB::table('brokers')->where('id', $id)->first();
        return view('formUpdateBroker', $brokers);
    }

    public function update(Request $request, $id)
    {
        $request = $request->all();
        $brokers = $this->brokers->find($id);
        $brokers->update($request);

        return redirect('listbrokers');
    }

    public function destroy($id)
    {
        $brokers = $this->brokers->find($id);
        $brokers->delete();

        return redirect('/');
    }

    public function layout() {
        return view('layout');
    }

    public function formCreate() {
        return view('formBroker');
    }

}
