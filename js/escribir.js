var datos=function(){
    const a=document.createElement("a")
    var nombre=document.getElementById('Nombre').value;
    var apellido=document.getElementById('Apellido').value;
    var correo=document.getElementById('Correo').value;
    var coment=document.getElementById('coment').value;
    var motivo;
    var medio;
    if (c1.checked){motivo=document.getElementById("c1").value;}
    if (c2.checked){motivo=document.getElementById("c2").value;}
    if (c3.checked){motivo=document.getElementById("c3").value;}
    if (c4.checked){motivo=document.getElementById("c4").value;}
    if (c5.checked){medio=document.getElementById("c5").value;}
    if (c6.checked){medio=document.getElementById("c6").value;}
    if (c7.checked){medio=document.getElementById("c7").value;}
    if (c8.checked){medio=document.getElementById("c8").value;}
    const contenido=nombre+"\n"+apellido+"\n"+correo+"\n"+motivo+"\n"+medio+"\n"+coment;
    blob=new Blob([contenido],{type:"octet/stream"});
    url=window.URL.createObjectURL(blob);
    a.href=url;
    a.download="datos.txt";
    alert("Datos enviados, puede descargar el archivo")
    a.click();
    window.URL.revokeObjectURL(url);
}