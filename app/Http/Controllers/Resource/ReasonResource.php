<?php

namespace App\Http\Controllers\Resource;

use App\Reason;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;


class ReasonResource extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('demo', ['only' => ['store' ,'update', 'destroy']]);
        $this->middleware('permission:cancel-reasons-list', ['only' => ['index']]);
        $this->middleware('permission:cancel-reasons-create', ['only' => ['create','store']]);
        $this->middleware('permission:cancel-reasons-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:cancel-reasons-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reasons = Reason::orderBy('created_at' , 'desc')->get();
        return view('admin.reason.index', compact('reasons'));
    }

    public function safety($id)
    {
        $service_id = $id;
        $reasons = DB::table('service_safety')->where('service_id',$id)->get();
        return view('admin.reason.safetyindex', compact('reasons','service_id'));
    }

    public function safetyinsert($id)
    {
        $service_id = $id;
        return view('admin.reason.safetycreate', compact('service_id'));
    }

    public function safetystore(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required', 
            'status' => 'required',          
        ]);

        try{
            DB::table('service_safety')->insert(
                ['title' => $request->title, 'desc' => $request->desc, 'status' =>  $request->status, 'service_id' =>  $request->service_id ]
            );

            return back()->with('flash_success', 'Tip Added');

        } 

        catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('admin.reason_msgs.reason_not_found'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reason.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'type' => 'required',
            'reason' => 'required', 
            'status' => 'required',          
        ]);

        try{
            Reason::create($request->all());
            return back()->with('flash_success', trans('admin.reason_msgs.reason_saved'));

        } 

        catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('admin.reason_msgs.reason_not_found'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reason  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return Reason::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return $e;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reason  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $reason = Reason::findOrFail($id);
            return view('admin.reason.edit',compact('reason'));
        } catch (ModelNotFoundException $e) {
            return $e;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reason  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type' => 'required',
            'reason' => 'required',
        ]);

        try {

            $reason = Reason::findOrFail($id);

            $reason->type = $request->type;
            $reason->reason = $request->reason;
            $reason->status = $request->status;           
            $reason->save();

            return redirect()->route('admin.reason.index')->with('flash_success', trans('admin.reason_msgs.reason_update'));    
        } 

        catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('admin.reason_msgs.reason_not_found'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reason  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Reason::find($id)->delete();
            return back()->with('message', trans('admin.reason_msgs.reason_delete'));
        } 
        catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('admin.reason_msgs.reason_not_found'));
        }
    }
}
