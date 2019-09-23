


<header>
    <div id="header">
        <span class="floatleft">
            <h2>TimesHub</h2>
            <p>Demo website</p>
        </span>

        <span class="pro">
            <h3 class="proName" >Abhi Hyder</h3>
            <img class="proPic" src="images/20.09.19-20_22_10-20180427_171609.jpg" alt="">
        </span>
    </div>
</header>


<nav>
    <div id="nav">
        <ul>
            <li><a href="#"> Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#"> Service</a>
                <ul>
                    <li><a href="#">Dropdown</a></li>
                    <li><a href="#">Dropdown</a></li>
                    <li><a href="#">Dropdown</a></li>
                    <li><a href="#">Dropdown</a></li>
                </ul>
            </li>
            <li><a href="#">Producte</a></li>
        </ul>
    </div>
</nav>

<div id="content">
    <article>
        <h2>Where does it come from?</h2>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
    </article>
</div>

<footer>
        <div id="footer">
            <p>&copy;<?php echo date("Y");?> All right Reserved by "TimesHub" </P>
        </div>
</footer>



<style>
    *{margin:0; padding:0}
    #header{
        width:900px;
        margin:0 auto;
        background-color:#32a9b7;
        border-bottom: 3px solid #264206;
        overflow:hidden;
	
    }
    
  	
    #header .floatleft{
        float:left;
    }

    #header .floatleft h2{
        color: white;
        padding-left:15px;
        font-family:Algerian;
        
    }

    #header .floatleft p{
        color: white;
        padding-left:15px;
        font-family:arial;	
            
    }

    #header .pro{
        float:right;
        margin-top:10px;
    }

    #header .pro .proName{
        margin-top:7px;
        float:left;
        color:white;
        font-family: arial;
        font-size: 15px;
       
       
    }
    #header .pro .proPic{
        float:left;
        width:40px;
        border-radius: 20%;
        margin:0 10px;
    }

    #nav{
        background-color:white;
        width:900px;
        margin:0 auto;
        margin-bottom:30px;
        height:30.25px;
        border-bottom: 3px solid #264206;
    }

    #nav ul{
        list-style-type:none;
        background-color:white;
        z-index:99;
    }
            
    #nav ul li{
        float:left;
        border-right: 2px solid #dadada;
        position:relative;
    }

    #nav ul li:last-child{
        border:none;
    }

    #nav ul li a{
        text-decoration:none; 
        color:#464444;
        display:block;
        padding:6px 12px;
        
        
    }

    #nav ul li a:hover{
        background-color:#32a9b7;
    }

    #nav ul li ul{
        border-top: 3px solid #264206;
        position:absolute;
        left:-99999px;
        
    }
    #nav ul li{
        position:relative;
    }
    #nav ul li:hover ul{
        left:0;
    }
    #nav ul li ul li{
        float:none;
        border-right:none;
        width:100px;
        border-bottom: 2px solid #dadada;
    }

    #content{
        width:900px;
        margin:0 auto;
        
    }

    #content h2{
        color:#247327;
        
        
    }

    #content p{
        text-align:justify;
        font-family:arial;
        
    }
    #footer{
    background-color:#32a9b7;
    width:900px;
    margin:0 auto;
    padding:5px;
    margin-top:30px;
	
    }

    #footer p{
        text-align:center;
        font-weight:bold;
        color:white;
    }
</style>