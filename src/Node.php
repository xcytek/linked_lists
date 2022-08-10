<?php

namespace Xcytek\LinkedList;

/**
 * Node class
 *
 * @autor Alex Acosta <alexcytek@gmail.com>
 */
class Node
{
    public $data;

    public $next;

    /**
     * Constructor
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}