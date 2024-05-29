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
        return view("admin.adminpage")->with($data);
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
        return view("admin.update")->with($data);
    }

    public function update(Request $request)
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
        return view('admin.register');
    }

    public function login()
    {
        return view('admin.login');
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
            // Store user info in session
            session(['user' => $newUser->only(['id', 'fullname', 'email', 'type'])]);

            return redirect('login')->with('success', 'Congratulations! Your account is ready');
        }

        return back()->withErrors(['msg' => 'Registration failed, please try again.']);
    }

    public function loginUser(Request $request)
    {
         $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    // Attempt to authenticate the user
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Store user info in session
        session(['user' => $user->only(['id', 'fullname', 'email', 'type'])]);

       // Redirect to the appropriate page based on user type
        if ($user->type == "Customer") {
            $availables = Available::all();
    return view('available.booking_employee', compact('availables'));
        }
        if ($user->type == "Admin") {
            $tasks = tasks::all();
            return response()->view('admin.adminpage', compact('tasks'));
        }
    } else {
        // If authentication fails, flash an error message and return to the login view
        Session::flash('msg', 'Incorrect E-mail or Password');
        return view('admin.login');
    }

    }

    public function searchTasks(Request $request)
{
    $search = $request->input('search');

    // Search tasks by name
    $tasks = tasks::where('name', 'like', "%$search%")->get();

    return view('admin.adminpage', compact('tasks'));
}

    public function showKhulnaTasks()
{
    $tasks = tasks::where('division', 'Khulna')->get(); // Retrieve tasks with division Khulna from the database

    return view('division.khulna', compact('tasks')); // Pass tasks to the view
}

public function showDhakaTasks()
{
    $tasks = tasks::where('division', 'Dhaka')->get(); // Retrieve tasks with division Dhaka from the database

    return view('division.dhaka', compact('tasks')); // Pass tasks to the view
}

public function showRajshahiTasks()
{
    $tasks = tasks::where('division', 'Rajshahi')->get(); // Retrieve tasks with division Rajshahi from the database

    return view('division.rajshahi', compact('tasks')); // Pass tasks to the view
}

public function showSylhetTasks()
{
    $tasks = tasks::where('division', 'Sylhet')->get(); // Retrieve tasks with division Khulna from the database

    return view('division.sylhet', compact('tasks')); // Pass tasks to the view
}

public function showChottogramTasks()
{
    $tasks = tasks::where('division', 'Chottogram')->get(); // Retrieve tasks with division Khulna from the database

    return view('division.chottogram', compact('tasks')); // Pass tasks to the view
}


public function avaiableuser()
{
    return view('available.available');
}

public function showAvailable()
    {
        $availables = Available::all();
        return view('available.available', compact('availables'));
    }

    public function avaialable()
    {
        return view('available.available_register');
    }

    public function storeAvailable(Request $request)
{
    $validatedData = $request->validate([
        'fullname'  => 'required|string',
        'email'     => 'required|string|email|unique:avaiable,email',
        //'password'  => 'required|string',
        'picture'   => 'required',
        'phone'     => 'nullable|string',
        'address'   => 'nullable|string',
        'rating'    => 'nullable|string',
    ]);

    $available = new Available();
    $available->fullname = $request['fullname'];
    $available->email = $request['email'];
    $available->password = "null"; // It's a good practice to hash passwords

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

    public function editavailable($id)
{
    $available = Available::find($id); // Correctly reference the model class
    $data = compact('available');
    return view("available.updateavailable")->with($data);
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
    return view('available.booking_employee', compact('availables'));
}

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
    return view('message.message', compact('messages'));
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

public function showKhulnaAdmin()
{
    $tasks = tasks::where('division', 'Khulna')->get(); // Retrieve tasks with division Khulna from the database

    return view('divadmin.khulnaAdmin', compact('tasks'));
}

public function showDhakaAdmin()
{
    $tasks = tasks::where('division', 'Dhaka')->get(); // Retrieve tasks with division Khulna from the database

    return view('divadmin.dhakaAdmin', compact('tasks'));
}

public function showSylhetAdmin()
{
    $tasks = tasks::where('division', 'Sylhet')->get(); // Retrieve tasks with division Khulna from the database

    return view('divadmin.sylhetAdmin', compact('tasks'));
}

public function showChottogramAdmin()
{
    $tasks = tasks::where('division', 'Chottogram')->get(); // Retrieve tasks with division Khulna from the database

    return view('divadmin.chottogramAdmin', compact('tasks'));
}

public function showRajshahiAdmin()
{
    $tasks = tasks::where('division', 'Rajshahi')->get(); // Retrieve tasks with division Khulna from the database

    return view('divadmin.rajshahiAdmin', compact('tasks'));
}

public function showKhulnaAvailable()
{
    $ava = Available::where('division', 'Khulna')->get(); // Retrieve tasks with division Khulna from the database

    return view('khulnaAvailable', compact('ava'));
}

public function showDhakaAvailable()
{
    $ava = Available::where('division', 'Dhaka')->get(); // Retrieve tasks with division Khulna from the database

    return view('dhakaAvailable', compact('ava'));
}

public function showRajshahiAvailable()
{
    $ava = Available::where('division', 'Rajshahi')->get(); // Retrieve tasks with division Khulna from the database

    return view('rajshahiAvailable', compact('ava'));
}

}
