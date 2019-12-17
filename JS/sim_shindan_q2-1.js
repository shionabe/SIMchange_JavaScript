

// 質問事項1
function q2_1Change(){
  radio = document.getElementsByName('q2-1')
  if(radio[0].checked) {
   document.getElementById('q3').style.display = "none";
 }else if(radio[1].checked) {
   document.getElementById('q3').style.display = "";
 }else if(radio[2].checked) {
   document.getElementById('q3').style.display = "";
 }else (radio[3].checked){
   document.getElementById('q3').style.display = "";
}

}
window.onload = entryChange1;
