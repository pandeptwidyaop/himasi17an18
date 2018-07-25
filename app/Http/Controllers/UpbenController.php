<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upben;
use Excel;
class UpbenController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except' => ['create','store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['datas'] = Upben::get();
        return view('upben.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("upben.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Upben::get()->last();
        if($data === null){
            $urut = 1;
        }else{
            $urut = $data['urut'] + 1;
        }

        $this->validate($request,[
            'nim' => 'required|min:9|numeric',
            'nama' => 'required',
            'telp' => 'required|numeric',
            'program_studi' => 'required | in:Sistem Informasi,Sistem Komputer,Manajemen Informatika'
        ]);

        //Upper case each first word

        $name = ucwords(strtolower($request->nama));

        $req = [
            'nim' => $request->nim,
            'urut' => $urut,
            'nama' => $name,
            'telp' => $request->telp,
            'program_studi' => $request->program_studi          
        ];

        $data = Upben::create($req);

        $data = Upben::get()->last();
        $urut = $data['urut'];
        //return redirect()->route('upben.create');
        return redirect()
			->route('upben.create') 
			->with('success', 'Nomor Pendaftaran Anda : '.$urut); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['upben'] = Upben::find($id);
        if(!$data['upben']){
            abort(404);
        }else{
            return view('upben.detail',$data);
        }   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['upben'] = Upben::find($id);
        return view('upben.edit',$data);
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
            'nim' => 'required|min:9|numeric',
            'nama' => 'required',
            'telp' => 'required|numeric',
            'program_studi' => 'required | in:Sistem Informasi,Sistem Komputer,Manajemen Informatika'
        ]);

        //Upper case each first word

        $name = ucwords(strtolower($request->nama));

        $req = [
            'nim' => $request->nim,
            'nama' => $name,
            'telp' => $request->telp,
            'program_studi' => $request->program_studi          
        ];

        $data = Upben::where('id',$id)->update($req);
        return redirect()
			->route('upben.index') 
			->with('success', 'Data updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Upben::where('id',$id)->delete();

        return redirect()
			->route('upben.index') 
			->with('success', 'Data Removed'); 
    }
    public function export(){
        $contact = Upben::select('urut','nim','nama','telp','program_studi')->get();
        return Excel::create('SI_Upben 17 Ags 18',function($excel) use($contact){
            $excel->sheet('mysheet',function($sheet) use ($contact){
                $sheet->fromArray($contact);
            });
        })->download('xls');
    }
}
