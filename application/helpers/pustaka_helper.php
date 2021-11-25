<?php
<<<<<<< HEAD

function cek_login()
{
    $ci = get_instance();

    if if (!$ci->session->userdata('email')) { 
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses ditolak. Anda belum login!! </div>'); 
        redirect('autentifikasi'); 
    } else { 
        $role_id = $ci->session->userdata('role_id'); 
    }
}
?>
=======
function cek_login()
{
 $ci = get_instance();
 if (!$ci->session->userdata('email')) {
 $ci->session->set_flashdata('pesan', '<div class="alert 
alert-danger" role="alert">Akses ditolak. Anda belum login!! 
</div>');
 redirect('autentifikasi');
 } else {
 $role_id = $ci->session->userdata('role_id');
 }
}
>>>>>>> ac23d9e9bcbd029468614c05d262330a12046fa9
