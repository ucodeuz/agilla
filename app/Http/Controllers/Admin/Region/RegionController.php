<?php

namespace App\Http\Controllers\Admin\Region;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Region;
use Gate;
class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Region $region)
    {
        $regionsTypeAll = $region->type()->get();
        $cityAll = null;
        $region = $region->newQuery();
        if ($request->has('type') && $request->has('province') && !$request->has('city')){
            $province = ($request->province == "all") ? null : $request->province;
            $region->where('type', $request->input('type'));
            $region->when(!is_null($province), function ($query) use ($province) {
                $query->whereParentId($province);
            });
        }
        if ($request->has('type') && $request->has('city') && $request->has('province')){
            $city = ($request->city == "all") ? null : $request->city;
            $province = ($request->province == "all") ? null : $request->province;
            $region->where('type', 3);
            $region->when(!is_null($city), function ($query) use ($city) {
                $query->whereParentId($city);
            });
            if(is_null($city)){
                $parentId = Region::whereParentId($province)->pluck('id')->toArray();
                $region->when(!is_null($province), function ($query) use ($parentId) {
                    $query->whereIn('parent_id',$parentId);
                }); 
            }
            $cityAll = Region::type(2)->when(!is_null($province), function ($query) use ($province) {
                $query->whereParentId($province);
            })->get();
        }
        if($request->has('type') && !$request->has('city') && !$request->has('province')){
            $region->type($request->input('type'));
        }
        if(!$request->has('type') && !$request->has('city') && !$request->has('province')){
            $region->type();
        }
        $regions = $region->get();
            
        return view('admin.regions.index', compact('regions','regionsTypeAll','cityAll'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){


    }


    public function type(Request $request)
    {       $parent = false;
            if($request->type && $request->id){
                $parent = true;
                $regions = Region::with('parent')->where([
                    'parent_id' => $request->id,
                    'type' => $request->type
                ])->get();
            }else{
                $parent = false;
                $regions = Region::type()->get();
            }
            $returnHTML =  view('admin.regions.actions.select',['data'=> $regions, 'type' => $parent])->render();
            return response()->json(['html'=>$returnHTML]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'name_ru' => 'required|string',
            'name_uz' => 'required|string',
            'type' => 'required',
        ]);
        $input = $request->all();
        // if($input['parent_id'] == '0' || !$input['parent_id'] ){
        $region = Region::create($input);
        return redirect()->route('regions.index')
        ->with('success', 'Region created successfully');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $region = Region::findOrFail($id);
        $returnHTML = view('admin.regions.view', ['region_view' => $region])->render();
        return response()->json(['html' => $returnHTML]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        if(!Gate::allows('isAdministrator')){
            abort(404);
        }
        $region = Region::findOrFail($id);
        $returnHTML = view('admin.regions.actions.editModal', ['region' => $region])->render();
        return response()->json(['html' => $returnHTML]);
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
        $this->validate($request,[
            'name_ru' => 'required|string',
            'name_uz' => 'required|string',
        ]);
        $region = Region::findOrFail($id)->update($request->all());
        return redirect()->route('regions.index')
        ->with('success', 'Region updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
