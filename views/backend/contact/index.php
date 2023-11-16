<?php
use App\Models\Contact;
//status=0--> Rac
//status=1--> Hiện thị lên trang người dùng
//
//SELECT * FROM brand wher status!=0 and id=1 order by created_at desc

$list = Contact::where('status','!=',0)->orderBy('Created_at','DESC')->get();
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <form action ="index.php?option=contact&cat=process" method="contact" enctype="multipart/form-data">

      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả liên hệ</h1>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
            <div class="col-md-6">
                  <a href="index.php?option=contact&cat=trash" class="btn btn-danger btn-sm">Thùng rác</a>
                  </div>
               <div class="card-header text-right">
                 Nội Dung
                 
               </div>
               
               <div class="card-body">
               <?php require_once "../views/backend/message.php";?>
                  <table class="table table-bordered" id="mytable">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           
                           <th>Họ tên</th>
                           <th>Email</th>
                           <th>Điện thoại</th>
                           <th>tiêu đề</th>
                           <th>nội dung</th>
                           <!-- <th>nội dung chi tiết</th> -->
                           <th>trạng thái</th>
                           <th>id</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php if(count($list) > 0) : ?>
                              <?php foreach($list as $item   ):?>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                              
                              </div>
                              <div class="name">
                                 <?= $item->name ; ?> 
                                    
                                 </div>
                                 <div class="function_style">
                                 <?php if ($item->status == 1) :?>
                                       <a href="index.php?option=contact&cat=status&id=<?=$item->id;?>
                                       "class="btn btn-success btn-xs"><i class="fas fa-toggle-on"></i>Hiện
                                    </a>
                                    <?php else :?>
                                       <a href="index.php?option=contact&cat=status&id=<?=$item->id;?>
                                       "class="btn btn-danger btn-xs"><i class="fas fa-toggle-off"></i>Ẩn 
                                       </a>  
                                       <?php endif;?>

                                       <a href="index.php?option=contact&cat=edit&id=<?=$item->id;?>
                                       "class="btn btn-primary btn-xs"><i class="fas fa-edit"></i>Chỉnh sửa</a> 
                                       <a href="index.php?option=contact&cat=show&id=<?=$item->id;?>
                                       "class="btn btn-info btn-xs"><i class="fas fa-eye"></i>Chi tiết</a> 
                                       <a href="index.php?option=contact&cat=delete&id=<?=$item->id;?>
                                       "class="btn btn-danger btn-xs"><i class="fas fa-trash"></i>Xoá</a>
                                       <a href="https://mail.google.com/mail/u/0/#inbox?compose=new
                                       "class="btn btn-primary btn-xs"><i class="fas fa-edit"></i>TRẢ LỜI QUA EMAIL</a>

                                 </div>
                           </td>
                           
                           
                           <td><?= $item->email?></td>
                           <td><?= $item->phone?></td>
                           <td><?= $item->title?></td>
                           <td><?= $item->content?></td>
                           <!-- <td><?= $item->replay_id?></td> -->
                           <td><?= $item->status?></td>
                           <td><?= $item->id?></td>
                           
                        </tr>
                        <?php endforeach;?>
                              <?php endif;?>
                     </tbody>
                  </table>
               </div>
               </div>
            </div>
         </section>
      </div>
      <form action ="index.php?option=brand&cat=process" method="contact" enctype="multipart/form-data">

      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>