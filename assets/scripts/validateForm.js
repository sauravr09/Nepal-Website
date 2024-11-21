
// helper function; check to see if a radio input in the form has been answered.
function checkRadio(items){
    for (let i=0; i<items.length; i++){
        if (items[i].checked){
            return true;
        }
    }
    return false;
}

function validateForm(){
    
    // the different inputs of form
    let name = document.getElementById("name").value;
    const places = document.getElementsByName("place");
    const foods = document.getElementsByName("food");

    //check if user has put answer for places and foods
    let chosenPlace = checkRadio(places);
    let chosenFood = checkRadio(foods);

    //validate
    if ( (chosenPlace === false) || (chosenFood === false) || (name === "")){
        alert("Please answer all the questions before submitting!");
        return false;
    }


}

