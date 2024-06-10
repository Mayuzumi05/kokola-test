<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Plant;
use App\Models\Product;
use App\Models\PlantProduct;
use Response;
use DataTables;

class ProductController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(PlantProduct::select('*'))
                ->make(true);
        }
        return view('page.product');
    }
 
    public function store(Request $request)
    {
        $productId = $request->product_id;
 
        $product = PlantProduct::find($productId) ?? new PlantProduct();
        $product->id = $productId;
        $product->id_plant = $request->id_plant;
        $product->id_product = $request->id_product;
        $product->save();
 
        return Response::json($product);
    }
}