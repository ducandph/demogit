<?php 
function get_comments() {
    $sql = "SELECT * FROM `db_binhluan`";
    $listComments = pdo_query($sql);
    return $listComments;
}
// function delete_comment($comment_id) {
//     $sql = "DELETE FROM `db_binhluan` WHERE `ma_binhluan` = :comment_id";
//     $params = array(':comment_id' => $comment_id);
//     pdo_execute($sql, $params);
// }

function delete_binhluan($ma_binhluan){
    $sql = "DELETE FROM `db_binhluan` WHERE `ma_binhluan`='$ma_binhluan'";
    pdo_execute($sql);
}
?>