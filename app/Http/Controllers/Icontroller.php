<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\categories;
use App\Models\login;
use App\Models\cart;

class Icontroller extends Controller
{
    // home page
    function welcome()
    {
        $data = product::inRandomOrder()->limit(10)->get();
        $categories = categories::all();
        return view('welcome', compact('data', 'categories'));
    }
    // men collection
    function men()
    {
        $data = product::inRandomOrder()->limit(10)->get();
        $categories = categories::all();
        return view('MenCollection', compact('data', 'categories'));
    }
    // women collection
    function women()
    {
        $data = product::inRandomOrder()->limit(10)->get();
        $categories = categories::all();
        return view('WomenCollection', compact('data', 'categories'));
    }
    // kids collection
    function kids()
    {
        $data = product::inRandomOrder()->limit(10)->get();
        $categories = categories::all();
        return view('KidsCollection', compact('data', 'categories'));
    }
    // category display
    function categorydisplay($categoryname)
    {
        $categories = categories::all();
        $data = product::where('category', $categoryname)->get();
        return view('welcome', compact('data', 'categories'));
    }
    // add to cart
    function addtocart($id)
    {
        $random = product::inRandomOrder()->limit(5)->get();
        $categories = categories::all();
        $data = product::where('id', $id)->get();
        return view('Addtocart', compact('data', 'categories', 'random'));
    }
    // login
    public function sessionForm(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $data = login::select('*')
            ->where('email', $email)
            ->where('password', $password)
            ->count();
        if ($data > 0) {
            $name = login::select('*')
                ->where('email', $email)
                ->where('password', $password)
                ->first();
            $namevalue = $name->name;
            session()->put("user_session", $namevalue);
            return redirect('/');
        } else {
            return back()->withErrors(['Invalid Credentials login not successfull']);
        }
    }
    // register
    function register(Request $request)
    {
        $rules = ['name' => 'required', 'email' => 'required', 'password' => 'required',];
        $customMessages = ['required' => 'All the feilds are required.'];
        $this->validate($request, $rules, $customMessages);
        if ($request->isMethod('post')) {
            $data = new login;
            $data->name = $request->get('name');
            $data->email = $request->get('email');
            $data->password = $request->get('password');
            $data->save();
        }
        return redirect('userlogin')->with('message', 'Regestired successfully');
    }
    // add to cart
    function finalcart(Request $request, $id)
    {
        $rules = ['quantity' => 'required'];
        $customMessages = ['required' => 'quantity is required.'];
        $finaldata = product::find($id);
        $this->validate($request, $rules, $customMessages);
        if ($request->isMethod('post')) {
            $data = new cart;
            $data->image = $finaldata->image;
            $data->brand = $finaldata->brand;
            $data->description = $finaldata->description;
            $data->quantity = $request->get('quantity');
            $data->save();
        }
        return redirect('Final_cart')->with('message', 'Regestired successfully');
    }
    // cart display
    function Final_cart()
    {
        $data = cart::all();
        return view('finalcart', compact('data'));
    }
    // remove from cart
    function remove($id)
    {
        $data = cart::find($id);
        $data->delete();
        return redirect('Final_cart');
    }
}
