const pics = [
    'url("images/main.png")',
    'url("images/pkg.png")',
    'url("images/maintr.png")',
    'url("images/mater.png")',
    'url("images/payrates.png")',
    'url("images/plaly.png")',
    'url("images/settings.png")',
    'url("images/site.png")',
    'url("images/ss.png")',
    'url("images/stateChart.png")',
    'url("images/Table.png")',
    'url("images/tools.png")',

];
const pic = document.querySelector('section');


function showImage(){
    var a = Math.floor(Math.random()*pics.length);
    console.log(a);
    var img = pics[a];
    console.log(img);
    pic.style.backgroundImage = img;
}
