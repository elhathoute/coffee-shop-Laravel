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

        // $img=file_get_contents($request->file('photo')->getRealPath());

        // $brand_image=$request->file('photo');
        // $name_generator=hexdec(uniqid());
        // $img_ext=strtolower($brand_image->getClientOriginalExtension());
        // $img_name=$name_generator.'.'.$img_ext;
        // $up_location='public/images/';
        // $last_img=$up_location.$img_name;

        // echo $last_img;

        // $brand_image->move($up_location,$img_name);

        // echo $brand_image;
    //     $file = $request->file('photo');
    //   echo  $file;

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
