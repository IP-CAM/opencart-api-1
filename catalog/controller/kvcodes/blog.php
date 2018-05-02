<?php
 class ControllerKvcodesBlog extends Controller {
 	public function index() {
 		$this->language->load('kvcodes/blog');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
 		   'text' => $this->language->get('text_home'),
 		   'href' => $this->url->link('common/home')
 		);

		$data['breadcrumbs'][] = array(
 		  'text' => $this->language->get('kvcodes'),
 		  'href' => $this->url->link('kvcodes/kvcodes', '', true)
		);

		$data['breadcrumbs'][] = array(
 		  'text' => $this->language->get('blog'),
 		  'href' => $this->url->link('kvcodes/blog')
 		);

		$data['column_left'] = $this->load->controller('common/column_left');
 		$data['column_right'] = $this->load->controller('common/column_right');
 		$data['content_top'] = $this->load->controller('common/content_top');
 		$data['content_bottom'] = $this->load->controller('common/content_bottom');
 		$data['footer'] = $this->load->controller('common/footer');
 		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}?>