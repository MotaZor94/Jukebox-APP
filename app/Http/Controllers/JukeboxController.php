<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;

class JukeboxController extends Controller
{

    //
    public function edit(Request $request)
    {
        if($request->has('id')) {
            //this is editing existing song
            $query = "
            SELECT*
            FROM `jukebox`
            WHERE `id`= ?
            LIMIT 1
        ";

        $song = DB::selectOne($query, [
            $request->input('id')
        ]);

        } else {
            //this is creating a new song
            $song = (object) [
                'id'        => null,
                'name'      => null,
                'code'      => null,
                'author'    => null,
                'added_at'  => date("Y-m-d H:i:s")
            ];
        }

        //if form was submitted
        if($request->method() == 'POST') {
            //validate request data
            $this->validate($request, [
                'name'      => 'required',
                'code'      => 'required',
                'author'    => 'required',
                'added_at'  => date("Y-m-d H:i:s")

            ]);

            //update the data from request
            $song->name = $request->input('name');
            $song->code = $request->input('code');
            $song->author = $request->input('author');
            $song->added_at = date("Y-m-d H:i:s");

            if($song->id) {
                $query = "
                UPDATE `jukebox`
                SET `name`   = ?,
                    `code`   = ?,
                    `author` = ?,
                    `added_at` = ?
                WHERE `id`   = ?
            ";

            DB::update($query, [
                $song->name,
                $song->code,
                $song->author,
                $song->added_at,
                $song->id
            ]);
            } else {
                //INSERTING A NEW SONG
                $query = "
                    INSERT
                    INTO `jukebox`
                    (`name`,`code`,`author`,`added_at`)
                    VALUES
                    (?,?,?,?)
                ";
                DB::insert($query, [
                    $song->name,
                    $song->code,
                    $song->author,
                    $song->added_at
                ]);

                $song->id = DB::getPdo()->lastInsertId();
            }

            Session::flash('success_message','Song was succesfully saved');

            return redirect('list');

            

        }

        $query = "
        SELECT * 
        FROM `jukebox`
        WHERE 1
        ";

        $list_of_songs = DB::select($query);


        $edit_playlist = view('jukebox/jukebox', [
            'song' => $song
        ]);

        return view('html' ,[
            'playlist' => $edit_playlist,
            'list' => $list_of_songs,

            
            
        ]);
    }

    public function listing(request $request)
    {

        
        $query = "
        SELECT * 
        FROM `jukebox`
        WHERE 1
        ";

        $list_of_songs = DB::select($query);

        $query = "
        SELECT *
        FROM `author`
        WHERE 1
        ";

        $list_of_authors = DB::select($query);
        $authors_by_ids = [];
        foreach($list_of_authors as $author){
            $authors_by_ids[$author->id]= $author;
        }
         //$authors_by_ids[$song->author_by_id];

        return view('list',[
            'all' => $list_of_songs,
            'authors' => $authors_by_ids
        ]);

    }

    public function delete(Request $request)
    {
        if($request->has('id')) {
            $id = $request->input('id');
            $query = "DELETE
                FROM `jukebox`
                WHERE `id` = ?
                ";

                $song = DB::selectOne($query, [$id]);

                $deleted_song = view('jukebox/jukebox' , [
                    'song' => $song
                ]);

                return redirect('list');
        }
        
    }
}
