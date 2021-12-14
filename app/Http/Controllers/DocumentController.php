<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateAndCreate;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    function getAll() {
        $document = Document::all();
        return view("document.document", compact("document"));
    }

    function newDocumento() {
        return view("document.createDocument");
    }

    function searchDocument($id) {
        $doc = Document::find($id);
        return view("document.documentDatails", compact('doc'));
    }

    function createDocument(updateAndCreate $payload) {

        $document = Document::create($payload->all());

        if (!$document) {
            dd($payload->all());
        }
        return  redirect()->route('document');

    }

    function deleteDocument($id) {
        $document = Document::find($id);

        if (!$document){
            return redirect()->route('document');
        }

        $document->delete();
        return redirect()->route('document')->with("messages", "Documento {$document->title} removido com sucesso!");

    }

}
