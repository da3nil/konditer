<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShopProductStoreRequest;
use App\Http\Requests\ShopProductUpdateRequest;
use App\Models\ShopCategory;
use App\Models\ShopProduct;
use Illuminate\Http\Request;

class ShopProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $columns = ['id', 'name', 'price', 'img', 'description'];

        $data = ShopProduct::with('shopCategory')->paginate(10);

        return view('admin.products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $model = new ShopProduct();

        $shopCategories = ShopCategory::all();

        return view('admin.products.create', compact('model', 'shopCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ShopProductStoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ShopProductStoreRequest $request)
    {
        $data = $request->all();

        $model = (new ShopProduct())->fill($data);

        if (empty($data['img'])) {
            $model->img = 'shop_products/food_default.png';
        } else {
//            $file = request()->file('image');
//            $file->store('toPath', ['disk' => 'my_files']);
            $model->img = $request->file('img')->store('shop_products');
        }

        $result = $model->save();

        if ($result) {
            return redirect()
                ->route('admin.products.edit', ['product' => $model->id])
                ->with(['success' => 'Успешно создано']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $model = ShopProduct::findOrFail($id);

        $shopCategories = ShopCategory::all();

        return view('admin.products.create', compact('model', 'shopCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ShopProductUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(ShopProductUpdateRequest $request, $id)
    {
        $data = $request->all();

        $model = ShopProduct::findOrFail($id);

        $model->fill($data);

        if (empty($data['img'])) {
            $model->img = 'shop_products/food_default.png';
        } else {
            $model->img = $request->file('img')->store('shop_products');
        }

        $result = $model->save();

        if ($result) {
            return redirect()
                ->route('admin.products.edit', ['product' => $model->id])
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $model = ShopProduct::findOrFail($id);

        $result = $model->delete();

        if ($result) {
            return redirect()
                ->route('admin.products.create')
                ->with(['success' => 'Успешно удалено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка удаления']);
        }
    }
}
