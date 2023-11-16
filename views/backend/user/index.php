<?php

use App\Models\User;

//status=0--> Rac
//status=1--> Hiện thị lên trang người dùng
//
//SELECT * FROM user wher status!=0 and id=1 order by created_at desc

$list = user::where('status', '!=', 0)->orderBy('Created_at', 'DESC')->get();

?>

<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<form action="index.php?option=user&cat=process" method="post" enctype="multipart/form-data">

   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-12">
               <h1 class="d-inline">Tất cả thành viên</h1>
               <a href="index.php?option=user&cat=create" class="btn btn-sm btn-primary">Thêm thành viên</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Main content -->
      <section class="content">
         <div class="card">
            <div class="card-header ">
               <div class="row">
                  <div class="col-md-6">
                  <a href="index.php?option=user">Tất cả</a> |
                        <a href="index.php?option=user&cat=trash"> Thùng rác</a>
                  </div>
                  <div class="col-md-6 text-right">

                  </div>
               </div>
            </div>
            <div class="card-body">
            <?php require_once "../views/backend/message.php"; ?>

            <table class="table table-bordered table-hover">
                  <thead>
                     <tr>
                        <th class="text-center" style="width:30px;">
                           <input type="checkbox">
                        </th>
                        <th class="text-center" style="width:130px;">Hình ảnh</th>
                        <th class="text-center">Tên người dùng</th>
                        <th class="text-center">Điện thoại</th>
                        <th class="text-center">Email</th>
                        <th class="text-center" style="width:170px">Chức năng</th>
                        <th class="text-center" style="width:30px">ID</th>

                     </tr>
                  </thead>
                  <tbody>
                     <?php if (count($list) > 0) : ?>
                        <?php foreach ($list as $item) : ?>
                           <tr>
                              <td class="text-center">
                                 <input type="checkbox" />
                              </td>
                              <td class="text-center">
                                 <img src="../public/images/user/<?= $item->image; ?>" class="img-fluid" alt="hinh">
                              </td>
                              <td class="text-center"> <?= $item->name; ?></td>
                              <td class="text-center"> <?= $item->phone; ?></td>
                              <td class="text-center"> <?= $item->email; ?></td>
                              <td class="text-center">

                              <?php if ($item->status == 1) : ?>
                                       <a href="index.php?option=user&cat=status&id=<?=$item->id; ?>" class="btn 
                                       btn-success btn-xs">
                                          <i class="fas fa-toggle-on"></i> Hiện
                                       </a>
                                       <?php else : ?>
                                       <a href="index.php?option=user&cat=status&id=<?= $item->id; ?>" class="btn 
                                       btn-danger btn-xs">
                                          <i class="fas fa-toggle-off"></i> Ẩn
                                       </a>
                                       <?php endif; ?>
                                       <a href="index.php?option=user&cat=edit&id=<?=$item->id; ?>" class="btn btn-primary btn-xs">
                                       <i class="fas fa-edit"></i> Chỉnh sửa
                                       <a href="index.php?option=user&cat=show&id=<?=$item->id; ?>" class="btn btn-info btn-xs">
                                       <i class="fas fa-eye"></i> Chi tiết
                                       </a>
                                       <a href="index.php?option=user&cat=delete&id=<?=$item->id; ?>" class="btn btn-danger btn-xs">
                                       <i class="fas fa-trash"></i> Xoá
                                       </a>
                              </td>
                              <td class="text-center"><?= $item->id; ?></td>
                           </tr>
                        <?php endforeach; ?>
                     <?php endif; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </section>
   </div>
</form>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>