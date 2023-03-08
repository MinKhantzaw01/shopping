const myTimeout = setTimeout(disCartItem, 3000);


    function disCartItem(){
        let html ='';
        let cartItem=JSON.parse(localStorage.getItem('prdInCart'))
        cartItem.forEach(item =>{
            html +=` <tr class="cart_item">
            <td class="item-img">
                <a href="#"><img src="${item.image}"
                        alt="">
                </a>
            </td>
            <td class="item-title"> <a href="#">${item.name}</a></td>
            <td class="item-price"> ${item.price}  </td>
            <td class="item-qty">
                <div class="cart-quantity">
                    <div class="product-qty">
                        <div class="cart-quantity">
                            <div class="cart-plus-minus">
                                <div class="dec qtybutton">-
                                </div>
                                <input value="${item.quantity}"
                                    name="qtybutton"
                                    class="cart-plus-minus-box"
                                    type="text">
                                <div class="inc qtybutton">+
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="total-price"><strong> ${item.totalPrice}</strong>
            </td>
            <td class="remove-item" onclick="myFunction()"><a href="#"><i
                        class="fa fa-trash-o"></i></a></td>
        </tr>`
        });
        document.querySelector('.dcartdisp').innerHTML =html;
    
    }
    function myFunction(){
        window.localStorage.clear(event.target.parentElement.parentElement.parentElement.parentElement);
        window.location.reload();
    }
