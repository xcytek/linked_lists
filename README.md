# linked_lists
Linked List in PHP
=======
# Linked Lists
Linked Lists implementation in PHP

Examples How To Use all the methods available:

### Push nodes at the bottom
```php
// Import the usage of the main classes
use Xcytek\LinkedList\LinkedList;
use Xcytek\LinkedList\Node;

// Push nodes at the end
$linkedList = new LinkedList();
foreach (range(1, 5) as $node) {
    $linkedList->push(new Node('Node #' . $node));
}
$linkedList->printList();
```

```
// Output
Linked list
"Node #1" -> "Node #2" -> "Node #3" -> "Node #4" -> "Node #5" -> null
```

### Push nodes after specific position
```php
// Push nodes after a certain position no matter if the node has other nodes pointed too.
$addAfterPosition = 2;
$nodeNinja1 = new Node('Node ninja 1');
$nodeNinja2 = new Node('Node ninja 2');
$nodeNinja3 = new Node('Node ninja 3');
$nodeNinja2->next = $nodeNinja3;
$nodeNinja1->next = $nodeNinja2;
$linkedList->pushAfterPosition($addAfterPosition, $nodeNinja1);
$linkedList->printList();
```

```
// Output
Linked list
"Node #1" -> "Node #2" -> "Node ninja 1" -> "Node ninja 2" -> "Node ninja 3" -> "Node #3" -> "Node #4" -> "Node #5" -> null
```

### Push single node after a position
```php
// Push single nodes after any position
$addAfterPosition = 4;
$linkedList->pushAfterPosition($addAfterPosition, new Node('New node ninja'));
$linkedList->printList();
```

```
// Output
Linked list
"Node #1" -> "Node #2" -> "Node ninja 1" -> "Node ninja 2" -> "New node ninja" -> "Node ninja 3" -> "Node #3" -> "Node #4" -> "Node #5" -> null
```

### Push a node at the top of the list
```php
// Push a node at the top of the list
$linkedList->pushAtTop(new Node('First ninja node'));
$linkedList->printList();
```

```
// Output
Linked list
"First ninja node" -> "Node #1" -> "Node #2" -> "Node ninja 1" -> "Node ninja 2" -> "New node ninja" -> "Node ninja 3" -> "Node #3" -> "Node #4" -> "Node #5" -> null
```

### Delete a node given a position
```php
// Remove single node given a position
$linkedList->deleteAtPosition(3);
$linkedList->printList();
```

```
// Output
Linked list
"First ninja node" -> "Node #1" -> "Node ninja 1" -> "Node ninja 2" -> "New node ninja" -> "Node ninja 3" -> "Node #3" -> "Node #4" -> "Node #5" -> null
```

### Clear the entire list
```php
// Clear the whole list
$linkedList->clear();
$linkedList->printList();
```

```
// Output
 [List Empty]

```
