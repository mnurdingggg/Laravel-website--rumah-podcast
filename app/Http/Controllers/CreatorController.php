<?php

namespace App\Http\Controllers;
use App\Models\rumahpodcast;
use Illuminate\Http\Request;
use App\Http\Requests\asucreaterequest;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class CreatorController extends Controller
{
    public function index(Request $request){ 
       
       $keyword = $request->keyword;

        $test = podcast_creator::where('Namapodcast', 'LIKE', '%'.$keyword.'%')
        ->orWhere('Judul', 'LIKE', '%'.$keyword.'%')
            ->paginate(6);
            return view('rumahpodcast.index', compact('test')) ->with('user', Auth::user());
    }
    public function dasboard(){
        return view('rumahpodcast.dasboard') ->with('user', Auth::user());
    }
    public function create(){
        return view('rumahpodcast.create');
    }
    public function store(asucreaterequest $request)
         {
             $submit = [
                 'Namapodcast' => $request->Namapodcast,
                 'Judul'=> $request->Judul,
                 'Genre'=> $request->Genre,
                 'Tanggal'=>$request->Tanggal
             ];
         
             if($request->hasFile('Foto')){
                 $foto_file = $request->file('Foto');
                 $foto_nama = $foto_file->hashName();
                 $foto_file->move(public_path('image'),$foto_nama);
         
                 $submit['Foto'] = $foto_nama;
             }
         
             rumahpodcast::create($submit);
             dd($submit);
            
             return redirect('/podcast_creator')->with('success', 'Data berhasil dibuat!');
         }

public function lihat($id)
         {
           $data=rumahpodcast::find($id);
      
           return view('lihat',compact('data'));
      
        }
        public function edit(Request $request, $id)
    {
        $rumahpodcast = rumahpodcast::find($id);
        return view('rumahpodcast.edit',compact(['podcast_creator']));
    }
    public function update($id,Request $request )
    {
        $rumahpodcast = rumahpodcast::findOrFail($id);

        $submit = [
            'Namapodcast' => $request->Namapodcast,
            'Judul' => $request->Judul,
            'Genre' => $request->Genre,
            'Tanggal' => $request->Tanggal,
        ];
    
        if ($request->hasFile('Foto')) {
            $foto_file = $request->file('Foto');
            $foto_nama = $foto_file->hashName();
            $foto_file->move(public_path('image'), $foto_nama);
    
            $submit['Foto'] = $foto_nama;
        }
    
        $rumahpodcast->update($submit);
    
        return redirect('/podcast_creator')->with('success', 'Data berhasil diupdate!');

    }
    public function download(Request $request,$Foto)
         {
            return response()->download(public_path('image/'.$Foto));
        
    {
    $cs = Foto::findOrFail($id);
    $cs->delete();

    return redirect('/podcast_creator')->with('success', 'Data dengan no tiket ' .$cs->name.' berhasil dihapus.');
    }
        }
    // function profil()
    //     {
    //         return view("rumahpodcast.profil");
    //     }
        public function storeuser (Request $request)
{
    $submit = [
        'name' => $request->name,
        'username' => $request->username,
        'password' => bcrypt($request->password),
        'level' => $request->level,
        'email' => $request->email,
    ];
    
    if ($request->hasFile('foto')) {
        $path = $request->file('foto')->store('foto', 'public');
        Log::info('Profile photo uploaded to: ' . $path); // Tambahkan log ini
        $data['foto'] = $path;
    } else {
        Log::info('No profile photo uploaded'); // Log jika tidak ada file
    }

    User::create($submit);
    
    return redirect('/login')->with('success', 'Data berhasil dibuat!');
    
    
}
        
        public function lihatuser(Request $request)
{
    $keyword =$request->keyword;

    $userdata=User::where('name','LIKE','%'.$keyword.'%')->orWhere('level','LIKE','%'.$keyword.'%')

    ->paginate(5);

    return view('rumahpodcast.datauser',compact('userdata'))->with('user', Auth::user());
}
public function indexuser(Request $request){
    $keyword = $request->keyword;

    $tiketcs = rumahpodcast::where('Namapodcast', 'LIKE', '%'.$keyword.'%')
    ->orWhere('Judul', 'LIKE', '%'.$keyword.'%')
        ->paginate(4);

//return view('user.index', compact('tiketcs'));
return view('user.index', compact('tiketcs'))->with('user', Auth::user());
}  
public function edituser($id){
    $mabar = User::find($id);
    

    
 return view('rumahpodcast.edituser',compact('mabar'))->with('user', Auth::user());
}
public function updateuser(Request $request, $id)
{
    $user = User::find($id);

    $user->name = $request->name;
    $user->username = $request->username;
    $user->level = $request->level;
    $user->email = $request->email;
    
    if($request->hasFile('foto')){
        $foto_file = $request->file('foto');
        $foto_nama = $foto_file->hashName();
        $foto_file->move(public_path('air'), $foto_nama);
    
        $user->foto = $foto_nama;
    }
    
    $user->save();
    

    return redirect('/userdata');
}
public function destroyuser($id)
    {
        $user = User::find($id);

        if($user){
            // Hapus foto jika ada
            if($user->foto){
                $foto_path = public_path('air') . '/' . $user->foto;
                if(file_exists($foto_path)){
                    unlink($foto_path);
                }
            }
        
            // Hapus user dari database
            $user->delete();
            
            return response()->json(['message' => 'User berhasil dihapus'], 200);
        } else {
            return response()->json(['message' => 'User tidak ditemukan'], 404);
        }
            
    }
    public function testing()
    {
        return view('testing');
    }

    /**
     * 
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products')->wiht('succes', 'product deleted successfully');
    }
}