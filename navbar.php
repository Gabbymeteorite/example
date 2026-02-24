<!DOCTYPE html>
<php>
    <style>
        body {
            margin: 0px;
            padding: 0px;
          }
    div {border: 1px solid black;
        width: 200px;
        display: block;
        height: 100vh;
    }

    #sidebar h2{
        margin: 0 0 12px 0; 
        font-size: 10px;
    }

    #sidebar ul{
        list-style: none;
    }

    #sidebar a{
        text-decoration: none;
        color: black;
        display:block;
        padding:8px 10px; /*top and right*/
        border-radius: 4px;
    }

    #sidebar li{
        margin-bottom: 10px
    }

    #sidebar a:hover{
        background: #a68cee;
    }

    #sidebar{
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        width: var;
        background-color: white;
        padding:16px;
        box-sizing: border-box;
        border-shadow: 2px 0 6px;
    }
    </style>

    <body>
        <div id="sidebar">
    <h1>Menu<h1>
    <ul>
    <li><a href="#Home"> Home</a></li>
    <li><a href="#Login" >Login</a></li>
    <li><a href= "#Colors" >Color</a></li>
    <li><a href= "#Hobbies" >Hobbies</a></li>
    </ul>
    </div>

</php>