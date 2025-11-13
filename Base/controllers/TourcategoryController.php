<?php
class TourcategoryController
{
    public function index()
    {
        $tourcategorie = new Tourcategories();
        $listData = $tourcategorie->getList();
        $title = "Trang danh mục tour";
        $view = "admin/list-Tourcategory";
        require_once PATH_VIEW . 'main.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $tourcategorie = new Tourcategories();
            $tourcategorie->insert($_POST['name'], $_POST['description']);
            $_SESSION['success'][]="thêm mới thành công";
            header("Location: " . BASE_URL . "?action=admin-list-tour_categories");
            exit;
        } else {
            $title = "Trang thêm mới tour";
            $view = "admin/create-Tourcategory";
            require_once PATH_VIEW . 'main.php';
        }
    }

    public function update()
    {
         if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tourcategorie = new Tourcategories();
$tourcategorie->update($_GET['id'], $_POST['name'], $_POST['description']);
$_SESSION['success'][]="chỉnh sửa thành công";
        header("Location: " . BASE_URL . "?action=admin-list-tour_categories");

         }else{
    $tourcategorie = new Tourcategories();
$data = $tourcategorie->getOne($_GET['id']);
              $title = "Trang chỉnh sửa mục tour";
        $view = "admin/updateTourcategory";
        require_once PATH_VIEW . 'main.php';
         }

    }

    public function delete()
    {
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id > 0) {
    $tourcategorie = new Tourcategories();
    $tourcategorie->delete($id);
}
$_SESSION['success'][]="xóa thành công";
        header("Location: " . BASE_URL . "?action=admin-list-tour_categories");
        exit;
    }
}
