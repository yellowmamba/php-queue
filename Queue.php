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

	public function getFirst()
	{
		return isset($this->list[0]) ? $this->list[0] : null;
	}

	public function getLast()
	{
		$count = count($this->list);
		return $count ? $this->list[$count-1] : null;
	}

	/**
	 * Add an element to the tail of the queue. Support Chaining methods.
	 *
	 * @param string $element
	 * @return Queue
	 */
	public function enqueue($element)
	{
		$this->list[] = $element;
		return $this;
	}

	/**
	 * Remove the element at the start of the queue
	 *
	 * @return string
	 */
	public function dequeue()
	{
		return array_shift($this->list);
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