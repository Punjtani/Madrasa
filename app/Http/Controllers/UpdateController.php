<?php

namespace App\Http\Controllers;
use App\Models\Update;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UpdateController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    public function index()
    {
        // return $this->user;
        return view('admin.update.index');
    }
    public function allupdate(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $flavour_count = Update::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        })->count();
        // })->where('is_hidden', '0')->count();
        $update = Update::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        });

        // $update = $update->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();
        $update = $update->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $flavour_count,
            'recordsFiltered' => $flavour_count,
            'data' => $update,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        return view('admin.update.create');
    }
    public function save(Request $request)
    {
        $update = new Update();
        $update->title = $request->title;
        $update->save();
        return redirect('/update/index');
    }
    public function delete(Request $request, $id)
    {
        $update = Update::find(base64_decode($id));

        if ($update) {
            $update->is_hidden = '1';
            $update->save();
        }
        // return $update;
        return redirect('/update/index')->with('msg', 'update Deleted Successfully');
    }
    public function edit(Request $request, $id)
    {
        $update = Update::find(base64_decode($id));

        return view('admin.update.edit', [
            'update' =>  $update,
        ]);
    }
    public function update(Request $request)
    {
        $update = Update::find($request->id);
        $update->title = $request->title;
        $update->save();
        return redirect('/update/index');
    }
}
