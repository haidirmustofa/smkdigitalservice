<?php
function check_already_login()
{
  $ci = &get_instance();
  $user_session = $ci->session->userdata('IDUser');
  if ($user_session) {
    if ($ci->fungsi->user_login()->userStatus == 'Industri') {
      redirect(base_url() . 'member-industri');
    } else   if ($ci->fungsi->user_login()->userStatus == 'Sekolah') {
      redirect(base_url() . 'member-sekolah');
    } else 
    if ($ci->fungsi->user_login()->userStatus == 'Peserta') {
      redirect(base_url() . 'service-room');
    }
  }
}
function check_not_login()
{
  $ci = &get_instance();
  $user_session = $ci->session->userdata('IDUser');

  if (!$user_session) {
    redirect('login');
  }
  function check_superadmin()
  {
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->user_level != 1) {
      redirect('notFound');
    }
  }
}
