<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShopCategoryStoreRequest;
use App\Models\ShopCategory;
use Illuminate\Http\Request;

class ShopCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $data = ShopCategory::paginate(10);

        return view('admin.categories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $model = new ShopCategory();

        return view('admin.categories.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ShopCategoryStoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(ShopCategoryStoreRequest $request)
    {
        $data = $request->all();

        $model = (new ShopCategory())->fill($data);

        if (empty($data['img'])) {
            $model->img = 'images/food_default.png';
        } else {
//            $file = request()->file('image');
//            $file->store('toPath', ['disk' => 'my_files']);
            $model->img = 'storage/' . $request->file('img')->store('shop_categories');
        }

        $result = $model->save();

        if ($result) {
            return redirect()
                ->route('admin.categories.edit', ['category' => $model->id])
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $model = ShopCategory::findOrFail($id);

        return view('admin.categories.create', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $model = ShopCategory::findOrFail($id);

        return view('admin.categories.create', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $model = ShopCategory::findOrFail($id);

        $model->fill($data);

        if (empty($data['img'])) {
//            $model->img = 'images/food_default.png';
        } else {
            $model->img = 'storage/' . $request->file('img')->store('shop_categories');
        }

        $result = $model->save();

        if ($result) {
            return redirect()
                ->route('admin.categories.edit', ['category' => $model->id])
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
        $model = ShopCategory::findOrFail($id);

        $result = $model->delete();

        if ($result) {
            return redirect()
                ->route('admin.categories.create')
                ->with(['success' => 'Успешно удалено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка удаления']);
        }
    }
}
