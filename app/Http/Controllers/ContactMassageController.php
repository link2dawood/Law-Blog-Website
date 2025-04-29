<?php

namespace App\Http\Controllers;

use App\Models\ContactMassage;
use Illuminate\Http\Request;

class ContactMassageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = ContactMassage::latest()->get();
        return view('messages', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $message = ContactMassage::find($id);
        if ($message) {
            $message->delete();
            return redirect()->back()->with('success', 'Message Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Message Not Found');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $obj = New ContactMassage();
        $obj->create($data);
        return redirect()->back()->with('success', 'Message Sent Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactMassage  $contactMassage
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMassage $contactMassage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactMassage  $contactMassage
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMassage $contactMassage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactMassage  $contactMassage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactMassage $contactMassage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactMassage  $contactMassage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMassage $contactMassage)
    {
        //
    }
}
