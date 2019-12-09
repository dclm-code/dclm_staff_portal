<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Message;
use App\Imports\MessagesImport;
use Auth;

class MessageController extends Controller
{
    /**
     * Return the currently login user
     * An instance of App\User model
     * @return App\User
     */
    protected function currentUser()
    {
        return Auth::guard('api')->user() ?? Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $messages = Message::all();
        if($request->wantsJson()){
            return $messages;

        }else{
            return view('messages.message', compact('messages'));
        }
    }

    public function create(){
        $senders = \App\Sender::all();
    $receivers = \App\Receiver::all();
    $forwardedtos = \App\Forwardedto::all();
        return view('messages.create',compact('senders','receivers','forwardedtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Message::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Message successfully created."
            ], 201);
        }else{
            $info = "Message successfully created";
            $messages = Message::all();
            return view('messages.message',compact('info','messages'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message $message
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Message $message)
    {
        if($request->wantsJson()){
            return $message;
        }else{
            return view('messages.view', compact('message'));
        }
    }

    public function edit(Message $message){
        $senders = \App\Sender::all();
    $receivers = \App\Receiver::all();
    $forwardedtos = \App\Forwardedto::all();
    return view('messages.edit',compact('senders','receivers','forwardedtos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
            $message->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Message successfully updated.'], 200);
        }else{
            $info = "Message successfully updated.";
            $messages = Message::all();
            return view('messages.message',compact('info','messages'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Message $message)
    {
            $message->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Message  deleted successfully.'], 200);
        }else{
            $info = "Message  deleted successfully.";
            return view('messages.message', compact('info'));
        }
    }

    public function getFile()
    {
        return view('messages.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new MessagesImport, request()->file('message_file'));
        return redirect('messages.message');
    }



    /**
     *
     * Add Business Logic function below here.
     *
     * Do not delete anything above.
     * Neither should you add anything above.
     * In other to keep every neat and functional.
     *
     * Happy coding...
     *
     */

}
