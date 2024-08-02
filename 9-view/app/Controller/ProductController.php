<?php

namespace AriefKarditya\ViewPhp\Controller;

class ProductController
{
    function categories(string $productId, string $categoryId): void
    {
        echo "PRODUCT-ID: $productId, CATEGORY $categoryId";
    }
}
