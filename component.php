<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="product.js"></script>
</head>
<body>
    
</body>

<?php

    function component($productid, $productname, $productprice, $productdesc, $productimg){
        $element = "<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                        <form action=\"product.php\" method=\"post\">
                            <div class=\"card shadow\">
                                <div>
                                    <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top shop-item-image\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">$productname</h5>
                                    
                                    <p class=\"card-text\">
                                    $productdesc
                                    </p>
                                    <h5>
                                        <small><s class=\"text-secondary\"></s></small>
                                        <span class=\"price shop-item-price\">RM$productprice</span>
                                    </h5>

                                    <button type=\"button\" class=\"btn btn-warning shop-item-button my-3\" name=\"add\" onClick=\"<script src='product.js'>addToCartClicked()</script>\">Add to List</button>
                                    <input type='hidden' name='product_id' value='$productid'>
                                </div>
                            </div>
                        </form>
                    </div>";
        echo $element;
    }

    function productrow($productid, $productname, $productprice, $productdesc, $productimg){
        $element = "<thead class=\"thead-light\">
                    <tr>

                        <th><div class=\"col-xs-12\">
                        <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i><a href=\"edit.php?id=$productid\"><input type=\"submit\" value=\"Edit\" name=\"Edit\" class=\"btn btn-primary\" style=\"background-color:#FFAD00; border-color: #FFAD00; margin-left: 10px;\"></a></div></th>
                        <th><img src=\"$productimg\" width=\"90\" height=\"55\"/></th>
                        <th>$productname</th>
                        <th>$productdesc</th>
                        <th>$productprice</th>
                        <th><div class=\"col-xs-12\">
                        <i class=\"fas fa-trash\" aria-hidden=\"true\"></i><a href=\"delete.php?id=$productid\" onClick=\"return confirm('Are you sure you want to remove the $productname?')\"><input type=\"submit\" value=\"Remove\" name=\"Delete\" class=\"btn btn-primary\" style=\"background-color:#FFAD00; border-color: #FFAD00; margin-left: 10px;\"></a></div></th>

                    </tr>
                    </thead>";
        echo $element;
    }

    function slrow($id, $name, $description){
        $element = "<thead class=\"thead-light\">
                    <tr>

                        <th><div class=\"col-xs-12\">
                        <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i><a href=\"editlist.php?id=$id\"><input type=\"submit\" value=\"Edit\" name=\"Edit\" class=\"btn btn-primary\" style=\"background-color: #FFAD00; border-color: #FFAD00; margin-left: 10px;\"></a></div></th>
                        <th>$name</th>
                        <th>$description</th>
                        <th><div class=\"col-xs-12\">
                        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i><a href=\"viewlist.php?id=$id\" ><input type=\"submit\" value=\"View\" name=\"View\" class=\"btn btn-primary\" style=\"background-color: #FFAD00; border-color: #FFAD00; margin-left: 10px;\"></a></div></th>
                        <th><div class=\"col-xs-12\">
                        <i class=\"fas fa-trash\" aria-hidden=\"true\"></i><a href=\"deletelist.php?id=$id\" onClick=\"return confirm('Are you sure you want to remove the $name?')\"><input type=\"submit\" value=\"Remove\" name=\"Delete\" class=\"btn btn-primary\" style=\"background-color: #FFAD00; border-color: #FFAD00; margin-left: 10px;\"></a></div></th>

                    </tr>
                    </thead>";
        echo $element;
    }
?>

<script src="product.js"></script>
</html>