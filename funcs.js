function submitFunc(form){
  var flag = 0;
  var items = ["Hand mic", "Audio Console", "Speakers", "Projector"];
  var date = document.getElementById("date").value;
  var alertMsg = ("You have selected following equipment: \n");
  var equipment = [document.getElementById("equipment1").checked,
                  document.getElementById("equipment2").checked,
                  document.getElementById("equipment3").checked,
                  document.getElementById("equipment4").checked];
  var len = equipment.length;
  for(i=0 ; i<len ; i++){
    if (equipment[i]==true){
      alertMsg = (alertMsg.concat(items[i])+"\n");
      flag = 1;
    }
  }

  alertMsg = alertMsg.concat("\nFor "+date);

  if(flag==1){
    alert(alertMsg);
  }
  else{
    alert("No equipment choosen");
  }
}

function indate(date){
  
}
