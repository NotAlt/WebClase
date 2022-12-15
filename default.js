var url = document.location.href;
var imgPath = url.includes("pract") ? "./../../../img" : "./../../img";
imgPath =
  url.includes("formularios") ||
  url.includes("estilos") ||
  url.includes("ejfinales")
    ? "../../../../img"
    : imgPath;

function main() {
  document.body.innerHTML += `<br><a href="/"><img width="30px" src="${imgPath}/home.png"></a>`;
  document.body.innerHTML += `<br><a href="javascript:history.back()"><img width="30px" src="${imgPath}/left-arrow.png"></a>`;
}

setTimeout(main, 5);
