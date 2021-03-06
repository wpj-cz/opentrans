<?php

namespace Naugrim\OpenTrans\Nodes\Mime;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\OpenTrans\Nodes\Concerns\HasContentTypeAttribute;
use Naugrim\OpenTrans\Nodes\Concerns\HasStringValue;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class Data implements NodeInterface
{
    use HasContentTypeAttribute, HasStringValue;
}