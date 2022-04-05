<?php
include './mysqlcon.php';

$abcd=mysqlsetectalltwo($conn,"SELECT * FROM `ordershop` ");
// echo "<pre>";
// var_dump($abcd);
// exit;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="main.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="profile.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="jquery-1.11.0.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <title>GREENSTORE</title>
    <link rel="icon" href="trolley.gif">
</head>

<body>

<header style="background-color: white;">
        <nav class="navbar navbar-expand navbar-light ">
            <a class="navbar-brand ">
                <h1 style="color:#659A41; ">GREEN
                    <p2 style="color:#91C11E ">STORE</p2>
                </h1>
            </a>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " style="color: orange; text-transform: uppercase;" href="mainpage.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " style="color: orange; text-transform: uppercase;" href="product.php">&nbsp;Product</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" style="color: rgb(226, 147, 1); text-transform: uppercase; " href="sl.php">&nbsp;Shopping List</a>
                </li>
            </ul>
            </div>
            <a class="nav-link btn btn-danger" style="text-decoration:none; color:white;" href="logout.php">
                &nbsp;LOGOUT
            </a>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-1" style="width: 899px; margin-right: 10px;">
                    <div class="container-fluid-1">
                        <table id="listTable" class="table" style="width: 900px;">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Edit</th>
                                    <th>List Name</th>
                                    <th>List Description</th>
                                    <th>View List</th>
                                    <th>Delete</th>
                                </tr>

                                <?php foreach ($abcd as $k => $v) {?>
                                    <tr>
                                        <td><?php echo $v['id']; ?></td>
                                        <td><div class="remark" zidaun="orderno" id="<?php echo $v['id']; ?>"><?php echo $v['orderno']; ?></div></td>
                                        <td><div class="remark" zidaun="Description" id="<?php echo $v['id']; ?>"><?php echo $v['Description']!=NULL?$v['Description']:'no';?>&nbsp&nbsp&nbsp</td>
                                        <td><a href="order.php?id=<?php echo $v['id']; ?>" target="_blank" >look</a></td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                                
                                
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-2" style="width: 300px; margin-left: 10px;">
                    <div class="container-fluid-2">
                        <div class="panel panel-primary" style="margin-bottom: 10px; border-color:#659A41;">
                            <div class="panel-heading" style="background-color: #659A41; color: white; border-color:#659A41; font-size: 30px; padding: 10px;">
                                Shopping List Information
                            </div>
                            <div class="panel-body" style="font-size: 15px;">
                                <div class="form-group">
                                    <label for="listname">List Name: </label>
                                    <input type="text" class="form-control" id="listnamef" />
                                </div>
                                <div class="form-group">
                                    <label for="listdes">Description: </label>
                                    <input type="text " class="form-control " id="listdesf" />
                                </div>
                                <div class="panel-footer" style="background-color: white;border: none;">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button type="button" id="updateButton" class="btn btn-primary" onclick="listUpdate();" style="background-color:#FFAD00;">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </main>

    <footer>
        <div class="container-fluid">
            <div class=" row ">

                <div class="col-sm ">
                    <div class="footer-widget ">
                        <h2 class="widget-title ">About</h2>
                        <p>Green Store helps you to manage grocery shopping list before going to the store to buy the products. HAPPY SHOPPING PEEPS!</p>
                        <h2 class="widget-title ">Stay Connected</h2>
                        <div class="social-widget ">
                            <a href="www.facebook.com "><i class="fa fa-facebook-square "></i></a>
                            <a href="www.googleplus.com "><i class="fa fa-google-plus-square "></i></a>
                            <a href="www.instagram.com "><i class="fa fa-instagram "></i></a>
                            <a href="www.twitter.com "><i class="fa fa-twitter "></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm categories-widget ">
                    <div class="footer-widget ">
                        <h2 class="widget-title ">Categories</h2>
                        <ul>
                            <li><a href="product.html ">Fruits</a></li>
                            <li><a href="product.html ">Vegetables</a></li>
                            <li><a href="product.html ">Beverages</a></li>
                            <li><a href="product.html ">Chocolates & Snacks</a></li>
                            <li><a href="product.html ">Bread & Bakery</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm informations-widget ">
                    <div class="footer-widget ">
                        <h2 class="widget-title ">Informations</h2>
                        <ul>
                            <li><a href="# ">About Us</a></li>
                            <li><a href="# ">Contact Us</a></li>
                            <li><a href="# ">Help & FAQs</a></li>
                            <li><a href="# ">Terms & Conditions</a></li>
                            <li><a href="# ">Private Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm ">
                    <div class="footer-widget contact-widget ">
                        <h2 class="widget-title ">Contact</h2>

                        <div class="contact-address ">
                            <i class="fa fa-map-marker "></i> Address : Jalan 6/95B, Cheras Utama, 56100 Kuala Lumpur, Malaysia
                        </div>

                        <div class="contact-number ">
                            <i class="fa fa-phone-square "></i> Phone : 1300-800-600
                        </div>

                        <div class="contact-email ">
                            <i class="fa fa-envelope "></i> Email : greenstore@gmail.com
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="copyright ">
            <div class="container ">
                <p>Copyright &copy; 2021. GREEN STORE. All Rights Reserved </p>

            </div>

        </div>
    </footer>


    <script src="sl.js"></script>
    <script src="profile.js "></script>


</body>

</html>
<script type="text/javascript">
    

$('table#listTable').on("dblclick",".remark",function(){
    // alert(123);
    let $td=$(this);    //获取被双击的td单元格
    let _t=$td.text().trim();  //被双击的td单元格里的文本内容
    let _w= 100; // $td.width(); //被双击的td单元格的宽度
    let _h= 40; // $td.height(); //被双击的td单元格的高度
    $td.html("");        //清空被双击的td单元格里的内容
    let $input=$("<input type='text' value=''>");//设置一个待添加的input表单
    //下面这句是把input表单添加到被双击的单元格里，
    //并设置好input表单的宽高，并让其获取焦点，并设置在失去焦点事的动作
    $input.appendTo($td).width(_w).height(_h).val(_t).focus().blur(function(){
        //失去焦点时，把input的值赋给td单元格
        // console.log($td.attr("id"));
        let remark = $(this).val();
        let zidaun = $td.attr("zidaun");
        let id = $td.attr("id");
        // ajax 设置备注
        $.ajax({
            type:'POST',
            url:'ajax_set_remark.php',
            data: {id: id,remark:remark,zidaun:zidaun},
            dataType:'json',
            success:function(data){
                if(data.success == 200){
                        $td.html(remark);
                        // $("#update_time_"+id).html(data.date);
                }else{
                        $td.html(_t);
                    return false;
                }
            }
        });

    });
});
</script>