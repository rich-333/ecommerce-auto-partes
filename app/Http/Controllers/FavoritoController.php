<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritoController extends Controller
{
    public function index() 
    {
        $favorito = Favorito::with(['usuario', 'producto'])
            ->where('id_usuario', Auth::id())
            ->get();

        return view('pages.favorite', compact('favorito'));
    }

    public function add($idProducto)
    {
        $producto = Producto::findOrFail($idProducto);

        $favorito = Favorito::updateOrCreate([
            'id_usuario' => Auth::id(), 
            'id_producto' => $producto->id_producto
        ]);

        if (!$favorito->wasRecentlyCreated) {
            return response()->json(['message' => 'Ya tienes este producto en tus favoritos']);
        }

        return response()->json(['message' => 'Producto agregado a favoritos']);
    }

    public function delete(Request $request, $id)
    {
        Favorito::where('id_favorito', $id)->delete();

            if ($request->ajax()) {
                return response()->json(['success' => true]);
            }

            return back()->with('success', 'Producto eliminado de favoritos');
    }
}
