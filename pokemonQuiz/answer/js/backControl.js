//??????
let questionNum = document.getElementById("questionNum").textContent;
console.log(questionNum);

//??????????????
let next = document.getElementById("Next");
let result = document.getElementById("Result");

//???10????????????????????
if( questionNum >= 10){

    if(result.hidden){
        result.hidden = false;
        next.hidden = true;
    }

}
