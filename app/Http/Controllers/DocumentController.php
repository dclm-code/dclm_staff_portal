<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Document;
use App\Imports\DocumentsImport;
use Auth;

class DocumentController extends Controller
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
        $documents = Document::all();
        if($request->wantsJson()){
            return $documents;

        }else{
            return view('documents.document', compact('documents'));
        }
    }

    public function create(){
        $document_types = \App\DocumentType::all();
        return view('documents.create',compact('document_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Document::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Document successfully created."
            ], 201);
        }else{
            $info = "Document successfully created";
            $documents = Document::all();
            return view('documents.document',compact('info','documents'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document $document
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Document $document)
    {
        if($request->wantsJson()){
            return $document;
        }else{
            return view('documents.view', compact('document'));
        }
    }

    public function edit(Document $document){
        $document_types = \App\DocumentType::all();
    return view('documents.edit',compact('document_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
            $document->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Document successfully updated.'], 200);
        }else{
            $info = "Document successfully updated.";
            $documents = Document::all();
            return view('documents.document',compact('info','documents'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Document $document)
    {
            $document->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Document  deleted successfully.'], 200);
        }else{
            $info = "Document  deleted successfully.";
            return view('documents.document', compact('info'));
        }
    }

    public function getFile()
    {
        return view('documents.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new DocumentsImport, request()->file('document_file'));
        return redirect('documents.document');
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
