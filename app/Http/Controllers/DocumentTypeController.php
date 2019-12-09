<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\DocumentType;
use App\Imports\DocumentTypesImport;
use Auth;

class DocumentTypeController extends Controller
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
        $document_types = DocumentType::all();
        if($request->wantsJson()){
            return $document_types;

        }else{
            return view('document_types.document_type', compact('document_types'));
        }
    }

    public function create(){
            return view('document_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            DocumentType::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Document_type successfully created."
            ], 201);
        }else{
            $info = "Document_type successfully created";
            $document_types = DocumentType::all();
            return view('document_types.document_type',compact('info','document_types'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DocumentType $document_type
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, DocumentType $document_type)
    {
        if($request->wantsJson()){
            return $document_type;
        }else{
            return view('document_types.view', compact('document_type'));
        }
    }

    public function edit(DocumentType $document_type){
        return view('document_types.edit',compact('document_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DocumentType  $document_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentType $document_type)
    {
            $document_type->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Document_type successfully updated.'], 200);
        }else{
            $info = "Document_type successfully updated.";
            $document_types = DocumentType::all();
            return view('document_types.document_type',compact('info','document_types'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DocumentType  $document_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, DocumentType $document_type)
    {
            $document_type->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Document_type  deleted successfully.'], 200);
        }else{
            $info = "Document_type  deleted successfully.";
            return view('document_types.document_type', compact('info'));
        }
    }

    public function getFile()
    {
        return view('document_types.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new Document_typesImport, request()->file('document_type_file'));
        return redirect('document_types.document_type');
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
