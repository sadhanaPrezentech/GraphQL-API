<?php

namespace App\GraphQL\Queries;

use App\Models\Tag;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class TagQuery extends Query
{
    protected $attributes = [
        'name' => 'tag',
    ];

    public function type(): Type
    {
        return GraphQL::type('Tag');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],

        ];
    }

    public function resolve($root, $args)
    {
        return Tag::findOrFail($args['id']);
    }
}
