<?php
/**
 * Sample implementation of Queue in PHP
 * @author Michael Wu <wujianfei871015@gmail.com>
 */
class Queue
{
	private $list;

	public function __construct(array $list = array())
	{
		$this->list = $list;
	}

	/**
	 * Add an element to the tail of the queue. Support Chaining methods.
	 *
	 * @param string $element
	 * @return Queue
	 */
	public function enqueue($element)
	{

	}

	/**
	 * Remove the element at the start of the queue
	 *
	 * @return string
	 */
	public function dequeue()
	{

	}

	/**
	 * Get the number of the elements in the queue
	 *
	 * @return int
	 */
	public function getQueueLength()
	{
		return count($this->list);
	}
}