
//scroll up all the way up on the screen once cliked. 
function goUp(){
    let nav = document.getElementsByClassName("nav");
    nav[0].scrollIntoView({behavior: "smooth"});
}