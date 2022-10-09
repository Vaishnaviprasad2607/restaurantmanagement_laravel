<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
*{
    border: 0;
    padding: 0;
    margin: 0;
}
div{
    display:flex;
    align-items: center;
justify-content: center;
font-weight: bold;
font-family: big john;
width: 100%;
height: 100vh;

}
h2{
    font-size: 40px;
    background-color: rgb(122, 149, 68);
   color:whitesmoke;
    padding: 8px 24px;
    border-radius: 16px;
}
h3{

    background-color: rgb(122, 149, 68);
   color:whitesmoke;
    padding: 28px 24px;
    border-radius: 30px;  
    height:80px;
}
div:nth-child(1){
    background-image: url(https://i0.wp.com/saffronstreaks.com/wp-content/uploads/2017/09/ss_udupi_thali_collage.jpg?resize=650%2C650);
    
}
div:nth-child(2){
    background-color: rgb(190, 240, 224);
}
div:nth-child(3){
    height: 600px;
    background-image: url(https://thumbs.dreamstime.com/b/heritage-architecture-lake-huge-campus-udupi-sri-krishna-temple-karnataka-india-%E2%80%94jan-pond-asia-179499581.jpg) ;
    background-size:cover;
    background-attachment: fixed;

}
div:nth-child(4){
  height: 700px;
  background-image: url(https://theuniqueelements.files.wordpress.com/2019/04/1555360517884.jpg?w=720);

    

}
h2{
                animation:movedown 1s linear 1;
                animation-delay:1s;
                visibility:hidden;
                animation-fill-mode:forwards;
                    
                }
                @keyframes movedown{
                0%{
                    transform:translateY(-100px);
                    visibility:visible;
                }
               100%{
                    transform:translateY(0);
                    visibility:visible;
                }}

    </style>
    <title>parallax</title>
</head>
<body>
    <div id="parallax" >
        <h2>The cuisines of Udupi</h2>
    </div>
    <div id="parallax">
        <h3 > Udupi cuisine is a cuisine of South India.[1] It forms an important part of Tuluva-Mangalorean cuisine and takes its name from Udupi, a city on the southwest coast of India in the Tulunadu region. 
            Udupi cuisine is strictly vegetarian and has its origin in the Tulu Ashta Mathas of Udupi founded by Madhvacharya.[citation needed]
Udupi cuisine comprises dishes made primarily from grains, beans, vegetables, and fruits. The variety and range of dishes is wide, and a hallmark of the cuisine involves the use of locally available ingredients.</h3>
    </div>
    <div>
        <h2>Udupi, the temple town</h2>
        

        
    </div>
    <div id="parallax">
        <h2>Famous dishes </h2>
       
    </div>
    <script>
const parallax=document.getElementById("parallax");
window.addEventListener("scroll",function()
{
    let offset= window.pageYOffset;
   parallax.style.backgroundPositionY=offset*0.7+"px";
})

    </script>
</body>
</html>