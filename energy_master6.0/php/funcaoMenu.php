<?php
if(!isset($_SESSION)){
    session_start();
}

    function ThisMenu(){
            
        if(isset($_SESSION["id_usuario"])){
            $id = $_SESSION["id_usuario"];
        }

        if(isset($_SESSION['logado'])){

        }else{

            $_SESSION['logado'] = 0;

        }
        
    
                $html = '<div class="hero_area">'
                        .'<!-- header section strats -->'
                        .'<header class="header_section">'
                        .'<div class="container">'
                            .'<nav class="navbar navbar-expand-lg custom_nav-container">'
                            .'<a class="navbar-brand" href="index.php">'
                                .'<img src="images/logo.png" alt="" />'
                                .'<span>'
                                .'BOMBFIT'
                                .'</span>'
                            .'</a>'
                            .'<div class="contact_nav" id="">'
                                .'<ul class="navbar-nav ">'
                                .'<li class="nav-item">'
                                    .'<a class="nav-link" href="service.php">'
                                    .'<img src="images/location.png" alt="" />'
                                    .'<span>EVENTOS</span>'
                                    .'</a>'
                                .'</li>'
                                .'<li class="nav-item">'
                                    .'<a class="nav-link" href="service.php">'
                                    .'<img src="images/call.png" alt="" />'
                                    .'<span>Telefone : 47 99544144</span>'
                                    .'</a>'
                                .'</li>';

                                if($_SESSION['logado'] > 0){
                                    $html .= '<li class="nav-item">'
                                        .'<a class="nav-link" href="usuarioperfil.php">'
                                        .'<span><img src="imagem_perfil/'.$id.'.png" alt="" /></span> '
                                        .'</a>'
                                        .'</li>';
                                }

                                $html .= '</ul>'
                            .'</div>'
                            .'</nav>'
                        .'</div>'
                    
                        .'</header>'
                        .'<!-- end header section -->'
                        .'<!-- slider section -->'
                        .'<section class=" slider_section position-relative">'
                        .'<div class="container">'
                            .'<div class="custom_nav2">'
                            .'<nav class="navbar navbar-expand-lg custom_nav-container ">'
                                .'<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"'
                                .'aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">'
                                .'<span class="navbar-toggler-icon"></span>'
                                .'</button>'
                    
                                .'<div class="collapse navbar-collapse" id="navbarSupportedContent">'
                                .'<div class="d-flex  flex-column flex-lg-row align-items-center">'
                                    .'<ul class="navbar-nav">'
                                        .'<li class="nav-item">'
                                            .'<a class="nav-link" href="index.php">PÁGINA OFICIAL<span class="sr-only">(current)</span></a>'
                                        .'</li>'
                                        .'<li class="nav-item">'
                                            .'<a class="nav-link" href="modalidades.php">MODALIDADES</a>'
                                        .'</li>';
                                        if($_SESSION['logado'] <> 0){
                                            if($_SESSION["idtipousuario_id"] == 3 || $_SESSION["idtipousuario_id"] == 4){
                                                $html .= '<li class="nav-item">'
                                                            .'<a class="nav-link" href="cadastroArea.php">CADASTRO</a>'
                                                        .'</li>';
                                            }
                                        }
                    
                                        if($_SESSION['logado'] == 0){
                                            $html .= '<li class="nav-item">'
                                                        .'<a class="nav-link" href="loginArea.php">LOGIN</a>'
                                                    .'</li>';
                                        }
                                        
                                    $html .=
                                    '</ul>'
                                .'</div>'
                                .'</div>'
                            .'</nav>'
                            .'</div>'
                        .'</div>';

        return $html;

    }

?>