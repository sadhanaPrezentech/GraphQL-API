<?php

namespace App\GraphQL\Types;

use App\Tag;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TagType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Tag',
        'description' => 'Collection of tags',
        'model' => Tag::class
    ];


    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of a particular tag',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the tag',
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'description',
            ],

        ];
    }
}
