<?php
require_once "../layout/admin-header.php";
showHeader("main2");
require_once "Category.php";
$category=new category("categories");
?>

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
            <h1>افزودن محصول جدید</h1>
            <form action="add-product-process.php" method="post" class="input">
                <div>
                    <label for="title">عنوان محصول</label>
                    <input type="text" name="title" id="title" dir="rtl">
                </div>
                <div>
                    <label for="price">قیمت</label>
                    <input type="number" name="price" id="price" dir="rtl">
                </div>
                <div>
                    <label for="inventory">موجودی</label>
                    <input type="number" name="inventory" id="inventory" dir="rtl">
                </div>
                <div>
                    <label for="category">دسته بندی</label>
                    <select name="category" id="category">
                        <?php
                        foreach ($category->select() as $data){
                            echo "<option value='{$data["id"]}'>{$data["title"]}</option>";
                        }
                        ?>
                    </select>
                </div>
                <input type="submit" value="افزودن" class="add">
            </form>
            <div class="back">
                <a href="products-panel.php">بازگشت</a>
            </div>
        </div>
    </div>
<?php
require_once "../layout/admin-footer.php";