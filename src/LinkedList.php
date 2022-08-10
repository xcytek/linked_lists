<?php

namespace Xcytek\LinkedList;

/**
 * Linked List Data Structure
 *
 * @author Alex Acosta <alexcytek@gmail.com>
 */
class LinkedList
{
    public $head;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->head = null;
    }

    /**
     * Push new nodes at the bottoms of the list
     *
     * @param Node $node
     * @return void
     */
    public function push(Node $node)
    {
        // Always check if the head is empty
        if (is_null($this->head)) {
            $this->head = $node;
        } else {
            $tempNode = $this->head;
            // Still not the end of the list
            while (!is_null($tempNode->next)) {
                $tempNode = $tempNode->next;
            }
            // Finally, we get at the end of the list
            $tempNode->next = $node;
        }
    }

    /**
     * Push a node at the top of the list
     *
     * @param Node $node
     * @return void
     */
    public function pushAtTop(Node $node)
    {
        // Always check if the head is empty, paste the actual head as the next node for the new node
        if (!is_null($this->head)) {
            $node->next = $this->head;
        }
        // new node is the head now
        $this->head = $node;
    }

    /**
     * Push a new node after a specific position
     *
     * @param $position
     * @param Node $node
     * @return void
     */
    public function pushAfterPosition($position, Node $node)
    {
        // Always check if the head is empty
        if (is_null($this->head)) {
            $this->head = $node;
        } else {
            $count = 1;
            $tempNode = $this->head;
            // There are more nodes
            while (!is_null($tempNode->next)) {
                // We get to the desired position
                if ($count === $position) {
                    // The new node has node by itself, get the last one
                    if (!is_null($node->next)) {
                        $newTempNode = $node->next;
                        while (!is_null($newTempNode->next)) {
                            $newTempNode = $newTempNode->next;
                        }
                        $newTempNode->next = $tempNode->next;
                    }
                    else {
                        $node->next = $tempNode->next;
                    }
                    $tempNode->next = $node;
                }
                $tempNode = $tempNode->next;
                $count += 1;
            }
        }
    }

    /**
     * Delete a node given a position
     *
     * @param $position
     * @return void
     */
    public function deleteAtPosition($position)
    {
        // Always check if the head is empty
        if (!is_null($this->head)) {
            $count = 1;
            $tempNode = $this->head;
            while (!is_null($tempNode->next)) {
                // Is the next node the one we want? replace the next node
                if ($count + 1 === $position) {
                    $tempNode->next = $tempNode->next->next;
                }
                $tempNode = $tempNode->next;
                $count += 1;
            }
        }
    }

    /**
     * Delete everything after a certain position
     *
     * @param $position
     * @return void
     */
    public function deleteAfterPosition($position)
    {
        // Always check if the head is empty
        if (!is_null($this->head)) {
            $count = 1;
            $tempNode = $this->head;
            while (!is_null($tempNode->next)) {
                // We get to the position, just null it
                if ($count === $position) {
                    $tempNode->next = null;
                }
                $tempNode = $tempNode->next;
                $count += 1;
            }
        }
    }

    /**
     * Clear the whole list
     *
     * @return void
     */
    public function clear()
    {
        $this->head = null;
    }

    /**
     * Print the list in a pretty way
     *
     * @param $detailed
     * @return void
     */
    public function printList($detailed = false)
    {
        $tempNode = $this->head;
        if (!is_null($tempNode)) {
            echo "\nLinked list\n";
            while (!is_null($tempNode)) {
                echo json_encode($tempNode->data) . " -> ";
                $tempNode = $tempNode->next;
            }
            echo "null\n";
        } else {
            echo "\n [List Empty]";
        }
    }
}