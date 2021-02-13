<?php
namespace greeting\en;
class Hi
{
    /**
     * Hi constructor.
     */
    public function __construct()
    {
        echo '<h1>hi</h1>';
    }
}

namespace greeting\ko;
class Hi
{
    /**
     * Hi constructor.
     */
    public function __construct()
    {
        echo '<h1>안녕</h1>';
    }
}
//use \greeting\en, \greeting\ko;
//new en\Hi();
//new ko\Hi();

use \greeting\en\Hi as HiEn;
use \greeting\ko\Hi as HiKo;
new HiEn();
new HiKo();


