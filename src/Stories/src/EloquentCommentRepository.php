<?php

namespace Rocket\Stories;

use Rocket\Stories\Contracts\Model;
use Rocket\Stories\Contracts\CommentRepository;
use Illuminate\Support\Collection;

class EloquentCommentRepository implements CommentRepository
{

    // should we cache in this file aswell maybe

    /**
     * [add description]
     */
    public function add(Model $model) 
    {
        $comment = new Comment();
        $comment->fill($model);
        $comment->save();
    }

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll() : Collection
    {
        return Comment::all();
    }

    /**
     * [findById description]
     * @return [type] [description]
     */
    public function findById($commentId) : Model
    {
        return Comment::where('id', $commentId)->first();
    }
}