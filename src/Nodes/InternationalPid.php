<?php

namespace Naugrim\OpenTrans\Nodes;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\OpenTrans\Nodes\Concerns\HasStringValue;
use Naugrim\OpenTrans\Nodes\Concerns\HasTypeAttribute;

class InternationalPid implements NodeInterface
{
    use HasTypeAttribute, HasStringValue;
}
