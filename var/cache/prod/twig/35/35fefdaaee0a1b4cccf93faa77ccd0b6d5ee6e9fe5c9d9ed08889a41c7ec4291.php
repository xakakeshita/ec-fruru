<?php

/* __string_template__bdf57dc04c13dd303e28d5c8aff508d2197e2a9f887a6dd8cb4703c071c7694b */
class __TwigTemplate_f35f10fc042316ea0f589cf6c2eaaf41e99f905d76f48f5ebec566181ecba874 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        echo "
<div class=\"ec-categoryRole\">
    <div class=\"ec-role\">
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CATEGORY"), "html", null, true);
        echo "</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カテゴリ"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ec-categoryRole__list\">
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=2\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/fpo_355x150.png"), "html", null, true);
        echo "\">
                </a>
            </div>
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 26
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=1\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/fpo_355x150.png"), "html", null, true);
        echo "\">
                </a>
            </div>
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 31
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=5\">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/fpo_355x150.png"), "html", null, true);
        echo "\">
                </a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__bdf57dc04c13dd303e28d5c8aff508d2197e2a9f887a6dd8cb4703c071c7694b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 32,  63 => 31,  56 => 27,  52 => 26,  45 => 22,  41 => 21,  34 => 17,  29 => 15,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__bdf57dc04c13dd303e28d5c8aff508d2197e2a9f887a6dd8cb4703c071c7694b", "");
    }
}
