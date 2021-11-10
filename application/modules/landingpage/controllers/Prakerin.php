<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prakerin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_prakerin');
    }
    public function index()
    {
        $params['prakerin'] = $this->M_prakerin->get();
        $this->template->load('template/templateLanding', 'prakerin', $params);
    }
    public function detail($code)
    {
        $params['prakerin'] = $this->M_prakerin->getPrakerin($code);
        $kode = $params['prakerin'][0]['PrakerinCode'];
        $params['skill'] = $this->M_prakerin->getSkill($kode);
        $params['poc'] = $this->M_prakerin->getPoc($kode);
        $this->template->load('template/templateLanding', 'detailPrakerin', $params);
    }
    public function invoice($code)
    {
        $params['prakerin'] = $this->M_prakerin->getPrakerin($code);
        $params['skill'] = $this->M_prakerin->getSkill($code);
        $this->template->load('template/templateLanding', 'invoice', $params);
    }
    public function send()
    {
        $kode = $this->input->post('kode');
        $id['Prakerin'] = $this->M_prakerin->getID($kode);
        // var_dump($id['Prakerin'][0]['PrakerinName']);
        // die;
        foreach ($id['Prakerin'] as $params) {
            $id = $params['PrakerinCode'];
            $ind = $params['PrakerinIndustries'];
            $name = $params['PrakerinName'];
        }
        // var_dump($id);
        // var_dump($ind);
        // var_dump($name);
        // die;
        $this->_sendEmail($id, $ind, $name);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Periksa E-mail Anda</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    private function _sendEmail($id, $ind, $name)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.hostinger.com',
            'smtp_user' => 'support@smkdigitalservice.com',
            'smtp_pass' => 'Passw0rd',
            'smtp_port' => 587,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];
        $this->load->library('email', $config);
        $this->email->from('support@smkdigitalservice.com', 'SMK DIGITAL SERVICE');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Pendaftaran PRAKERIN SMK DIGITAL SERVICE');
        $this->email->message(
            'Halo ' . $this->input->post('name') . ',<br>
            Terimakasih telah mempercayakan SMK Digital Service<br>
            Berikut informasi mengenai kegiatan prakerin yang anda pilih <br><br>
            <b>Perusahaan    : ' . $ind . ' <br>
            Pekerjaan        : ' . $name . '<br>
            Kode Room        : ' . $id . '<br> </b>
            <br>berikut tata cara pendaftaran :
            <br>1. Silahkan login atau melakukan pembuatan akun pada link berikut ini : <br>
            https://www.smkdigitalservice.com/monitoringprakerin/
            <br>2. Setelah berhasil masuk , silahkan klik Tombol " Masukan Kode Room "
            <br>3. Lalu masukan kode Room yang sudah di sediakan di atas <br><br>
            Jika Anda mengalami kesulitan , silahkan hubungi cp ( Finna )  melalui chat WhatsApp ke nomer wa.me/6285161431605
            <br>Demikian kami informasikan, atas perhatiannya kami ucapkan terimakasih.
            <br><br>Best Regards<br>
            <b>SMK Digital Service</b><br>
            www.smkdigitalservice.com<br><br>
            SMK Digital Service adalah bagian dari CV.Educare Digital Indonesia
            '
        );
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        };
    }
}
