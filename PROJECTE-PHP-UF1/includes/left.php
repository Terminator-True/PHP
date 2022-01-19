<style>
    .left{
        float:left;
        margin: auto;
        margin-top:10px;
        margin-left:10px;
        background-color:PaleTurquoise;
        width:20%;
        padding:20px;
        height:500px;
        box-shadow:1px 1px 5px black;
        text-align:center;
        color:white;
    }
    .left  button{
        background-color: PaleTurquoise;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 50px;
        font-size:130%;
    }
    .left  button:hover{
        background-color: white;
        color: black;
    }
    img{
        width:25px;
        padding-right:10px;        
}
</style>
<div class="left" >
<?php if ($_SESSION['login']===1) {include "includes/user-menu.php";}else {include "includes/non-user-menu.php";}?>
</div>