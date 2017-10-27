hi admin

<?php
$msg = $this->session->userdata('message');
if ($msg) {
    echo $msg;
    $this->session->unset_userdata('message');
}
?>