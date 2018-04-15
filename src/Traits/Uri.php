<?php

namespace Songshenzong\Support\Traits;

use function dd;

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
     * @param bool   $appendsCurrentUri
     *
     * @return string
     */
    public static function uri(string $uri, array $parameters, bool $appendsCurrentUri = false)
    {
        $uriComponents = parse_url($uri);

        if (isset($uriComponents['query'])) {
            \parse_str($uriComponents['query'], $uriComponents['query']);
        } else {
            $uriComponents['query'] = [];
        }

        if ($appendsCurrentUri) {
            $newQuery = $parameters + $_GET + $uriComponents['query'];
        } else {
            $newQuery = $parameters + $uriComponents['query'];
        }

        $newUriComponents = isset($uriComponents['scheme']) ? $uriComponents['scheme'] . '://' : '';
        $newUriComponents .= $uriComponents['host'] ?? '';
        $newUriComponents .= isset($uriComponents['port']) ? ':' . $uriComponents['port'] : '';
        $newUriComponents .= $uriComponents['path'] ?? '';
        $newUriComponents .= '?' . http_build_query($newQuery);

        return $newUriComponents;
    }

}
