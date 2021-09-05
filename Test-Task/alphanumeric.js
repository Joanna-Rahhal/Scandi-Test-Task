function alphanumeric()
{ 
    var inputElems = document.getElemenstByTagName("input");
    for (var i=0; i<inputElems.length; i++) {
    var elem = inputElems[i];
    if (elem.nodeName == "INPUT" && /(?:^|\s+)alphanumericOnly(?:\s+|$)/.test(elem.className) ){
        elem.onkeyup = function() {
            this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
        }
    }
}
    
}