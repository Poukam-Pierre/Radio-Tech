let idButtons={
    lundi: "#146e4d",
    mardi: "#34678f",
    mercredi: "#d99c41",
    jeudi: "#ba3127",
    vendredi: "#e7e7e7",
    samedi: "#146e4d",
    dimanche: "#d99c41",
}
    
function styleButton(event){
    document.getElementById("hour-info").style.backgroundColor = idButtons[event.target.id]
}