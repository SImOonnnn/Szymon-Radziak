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

        .mojekonto{
   
    background-color: #C16200;
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
}

.pilkarze{
    background-color: #881600;
    position: absolute;
    right: 3%;
    top: 3%;
    border: 3px solid black;
    width: 900px;
    height: 754px;
}

.pilkarz{
    color: white;
    border: 3px solid black;
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
        <div class="mojekonto" id="mykonto">
        <?php
        session_start();
                if ($_SESSION['firstName'] !== null) {
                    echo ($_SESSION['firstName']);
                } else {
                    echo ("DATA_ERROR");
                }
                ?>
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/Manchester_United_FC_crest.svg/1200px-Manchester_United_FC_crest.svg.png" alt="">
            <div class="pilkarze">
            
            <div class="pilkarz">
            <img src="pilkarze.svg" alt="">
            <div>
                <span>Max</span>
                <button class="aukcja">aukcja</button>
                </div>
            </div>
            
            
            <div class="pilkarz">
            <img src="pilkarze.svg" alt="">
            <div>
            <span>Adam</span>
            <button class="aukcja">aukcja</button>
            </div>
            </div>
            
            
            <div class="pilkarz">
            <img src="pilkarze.svg" alt="">
            <div>
            <span>Patryk</span>
            <button class="aukcja">aukcja</button>
            </div>
            </div>
            
            
            <div class="pilkarz">
            <img src="pilkarze.svg" alt="">
            <div>
            <span>Wiktor</span>
            <button class="aukcja">aukcja</button>
            </div>
            </div>
            
            
            <div class="pilkarz">
            <img src="pilkarze.svg" alt="">
            <div>
            <span>Konrad</span>
            <button class="aukcja">aukcja</button>
            </div>
            </div>
            
            
            <div class="pilkarz">
            <img src="pilkarze.svg" alt="">
            <div>
            <span>Marcin</span>
            <button class="aukcja">aukcja</button>
            </div>
            </div>
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
        
    </script>
</body>
</html>