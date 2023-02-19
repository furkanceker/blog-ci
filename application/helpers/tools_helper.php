<?php

function back(){
    return redirect($_SERVER['HTTP_REFERER']);
}

function flash($type,$text){
    $message = '<div class="alert alert-'.$type.' mt-3">'.$text.'</div>';
    $ci = get_instance();
    $ci->session->set_flashdata('flashmessage',$message);
}
function flashread(){
    $ci=get_instance();
    echo $ci->session->flashdata('flashmessage');
}
?>