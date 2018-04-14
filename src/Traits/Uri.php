<?php

namespace Songshenzong\Support\Traits;

/**
 * Trait Uri
 *
 * @package Songshenzong\Support\Traits
 */
trait Uri
{

    /**
     * @param string $uri
     * @param array  $parameters
     *
     * @return string
     */
    public static function uri(string $uri, array $parameters)
    {

        $uriComponents = parse_url($uri);

        if (isset($uriComponents['query'])) {
            \parse_str($uriComponents['query'], $uriComponents['query']);
        } else {
            $uriComponents['query'] = [];
        }

        $newUriComponents = isset($uriComponents['scheme']) ? $uriComponents['scheme'] . '://' : '';
        $newUriComponents .= $uriComponents['host'] ?? '';
        $newUriComponents .= $uriComponents['path'] ?? '';
        $newUriComponents .= '?' . http_build_query($parameters + $uriComponents['query']);

        return $newUriComponents;
    }

}
