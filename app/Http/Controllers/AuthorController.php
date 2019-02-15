<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;


class AuthorController extends Controller
{
    public function edit(Request $request)
    {
        if($request->has('id')) {
            $query = "SELECT *
            FROM author
            WHERE id = ? 
            LIMIT 1
            ";

            $author = DB::selectOne($query , [
                $request->input('id')
            ]);
        } else {
            $author = (object) [
                'id'     => null,
                'aname'   => null,
                'birth'  => null,
                'bio'    => null,
                'photo'  => null
            ];
        }

        //if form was submitted
        if($request->method() == 'POST') {
            //validate request data
            $this->validate($request, [
                'aname'      => 'required',
                'birth'      => 'required',
                'bio'    => 'required',
                'photo'  => 'required'
            ]);

            $author->name = $request->input('aname');
            $author->birth = $request->input('birth');
            $author->bio = $request->input('bio');
            $author->photo = $request->input('photo');

            if($author->id) {
                $author = "UPDATE author
                SET `aname`   = ?,
                    `birth`   = ?,
                    `bio` = ?,
                    `photo` = ?,
                WHERE id   = ?
            ";

            DB::update($query, [
                $author->aname,
                $author->birth,
                $author->bio,
                $author->photo
                ]);
            } else {
                 //INSERTING A NEW SONG
                 $query = "INSERT
                 INTO author
                 (`aname`,`birth`,`bio`,`photo`)
                 VALUES
                 (?,?,?,?)
             ";
             DB::insert($query, [
                 $author->aname,
                 $author->birth,
                 $author->bio,
                 $author->photo
             ]);

             $author->id = DB::getPdo()->lastInsertId();
            }

            Session::flash('success_message','Song was succesfully saved');

            return redirect('author/author?='.$author->id);
        }

        $query = "
        SELECT * 
        FROM `author`
        WHERE 1
        ";

        $list_of_authors = DB::select($query);

        $edit_author = view('author/author', [
            'author' => $author
        ]);

        return view('author_html' ,[
            'authors' => $edit_author,
            'list' => $list_of_authors
            
        ]);
    }

    public function listing(request $request)
    {
        $query = "
        SELECT * 
        FROM author
        WHERE 1
        ";

        $list_of_authors = DB::select($query);

        return view('list', [
            'authors' => $list_of_authors
        ]);

    }
}