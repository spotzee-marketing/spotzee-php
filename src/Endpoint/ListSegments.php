<?php declare(strict_types=1);

namespace SpotzeeApi\Endpoint;

use SpotzeeApi\Base;
use SpotzeeApi\Http\Client;
use SpotzeeApi\Http\Response;
use Exception;
use ReflectionException;

/**
 * Class ListSegments
 * @package SpotzeeApi\Endpoint
 */
class ListSegments extends Base
{
    /**
     * Get segments from a certain mail list
     *
     * Note, the results returned by this endpoint can be cached.
     *
     * @param string $listUid
     * @param int $page
     * @param int $perPage
     *
     * @return Response
     * @throws ReflectionException
     * @throws Exception
     */
    public function getSegments(string $listUid, int $page = 1, int $perPage = 10): Response
    {
        $client = new Client([
            'method'        => Client::METHOD_GET,
            'url'           => $this->getConfig()->getApiUrl(sprintf('lists/%s/segments', $listUid)),
            'paramsGet'     => [
                'page'      => $page,
                'per_page'  => $perPage
            ],
            'enableCache'   => true,
        ]);
        
        return $client->request();
    }
}
