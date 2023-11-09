<?php
require_once "../layout/admin-header.php";
showHeader("main2");
require_once "Product.php";
$product=new product("products");
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
            <h1>محصولات</h1>
            <div class="back">
                <a href="add-product.php">افزودن محصول جدید</a>
            </div>
            <table class="header-table">
                <tr>
                    <td>حذف</td>
                    <td>ویرایش</td>
                    <td>دسته</td>
                    <td>تعداد موجودی</td>
                    <td>قیمت</td>
                    <td>عنوان محصول</td>
                    <td>شماره</td>
                </tr>
                <?php
                foreach ($product->selectSpecial() as $data){
                    $price=number_format($data["price"]);
                    echo "<tr>
                <td><a href='delete-product.php?id={$data["id"]}'>حذف</a></td>
                <td><a href='update-product.php?id={$data["id"]}'>ویرایش</a></td>
                <td>{$data["category"]}</td>
                <td>{$data["inventory"]}</td>
                <td>{$price}</td>
                <td>{$data["title"]}</td>
                <td>{$data["id"]}</td>
                </tr>
";
                }
                ?>
            </table>
        </div>
    </div>
<?php
require_once "../layout/admin-footer.php";