<?php
require_once "../layout/admin-header.php";
showHeader("main2");
require_once "Category.php";
$category=new category("categories");
$select=[];
$id=$_GET["id"];
foreach ($category->select() as $cat){
    if ($cat["id"]==$id){
        $select["title"]=$cat["title"];
        $select["id"]=$cat["id"];
    }
}
?>
    <div class="header">
        <div class="panel">
            <h2>پنل مدیریت</h2>
            <div class="line"></div>
            <ul>
                <li><a href="dashboard.php">داشبورد</a></li>
                <li><a href="categories-panel.php">دسته بندی</a></li>
                <li><a href="products-panel.php">محصولات</a></li>
            </ul>
        </div>
        <div class="inner-header">
            <div></div>
            <h1>ویرایش دسته</h1>
            <form action="update-category-process.php" method="post" class="input">
                <div>
                    <label for="title">عنوان</label>
                    <input type="text" name="title" id="title" value="<?=$select["title"]?>" dir="rtl">
                </div>
                <input type="hidden" name="id" value="<?=$select["id"]?>">
                <input type="submit" value="ویرایش" class="add">
            </form>
            <div class="back">
                <a href="categories-panel.php">بازگشت</a>
            </div>
        </div>
    </div>
<?php
require_once "../layout/admin-footer.php";