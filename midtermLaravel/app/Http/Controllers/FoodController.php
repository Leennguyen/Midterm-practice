<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("pages.foods.index", ["foodList"=>Food::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('pages.foods.food-create');
        return view('pages.foods.food-create', ['categories' => Category::get()]);
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
        $request->validate([
            'name'=>'required', 
            'price'=>'required',
            'img'=>'required|mimes:jpg,png,jpeg|max:2048',
        ],[
            'name.required' =>'Bạn chưa nhập tên sản phẩm',
            'price.required' =>'Bạn chưa nhập giá',
            'img.required' =>'Bạn chưa nhập ảnh',
            'img.mimes'=>'Chỉ chấp nhận files ảnh',
            'img.max' => 'Chỉ chấp nhận files ảnh dưới 2Mb'
        ]);
// handle file
        $file =$request->file('img');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file -> move(public_path('images'), $fileName);
// create a new record in DB
        $food = new Food();
        $food->name=$request->input('name');
        // $car->producer_id = $request->input('producerId');
        $food->price=$request->input('price');
        $food->idCategory=$request->input('idCategory');
        $food->img = $fileName;
        $food->save();

        return redirect()->route('foods.index')->with('alert', 'Bạn đã thêm thành công');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
        $food = Food::find($id);
        return view('pages.foods.showdetails',['food'=>$food]);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
