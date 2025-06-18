console.log(document.getElementByID)("test").innertext);

tags = document.querySelector(".nav-links").children;
for ( i=0;i<tags.length;i++){
    tags[i].addEventListener("click",function (event){
        alert(event.target.innertext);
    });
}

document.querySelectorAll(".title").foreach((abc)=>{
    abc.onclick = function()
        prompt(this.innertext);
});


document.querySelectorAll(".title").forEach(abc) =>{
    abc.onclick =function(){
        this.innerHTML = 
        <h3>
            <a href="#"> This is By Js </a>
            <p>This is assigned dynamically</p>
        </h3>
        `;
        this.style.color="yellow";
        this.style.backgroundcolor = "#000000";
        this.style.borderradius = "20px";
        this.style.padding = "20px";
    };
};
