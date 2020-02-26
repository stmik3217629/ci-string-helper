<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StringController extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('string');
    }


	public function generator()
	{
        $result = null;
        $type = @$this->input->post('type');
        $length = @$this->input->post('length');

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $result = random_string($type, $length);
        }

		$this->load->view('string-generator', [
            'result' => @$result,
            'type' => $type,
            'length' => $length,
        ]);
    }
    

	public function reducer()
	{
        $result = null;
        $string = @$this->input->post('string');
        $character = @$this->input->post('character') ?? `!@#$%^&*()_`;
        $shouldTrim = !!@$this->input->post('shouldTrim');
        $shouldRemoveQuotes = !!@$this->input->post('shouldRemoveQuotes');

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $result = reduce_multiples($string, $character, $shouldTrim);

            if ($shouldRemoveQuotes) $result = strip_quotes($result);
        }

		$this->load->view('string-reducer', [
            'result' => @$result,
            'string' => $string,
            'character' => $character,
            'shouldTrim' => $shouldTrim,
            'shouldRemoveQuotes' => $shouldRemoveQuotes,
        ]);
	}

	public function increment()
	{
        $result = null;
        $string = @$this->input->post('string');
        $suffix = @$this->input->post('suffix');
        $separator = @$this->input->post('separator') ?? `-`;
        $action = @$this->input->post('action');
        $index = @$this->input->post('index') ?? 0;

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if ($action === 'Increment') $index = $index += 1;
            if ($action === 'Reset') $index = 1;

            $result = increment_string($string, $separator, $index);
        }

		$this->load->view('string-increment', [
            'result' => @$result . $suffix,
            'string' => $string,
            'suffix' => $suffix,
            'separator' => $separator,
            'index' => $index
        ]);
	}
}
