<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inventory;
use Illuminate\Http\Request;

class FaanController extends Controller
{
    public function Home(Request $request)
    {

        $inventories = Inventory::paginate(10);
        $categories = Category::all();
        // dd($inventories);

        if ($request->isMethod('POST')) {
            $request->validate([
                'item' => 'required',
                'colour' => 'required',
                'area' => 'required',
                'content' => 'required',
                'category' => 'required',
                'status' => 'required',
                'date_found' => 'required',
                'time' => 'required',
            ]);

            $inventories = new Inventory();
            $inventories->item = $request->item;
            $inventories->colour = $request->colour;
            $inventories->area = $request->area;
            $inventories->content = $request->content;
            $inventories->category = $request->category;
            $inventories->status = $request->status;
            $inventories->date_found = $request->date_found;
            $inventories->time = $request->time;
            $inventories->save();
            if ($inventories->save()) {
                return redirect()->route('home')->with('success', 'Inventory added successfully');
            } else {
                return redirect()->route('home')->with('error', 'Inventory not added');
            }
        }
        return view('home', compact('inventories', 'categories'));
    }

    public function Search(Request $request)
    {
        $search = $request->input('search');
        $results = Inventory::all();


        if ($request->isMethod('post')) {
            // Search in the title and body columns from the posts table
            $results1 = Inventory::query()
                ->where('item', 'LIKE', "%{$search}%")
                ->orWhere('category', 'LIKE', "%{$search}%")
                ->get();

            $results = $results1;
            // dd($results);
            return view('home', compact('results'));
        }

        return view('home', compact('results'));
    }

    public function Category(Request $request)
    {
        $categories = Category::all();
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
            ]);
            $categories = new Category();
            $categories->name = $request->name;
            $categories->save();
            if ($categories->save()) {
                return redirect()->route('category')->with('success', 'Category added successfully');
            } else {
                return redirect()->route('category')->with('error', 'Category not added');
            }
        }
        return view('addcategory', compact('categories'));
    }
}
