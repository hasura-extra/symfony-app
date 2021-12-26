<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Types;

class order_by
{
    public const asc = 'asc';
    public const asc_nulls_first = 'asc_nulls_first';
    public const asc_nulls_last = 'asc_nulls_last';
    public const desc = 'desc';
    public const desc_nulls_first = 'desc_nulls_first';
    public const desc_nulls_last = 'desc_nulls_last';
}
