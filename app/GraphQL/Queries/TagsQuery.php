<?php

namespace App\graphql\Queries;

use App\Models\Tag;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class TagsQuery extends Query
{
    protected $attributes = [
        'name' => 'tags',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Tag'));
    }

    public function resolve($root, $args)
    {
        return Tag::all();
    }
}
