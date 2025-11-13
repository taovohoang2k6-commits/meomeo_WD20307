<div class="container">
   <div class="row">
      <div class="col-3">
         <?php include "views/admin/sidebar.php"; ?>
      </div>
      <div class="col-9">
         <a href="<?= BASE_URL ?>?action=admin-create-tour_categories" class="btn btn-primary btn-sm">Thêm mới</a>
         <table class="table">
            <thead>
               <tr>
                  <th>STT</th>
                  <th>Tên tour</th>
                  <th>Mô tả</th>
                  <th>Hành động</th>
               </tr>
            </thead>
            <tbody>
            <?php if (!empty($listData) && is_array($listData)): ?>
                <?php foreach ($listData as $key => $value): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= htmlspecialchars($value['name']) ?></td>
                        <td><?= htmlspecialchars($value['description']) ?></td>
                        <td>
                            <a href="<?= BASE_URL ?>?action=admin-update-tour_categories&id=<?= $value['category_id'] ?>">Sửa</a>
                            <a href="<?= BASE_URL ?>?action=admin-delete-tour_categories&id=<?= $value['category_id'] ?>" onclick="return confirm('Bạn có muốn xóa không')">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">Không có dữ liệu</td></tr>
            <?php endif; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
