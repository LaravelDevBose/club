<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/11/2018
 * Time: 5:33 PM
 */

class FrontEndController extends MY_Controller
{
	public function index(){
		$data['title'] = '';
		$data['content']='index';
		$this->load->view('frontend/master', $data);
	}

	public function article_of_association_page(){
		$data['title'] = 'Article of Association';
		$data['content'] = 'association_page';
		$this->load->view('frontend/master', $data);
	}

	public function first_founder_message_page(){
		$data['title'] = 'First Founder Message';
		$data['content'] = 'committee_message_page';
		$this->load->view('frontend/master', $data);
	}

	public function precedent_message_page(){
		$data['title'] = 'Precedent Message';
		$data['content'] = 'committee_message_page';
		$this->load->view('frontend/master', $data);
	}

	public function secretary_message_page(){
		$data['title'] = 'Secretary Message';
		$data['content'] = 'committee_message_page';
		$this->load->view('frontend/master', $data);
	}

	public function cord_of_conduct_page(){
		$data['title'] = 'Cord of conduct';
		$data['content'] = 'general_page';
		$this->load->view('frontend/master', $data);
	}

	public function executive_committee_page(){
		$data['title'] = 'Executive Committee';
		$data['content'] = 'member_show_page';
		$this->load->view('frontend/master', $data);
	}

	public function working_committee_page(){
		$data['title'] = 'Working Committee';
		$data['content'] = 'member_show_page';
		$this->load->view('frontend/master', $data);
	}

	public function members_page(){
		$data['title'] = 'General Member List';
		$data['content'] = 'member_show_page';
		$this->load->view('frontend/master', $data);
	}

	public function family_louche_page(){
		$data['title'] = 'Family Louche';
		$data['content'] = 'general_page';
		$this->load->view('frontend/master', $data);
	}

	public function party_louche_page(){
		$data['title'] = 'Party Louche';
		$data['content'] = 'general_page';
		$this->load->view('frontend/master', $data);
	}

	public function gaming_zone_page(){
		$data['title'] = 'Gaming Zone';
		$data['content'] = 'general_page';
		$this->load->view('frontend/master', $data);
	}

	public function lib_payer_room_page(){
		$data['title'] = 'Library & Payer Room';
		$data['content'] = 'general_page';
		$this->load->view('frontend/master', $data);
	}

	public function movie_room_page(){
		$data['title'] = 'Movie Room';
		$data['content'] = 'general_page';
		$this->load->view('frontend/master', $data);
	}

	public function affiliation_page(){
		$data['title'] = 'Affiliation';
		$data['content'] = 'general_page';
		$this->load->view('frontend/master', $data);
	}

	public function upcoming_event_page(){
		$data['title'] = 'Article of Association';
		$data['content'] = 'association_page';
		$this->load->view('frontend/master', $data);
	}

	public function current_event_page(){
		$data['title'] = 'Article of Association';
		$data['content'] = 'association_page';
		$this->load->view('frontend/master', $data);
	}
	public function gallery_page(){
		$data['title'] = 'Article of Association';
		$data['content'] = 'gallery_page';
		$this->load->view('frontend/master', $data);
	}

	public function contact_us_page(){
		$data['title'] = 'Article of Association';
		$data['content'] = 'contact_us_page';
		$this->load->view('frontend/master', $data);
	}

	public function member_account_page(){
		$data['title'] = 'Article of Association';
		$data['content'] = 'association_page';
		$this->load->view('frontend/master', $data);
	}
}
