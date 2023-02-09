<?php

namespace App\Http\Controllers;
use App\Models\Coffeshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class CoffeshopController extends Controller
{


    public function index(){


        $coffeShops = DB::table('coffeshops')
            ->leftJoin('types', 'coffeshops.type_plat', '=', 'types.id')
            ->select('coffeshops.*', 'types.nom as nom_plat')->paginate(5);

         return view('coffeShops.index', compact('coffeShops'));


        ;
    }
public function welcome(){
        $menu_type_cheap = DB::table('coffeshops')
            ->select('coffeshops.*')
            ->orderBy('prix', 'asc')
            ->get()
            ->groupBy('menu_type');

         return view('welcome',[
          "breakfast"=> $menu_type_cheap["Breakfast"]["0"],
          "lunch"=>$menu_type_cheap["Lunch"]["0"],
          "dinner"=> $menu_type_cheap["Dinner"]["0"]
         ]);

}

    public function create()
    {
        $type_plat = DB::table('types')->get();

        return view('coffeShops.create', ["type_plat"=>$type_plat]);
    }

    public function store(Request $request)
    {


        // dd($request->type_plat);

        $request->validate([
            'nom' => 'required',
            // 'photo' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'type_plat'=>'required',
            'menu_type'=>'required'
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
            'type_plat' => $request->type_plat,
            'menu_type' => $request->menu_type,
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
        $type_plat = DB::table('types')->get();
        return view('coffeShops.edit',["type_plat"=>$type_plat],compact('coffeShop'));
    }

    public function update(Request $request,Coffeshop $coffeShop)
    {

        $request->validate([
            'nom' => 'required',
            'photo' => 'nullable',
            'prix' => 'required',
            'description' => 'required',
            'type_plat'=>'required',
            'menu_type'=>'required'
        ]);

        if($request->hasfile('photo')){
            $plat_image = $request->file('photo');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($plat_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $location = 'public/storage/images/';
            $last_image=$location.$img_name;
            $plat_image->move($location,$img_name);
            $coffeShop->photo = $last_image;
        }



        $coffeShop->fill([
            'nom' => $request->nom,
            'photo' => $coffeShop->photo,
            'prix' =>$request->prix,
            'description' => $request->description,
            'type_plat' => $request->type_plat,
            'menu_type' => $request->menu_type
            ])->save();



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
