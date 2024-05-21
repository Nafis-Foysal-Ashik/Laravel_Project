<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;
use App\Models\User;
use App\Models\Available;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;

class taskController extends Controller
{

    public function index()
    {
        $tasks = tasks::all();
        $data=compact('tasks');
        return view("adminpage")->with($data);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'phone'=>'required',
                'mail'=>'required',
                'division'=>'required',
                'work'=>'required',
                'dueDate'=>'required'
            ]
            );
        $task = new tasks;
        $task->name=$request['name'];
        $task->phone=$request['phone'];
        $task->mail=$request['mail'];
        $task->division=$request['division'];
        $task->work=$request['work'];
        $task->dueDate=$request['dueDate'];
        $task->picture=$request->file('picture')->getClientOriginalName();
        $request->file('picture')->move('uploads/',$task->picture);
        $task->save();

        return redirect(route("homepage"));
    }

    public function delete($id)
    {
        tasks::find($id)->delete();
        return redirect(route("homepage"));
    }

    public function edit($id)
    {
        $task=tasks::find($id);
        $data=compact('task');
        return view("update")->with($data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                // 'name'=>'required',
                // 'work'=>'required',
                // 'dueDate'=>'required'

                'name'=>'required',
                'phone'=>'required',
                'mail'=>'required',
                'division'=>'required',
                'work'=>'required',
                'dueDate'=>'required'
            ]
            );
            $id=$request['id'];
        $task =tasks::find($id);
        $task->name=$request['name'];
        $task->phone=$request['phone'];
        $task->mail=$request['mail'];
        $task->division=$request['division'];
        $task->work=$request['work'];
        $task->picture=$request->file('picture')->getClientOriginalName();
        $request->file('picture')->move('uploads/',$task->picture);
        $task->dueDate=$request['dueDate'];
        $task->save();

        return redirect(route("homepage"));
    }

    public function show()
{
    $tasks = tasks::all(); // Retrieve all tasks from the database

    return view('show', compact('tasks')); // Pass tasks to the view
}

    //Auth

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function registerUser(Request $request)
    {
        $newUser = new User();
    $newUser->fullname = $request->input('fullname');
    $newUser->email = $request->input('email');
    $newUser->phone = $request->input('phone');
    $newUser->address = $request->input('address');
    $newUser->gender = $request->input('gender');
    $newUser->date_of_birth = $request->input('dob');

    if ($request->hasFile('picture')) {
        $imageName = time() . '.' . $request->file('picture')->getClientOriginalExtension();
        $request->file('picture')->move(public_path('uploads'), $imageName);
        $newUser->picture = $imageName;
    }

    $newUser->password = Hash::make($request->input('password'));
    $newUser->type = "Customer";

    if ($newUser->save()) {
        return view('login');
        // return redirect('loginUser')->with('success','Congratulations! Your account is ready');
    }
    }

    public function loginUser(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Session::flash('msg', 'Logged in Successfully');
            $tasks = tasks::all();
            return view('adminpage',compact('tasks'));
        }
        Session::flash('msg', 'Something is wrong');
        return view('login');
    }

    public function customerlogin(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Session::flash('msg', 'Logged in Successfully');
            $tasks = tasks::all();
            return view('adminpage',compact('tasks'));
        }
        Session::flash('msg', 'Something is wrong');
        return view('cutomer_login');
    }

    public function showKhulnaTasks()
{
    $tasks = tasks::where('division', 'Khulna')->get(); // Retrieve tasks with division Khulna from the database

    return view('khulna', compact('tasks')); // Pass tasks to the view
}

public function showDhakaTasks()
{
    $tasks = tasks::where('division', 'Dhaka')->get(); // Retrieve tasks with division Khulna from the database

    return view('dhaka', compact('tasks')); // Pass tasks to the view
}

public function showRajshahiTasks()
{
    $tasks = tasks::where('division', 'Rajshahi')->get(); // Retrieve tasks with division Khulna from the database

    return view('rajshahi', compact('tasks')); // Pass tasks to the view
}

public function showSylhetTasks()
{
    $tasks = tasks::where('division', 'Sylhet')->get(); // Retrieve tasks with division Khulna from the database

    return view('sylhet', compact('tasks')); // Pass tasks to the view
}

public function showChottogramTasks()
{
    $tasks = tasks::where('division', 'Chottogram')->get(); // Retrieve tasks with division Khulna from the database

    return view('chottogram', compact('tasks')); // Pass tasks to the view
}

// public function customer_register()
// {
//     return view('customer_register');
// }

public function avaiableuser()
{
    return view('avaiable');
}


// public function customerUser(Request $data)
// {
//     $newUser=new tasks();
//     $newUser->fullname=$data->input('fullname');
//     $newUser->email=$data->input('email');
//     $newUser->password=$data->input('password');
//     $newUser->type="Customer_user";
//     if($newUser->save())
//     {
//         return redirect('customer_login')->with('success','Congratulations Your Account is ready');
//     }
//     return view('customerUser');
// }

// public function cutomer_login()
// {

// }



public function showAvailable()
    {
        $availables = Available::all();
        return view('available', compact('availables'));
    }

    public function avaialable()
    {
        return view('customer_register');
    }

    public function storeAvailable(Request $request)
{
    $validatedData = $request->validate([
        'fullname'  => 'required|string',
        'email'     => 'required|string|email|unique:avaiable,email',
        'password'  => 'required|string',
        'picture'   => 'required',
        'phone'     => 'nullable|string',
        'address'   => 'nullable|string',
        'rating'    => 'nullable|string',
    ]);

    $available = new Available();
    $available->fullname = $request['fullname'];
    $available->email = $request['email'];
    $available->password = bcrypt($request['password']); // It's a good practice to hash passwords

    // Check if a picture is uploaded
    if ($request->hasFile('picture')) {
        $file = $request->file('picture');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);
        $available->picture = $filename;
    }
    $available->division = $request['division'];
    $available->work = $request['work'];

    $available->phone = $request['phone'];
    $available->address = $request['address'];
    $available->rating = $request['rating'];
    $available->save();

    return redirect()->route('available')->with('success', 'Available information created successfully!');
}

//update available
// public function updateavailable(Request $request)
//     {
//         $request->validate(
//             [
//                 // 'name'=>'required',
//                 // 'work'=>'required',
//                 // 'dueDate'=>'required'

//                 'name'=>'required',
//                 'phone'=>'required',
//                 'mail'=>'required',
//                 'division'=>'required',
//                 'work'=>'required',
//                 'dueDate'=>'required'
//             ]
//             );
//             $id=$request['id'];
//         $available =Available::find($id);
//         $available->name=$request['name'];
//         $available->phone=$request['phone'];
//         $available->mail=$request['mail'];
//         $available->division=$request['division'];
//         $available->work=$request['work'];
//         // $available->picture=$request->file('picture')->getClientOriginalName();
//         // $request->file('picture')->move('uploads/',$available->picture);
//         $available->dueDate=$request['dueDate'];
//         $available->save();

//         return redirect(route("homepage"));
//     }

    public function editavailable($id)
{
    $available = Available::find($id); // Correctly reference the model class
    $data = compact('available');
    return view("updateavailable")->with($data);
}



public function deleteavailable($id)
{
    Available ::find($id)->delete();
    return redirect(route("available"));
}



//bookint section
public function avaialablebooking()
{
    $availables = Available::all();
    return view('booking_employee', compact('availables'));
}

// public function bookNow(Request $request)
// {
//     $name = $request->input('name');
//     $email = $request->input('email');

//     // Redirect to the admin page with the data
//     return redirect()->route('available')->with(['name' => $name, 'email' => $email]);
// }

// public function bookNow(Request $request)
//     {
//         $name = $request->input('name');
//         $email = $request->input('email');

//         // Store the data in the session
//         session(['name' => $name, 'email' => $email]);

//         // Redirect to the admin page
//         return redirect()->route('availableUser');
//     }

//     public function adminPage()
//     {
//         return view('adminpage');
//     }

//message section

public function message(Request $request)
{
    $name = $request->input('name');
    $email = $request->input('email');

    // Store the data in the session
    session()->push('messages', ['name' => $name, 'email' => $email]);

    return redirect()->route('availablebookingPage');
}

public function showMessages()
{
    $messages = session('messages', []);
    return view('message', compact('messages'));
}


public function deleteMessage(Request $request)
{
    $messages = session('messages', []);
    $index = $request->input('index');

    if (isset($messages[$index])) {
        unset($messages[$index]);
        session(['messages' => array_values($messages)]); // Re-index array
        return redirect()->route('messagePage');
    }

    return response()->json(['success' => false]);
}



}
