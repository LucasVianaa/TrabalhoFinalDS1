function addInteresse(){
    var div = document.getElementById("teste")
    var newgen = document.createElement("INPUT")
    


    newgen.setAttribute("type", "text")
    newgen.setAttribute("name", "interesses[]")
    

    div.appendChild(newgen)

}