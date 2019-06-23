<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class App extends REST_Controller {

	public function __construct() {
        parent::__construct();
    }

    /**
     * [create_post create signature]
     * @return [type] [description]
     */
	public function create_post()
	{
		$this->db->trans_start();
		$post = $this->input->post();

		if($post['meeting_id'] == 0)
		{
			$post_meeting = [
				'meeting_day' 	=> $post['meeting_day'],
				'meeting_date' 	=> $post['meeting_date'],
				'meeting_time' 	=> $post['meeting_time'],
				'event' 		=> $post['event'],
			];
			$this->db->insert('meeting', $post_meeting);
			$meeting_id = $this->db->insert_id();
		}
		else
		{
			$meeting_id = $post['meeting_id'];
		}

		$post_signature = [
			'meeting_id' 			=> $meeting_id,
			'pic_name' 				=> $post['pic_name'],
			'relation' 				=> $post['relation'],
			'signatures' 			=> $post['signatures'],
		];

		$insert = $this->db->insert('signatures', $post_signature);

		$this->db->trans_complete();

        if ($insert)
        {
            $data = [
                'total' => 1,
                'meeting_id' => $meeting_id
            ];

            $this->response($data, 201);
        }
        else
        {
            $data = [
                'total' => 0,
                'errors' => $this->_model->errors
            ];

            $this->response($data, 400);
        }
	}
}
