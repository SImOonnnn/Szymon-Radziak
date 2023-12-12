<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      body{
    background-color: #3BC41C;
    position: relative;
}
.klub1{
   
}
.wszystkie{

}
.klub{
    font-family: Arial, sans-serif;
    display: flex;
    align-items: flex-start;
    position: relative;
    border: 2px solid black;
    height: 160px;
    width: 550px;
    border-radius: 16px;
    margin-top: 12px;
    overflow: hidden;
}
.przycisk{
    position: absolute;
    top: 0;
    right: 0;
    border-top-right-radius: 16px;
    background-color: green;
    border: none;
    padding: 1rem 1rem;
}

/* .mojekonto{
    display: none;
    background-color: pink;
    position: absolute;
    right: 10%;
    top: 10%;
    border: 3px solid black;
    width: 1500px;
    height: 800px;
    overflow: hidden;
}
.mojekonto img{
    width: 500px;
    height: 500px;
    top: 50%;
    object-fit: cover;
    border-radius: 10px;
} */

.konto{
    display: flex;
    align-items: flex-start;
    position: relative;
    border: 1px solid black;
    height: 160px;
    width: 550px;
    border-radius: 16px;
    margin-top: 12px;
    background-color: pink;

   
}
.klub img{
    width: 100px;
    height: 100px;
    top: 50%;
    object-fit: cover;
    border-radius: 10px;
}

.abc{
    display: none;
    background-color: #BDE4A8;
    position: absolute;
    right: 3%;
    top: 3%;
    border: 3px solid black;
    width: 900px;
    height: 900px;
    color: white;
}
.abc img{
    bottom: 20%;
    left: 3%;
    width: 350px;
    height: 350px;
    margin-top: 10px;
    object-fit: cover;
    border-radius: 10px;
}

.abc1{
    display: none;
    background-color: #79B4A9;
    position: absolute;
    right: 3%;
    top: 3%;
    border: 3px solid black;
    width: 900px;
    height: 900px;
}
.abc1 img{
    bottom: 20%;
    left: 3%;
    width: 350px;
    height: 350px;
    margin-top: 10px;
    object-fit: cover;
    border-radius: 10px;
}

.abc2{
    display: none;
    background-color: #99F7AB;
    position: absolute;
    right: 3%;
    top: 3%;
    border: 3px solid black;
    width: 900px;
    height: 900px;
}
.abc2 img{
    bottom: 20%;
    left: 3%;
    width: 350px;
    height: 350px;
    margin-top: 10px;
    object-fit: cover;
    border-radius: 10px;
}
.abc3{
    display: none;
    background-color: #87BBA2;
    position: absolute;
    right: 3%;
    top: 3%;
    border: 3px solid black;
    width: 900px;
    height: 900px;
}
.abc3 img{
    bottom: 20%;
    left: 3%;
    width: 350px;
    height: 350px;
    margin-top: 10px;
    object-fit: cover;
    border-radius: 10px;
}

.pilkarze{
    background-color: #54714E;
    position: absolute;
    right: 3%;
    top: 3%;
    border: 3px solid black;
    width: 900px;
    height: 754px;
}
.pilkarze2{
    background-color: #006203;
    position: absolute;
    right: 3%;
    bottom: 3%;
    border: 3px solid black;
    width: 850px;
    height: 500px;
}
 .pilkarz{
    color: white;
    border: 2px solid black;
    width:  100px;
    height: 120px;
    display: flex;
}
.pilkarz img{
    width: 100px;
    height: 100px;

} 



    </style>
</head>
<body>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .myaccount{
            position: relative;
        }
        .modal{
            display: none;
            position: absolute;
            right: 0;
            margin-right: 1rem;
            margin-top: 3rem;
        }
        
        .show{
            display: flex;
            flex-direction: column;
        }
        header{
            justify-content: space-around;
            width: 100%;
            display: flex;
        }
        ul{
            width: 100%;
            display: flex;
            justify-content: space-around;
        }
        ul li{
            display: inline;
        }
        nav{
            width: 80%;
            padding: 1rem 5rem;
        }
       
        
    </style>
</head>
<body>
    <header> 
        <nav><ul>
            <li>
                <a href="Strona_glowna.html">Strona glowna</a>
            </li>
            <li>
                <a href="teamy.php">Teamy</a>
            </li>
            <li>
                <a href="Zawodnicy.html">Zawodnicy </a>
            </li>
        </ul></nav>
        <button class="myaccount" id="myaccount"> Click!
            <span></span> <img src="" alt="">
        </button>
        <div class="modal" id="modal">
            <a href="Moje kontoo.php">Moje konto</a>

            <a href="Logout.php">get outta here</a>
         </div>
    </header>
          

    <main>
        <div class="wszystkie">
            <div class="klub">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a7/Paris_Saint-Germain_F.C..svg/1200px-Paris_Saint-Germain_F.C..svg.png" alt="">
        <div class="klub1" id="real_madryt"> <h2>Paris saint germian</h2>
        ⭐⭐⭐⭐
        <br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum optio, laudantium ipsa nostrum expedita neque minima dolorem natus blanditiis exercitationem, voluptatibus consequatur voluptates rem veritatis, fugiat eveniet quae obcaecati? Atque deserunt ducimus autem at accusamus ipsa architecto assumenda aperiam, nemo, non perferendis ut qui aspernatur consectetur possimus labore perspiciatis veniam voluptatum, a sint! Doloribus 
        </div>
        <button class="przycisk" id="klub_bts" onclick="myFunction()">Więcej informacji</button>
        </div>






        <div class="klub">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png" alt="">
        <div class="klub1" id="fcbarcelona"><h2>fcbarcelona </h2>
        ⭐⭐⭐⭐⭐⭐⭐
    <br>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero est similique aspernatur. Eum ipsum tempore, optio illum officia nobis harum, a, mollitia assumenda cumque qui obcaecati possimus velit omnis delectus quas modi tenetur. Fuga fugit a, ad dolorum quae velit, repellat suscipit in eveniet natus dolore quasi iusto. Natus laboriosam, porro quam maiores, nemo exercitationem perspiciatis distinctio placeat totam alias voluptatem rem ipsa consequuntur impedit labore odio non accusantium! Exercitationem, repudiandae modi magni beatae, minima fuga quasi quis architecto, pariatur illum est ipsam consequatur vitae a eligendi autem quae. Rerum magnam dolorem molestias. Magnam facilis laborum doloribus error corrupti impedit.
        </div>
        <button class="przycisk" id="klub_bts" onclick="thirdFunction()">Więcej informacji</button>
        </div>






        <div class="klub">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/FC_Bayern_M%C3%BCnchen_logo_%282017%29.svg/1024px-FC_Bayern_M%C3%BCnchen_logo_%282017%29.svg.png" alt="">
        <div class="klub1" id="Juventus"><h2>Bayern Monachium</h2>
        ⭐⭐⭐
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eaque, illum cupiditate reprehenderit maxime neque, facere voluptate exercitationem aliquid et iure at nihil quas consectetur aliquam. Saepe voluptates magni harum impedit atque iure commodi ipsum. Voluptatem quibusdam alias error voluptatibus, perferendis quis officiis fuga numquam tempore, itaque, impedit totam hic veniam repellat nisi corporis dicta. Quaerat quas, error repellendus consequuntur officia sapiente. Eligendi asperiores obcaecati nihil suscipit repellat accusamus ab recusandae id mollitia. Obcaecati perferendis animi, modi atque, quis earum nostrum provident ullam nam molestiae placeat. Non optio sequi corporis molestiae tempore obcaecati beatae quos cumque ut, consequatur commodi esse.
        </div>
        <button class="przycisk" id="klub_bts" onclick="fourthFunction()">Więcej informacji</button>
        </div>






        <div class="klub">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Borussia_Dortmund_logo.svg/2048px-Borussia_Dortmund_logo.svg.png" alt="">
        <div class="klub1" id="borussia"><h2>borussia</h2>
        ⭐⭐⭐⭐⭐
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nesciunt soluta odit deleniti voluptatem cupiditate architecto sunt? Nesciunt facilis ut cupiditate quibusdam aliquid iusto odit sequi voluptates, error, consequatur quos, temporibus aut odio fugit consequuntur molestias. Minima saepe optio quod eius, aut aspernatur nobis pariatur in itaque. Est corrupti qui facilis reprehenderit harum beatae impedit, eligendi culpa, ipsam dolore sint! Reiciendis, impedit! Placeat nam quos reiciendis quae earum? Voluptas natus, rem fuga eaque rerum dolorum repellat possimus qui voluptates ullam et dicta voluptate. Quia consequuntur sed, maiores aut quae assumenda! Harum, sint beatae. Corrupti voluptates, quo laboriosam animi ipsa repellendus?
        </div>
        <button class="przycisk" id="klub_bts" onclick="fivethFunction()">Więcej informacji</button>
        </div>


</div>
    <div class="abc" id="myDIV">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a7/Paris_Saint-Germain_F.C..svg/1200px-Paris_Saint-Germain_F.C..svg.png" alt="">
        
                        <div class="pilkarze2">
            <div class="pilkarz">
                <img src="pilkarze.svg" alt="">
                <div>
                    <span>PMax</span>
                    <button class="aukcja">aukcja</button>
                    </div>
            </div>
        
        
            <div class="pilkarz">
                <img src="pilkarze.svg" alt="">
                <div>
                <span>PAdam</span>
                <button class="aukcja">aukcja</button>
                </div>
            </div>
        
        
            <div class="pilkarz">
                <img src="pilkarze.svg" alt="">
                <div>
                <span>PPatryk</span>
                <button class="aukcja">aukcja</button>
                </div>
            </div>
        
        
            <div class="pilkarz">
                <img src="pilkarze.svg" alt="">
                <div>
                <span>PWiktor</span>
                <button class="aukcja">aukcja</button>
                </div>
            </div>
        
        
            
        </div>
    </div>

        <div class="abc1" id="myDIV2">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png" alt="">
           
            <div class="pilkarze2">
                <div class="pilkarz">
                    <img src="pilkarze.svg" alt="">
                    <div>
                        <span>FMax</span>
                        <button class="aukcja">aukcja</button>
                        </div>
                </div>
            
            
                <div class="pilkarz">
                    <img src="pilkarze.svg" alt="">
                    <div>
                    <span>FAdam</span>
                    <button class="aukcja">aukcja</button>
                    </div>
                </div>
            
            
                <div class="pilkarz">
                    <img src="pilkarze.svg" alt="">
                    <div>
                    <span>FPatryk</span>
                    <button class="aukcja">aukcja</button>
                    </div>
                </div>
            
            
                <div class="pilkarz">
                    <img src="pilkarze.svg" alt="">
                    <div>
                    <span>FWiktor</span>
                    <button class="aukcja">aukcja</button>
                    </div>
                </div>
            
            </div>
        </div>

            <div class="abc2" id="myDIV3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/FC_Bayern_M%C3%BCnchen_logo_%282017%29.svg/1024px-FC_Bayern_M%C3%BCnchen_logo_%282017%29.svg.png" alt="">
                
                 <div class="pilkarze2">
                    <div class="pilkarz">
                        <img src="pilkarze.svg" alt="">
                        <div>
                            <span>BMax</span>
                            <button class="aukcja">aukcja</button>
                            </div>
                    </div>
                
                
                    <div class="pilkarz">
                        <img src="pilkarze.svg" alt="">
                        <div>
                        <span>BAdam</span>
                        <button class="aukcja">aukcja</button>
                        </div>
                    </div>
                
                
                    <div class="pilkarz">
                        <img src="pilkarze.svg" alt="">
                        <div>
                        <span>BPatryk</span>
                        <button class="aukcja">aukcja</button>
                        </div>
                    </div>
                
                
                    <div class="pilkarz">
                        <img src="pilkarze.svg" alt="">
                        <div>
                        <span>BWiktor</span>
                        <button class="aukcja">aukcja</button>
                        </div>
                    </div>
                
                 </div>
            </div>

                <div class="abc3" id="myDIV4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Borussia_Dortmund_logo.svg/2048px-Borussia_Dortmund_logo.svg.png" alt="">
                    
                    <div class="pilkarze2">
                        <div class="pilkarz">
                            <img src="pilkarze.svg" alt="">
                            <div>
                                <span>BoMax</span>
                                <button class="aukcja">aukcja</button>   
                                </div>
                        </div>
                    
                    
                        <div class="pilkarz">
                            <img src="pilkarze.svg" alt="">
                            <div>
                            <span>BoAdam</span>
                            <button class="aukcja">aukcja</button>
                            </div>
                        </div>
                    
                    
                        <div class="pilkarz">
                            <img src="pilkarze.svg" alt="">
                            <div>
                            <span>BoPatryk</span>
                            <button class="aukcja">aukcja</button>
                            </div>
                        </div>
                    
                    
                        <div class="pilkarz">
                            <img src="pilkarze.svg" alt="">
                            <div>
                            <span>BoWiktor</span>
                            <button class="aukcja">aukcja</button>
                            </div>
                        </div>
                    
                    </div>
                </div>




<!-- <div class="mojekonto" id="mykonto">
6875$
<img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/Manchester_United_FC_crest.svg/1200px-Manchester_United_FC_crest.svg.png" alt="">
<div class="pilkarze">

<div class="pilkarz">
<img src="pilkarze.svg" alt="">
    MaxVerstappen
    <button class="aukcja">aukcja</button>
</div>


<div class="pilkarz">
<img src="pilkarze.svg" alt="">
Adam
</div>


<div class="pilkarz">
<img src="pilkarze.svg" alt="">
Patryk
</div>


<div class="pilkarz">
<img src="pilkarze.svg" alt="">
Wiktor
</div>


<div class="pilkarz">
<img src="pilkarze.svg" alt="">
Konrad
</div>


<div class="pilkarz">
<img src="pilkarze.svg" alt="">
Marcin
</div>
 -->



</div>

</div>
<!-- <button class="konto" onclick="secondFunction()">pokaz moje konto</button> -->








    </main>


    <footer>&copy; created by Szymon Radziak</footer>


    <script>
     
            const modal = document.getElementById('modal');
            const myaccount = document.getElementById('myaccount');
            myaccount.addEventListener( 
                "click", ()=>{
                    modal.classList.toggle("show");
                }
            )
        
            
function myFunction() {
var x = document.getElementById("myDIV");
if (x.style.display == "none") {
x.style.display = "block";
} else {
x.style.display = "none";
}
}

function thirdFunction() {
var x = document.getElementById("myDIV2");
if (x.style.display == "none") {
x.style.display = "block";
} else {
x.style.display = "none";
}
}

function fourthFunction() {
var x = document.getElementById("myDIV3");
if (x.style.display == "none") {
x.style.display = "block";
} else {
x.style.display = "none";
}
}

function fivethFunction() {
var x = document.getElementById("myDIV4");
if (x.style.display == "none") {
x.style.display = "block";
} else {
x.style.display = "none";
}
}


function secondFunction() {
var x = document.getElementById("mykonto");
if (x.style.display == "none") {
x.style.display = "block";
} else {
x.style.display = "none";
}
}

    </script>
</body>
</html>
                