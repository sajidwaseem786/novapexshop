<?php
namespace Novapex\Shop\Controllers;
use novapex\Shop\Events\createdProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use novapex\Shop\Model\Shop;

class shopController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Shop::paginate(5);
      
       return view('shopviews::show',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('shopviews::home');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

      $shop =  Shop::create([
 
     "productname"=>$request->productname.rand(),
     "stockno"=>$request->stockno.rand()
       ]);

      if($shop){
       event(new createdProduct($shop));
        return back()->with("message","Product Inserted Successfully");
    }
    else
        return back()->with("message","Product Not Inserted Successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product= Shop::findOrFail($id);
       return view('shopviews::edit',compact('product'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
// echo $request->input("productname");
        $id = $request->input("id");
        $product = Shop::findOrFail($id);
        $product->productname = $request->input("productname");
        $product->stockno=$request->input("stockno");
       $product->update();
       return redirect("shop")->with("message","product updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // dd($id);
        $product= Shop::findOrFail($id);
        $product->delete();
        return back()->with("message","product deleted");
    }
}
