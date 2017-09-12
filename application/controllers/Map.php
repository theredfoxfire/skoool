<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/home
	 *	- or -
	 * 		http://example.com/index.php/home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function sportcenter()
	{
		$data['title'] = 'Sport Center';
		$this->load->view('header', $data);
        $this->load->view('map/sportcenter');
        $this->load->view('footer');
	}
	public function canteen()
	{
		$data['title'] = 'Canteen';
		$this->load->view('header', $data);
        $this->load->view('map/canteen');
        $this->load->view('footer');
	}
	public function library()
	{
		$data['title'] = 'Library';
		$this->load->view('header', $data);
        $this->load->view('map/library');
        $this->load->view('footer');
	}
	public function creative_house()
	{
		$data['title'] = 'Creative House';
		$this->load->view('header', $data);
        $this->load->view('map/creative_house');
        $this->load->view('footer');
	}
	public function tempat_parkir()
	{
		$data['title'] = 'Tempat Parkir';
		$this->load->view('header', $data);
        $this->load->view('map/tempat_parkir');
        $this->load->view('footer');
	}
	public function bus_top()
	{
		$data['title'] = 'Bus Top';
		$this->load->view('header', $data);
        $this->load->view('map/bus_top');
        $this->load->view('footer');
	}
	public function community_house()
	{
		$data['title'] = 'Community House';
		$this->load->view('header', $data);
        $this->load->view('map/community_house');
        $this->load->view('footer');
	}
	public function taman()
	{
		$data['title'] = 'Taman';
		$this->load->view('header', $data);
        $this->load->view('map/taman');
        $this->load->view('footer');
	}
	public function school()
	{
		$data['title'] = 'School';
		$this->load->view('header', $data);
        $this->load->view('map/school');
        $this->load->view('footer');
	}
	public function kantor_manajemen()
	{
		$data['title'] = 'Kantor Manajemen';
		$this->load->view('header', $data);
        $this->load->view('map/kantor_manajemen');
        $this->load->view('footer');
	}
	public function lapangan_basket()
	{
		$data['title'] = 'Lapangan Basket';
		$this->load->view('header', $data);
        $this->load->view('map/lapangan_basket');
        $this->load->view('footer');
	}
	public function space_house()
	{
		$data['title'] = 'Space House';
		$this->load->view('header', $data);
        $this->load->view('map/space_house');
        $this->load->view('footer');
	}
}
