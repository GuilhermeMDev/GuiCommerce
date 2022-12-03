<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products')); //É uma opçao de formata ao receber os dados do model..
    }

    //Abre a pagina de editar produto
    public function edit(Product $product)
    {
//        dd($product);
        return view('product_edit', [

            'product' => $product
        ]);
    }

    //Recebe requisicao para update (PUT)
    public function update(Product $product, ProductStoreRequest $request)
    {
        $input = $request->validated();//validando la no ProductStoreRequest

        //tratamento de imagens para salvar no banco e localmente *storage/app/public/products
        if (!empty($input['cover']) && $input['cover']->isValid()) {

            $input['cover'] = $input['cover']->store('products');
//            $file = $input['cover'];
//            $path = $file->store('products');
//            $input['cover'] = $path;
        }
        $product->fill($input);
        $product->save();

        return Redirect::route('home');


    }

    //Abre a página de criar produto
    public function create()
    {
        return view('product_create');
    }

    //Recebe a requisiçao de criar (POST)
    public function store(ProductStoreRequest $request)
    {
        $input = $request->validated();
        $input['slug'] = Str::slug($input['name']); //Criando um novo item no array a cima

        //tratamento de imagens para salvar no banco e localmente *storage/app/public/products
        if (!empty($input['cover']) && $input['cover']->isValid()) {
            $file = $input['cover'];
            $path = $file->store('products');
            $input['cover'] = $path; //substituindo

        }
        Product::create($input);

        return Redirect::route('home');
    }

    public function destroy(Product $product)
    {
        if($product->cover){
            Storage::delete($product->cover);
        }

        $product->delete();

        return Redirect::route('home');
    }

    public function destroyImage(Product $product) //deletando a imagem de um produto
    {
        Storage::exists($product->cover);
        Storage::delete($product->cover);
        $product->cover = null;
        $product->save();

        return Redirect::back();
    }

}
