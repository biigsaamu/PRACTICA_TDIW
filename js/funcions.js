async function loadBooks(categoryID){
    console.log(categoryID);
    var answer = await fetch('index.php?action=productos&categoria_id='+categoryID);
    var answerText = await answer.text();
    document.getElementById('libros_categoria').innerHTML = answerText;
    console.log('load completed!');
}

async function loadBookDetails(bookID, categoryID){

    console.log(bookID, categoryID);
    
    try {
        let answer = await fetch('index.php?action=detalles_producto&libro_id='+bookID+'&categoria_id='+categoryID)
        const answerText = await answer.text();
        document.getElementById('subsPage').innerHTML = answerText;
        console.log('loadBookDetails completed!');
    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }
    
}

async function increaseQuantity() {
    var strQuantity = document.getElementById('quantity').innerHTML;
    var intQuantity = parseInt(strQuantity); 
    console.log(intQuantity);
    document.getElementById('quantity').innerHTML = intQuantity + 1;
    console.log("Quantity increased");
}

async function decreaseQuantity() {
    var strQuantity = document.getElementById('quantity').innerHTML;
    var intQuantity = parseInt(strQuantity); 
    console.log(intQuantity);
    if (intQuantity > 1) {
        document.getElementById('quantity').innerHTML = intQuantity - 1;
        console.log("Quantity decreased");
    }
}

async function updateCartFooter() {
    try {
        var answerFooter = await fetch('index.php?action=update_footer');
        var answerFooterText = await answerFooter.text();
        document.getElementById('subFooter').innerHTML = answerFooterText;
        console.log('Footer actualizado');
    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }    
}

async function goToCartPage() {
    try {
        var answer = await fetch('index.php?action=carrito');
        var answerText = await answer.text();
        document.getElementById('subsPage').innerHTML = answerText;
        console.log("PPágina del carrito cargada"); 

    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }       
}

async function addBookToCart(bookID) {
   
    console.log(bookID);
    try {
        var quantity = document.getElementById('quantity').innerHTML;
        var answer = await fetch('index.php?action=carrito&libro_id='+bookID+'&quantity='+quantity);
        var answerText = await answer.text();
        document.getElementById('subsPage').innerHTML = answerText;
        console.log("Producto añadido correctamente al carrito"); 

        updateCartFooter();

    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }       


}

async function vaciarCarrito() {
    try {
        var answer = await fetch('index.php?action=vaciar_carrito');
        var answerText = await answer.text();
        console.log(answerText);
        document.getElementById('subsPage').innerHTML = answerText;
        console.log("Carrito vaciado");

        updateCartFooter();    

    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }
    
}

async function modifyQuantity(sign, bookId) {
    var quantity =  document.getElementById('product_'+bookId+'_quantity').innerHTML;
    console.log("qtty " + quantity);
    console.log("bookID " + bookId);
    if (sign == '+' && quantity > 0) {
        quantity++;
    } else if (sign == '-' && quantity > 1) {
        quantity--;
    }
    console.log("qqt modified " + quantity);
    try {
        var answer = await fetch('index.php?action=modify_product_quantity&bookId='+bookId+'&quantity='+quantity);
        var answerText = await answer.text();
        document.getElementById('subsPage').innerHTML = answerText;
        console.log('Cantidad modificada');

        updateCartFooter();
        
    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }

}

async function romoveProductFromCart(bookId) {
    console.log(bookId);

    try {
        var answer = await fetch('index.php?action=remove_product&bookId='+bookId);
        var answerText = await answer.text();
        document.getElementById('subsPage').innerHTML = answerText;
        console.log('Producto eliminado del carrito');

        updateCartFooter();

    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }
}

async function submitPurchase() {

    try {
        var answer = await fetch('index.php?action=submit_compra');
        var answerText = await answer.text();
        document.getElementById('subsPage').innerHTML = answerText;
        console.log('Compra realizada');

        updateCartFooter();

    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }

}

async function goToOrdersHistory(userID) {
    try {
        var answer = await fetch('index.php?action=pedidos&user_id='+userID);
        var answerText = await answer.text();
        document.getElementById('subsPage').innerHTML = answerText;
        console.log('Pedidos cargados');
    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }
    
}

async function goToAccountData(userID) {
    try {
        var answer = await fetch('index.php?action=info_cuenta&user_id='+userID);
        var answerText = await answer.text();
        document.getElementById('subsPage').innerHTML = answerText;
        console.log('Información de cuenta cargada');
    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }
}

async function goToProfileSetting(userID) {
    console.log(userID);
    try {
        var answer = await fetch('index.php?action=editar_cuenta&user_id='+userID);
        var answerText = await answer.text();
        document.getElementById('subsPage').innerHTML = answerText;
        console.log('Página de editar perfil cargada');
    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }
}

async function saveChanges(userID) {
    console.log(userID);
    var name = document.getElementById('name').value;
    console.log(name);
    try {
        var answer = await fetch('index.php?action=cuenta&user_id='+userID+'&name='+name);
        var answerText = await answer.text();
        document.getElementById('subsPage').innerHTML = answerText;
        console.log('Cambios guardados');
    } catch (error) {
        console.error('Error durante la solicitud:', error.message);
    }
    return false;
}

async function mostrarUserMenu() {
    $('.dropdown-menu').toggle();
    console.log("Mostrando menu...");
 
 }
 
 async function ocultarUserMenu() {
     $('.dropdown-menu').toggle();
     console.log("Ocultando menu...");
 }
