<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index() 
    {
        $carrito = Carrito::with(['usuario', 'producto'])
        ->where('id_usuario', Auth::id())
        ->get();

        return view('pages.cart', compact('carrito'));
    }

    public function add(Request $request, $idProducto) 
    {
        $cantidad = $request->input('cantidad', 1);

        $cartItem = Carrito::where('id_usuario', Auth::id())
            ->where('id_producto', $idProducto)
            ->first();

        if ($cartItem) {
            $cartItem->cantidad += $cantidad;
            $cartItem->save();
            $message = 'Cantidad actualizada en el carrito';
        } else {
            Carrito::create([
                'id_usuario' => Auth::id(),
                'id_producto' => $idProducto,
                'cantidad' => $cantidad,
            ]);
            $message = 'Producto agregado al carrito';
        }

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => $message]);
        }

        return redirect()->route('carrito.index')->with('success', $message);
    }

    public function delete(Request $request, $id)
    {
        $deleted = Carrito::where('id_carrito', $id)->delete();

        if ($request->ajax()) {
            if ($deleted) {
                return response()->json(['success' => true, 'message' => 'Producto eliminado del carrito']);
            } else {
                return response()->json(['success' => false, 'message' => 'Error al eliminar el producto'], 400);
            }
        }

        return back()->with('success', 'Producto eliminado del carrito');
    }

    public function update(Request $request, $idCarrito)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1'
        ]);

        $carrito = Carrito::findOrFail($idCarrito);
        $carrito->cantidad = $request->cantidad;
        $carrito->save();

        return response()->json([
            'success' => true,
            'cantidad' => $carrito->cantidad
        ]);
    }
}
