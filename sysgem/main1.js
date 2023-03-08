
const btn = document.getElementsByClassName('add-cart')
const products=[]
for(var i=0; i<btn.length; i++){
    let cartBtn =btn[i];
    cartBtn.addEventListener('click',()=>{
        let product = {
            image : event.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[0].src,
            name : event.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[0].textContent,
            price : event.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].children[0].children[0].textContent,
            totalPrice : parseInt(event.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].children[0].children[0].textContent),
            quantity: 1
        }
        console.log(product);
        addItemToLocal(product)
    })
}
function addItemToLocal(product){
    let cartItem=JSON.parse(localStorage.getItem('prdInCart'))
    if(cartItem === null){
        products.push(product)
        localStorage.setItem('prdInCart', JSON.stringify(products))
    }else{
        cartItem.forEach(item =>{
            if(product.name == item.name){
                product.quantity=item.quantity += 1;
                product.totalPrice=item.totalPrice += product.totalPrice;
            }else{
                products.push(item)
            }
        });
        products.push(product)
    }
    localStorage.setItem('prdInCart',JSON.stringify(products))
    window.location.reload();
}
function disCartItem(){
    let html ='';
    let cartItem=JSON.parse(localStorage.getItem('prdInCart'))
    cartItem.forEach(item =>{
        html +=` <div class="cart-img">
        <a href="#"><img src="${item.image}" alt=""></a>
    </div>
    <div class="cart-content">
        <div class="cart-name"> <a href="#">${item.name}</a>
        </div>
        <div class="cart-price">${item.price}  </div>
        <div class="cart-qty"> Qty: <span>${item.quantity}</span> </div>
    </div>
    <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a>
    </div>
    </div>

<div class="cart-subtotal"> Subtotal: <span>${item.totalPrice}</span> </div>`
    });
    document.querySelector('.cartdisp').innerHTML =html;
}
disCartItem()

function cartNumberDisplay(){
    let cartNumbers=0;
    let cartItem= JSON.parse(localStorage.getItem('prdInCart'))
    cartItem.forEach(item=>{
        cartNumbers=item.quantity += cartNumbers;
    });
    console.log(cartNumbers);
    document.querySelector('.nav span').textContent=cartNumbers;
}
cartNumberDisplay();
const removeItem= document.getElementsByClassName('remove')
for(var i=0;i<removeItem.length;i++){
    let removeBtn=removeItem[i]
    removeBtn.addEventListener('click',()=>{
        let cartItem=JSON.parse(localStorage.getItem('prdInCart'))
        // console.log(event.target.parentElement.parentElement);
        window.localStorage.clear(event.target.parentElement.parentElement);
        window.location.reload();
        
    })
    
}
