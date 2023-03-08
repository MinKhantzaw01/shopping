const myTimeout = setTimeout(disCartItem, 3000);


    function disCartItem(){
        let html ='';
        let cartItem=JSON.parse(localStorage.getItem('prdInCart'))
        cartItem.forEach(item =>{
            html +=`   <tr class="cart_item check-item prd-name">
            <td class="item-img"><img src="${item.image}"></td>
            <td class="ctg-type"> ${item.name}</td>
            <td class="cgt-des">  ${item.totalPrice}</td>
        </tr>`
        });
        document.querySelector('.cartcom').innerHTML =html;
    
    }
    function myFunction(){
        window.localStorage.clear(event.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement);
        window.location.reload();
    }
