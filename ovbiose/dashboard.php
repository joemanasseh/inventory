<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body{
            display: flex;
            background-image: url(Background%203.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
            justify-content: center;
            align-items: center;
            
        }
        
        .content{
            position: relative;
            width: 1100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 30px;
        }
        
        .content .card{
            position: relative;
            width: 260px;
            height: 260px;
            max-width: 300px;
            background: #fff;
            margin: 30px 10px;
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 202px rgba(0,0,0,0.9);
            transition: 0.5s ease-in-out;
            height: 310px;
            border-radius: 60px;
            transition: 1s;
        }
        
        .content .card .imgBg{
            position: relative;
            width: 220px;
            height: 220px;
            padding: 30px;
            background: #fff;
            border: 1px solid purple;
            top: -90px;
            border-radius: 76% 24% 31% 69% / 22% 31% 69% 78%;
             box-shadow: 0 5px 202px rgba(0,0,0,0.9);
        }
        
        .content .card .imgBg img{
            width: 110px;
            max-width: 100%;
            border-radius: 30px ;
            justify-content: center;
            align-items: center;
            background: #fff;
/*            padding: 30px;*/
        }
        
        .card h2{
            font-family: sans-serif;
            color: purple;
            font-weight: 400;
            text-align: center;
            font-size: 30px;
            text-transform: uppercase;
        }
        
        .card .card-content{
            position: relative;
            margin-top: -80px;
        }
        
        .card .card-content p{
            font-family: monospace;
            font-size: 16px;
            text-align: center;
            text-transform: capitalize;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .card .card-content a{
            margin-left: 80px;
            padding: 9px 19px;
            font-size: 18px;
            border-radius: 50px;
            text-decoration: none;
            color: white;
            background: purple;
            font-family: sans-serif;
            transition: all .4s ease;
        }
        
        .card .card-content a:hover{
            box-shadow: 0 5px 20px rgba(0,0,0,.9); 
        }
        
        .card:hover{
            transform: scale(1.2);
            box-shadow: 2px 2px 2px purple;
            z-index: 1;
        }
    </style>
</head>

<body>
    <main>
        <div class="content">
                <div class="card">
                    <div class="imgBg">
                        <img src="./iconmonstr-medical-10.svg">
                    </div>
                    <div class="card-content">
                        <h2>Pharmacy</h2>
                        <p>Navigate to pharmacy dashboard</p>
                        <a href="pharmacy/index.php">Log-in</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBg">
                        <img src="./iconmonstr-shopping-cart-2.svg">
                    </div>
                    <div class="card-content">
                        <h2>Supermarket</h2>
                        <p>Navigate to supermarket dashboard</p>
                        <a href="supermarket/index.php">Log-in</a>
                    </div>
                </div>
        </div>
    </main>
</body></html>