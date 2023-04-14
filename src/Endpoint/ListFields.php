<?php declare(strict_types=1);

namespace SpotzeeApi\Endpoint;

use SpotzeeApi\Base;
use SpotzeeApi\Http\Client;
use SpotzeeApi\Http\Response;
use Exception;
use ReflectionException;

/**
 * Class ListFields
 * @package SpotzeeApi\Endpoint
 */
class ListFields extends Base
{
    /**
     * Get fields from a certain mail list
     *
     * Note, the results returned by this endpoint can be cached.
     *
     * @param string $listUid
     *
     * @return Response
     * @throws ReflectionException
     * @throws Exception
     */
    public function getFields(string $listUid): Response
    {
        $client = new Client([
            'method'        => Client::METHOD_GET,
            'url'           => $this->getConfig()->getApiUrl(sprintf('lists/%s/fields', $listUid)),
            'paramsGet'     => [],
            'enableCache'   => true,
        ]);
        
        return $client->request();
    }
}
