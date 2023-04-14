<?php declare(strict_types=1);

namespace SpotzeeApi\Test;

use SpotzeeApi\Config;
use PHPUnit\Framework\TestCase;
use ReflectionException;

/**
 * Class Base
 */
class Base extends TestCase
{
    /**
     * @return void
     */
    public function setUp(): void
    {
        // configuration object
        try {
            \SpotzeeApi\Base::setConfig(new Config([
                'apiUrl' => getenv('API_URL') ? getenv('API_URL') : '',
                'apiKey' => getenv('API_KEY') ? getenv('API_KEY') : '',
            ]));
        } catch (ReflectionException $e) {
        }
        
        // start UTC
        date_default_timezone_set('UTC');

        parent::setUp();
    }
}
