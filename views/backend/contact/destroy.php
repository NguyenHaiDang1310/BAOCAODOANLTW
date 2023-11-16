<?php
use App\Models\contact;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$contact=contact:: find($id);

if($contact == null){
    MyClass::set_flash('message', ['type' => 'danger', 'msg' => 'Lỗi Trang 404']);

            header('location: index.php?option=contact');
}
$contact->delete();
MyClass::set_flash('message', ['type' => 'success', 'msg' => 'Xóa khỏi CSDL thành công']);

header('location: index.php?option=contact&cat=trash');

