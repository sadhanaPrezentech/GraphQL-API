<?php

namespace App\graphql\Mutations;

use App\Models\Tag;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateTagMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createTag'
    ];

    public function type(): Type
    {
        return GraphQL::type('Tag');
    }

    public function args(): array
    {
        return [
            'name' => [
                'name' => 'name',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'description' => [
                'name' => 'description',
                'type' =>  Type::nonNull(Type::string()),
            ],

        ];
    }

    public function resolve($root, $args)
    {
        $tag = new Tag();
        $tag->fill($args);
        $tag->save();

        return $tag;
    }
}
