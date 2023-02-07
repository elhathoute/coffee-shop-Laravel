<?php

namespace App\Http\Controllers;
use App\Models\Coffeshop;
use Illuminate\Http\Request;

class CoffeshopController extends Controller
{


    public function index(){

        $coffeShops = Coffeshop::orderBy('id', 'desc')->paginate(5);

        return view('coffeShops.index', compact('coffeShops'));
    }


    public function create()
    {
        return view('coffeShops.create');
    }

    public function store(Request $request)
    {

        $file = $request->file('photo');


       $file_path= $file->store('images');
        dd($file_path);

        $request->validate([
            'nom' => 'required',
            'photo' => 'required',
            'prix' => 'required',
            'description' => 'required',
        ]);


        Coffeshop::create($request->post());

        return redirect()->route('coffeShops.index')->with('success','CoffeShop has been created successfully.');
    }



    public function show(Coffeshop $coffeShop)
    {
        return view('coffeShops.show',compact('coffeShop'));
    }

    public function edit(Coffeshop $coffeShop)
    {
        return view('coffeShops.edit',compact('coffeShop'));
    }

    public function update(Request $request,Coffeshop $coffeShop)
    {
        $request->validate([
            'nom' => 'required',
            // 'photo' => 'required',
            'prix' => 'required',
            'description' => 'required',
        ]);

        $coffeShop->fill($request->post())->save();

        return redirect()->route('coffeShops.index')->with('success','CoffeShop Has Been updated successfully.');
    }

    public function destroy(Coffeshop $coffeShop)
    {
        $coffeShop->delete();
        return redirect()->route('coffeShops.index')->with('success','Company has been deleted successfully');
    }

}
