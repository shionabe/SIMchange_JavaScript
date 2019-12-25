

// 質問事項1
function q1Change(){
  radio = document.getElementsByName('q1')
  if(radio[0].checked) {
   document.getElementById('q2-1').style.display = "";
   document.getElementById('q2-2').style.display = "none";
    // var target = "#" + $(this).html();
    // var target = ".question_wrapper";
    // var th = $(target).position();
    // var sh = $(".question_wrapper").scrollTop();
    // var pos = th.top + sh + 1;
    // // var pos =  100;
    // // alert(pos);
    // // $(".question_wrapper").animate({
    // //   scrollTop: pos
    // // },"slow", "swing");
    // $(".question_wrapper").animate({ scrollTop: pos}, 500, 'swing');
　$("html,body").animate({scrollTop:$('#q2-1').offset().top});
  }else if(radio[1].checked) {
   document.getElementById('q2-1').style.display = "none";
   document.getElementById('q2-2').style.display = "";
   $("html,body").animate({scrollTop:$('#q2-2').offset().top});
}
}
// window.onload = entryChange1;

// 質問事項2
function q2_1Change(){
  radio = document.getElementsByName('q2')
  document.getElementById('q3').style.display = "block";
  $("html,body").animate({scrollTop:$('#q3').offset().top});

}
// window.onload = entryChange1;


// 質問事項2
function q2_2Change(){
  radio = document.getElementsByName('q2')
  document.getElementById('q3').style.display = "block";
  $("html,body").animate({scrollTop:$('#q3').offset().top});

}
// window.onload = entryChange1;


// 質問事項3
function q3Change(){
  radio = document.getElementsByName('q3')
  document.getElementById('q4').style.display = "block";
  $("html,body").animate({scrollTop:$('#q4').offset().top});

}
// window.onload = entryChange1;


// 質問事項4
function q4Change(){
  radio = document.getElementsByName('q4')
  if(radio[0].checked) {
     document.getElementById('q5').style.display = "none";
     // 結果ボタンの表示
     // document.getElementById('reslut').submit.disabled = false;
     // 結果ボタンの表示
     let formElements = document.forms.result;
     formElements.result_btn.disabled = false;
   }else if(radio[1].checked) {
     document.getElementById('q5').style.display = "";
     $("html,body").animate({scrollTop:$('#q5').offset().top});
   }
}
// window.onload = entryChange1;



// 質問事項5
function q5Change(){
  radio = document.getElementsByName('q5')
  if(radio[0].checked) {
    // document.getElementById('reslut').style.display = "block";
    // 結果ボタンの表示
    // 結果ボタンの表示
      let formElements = document.forms.result;
      formElements.result_btn.disabled = false;
    }else if(radio[1].checked) {
      let formElements = document.forms.result;
      formElements.result_btn.disabled = false;
    }else{
      document.getElementById('reslut').style.display = "block";
    }
  }
// window.onload = entryChange1;


// 診断結果の表示/非表示
function resultChange(){

}
