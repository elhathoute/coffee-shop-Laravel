<?php

namespace App\Http\Controllers;
use App\Models\Coffeshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoffeshopController extends Controller
{


    public function index(){


        $coffeShops = DB::table('coffeshops')
            ->leftJoin('types', 'coffeshops.type_plat', '=', 'types.id')
            ->select('coffeshops.*', 'types.nom as nom_plat')->paginate(5);

         return view('coffeShops.index', compact('coffeShops'));


        ;
    }


    public function create()
    {
        return view('coffeShops.create');
    }

    public function store(Request $request)
    {




        $request->validate([
            'nom' => 'required',
            // 'photo' => 'required',
            'prix' => 'required',
            'description' => 'required',
        ]);
        $plat_image = $request->file('photo');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($plat_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $location = 'public/storage/images/';
        $last_image=$location.$img_name;
        $plat_image->move($location,$img_name);
        Coffeshop::create([
            'nom' => $request->nom,
            'photo' => $last_image,
            'prix' =>$request->prix,
            'description' => $request->description,
        ]);
        // Coffeshop::create($request->post());

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
      if(isset($request->phot)){
        $plat_image = $request->file('photo');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($plat_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $location = 'public/storage/images/';
        $last_image=$location.$img_name;
        $plat_image->move($location,$img_name);

        $coffeShop->fill([
            'nom' => $request->nom,
            'photo' => $last_image,
            'prix' =>$request->prix,
            'description' => $request->description,
            ])->save();
    }else{
        $coffeShop->fill([
            'nom' => $request->nom,
            'photo' => '',
            'prix' =>$request->prix,
            'description' => $request->description,
            ])->save();
    }


        return redirect()->route('coffeShops.index')->with('success','CoffeShop Has Been updated successfully.');
    }

    public function destroy(Coffeshop $coffeShop)
    {
        $coffeShop->delete();
        return redirect()->route('coffeShops.index')->with('success','coffe_shop has been deleted successfully');
    }
// get menus

 public function menu(){
        $menus = Coffeshop::all();

        return view('menu',['menus'=>$menus]);
 }
}
