<?php

function back(){
    return redirect($_SERVER['HTTP_REFERER']);
}

function postvalue($name,$xss=1){
    $ci=get_instance();
    return strip_tags(trim($ci->input->post($name,$xss)));
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

function flashhome($type,$title){
    $message='<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
            <strong>'.$title.'</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
            </div>';
    $ci=get_instance();
    $ci->session->set_flashdata('flashmessage2',$message);
}
function flash2read(){
    $ci=get_instance();
    echo $ci->session->flashdata('flashmessage2');
}
?>