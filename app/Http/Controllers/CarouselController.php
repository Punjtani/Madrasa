<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarouselController extends Controller
{
    private $user;

    public function __construct()
    {
        // $this->middleware(function ($request, $next) {
        //     $this->user = Auth::user();
        //     return $next($request);
        // });
    }
    public function index()
    {
        // return $this->user;
        return view('admin.carousels.index');
    }
    public function allCarousel(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $carousels_count = Carousel::where('is_hidden', '0')->count();
        $carousels = Carousel::when($search, function ($q) use ($search) {
            $q->where('id', 'LIKE', "%$search%");
        });
        $carousels = $carousels->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $carousels_count,
            'recordsFiltered' => $carousels_count,
            'data' => $carousels,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        return view('admin.carousels.create');
    }
    public function save(Request $request)
    {
        $carousel = new Carousel;
        // $carousel->carousel_title = $request->title;
        // $carousel->carousel_description = $request->description;
        if ($request->has('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->file('image')->storeAs(
                'carousel',
                $fileName,
                'public'
            );
            $carousel->image = $fileName;
        }
        $carousel->save();
        return redirect('/carousels/index')->with('success','Carousel saved successfully.');
    }
    public function delete(Request $request, $id)
    {
        $carousel = Carousel::where('id',base64_decode($id))->first();
        $carousel->is_hidden = '1';
        $carousel->save();
        return redirect('/carousels/index')->with('msg', 'Carousel Deleted Successfully');
    }
    public function edit($id)
    {
        $carousel = Carousel::find(base64_decode($id));

        return view('admin.carousels.edit', [
            'carousel' =>  $carousel,
        ]);
    }
    public function update(Request $request)
    {
        $carousel = Carousel::find($request->id);
        // $carousel->carousel_title = $request->title;
        // $carousel->carousel_description = $request->description;
        $path = asset('/storage/carousel/');
        if($carousel->file != ''  && $carousel->file != null){
            $file_old = $path.$carousel->image;
            unlink($file_old);
       }
        if ($request->has('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->file('image')->storeAs(
                'carousel',
                $fileName,
                'public'
            );
            // $carousel->image = $fileName;
            $carousel->update(['image' => $fileName]);
        }
        
        return redirect('/carousels/index')->with('success','Carousel updated successfully.');
    }
}
