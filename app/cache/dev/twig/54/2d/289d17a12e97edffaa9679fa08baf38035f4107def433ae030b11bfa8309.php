<?php

/* uniSistemasBundle:hardware:buscarHardware.html.twig */
class __TwigTemplate_542d289d17a12e97edffaa9679fa08baf38035f4107def433ae030b11bfa8309 extends Twig_Template
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
        // line 6
        echo "
<script type=\"text/javascript\">
function submitform(obj) {
document.forms[\"selectHardware\"].submit();
}
</script>

";
        // line 14
        echo "<br>Buscar hardware:
<form id=\"selectHardware\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("hardware_responder_hardware");
        echo "\" method=\"POST\">
    
   <select name=\"nombre\" onChange=\"submitform(this)\">
       <option value=\"Todas\">Todas</option> 
       
       ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hardware"]) ? $context["hardware"] : $this->getContext($context, "hardware")));
        foreach ($context['_seq'] as $context["_key"] => $context["hard"]) {
            // line 21
            echo "            <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hard"]) ? $context["hard"] : $this->getContext($context, "hard")), "nombre"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hard"]) ? $context["hard"] : $this->getContext($context, "hard")), "nombre"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hard'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </select>  
    
    
   
    
</form>
    ";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:hardware:buscarHardware.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  55 => 21,  51 => 20,  43 => 15,  40 => 14,  31 => 6,  28 => 4,);
    }
}
