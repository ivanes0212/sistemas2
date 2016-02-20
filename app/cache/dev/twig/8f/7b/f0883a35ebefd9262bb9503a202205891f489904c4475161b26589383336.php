<?php

/* uniSistemasBundle:Default:index.html.twig */
class __TwigTemplate_8f7bf0883a35ebefd9262bb9503a202205891f489904c4475161b26589383336 extends Twig_Template
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
        echo "<h1>Ivan-Sistemas</h1>

    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("hardware");
        echo "\">Hardware</a>
    <br>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("maquinasv");
        echo "\">Maquinas Virtuales</a>
    <br>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("software");
        echo "\">Software</a>
    ";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  40 => 9,  35 => 7,  31 => 5,  28 => 4,);
    }
}
