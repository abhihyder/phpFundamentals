
<style>
    *{margin:0; padding:0}
    #header{
        width:900px;
        margin:0 auto;
        background-color:#32a9b7;
        border-bottom: 3px solid #264206;
	
    }	

    #header h2{
        color: white;
        padding-left:15px;
        font-family:Algerian;
        
    }

    #header p{
        color: white;
        padding-left:15px;
        font-family:arial;	
            
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
</style>



<header>
    <div id="header">
        <h2>Times Mirror</h2>
        <p>Demo website</p>
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