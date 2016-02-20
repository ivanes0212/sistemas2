<?php

/* uniSistemasBundle::layout.html.twig */
class __TwigTemplate_d71d8ba6e82da810ae0a2d72c4619649c0b215dd9bf069583c54fb650aefb080 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "    

    

";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 45,  102 => 40,  90 => 34,  84 => 31,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  55 => 22,  52 => 21,  48 => 20,  31 => 5,  28 => 4,);
    }
}
