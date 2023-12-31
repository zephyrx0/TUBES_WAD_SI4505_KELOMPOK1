<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class AdminMenuController extends Controller
{
    public function index()
    {
        $datamenu = Menu::all();
        return view('adminmenu', ['datamenu' => $datamenu]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'menu_name' => 'required',
            'menu_desc' => 'required',
            'price' => 'required|numeric',
        ]);

        $menu = new Menu();
        $menu->category = $request->input('category');
        $menu->menu_name = $request->input('menu_name');
        $menu->menu_desc = $request->input('menu_desc');
        $menu->price = $request->input('price');
        $menu->save();

        return redirect()->route('adminmenu')
            ->with('success', 'Menu added successfully');
    }

    public function destroy($id)
    {
        Menu::destroy($id);

        return redirect()->route('adminmenu')
            ->with('success', 'Menu deleted successfully');
    }

    public function edit($id)
    {
        // Temukan data menu berdasarkan ID
        $menu = Menu::find($id);

        // Tampilkan formulir edit dengan data menu yang ditemukan
        return view('adminubah', compact('menu'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'menu_name' => 'required',
            'menu_desc' => 'required',
            'price' => 'required|numeric',
        ]);

        $menu = Menu::find($id);
        $menu->update([
            'category' => $request->category,
            'menu_name' => $request->menu_name,
            'menu_desc' => $request->menu_desc,
            'price' => $request->price,
        ]);

        return redirect()->route('adminmenu')->with('success', 'Menu updated successfully');
}
}