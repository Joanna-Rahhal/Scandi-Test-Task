function select(that){
    if(that.value == "DVD"){
        document.getElementById("dvd-box").style.display="block";
        document.getElementById("book-box").style.display="none";
        document.getElementById("furniture-box").style.display="none";
    }
    else if(that.value == "Book"){
        document.getElementById("book-box").style.display="block";
        document.getElementById("dvd-box").style.display="none";
        document.getElementById("furniture-box").style.display="none";
    }
    else{
        document.getElementById("furniture-box").style.display="block";
        document.getElementById("book-box").style.display="none";
        document.getElementById("dvd-box").style.display="none";
    }
}