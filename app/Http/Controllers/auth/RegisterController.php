<?php
namespace app\Http\Controllers\auth;
  
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;
 use RealRashid\SweetAlert\Facades\Alert;
  
 class RegisterController extends Controller
 {
     /**
      * Display a listing of the resource.
      */
     public function index()
     {
         return view('auth.register', [
             'title' => 'Register Page'
         ]);
     }
  
  
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         
     }
  
     /**
      * Store a newly created resource in storage.
      */
     public function store(Request $request)
     {
         // store data registration to table user which is name,npm,password
         $request->validate([
             'name' => 'required',
             'email' => 'required',
             'password' => 'required'
         ]);
  
         # increment id
         $id = DB::table('users')->max('id');
  
  
         # Jika NPM sudah ada yang punya maka kita harus mencegahnya agar tidak bisa register
         if(DB::table('users')->where('email', $request->email)->exists()){
             Alert::error('Error', 'email udah ada yang punya oi');
             return redirect('/registerPage');
         }
  
         // store data to table user
         DB::table('users')->insert([
             'id' => $id + 1,
             'name' => $request->name,
             'email' => $request->email,
             'password' => Hash::make($request->password)
  
         ]);
  
         
  
         return redirect('/login');
  
     }
  
     /**
      * Display the specified resource.
      */
     public function show(string $id)
     {
         //
     }
  
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(string $id)
     {
         //
     }
  
     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, string $id)
     {
         //
     }
  
     /**
      * Remove the specified resource from storage.
      */
     public function destroy(string $id)
     {
         //
     }
 }