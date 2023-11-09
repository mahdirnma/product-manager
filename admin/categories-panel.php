<?php
require_once "../layout/admin-header.php";
showHeader("main2");
require_once "Category.php";
$category=new category("categories");
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
            <h1>دسته بندی</h1>
            <div class="back">
                <a href="add-category.php">افزودن دسته جدید</a>
            </div>
            <table class="header-table">
                <tr>
                    <td>حذف</td>
                    <td>ویرایش</td>
                    <td>عنوان دسته</td>
                    <td>شماره</td>
                </tr>
                <?php
                foreach ($category->select() as $cat){
                    echo "<tr>
                <td><a href='delete-category.php?id={$cat["id"]}'>حذف</a></td>
                <td><a href='update-category.php?id={$cat["id"]}'>ویرایش</a></td>
                <td>{$cat["title"]}</td>
                <td>{$cat["id"]}</td>
                </tr>
";
                }
                ?>
            </table>
        </div>
    </div>
<?php
require_once "../layout/admin-footer.php";