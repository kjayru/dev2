<?php 
$theme = $this->config->item("admin_template");
$this->load->view('theme/admin/'.$theme.'/header_view');
$this->load->view($content);
$this->load->view('theme/admin/'.$theme.'/footer_view');
?>