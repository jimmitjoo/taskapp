<?php
/**
 * Created by PhpStorm.
 * User: jimmitjoo
 * Date: 14-12-08
 * Time: 18:29
 */

class TasksControllerTest extends TestCase {

    public function test_tasks_view()
    {
        $this->call('GET', 'tasks');
        $this->assertResponseOk();
    }

    public function test_post_new_task_to_the_list()
    {
        $demoData = [ 'name' => 'A demo task' ];

        $this->call('POST', 'tasks', $demoData);
        $this->assertResponseOk();

        // check if data is in db

    }

} 