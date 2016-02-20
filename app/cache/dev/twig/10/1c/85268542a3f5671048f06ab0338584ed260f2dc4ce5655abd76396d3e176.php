<?php

/* ::base.html.twig */
class __TwigTemplate_101c85268542a3f5671048f06ab0338584ed260f2dc4ce5655abd76396d3e176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"cabecera\">
            ";
        // line 13
        $this->displayBlock('cabecera', $context, $blocks);
        // line 25
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 28
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 29
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 32
        $this->displayBlock('pie', $context, $blocks);
        // line 41
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "         <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisistemas/css/fuente.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 13
    public function block_cabecera($context, array $blocks = array())
    {
        // line 14
        echo "                <h1><font color=\"#CBCBFD\" size=\"30\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisistemas/imagenes/ordenador.png"), "html", null, true);
        echo "\"width=40px height=40px>Ivan-Sistemas</font></h1>
                <h3>
                    <ul id=\"nav\">
        <li id=\"nav-1\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("hardware");
        echo "\">Hardware</a></li>
\t<li id=\"nav-2\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("maquinasv");
        echo "\">Maquinas Virtuales</a></li>
\t<li id=\"nav-3\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("software");
        echo "\">Software</a></li>
        <li id=\"nav-4\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("hardware_buscar_hardware");
        echo "\">Buscar Hardware</a></li>
        <li id=\"nav-5\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("software_buscar_software");
        echo "\">Buscar Software</a></li>
                    </ul>
                </h3>
            ";
    }

    // line 28
    public function block_cuerpo($context, array $blocks = array())
    {
    }

    // line 32
    public function block_pie($context, array $blocks = array())
    {
        // line 33
        echo "                <h6><font color=\"#CBCBFD\">
                    CONTACTO -> ivanesfc@hotmail.com
                    <br>
                    SITIO WEB -> ivan-sistemas.com
                    <br>
                    CENTRO -> uni Eibar-Ermua
                    </font></h6>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  122 => 32,  117 => 28,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  86 => 14,  83 => 13,  76 => 7,  73 => 6,  67 => 5,  60 => 41,  58 => 32,  53 => 29,  51 => 28,  46 => 25,  44 => 13,  36 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
