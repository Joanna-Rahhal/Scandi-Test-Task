function clicksave(){
    var a=document.getElementById('dvd-box');
    var b=document.getElementById('size').value;
    var c=document.getElementById('furniture-box');
    var d=document.getElementById('height').value;
    var e=document.getElementById('width').value;
    var f=document.getElementById('length').value;
    var g=document.getElementById('book-box');
    var h=document.getElementById('weight').value;
    var sku=document.getElementById('sku').value;
    var name=document.getElementById('name').value;
    var price=document.getElementById('price').value;
    
    if(a.style.display=='block' && b==''){
        alert('Please fill the required fields');
        return false;
    }
    else if(c.style.display=='block'&& (d=='' || e==''||f=='')){
        alert('Please fill the required fields');
        return false;
    }
    else if(g.style.display=='block' && h==''){
        alert('Please fill the required fields');
        return false;
    }
    else if(sku==''|| name==''|| price==''){
        alert('Please fill the required fields');
        return false;
    }
}