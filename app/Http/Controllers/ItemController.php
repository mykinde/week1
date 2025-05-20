<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
    $items = Item::all();
    return view('items.index', compact('items'));
}

public function create() {
    return view('items.create');
}

public function store(Request $request) {
    Item::create($request->all());
    return redirect()->route('items.index');
}

public function show($id) {
    $item = Item::findOrFail($id);
    return view('items.show', compact('item'));
}

public function edit($id) {
    $item = Item::findOrFail($id);
    return view('items.edit', compact('item'));
}

public function update(Request $request, $id) {
    $item = Item::findOrFail($id);
    $item->update($request->all());
    return redirect()->route('items.index');
}

public function destroy($id) {
    Item::destroy($id);
    return redirect()->route('items.index');
}

  public function trash() {
    $items = Item::onlyTrashed();
    return view('items.index', compact('items'));
}

}
