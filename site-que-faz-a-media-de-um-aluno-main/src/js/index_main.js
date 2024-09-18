let body = document.body
body.style.backgroundColor = "#000"
body.style.margin = "1%"
body.style.padding = "2px"


let div_submit = document.getElementById("info_container")
let div_style = div_submit.style
div_style.display = "flex"
div_style.justifyContent = "center"
div_style.borderRadius = "3px"
div_style.position = "fixed"
div_style.margin = "3px"
div_style.alignItems = "center"
div_style.backgroundColor = "#fff"
div_style.flexDirection = "column"
div_style.top = "0px"
div_style.left = "0px"
div_style.right = "0px"


let h1 = div_submit.querySelector("h1")

let h2 = div_submit.querySelector("h2")
h2.style.fontStyle = "italic" 
h2.style.color = "#333333"

let h3 = div_submit.querySelector("h3")

let p = div_submit.querySelector("p")