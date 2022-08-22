<?php

namespace App\Http\Controllers\product;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;

use Illuminate\Http\Request;
use App\Models\Product\Category;
use App\Models\Product\SubCategory;
use App\Models\Product\Unit;
use App\Models\Product\Brand;
use App\Models\Product\BModel;
use App\Models\Product\Variations\Size;
use App\Models\Product\Variations\Color;
use App\Models\Settings\CompanyInfo;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
public function productList(){
//    $data = Product::all();
    $data = DB::table('products')
        ->join('categories','products.categoryId','=','categories.id')
        ->join('sub_categories','products.subCategoryId','=','sub_categories.id')
        ->join('units','products.unitId','=','units.id')
        ->join('brands','products.brandId','=','brands.id')
        ->join('models','products.modelId','=','models.id')
        ->join('sizes','products.sizeId','=','sizes.id')
        ->join('colors','products.colorId','=','colors.id')
        ->join('company_infos','products.businessBranchId','=','company_infos.id')
        ->select('products.*','categories.categoryName as categoryId','sub_categories.subCategoryName as subCategoryId','units.uniteName as unitId','brands.brandName as brandId','models.modelName as modelId','sizes.sizeName as sizeId','colors.colorName as colorId','company_infos.companyName as businessBranchId')
        ->get();
    return view('product.productlist',['products'=>$data]);
}
    public function getProductInformation(Request $request){
        $user = Product::where('id',$request->id)->first();
        return $user;
    }

    function pdelete(Request $request){
        Product::where('id',$request->id)->delete();
        return redirect('product-list')->with('message', 'Product Deleted Successfully');
    }

    public function addProductForm(){
    $cats = Category::all();
    $scats = SubCategory::all();
    $units = Unit::all();
    $brands = Brand::all();
    $mods = BModel::all();
    $sizes = Size::all();
    $clrs = Color::all();
    $branchs = CompanyInfo::all();
    return view('product.addproduct',['cats'=>$cats,'scats'=>$scats,'units'=>$units,'brands'=>$brands,'mods'=>$mods,'sizes'=>$sizes,'clrs'=>$clrs,'branchs'=>$branchs]);
    }
    public function addProduct(Request $req){
        $user = new Product;
        $user->productName = $req->productName;
        $user->productCode = $req->productCode;
        $user->SKU = $req->SKU;
        $user->categoryId= $req->categoryId;
        $user->subCategoryId = $req->subCategoryId;
        $user->unitId= $req->unitId;
        $user->brandId= $req->brandId;
        $user->modelId= $req->modelId;
        $user->sizeId= $req->sizeId;
        $user->colorId= $req->colorId;
        $user->length= $req->length;
        $user->height= $req->height;
        $user->width= $req->width;
        $user->businessBranchId= $req->businessBranchId;
        $user->note = $req->note;
        $user->save();
        return redirect('product-list')->with('message','New Product Created Successfully');
    }
    public function pedit(Request $req){
    $data = Product::where('id',$req->id)->first();
        $cats = Category::all();
        $scats = SubCategory::all();
        $units = Unit::all();
        $brands = Brand::all();
        $mods = BModel::all();
        $sizes = Size::all();
        $clrs = Color::all();
        $branchs = CompanyInfo::all();
        $showcat = Category::where('id',$data->categoryId)->first();
        $showscat = SubCategory::where('id',$data->subCategoryId)->first();
        $showunit = Unit::where('id',$data->unitId)->first();
        $showbrand = Brand::where('id',$data->brandId)->first();
        $showmod = BModel::where('id',$data->modelId)->first();
        $showsize = Size::where('id',$data->sizeId)->first();
        $showclr = Color::where('id',$data->colorId)->first();
        $showbranch = CompanyInfo::where('id',$data->businessBranchId)->first();
        return view('product.updateproduct',['user'=>$data,'cats'=>$cats,'scats'=>$scats,'units'=>$units,'brands'=>$brands,'mods'=>$mods,'sizes'=>$sizes,'clrs'=>$clrs,'branchs'=>$branchs,'showcat'=>$showcat,'showscat'=>$showscat,'showunit'=>$showunit,'showbrand'=>$showbrand,'showmod'=>$showmod,'showsize'=>$showsize,'showclr'=>$showclr,'showbranch'=>$showbranch]);
    }
    public function pupdate(Request $req){
        $data = Product::find($req->id);
        $data->productName = $req->productName;
        $data->productCode = $req->productCode;
        $data->SKU = $req->SKU;
        $data->categoryId= $req->categoryId;
        $data->subCategoryId = $req->subCategoryId;
        $data->unitId= $req->unitId;
        $data->brandId= $req->brandId;
        $data->modelId= $req->modelId;
        $data->sizeId= $req->sizeId;
        $data->colorId= $req->colorId;
        $data->length= $req->length;
        $data->height= $req->height;
        $data->width= $req->width;
        $data->businessBranchId= $req->businessBranchId;
        $data->note = $req->note;
        $data->save();
        return redirect('product-list')->with('message','Product Updated Successfully');
    }
    function productSearch(Request $req)
    {

        $data = DB::table('products')
            ->join('categories','products.categoryId','=','categories.id')
            ->join('sub_categories','products.subCategoryId','=','sub_categories.id')
            ->join('units','products.unitId','=','units.id')
            ->join('brands','products.brandId','=','brands.id')
            ->join('models','products.modelId','=','models.id')
            ->join('sizes','products.sizeId','=','sizes.id')
            ->join('colors','products.colorId','=','colors.id')
            ->join('company_infos','products.businessBranchId','=','company_infos.id')
            ->select('products.*','categories.categoryName as categoryId','sub_categories.subCategoryName as subCategoryId','units.uniteName as unitId','brands.brandName as brandId','models.modelName as modelId','sizes.sizeName as sizeId','colors.colorName as colorId','company_infos.companyName as businessBranchId')
            ->where('productName', 'like', '%' . $req->input('query') . '%')
            ->get();
        return view('product.searchproduct', ['searchs' => $data]);


    }
}
