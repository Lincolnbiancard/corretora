<?php

namespace App\Http\Controllers;
use App\Models\Shares;
use DB;
use Illuminate\Http\Request;

class ShareController extends Controller
{

    private $shares;

    public function __construct(Shares $shares) {
        $this->shares = $shares;
    }

    public function index()
    {
        $shares = $this->shares->all();
        
        return view('listShares')->with('shares', $shares);
    }

    public function formShare()
    {
        return view('formShare');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $this->shares->create($data);

        return redirect('share');
    }


    public function show($id)
    {
        $shares['shares'] = DB::table('shares')->where('id', $id)->first();
        return view('formUpdateShare', $shares);
    }


    public function update(Request $request, $id)
    {
        $request = $request->all();
        $shares = $this->shares->find($id);
        $shares->update($request);

        return redirect('share');
    }

    public function destroy($id)
    {
        $shares = $this->shares->find($id);
        $shares->delete();

        return redirect('share'); 
    }
}
