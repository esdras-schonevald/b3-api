<?php

namespace Adapters;

interface HttpConnector
{
    public function getResponse(): \stdClass;
}