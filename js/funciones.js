// const inner = document.querySelector(".inner");
// const left = document.querySelector(".left");
// left.addEventListener("mousemove", handleMousemove, false);
// function handleMousemove(event) {
//   let { width, height } = this.getBoundingClientRect();
//   let xAxis = event.offsetX / width * 100;
//   let yAxis = event.offsetY / height * 100;
//   inner.style.transform = `translate(-${xAxis}%, -${yAxis}%)`;
// }



window.onload = function () {
  init();
  // document.oncontextmenu = function(){return false}
  // doSomethingElse();
};
var aux;
var hdrop1;
var hdrop2;
var hdrop3;

var cont1=0;
var cont2=0;
var cont3=0;

function init() {
  document.querySelectorAll(".carousel").forEach(el => {
    el.children[0].classList.toggle('active');
  });

  document.querySelectorAll(".indicator").forEach(el => {
    el.addEventListener("click", e => {
      [...e.target.parentElement.children].forEach(sib => sib.classList.remove('active'));
      e.target.classList.toggle('active');
      [...e.target.parentElement.parentElement.parentElement.children[0].children[0].children].forEach(sib2 => sib2.classList.remove('active'));
      var valor = e.target.getAttribute("value");
      switch (valor) {
        case "1":
          e.target.parentElement.parentElement.parentElement.children[0].children[0].children[0].classList.toggle('active');
          break;
        case "2":
          e.target.parentElement.parentElement.parentElement.children[0].children[0].children[1].classList.toggle('active');
          break;
        case "3":
          e.target.parentElement.parentElement.parentElement.children[0].children[0].children[2].classList.toggle('active');
          break;

        default:
          break;
      }
    });
  });


  document.getElementById("dropdown1").addEventListener("click", e => {
    if (cont1 == 0) {
      hdrop1 = e.target.nextElementSibling.clientHeight;
      cont1++;
    }
    e.target.nextElementSibling.style.height = hdrop1 + "px";
    e.target.nextElementSibling.classList.toggle('active2');
  });
  document.getElementById("dropdown2").addEventListener("click", e => {
    if (cont2 == 0) {
      hdrop2 = e.target.nextElementSibling.clientHeight;
      cont2++;
    }
    e.target.nextElementSibling.style.height = hdrop2 + "px";
    e.target.nextElementSibling.classList.toggle('active2');
  });
  document.getElementById("dropdown3").addEventListener("click", e => {
    if (cont3 == 0) {
      hdrop3 = e.target.nextElementSibling.clientHeight;
      cont3++;
    }
    e.target.nextElementSibling.style.height = hdrop3 + "px";
    e.target.nextElementSibling.classList.toggle('active2');
  });



}

