<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TextRequest;
use App\Models\TelegraphText;

class TextController extends Controller
{
    public function create(TextRequest $req)
    {
        $telegraph = new TelegraphText();
        $telegraph->name = $req->input ('name');
        $telegraph->subject = $req->input ('subject');
        $telegraph->email = $req->input ('email');
        $telegraph->message = $req->input ('message');

        $telegraph->save ();

        return redirect ()->route ('home')->with ('success', 'Вы все сделали правильно и ваш пост добавлен');
    }

    public function index()
    {
        $contact = new TelegraphText;
        return view ('messages', ['data' => $contact -> all()]);
    }

    public function show($id)
    {
        $contact = new TelegraphText;
        return view ('one-message', ['data' => $contact -> find($id)]);
    }

    public function update($id)
    {
        $contact = new TelegraphText;
        return view ('update-message', ['data' => $contact -> find($id)]);
    }

    public function updateAll($id, TextRequest $req)
    {
        $telegraph = TelegraphText::find($id);
        $telegraph->name = $req->input ('name');
        $telegraph->subject = $req->input ('subject');
        $telegraph->email = $req->input ('email');
        $telegraph->message = $req->input ('message');

        $telegraph->save ();

        return redirect ()->route ('form-data-one', $id)
            ->with ('success', 'Вы все сделали правильно и ваш пост отредактирован');
    }

    public function delete($id)
    {
        TelegraphText::find($id)->delete();

        return redirect ()->route ('form-data')
            ->with ('success', 'Вы удалили ваш пост');
    }
}
