let Small =document.querySelectorAll(".image")

    Small.forEach(function (smallimg){

    smallimg.addEventListener("click", function (){

        var bigImg= document.querySelector("#bigimg")

        bigImg.src=smallimg.src
        
    })
})







function cart (){
    let a,b,c,d 
    a=document.getElementById('first').value
    b=a*499.99
    document.getElementById('second').value=b
    c=(b*5.7)/100
    document.getElementById('third').value=c
    d=b+c
    document.getElementById('fourth').value=d
}
let tot=document.getElementById('first');
tot.addEventListener("keyup", cart);

