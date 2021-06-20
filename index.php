<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>audi car</title>
    <style>
        #topbar{
    background-color: white;
    height: 80px;
    width: 100%;
}
#topbar img{
    height: 80px;
}
   
#topbar ul{
    float:right;
    margin-top: 25px;

}
#topbar ul li{
    display: inline;
    margin-right: 40px;
}
#topbar ul li a{
    color: RED;
    text-decoration: none;
    font-size: 20px;
}
body{
    margin: 0;
    padding: 0;

}
.header{
    height: 100vh;
    background-image: url("../image/audicar.jpg") ;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content:center;
    align-items: center;
    font-family: sans-serif;

}
h1{
    color: #fff;
    margin-bottom:70px ;
    font-size: 45px;
    letter-spacing: 2px;
    text-align:center ;
}
.Search-field{
    height: 50px;
    padding: 10px;
    border-radius:25px ;
    outline: none;

}
.Select Model{
    width: 400px;
}
.Select Type{
    width: 200px;
}
.Search-btn{
    height: 50px;
    width: 150px;
    background: #ffeb3b;
    border-radius: 25px;
    outline: none;
}
.search-btn:hover{
  background: #ffc107;
  cursor: pointer;
}
.form-box{
    background:rgba(0, 0, 0, 0.5) ;
    padding:30px;
}
#footer{
    width: 100%;
    height: 50px;
    background-color: rgb(0, 0, 0);
    clear: both;
    bottom:0px;
    top: 100px;
    padding-top: 10px;
    
  
    
}
#footer p{
    color:white ;
    float:right;
    margin-right: 20px;
    margin-top: 0px;
}
#footer ul li{
    color:white ;
    float:left;
    margin-right: 20px;
    text-decoration: none;
    display: inline;

}
    </style>
</head>
<body>
    <div id="topbar">
        <img src="image/logo_car.png" alt="">
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="registration.php">Register</a></li>
        </ul>
    </div>
    <div class="header">
        <form action="">
            <h1>Find the Best Vehicle For You</h1>
            <div class="form-box">
                <input type="text" class="Search-field Select Model" placeholder="Select Model"> 
                <input type="text" class="Search-field Select Type" placeholder="Select Type"> 
                <button class="search-btn" type="button">Search</button>
            </div>
        
        </form>

    </div>
    <div id="footer">
  
           <ul><li>copyright</li><ul>
               <p>piriyatharsan</p>
          
            
        

    </div>
    
</body>
</html>