<?php

require_once 'Queue.php';

class QueueTest extends PHPUnit_Framework_TestCase
{
	protected $list;
	protected $queue;

	protected function setUp()
	{
		$this->list = array();
		$this->queue = new Queue($this->list);
	}

	public function testEnqueue()
	{
		$this->queue
			->enqueue('element1')
			->enqueue('element2');
		$this->assertEquals(2, $this->queue->getQueueLength());
		$this->assertEquals('element2', $this->queue->getLast());
	}

	public function testDequeue()
	{
		$this->queue
			->enqueue('test1')
			->enqueue('test2');
		$removed = $this->queue->dequeue();
		$this->assertEquals('test1', $removed);
		$this->assertEquals(1, $this->queue->getQueueLength());
		$this->assertEquals('test2', $this->queue->getFirst());
		$removed2 = $this->queue->dequeue();
		$this->assertEquals('test2', $removed2);		
		$removed3 = $this->queue->dequeue();
		$this->assertEquals(null, $removed3);		
	}
}