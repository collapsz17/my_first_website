var count = 0;
document.getElementById("myButton").onlick = funcution() 
{
    count++;
    if (count % 2 == 0){
        document.getElementById("demo").innerHTML = "";
    } else {
        //создаем элемент image
        var img = document.createElement("img");
        //подключаем внешнее изображение
        img.src = "images/cat.jpg";
        //добавляем картинку в параграф
        document.getElementById("demo").appendChild(img);
    }
}