<nav class="nav">
    <div class="row"> 
        <ul>
            <div style="filter:alpha(opacity=50); opacity:0;">
            <li><i class=""></i></li>
            </div>
            
            <a href="sistema.php?" class="corno"><li><i class="bi bi-house-fill"> </i>| Home</li></a>
            
            <div style="filter:alpha(opacity=25); opacity:0;">
            <li><i class=""></i></li>
            </div>

            <a href="sistema.php?Tela=Cliente" class="corno"><li><i class="bi bi-person-square"> </i>| Cliente</li></a>
           
            <div style="filter:alpha(opacity=50); opacity:0;">
            <li><i class=""></i></li>
            </div>
            <a href="sistema.php?Tela=FaleConosco" class="corno"><li><i class="bi bi-person-square"> </i>| FaleConosco</li></a>

            <div style="filter:alpha(opacity=50); opacity:0;">
            <li><i class=""></i></li>
            </div>

            <a href="autenticarSair.php?Tela=Sair" class="corno"><li><i class="bi bi-box-arrow-right"> </i>| Sair</li></a>
            
            <div style="filter:alpha(opacity=50); opacity:0;">
            <li><i class=""></i></li>
            </div>

            <div>
                <li>
                    <p>ID: <?=$idCliente?></p>
                    <p>Nome: <?=$nomeCliente?></p>
                    <p>Login: <?=$loginCliente?></p>
                </li>
            </div>

        </ul>
    </div> 
</nav>
