const indicator = document.querySelector(".indicator");
const input = document.querySelector("#password");
const weak = document.querySelector(".weak");
const medium = document.querySelector(".medium");
const strong = document.querySelector(".strong");
const pstatus = document.querySelector(".password-status");
let regWeak = /[a-z]/;
let regMedium = /[\d+]/;
let regStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;

function trigger(){
    if(input.value != ""){
      indicator.style.display = "block";
      indicator.style.display = "flex";
      if(input.value.length <= 3 && (input.value.match(regWeak) || input.value.match(regMedium) || input.value.match(regStrong)))no=1;
      if(input.value.length >= 6 && ((input.value.match(regWeak) && input.value.match(regMedium)) || (input.value.match(regMedium) && input.value.match(regStrong)) || (input.value.match(regWeak) && input.value.match(regStrong))))no=2;
      if(input.value.length >= 6 && input.value.match(regWeak) && input.value.match(regMedium) && input.value.match(regStrong))no=3;
      if(no==1){
        weak.classList.add("active");
        pstatus.style.display = "block";
        pstatus.textContent = "Password strength: Weak";
        pstatus.classList.add("weak");
      }
      if(no==2){
        medium.classList.add("active");
        pstatus.textContent = "Password strength: Medium";
        pstatus.classList.add("medium");
      }else{
        medium.classList.remove("active");
        pstatus.classList.remove("medium");
      }
      if(no==3){
        weak.classList.add("active");
        medium.classList.add("active");
        strong.classList.add("active");
        pstatus.textContent = "Password strength: Strong";
        pstatus.classList.add("strong");
      }else{
        strong.classList.remove("active");
        pstatus.classList.remove("strong");
      }
      showBtn.style.display = "block";
    }else{
      indicator.style.display = "none";
      pstatus.style.display = "none";
    }
  }
