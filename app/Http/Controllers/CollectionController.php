<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\Collectable;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'collections' => Collection::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $collection = new Collection;
        $collection->name = $request->name;
        $collection->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show', [
            'collection' => Collection::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit', [
            'collection' => Collection::find($id)
        ]);
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
        $request->validate([
            'name' => 'required'
        ]);

        $collection = Collection::find($id);
        $collection->name = $request->name;
        $collection->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collection = Collection::find($id);
        $collection->delete();

        return redirect('/');
    }

    /**
     * Show the form for creating a new subresource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createCollectable($id)
    {
        return view('add', [
            'collection' => Collection::find($id)
        ]);
    }

    /**
     * Store a newly created subresource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeCollectable(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $collectable = new Collectable;
        $collectable->collection_id = $id;
        $collectable->name = $request->name;
        $collectable->save();

        return redirect("/$id");
    }

    /**
     * Show the form for editing the specified subresource.
     *
     * @param  int  $id
     * @param  int  $collectableId
     * @return \Illuminate\Http\Response
     */
    public function editCollectable($id, $collectableId)
    {
        return view('edit-collectable', [
            'collectable' => Collectable::find($collectableId)
        ]);
    }

    /**
     * Update the specified subresource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  int  $collectableId
     * @return \Illuminate\Http\Response
     */
    public function updateCollectable(Request $request, $id, $collectableId)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $collectable = Collectable::find($collectableId);
        $collectable->name = $request->name;
        $collectable->save();

        return redirect("/$id");
    }

    /**
     * Remove the specified subresource from storage.
     *
     * @param  int  $id
     * @param  int  $collectableId
     * @return \Illuminate\Http\Response
     */
    public function destroyCollectable($id, $collectableId)
    {
        $collectable = Collectable::find($collectableId);
        $collectable->delete();

        return redirect("/$id");
    }
}
