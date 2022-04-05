function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {
    // alert('List is saved');
    var cartItems = document.getElementsByClassName('cart-items')[0]
        // while (cartItems.hasChildNodes()) {
        //     cartItems.removeChild(cartItems.firstChild);
        //       // console.log(cartItems.firstChild);
        // }



    var arrb = {};
    var jsonstr = "";
    for (var i = 0; i < $(".cart-items .cart-row").length; i++) {

        // arrb.push($($(".cart-items .cart-row")[i]).find(".cart-item-image").attr("src"),$($(".cart-items .cart-row")[i]).find(".cart-item-title").html(),$($(".cart-items .cart-row")[i]).find(".cart-price").html(),$($(".cart-items .cart-row")[i]).find(".cart-quantity-input").val());
        var arr = [];

        arr['imgsrc'] = $($(".cart-items .cart-row")[i]).find(".cart-item-image").attr("src");
        arr['name'] = $($(".cart-items .cart-row")[i]).find(".cart-item-title").html();
        arr['desc'] = $($(".cart-items .cart-row")[i]).find(".cart-desc").html();
        arr['price'] = $($(".cart-items .cart-row")[i]).find(".cart-price").html();
        arr['number'] = $($(".cart-items .cart-row")[i]).find(".cart-quantity-input").val();
        arr.push($($(".cart-items .cart-row")[i]).find(".cart-item-image").attr("src"), $($(".cart-items .cart-row")[i]).find(".cart-item-title").html(), $($(".cart-items .cart-row")[i]).find(".cart-desc").html(), $($(".cart-items .cart-row")[i]).find(".cart-price").html(), $($(".cart-items .cart-row")[i]).find(".cart-quantity-input").val());
        console.log(arr);
        arrb[i] = JSON.stringify(arr);
        // jsonstr +='{"name": "xxx1", "age": "28"},';

        // arrb.push(arr);
        // console.log($($(".cart-items .cart-row")[i]).find(".cart-item-image").attr("src"));
        // console.log($($(".cart-items .cart-row")[i]).find(".cart-item-title").html());
        // console.log($($(".cart-items .cart-row")[i]).find(".cart-price").html());
        // console.log($($(".cart-items .cart-row")[i]).find(".cart-quantity-input").val());
        // console.log(arrb[i]);
    }

    $.ajax({
        type: 'post',
        // data:JSON.stringify(arrb),
        data: arrb,
        // data:result,
        dataType: 'json',
        url: 'post.php',
        success: function(data) {
            if (data.success == "200") {
                alert(" Successfully processed! ");
                while (cartItems.hasChildNodes()) {
                    cartItems.removeChild(cartItems.firstChild);
                    // console.log(cartItems.firstChild);
                }
            } else {
                // art.dialog.alert(data.message);
                alert(" Processing failed! ");
            }
        },
        error: function(data) {
            alert(" Processing failed! ");
        }
    });


    // console.log(arrb);


    updateCartTotal()
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('card-title')[0].innerText
    var desc = shopItem.getElementsByClassName('card-text')[0].innerText
    var price = shopItem.getElementsByClassName('price shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('img-fluid card-img-top shop-item-image')[0].src
    addItemToCart(title, desc, price, imageSrc)
    updateCartTotal()
}

function addItemToCart(title, desc, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
            <span class="cart-desc cart-column">${desc}</span>
            <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('RM', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = 'RM' + total
}