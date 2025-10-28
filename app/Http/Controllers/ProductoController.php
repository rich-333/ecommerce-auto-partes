<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Carrito;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function homeProducts() 
    {
        $productosConDescuento  = Producto::with(['marca', 'imagenes', 'descuentos', 'calificaciones'])
            ->whereHas('descuentos', fn($query) => $query->where('activo', true))
            ->take(4)
            ->get();

        $productosMasVendidos = Producto::with(['marca', 'imagenes', 'descuentos'])
            ->withCount(['detalles as vendidos' => function($query) {
                $query->select(DB::raw("SUM(cantidad)"));
            }])
            ->orderByDesc('vendidos')
            ->take(5)
            ->get();
        
        return view('pages.home', compact('productosConDescuento', 'productosMasVendidos'));
    }

    public function index() 
    {
        $listaProductos = Producto::with(['marca', 'imagenes', 'descuentos', 'calificaciones'])
            ->paginate(9);
        $categorias = Categoria::all();
        $marcas = Marca::all();

        return view('pages.shop', compact('listaProductos', 'categorias', 'marcas'));
    }

    public function filtrar(Request $request)
    {
        $query = Producto::query();

        if ($request->has('category')) {
            $query->whereIn('id_categoria', $request->category);
        }

        if ($request->has('brand')) {
            $query->where('id_marca', $request->brand);
        }

        if ($request->has('price')) {
            $query->where('precio', '<=', $request->price);
        }

        $productos = $query->paginate(8);

        $html = view('components.sections.product_list', [
            'listaProductos' => $productos
        ])->render();

        return response()->json(['html' => $html]);
    }

    public function detalle($id)
    {
        $producto = Producto::with(['marca', 'imagenes', 'descuentos', 'calificaciones', 'categoria'])->findOrFail($id);
        $cartItem = null;

        $productosRelacionados = Producto::where('id_categoria', $producto->id_categoria)
            ->where('id_producto', '!=', $producto->id_producto)
            ->take(4)
            ->get();
        
        if (Auth::check()) {
            $cartItem = Carrito::where('id_usuario', Auth::id())
                ->where('id_producto', $producto->id_producto)
                ->first();
        }

        return view('pages.product_details', compact('producto', 'productosRelacionados', 'cartItem'));
    }

    public function masVendidosAjax(Request $request)
    {
        $page = $request->get('page', 1);

        $productosMasVendidos = Producto::with(['marca', 'imagenes', 'descuentos'])
            ->withCount(['detalles as vendidos' => function($query) {
                $query->select(DB::raw("SUM(cantidad)"));
            }])
            ->orderByDesc('vendidos')
            ->skip(($page - 1) * 5)
            ->take(5)
            ->get();

        return response()->json([
            'html' => view('components.sections.bestseller_list', compact('productosMasVendidos'))->render()
        ]);
    }

}
