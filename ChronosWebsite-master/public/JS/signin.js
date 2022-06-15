var isShowPassWord = false;
var ShowPassWord=function(){
    isShowPassWord=!isShowPassWord;
    if(isShowPassWord ){
        document.querySelector(".form-passWord").type="text";
        document.querySelector(".icon-eye").innerHTML="visibility";
    }else{
        document.querySelector(".form-passWord").type="password";
        document.querySelector(".icon-eye").innerHTML="visibility_off";
    }
}