<?php

/* uniSistemasBundle:software:buscarSoftware.html.twig */
class __TwigTemplate_6714c88494de4a0c4e00c8d997dda7051fafa225cee17c74495d04a75521a03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniSistemasBundle::layout.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniSistemasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "<br>Buscar software:
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("software_responder_software");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"nombre\" value=\"Software a buscar\">
    <input type=\"submit\" value=\"OK\">
</form>
    ";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:software:buscarSoftware.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,);
    }
}
