// JS и JQ Макфарланд.
$(document).ready(function() {
//(function () {
//    var div = document.getElementById('test');
//    var style = div.style;
//    console.log(div);
////        style.color = "red";
//    div.className = "css-class"
//})();

//(function(){
//    var div = document.getElementsByClassName('test');
//    console.log(div);
//    
//})();
//var message = 'За пределами функции';
//function warning (message) {
//    alert(message);
//}
//warning('Внутри функции');
//var questions = [
//    ['Сколько лун у планеты Земля?', 1],
//    ['Сколько лун у планеты Сатурн?', 31],
//    ['Сколько лун у планеты Венера?', 0]
//];
//alert(message);
//console.log(questions[0][1]);
//console.log(questions[1][1]);
//console.log(questions[2][1]);
//    $('#container') 
//        .height(100) 
//        .width(100)
//        .click(function() {
//        $('#errors').toggleClass('external2');
//    })
//    $('#container').css('padding', 10)
//    $('.external').css('border', '1px solid black')
//    $('#container').css({
//        'padding': '10',
//        'border' : '1px solid black',
//        'backgroundColor' : 'blue',
//    });
//    $(document).click(function(evt) {
//    var xPos = evt.pageX;
//    var yPos = evt.pageY;
//    alert('X:' + xPos + ' Y:' + yPos);
//    });
//    var linkVar = {message:'Привет от ссылки'};
//    var pVar = {message:'Привет от абзаца'};
//    function showMessage(evt) {
//        alert(evt.data.message);
//    }
//    $('a').on('mouseover',linkVar,showMessage);
//    $('p').on('click',pVar,showMessage);
//    $('#container').click(function(){
//        $(this).addClass('animateDiv');
//    });
//    var newPhoto = new Image();
//    newPhoto.src = '/jpg/sad1.jpg';
//    var photo = $('#photo');
//    photo.attr('src',newPhoto.src);
//    photo.attr('width',newPhoto.width);
//    photo.attr('hight',newPhoto.height);
//    var newPhoto = new Image();
//    newPhoto.src = '/jpg/sad1.jpg';
//    $('#photo').attr ({
//        scr: newPhoto.src,
//        width: newPhoto.width,
//        hight: newPhoto.height
//    });
//    $('#sad1').replaceWith('<img id="sad2" src="/jpg/sad2.jpg" alt="">')
    
//    var preloadImages = ['jpg/sad1.jpg', 'jpg/sad2.jpg', 'jpg/sad3.jpg'];
//    for (var i=0; i < preloadImages.length; i++){
//        $('<img>').attr('src',preloadImages[i]);
//    };
//    consol.log(preloadImages);
// с320
//    var newPhoto = new Image();
//    newPhoto.src = '/jpg/sad2.jpg';
//    $('#sad1').mouseover(function(){
//        $(this).attr('src', newPhoto.src);
//    });
//    console.log(newPhoto);,
// с321
//    var newPhoto = new Image();
//    newPhoto.src = '/jpg/sad2.jpg';
//    var oldSrc = $('#sad1').attr('src');
//    $('#sad1').hover(
//    function(){
//        $(this).attr('src', newPhoto.src);
//    },
//    function(){
//        $(this).attr('src', oldSrc);
//    });
//    var newWin = open('http://www.google.com/','theWin', 'height = 200, width = 200,');
    newWin.moveBy(500,500);
    $('#date').datepicker({
        numberOfMonths: 3,
        showButtonPanel: true,
    }); // datepicker
});