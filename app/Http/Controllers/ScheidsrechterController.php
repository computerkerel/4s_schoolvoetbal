<?php

namespace App\Http\Controllers;




use App\Models\Match;
use App\Models\Scheidsrechter;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheidsrechterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scheidsrechters = User::where("role" , '=', "2")->get();




        return view('pages.scheidsrechters')
            ->with(['scheidsrechters' => $scheidsrechters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scheidsrechters = User::findOrFail($id);

        return view('admin.scheidsrechters.show')
            ->with(compact('scheidsrechters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scheidsrechters = User::findOrFail($id);

        return view('admin.scheidsrechters.edit')
            ->with(compact('scheidsrechters'));
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

        $this->validate($request, [
            'name' => 'required',

        ]);

        $scheidsrechter = User::findOrFail($id);
       /* dd($scheidsrechter);*/
        $scheidsrechter->name = $request->name;

        $scheidsrechter->save();



        return redirect()->route('scheidsrechters.index')
            ->with('success', 'scheidsrechters succesvol aangepast');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scheidsrechter = User::destroy($id);

        return redirect()->route('scheidsrechters.index')
            ->with('success', 'scheidsrechter succesvol verwijderd');
    }
}
