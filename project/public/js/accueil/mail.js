const mail = _ => {

    const name=document.getElementById("Nom").value;
    const subject=document.getElementById("Objet").value;
    let body=document.getElementById("textarea").value;

    body=body.replace(/\n/g, "%0A");

    body+="%0A%0A"+
            "--%0A%0A"+
            name;

    let link= "mailto:lapresentation@orange.fr?"+
                "subject="+subject+
                "&body="+body;
    

    window.open(link, '_blank');
}