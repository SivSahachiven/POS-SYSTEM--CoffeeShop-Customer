<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['customers']=Customer::get();
        return view('index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front_create');
    }
    public function hidding()
    {
        $data['customers']=Customer::get();
        return view('front_hidding',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'company_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            //'is_hidding' => 'required'
            // 'status' => 'required',
        ]);

		$saveData = ['customer_name' => $request->customer_name,
                    'company_name' => $request->company_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'is_hidding'=>$request->is_hidding=='on'?1:0
                ];
        Customer::create($saveData);


        return redirect()->route('index')->with('success','CustomersList has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('front_edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
		$editData = Customer::find($id);
		$editDataRecord = ['customer_name' => $request->customer_name,
                        'company_name' => $request->company_name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'address' => $request->address,
                        'is_hidding'=>$request->is_hidding=='on'?1:0
                            ];

		$editData->update($editDataRecord);
        if($editData){
            return redirect()->route('index')->with('success','Customerslist has been update successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer=Customer::find($id);
        // dd($service);
        $customer->delete();
        return redirect()->route('index')->with('success','Customerslist has been deleted successfully');
    }
}
// not yet route to create page