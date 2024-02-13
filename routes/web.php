<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;


// Route::get('/arrays',function(){ return [1,2,3,4,5]; });


// route::get('/user',function(){

    // var_dump($_GET['id']);
    // exit();

    // jodi id dekhte chawa hoi tahole request method use korte hobe \

    // return request()->id;

    // end...

//     return view('user_data.user');
// });



// route::get('/user/{user_value}/{user_id}',function($value, $id){

    // static er por sob gulo variable hisebe hobe 

//     return $value. '-' .$id ;

//     return view('user_data.user');
// });



// kono variable optional chaile .. 

// route::get('/user/{user_value}/{user_id?}',function($value, $id = null ){ 

//     return $value. '-' .$id ;

//     return view('user_data.user');
// });



Route::get('/', function () {
    return view('pages.home');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/users',function(){

    $users = User::all();

    // data filter er jonno query jvabe korte hobe
    // $users = User::where('email', 'name3@email.com')->get();

    // filter a 2 ta data dite hole array use korte hoi.
        //   $users = User::whereIn('id', [1,3])->get();
        //  $users = User::whereBetween('name',['name2','name3'])->get();

    // created er khetre 3 ta argument dite hoi
    // $users = User::where('created', '>=' , "2023-04-12" )->get();

    // 2 ta filter chaile
    // $users = User::whereIn('id',[1,3])->where('name','name3')->get();

    // asending or desending order a korte chaile
    //  $users = User::whereIn('id',[1,3])->where('name','name3')->orderBy('id','asc/desc')->get();
    
    // just 1st er 1 ta data chaile
      //  $users = User::whereIn('id',[1,3])->where('name','like', "n%")->orderBy('id','asc/desc')->first();



    // dd($users);

    return view('pages.users', compact('users'));
});

Route::get('/user_details/{id}/show',function($id){

    // $user_details = User::where('id', $id)->first();

    // shortcut form ..
    $user_details = User::findOrFail($id);

    // dd($user_details);

    return view('pages.user_details', compact('user_details'));
});
Route::get('/user_details/{id}/edit',function($id){

    $user_details = User::findOrFail($id);

    return view('pages.edit_user', compact('user_details'));
});

Route::get('/users/create',function(){

    return view('pages.create');
});

Route::post('/users/submit',function(Request $request){

    $validation = Validator::make($request->all(),[
        'name' => 'required|max:50',
        'age' => 'required',
        'phone_number' => 'required|digits_between:2,11',
        'email' => 'required|email',
        'password' => 'required|confirmed',

    ]);

    if($validation->fails()){
        return redirect('/users/create')->withErrors($validation)->withInput();
    }
    
    $user_link = new User();

    $user_link->name = $request->name;
    $user_link->age = $request->age;
    $user_link->phone_number = $request->phone_number;
    $user_link->email = $request->email;
    $user_link->password = bcrypt($request->password);
    $user_link->save();

    return redirect()->to('/users')->with('success', 'User inserted successfully');
});

Route::post('/users/update/{id}',function(Request $request, $id){

    $validation = Validator::make($request->all(),[
        'name' => 'required|max:70',
        'age' => 'required',
        'phone_number' => 'required|digits_between:1,11',
        'email' => 'required|email',
        'password' => 'required|confirmed',

    ]);

    if($validation->fails()){
        return redirect("/users/$id/edit")->withErrors($validation)->withInput();
    }

    $user_update = User::findOrFail($id);

    $user_update->name = $request->name;
    $user_update->age = $request->age;
    $user_update->phone_number = $request->phone_number;
    $user_update->email = $request->email;
    $user_update->password = bcrypt($request->password);
    $user_update->save();

    return redirect()->to('/users')->with('success', 'User updated successfully');

});

Route::post('/users/{id}/delete', function($id){

    $user = User::find($id);
    $user->delete();

    return redirect()->to('/users')->with('success', 'User Deleted Successfully');
});