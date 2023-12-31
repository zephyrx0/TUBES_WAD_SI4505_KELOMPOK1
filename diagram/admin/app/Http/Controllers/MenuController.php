<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showMenu()
    {
        return view('adminmenu');
    }

    /**

     * Display the specified resource.
     */
    public function show(MenuController $menuController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuController $menuController)
    {
        //
    }
}
