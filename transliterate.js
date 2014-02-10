function br2nl(str) {
    return str.replace(/<br\s*\/?>/mg,"\n");
}
function stripbr(str) {
    return str.replace(/<br\s*\/?>/mg,"");
}
function nl2br(str) {
    return str.replace(/\n/g, "<br/>");
}
function do_itrans() {
    itrans_objects = document.getElementsByTagName("itrans");
    for ( var i=0; i < itrans_objects.length; i++) {
        obj = itrans_objects[i]
        content = stripbr(obj.innerHTML)
        translated_content=""
        // do some optional formatting based on options
        to = obj.getAttribute("to") || "iast,devanagari"
        from = obj.getAttribute("from") || "itrans"

        to_values = to.split(",")
        for (j=0; j< to_values.length; j++) {
            translated_content += nl2br(Sanscript.t(content, from, to_values[j]));
            translated_content += "<br/>"
        }
        obj.innerHTML = translated_content
    }
}

do_itrans();
