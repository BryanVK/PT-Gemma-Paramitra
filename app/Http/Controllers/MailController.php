<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{
    public function tambah(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|string',
                'phone' => 'required|string',
                'company' => 'required|string',
                'industry' => 'required|string',
                'message' => 'required|string'
            ]);
            Mail::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company' => $request->company,
                'industry' => $request->industry,
                'message' => $request->message
            ]);
            return redirect('/tambah')->with('status', 'Data telah tersimpan di database');
 
        }
        return view('crudapp.tambah');
    }
}
