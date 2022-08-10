<?php

use Xcytek\LinkedList\LinkedList;
use Xcytek\LinkedList\Node;

// Push nodes at the end
$linkedList = new LinkedList();
foreach (range(1, 15) as $node) {
    $linkedList->push(new Node('Node #' . $node));
}
$linkedList->printList();

// Push nodes after a certain position no matter if the node has other nodes pointed too.
$addAfterPosition = 6;
$nodeNinja1 = new Node('Node ninja 1');
$nodeNinja2 = new Node('Node ninja 2');
$nodeNinja3 = new Node('Node ninja 3');
$nodeNinja2->next = $nodeNinja3;
$nodeNinja1->next = $nodeNinja2;
$linkedList->pushAfterPosition($addAfterPosition, $nodeNinja1);
$linkedList->printList();

// Push single nodes after any position
$linkedList->pushAfterPosition(4, new Node('New node ninja'));
$linkedList->printList();

// Push a node at the top of the list
$linkedList->pushAtTop(new Node('First ninja node'));
$linkedList->printList();

// Remove single node given a position
$linkedList->deleteAtPosition(3);
$linkedList->printList();

// Clear the whole list
$linkedList->clear();
$linkedList->printList();
