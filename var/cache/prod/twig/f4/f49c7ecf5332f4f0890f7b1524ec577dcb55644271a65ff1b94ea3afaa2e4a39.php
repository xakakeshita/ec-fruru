<?php

/* __string_template__b8e0dc05dec5f4e468ebdf590aef96e2aaa98d5735e6191562659a916a1f0d19 */
class __TwigTemplate_55741f654f31c623414ffa736131e64599cf627d9047e769bdd8338f91950349 extends Twig_Template
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
        echo "<div class=\"ec-footerRole\">
    <div class=\"ec-footerRole__inner\">
        <ul class=\"ec-footerNavi\">
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 15
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("当サイトについて"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 18
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_privacy");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("プライバシーポリシー"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_tradelaw");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("特定商取引法に基づく表記"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</a>
            </li>
        </ul>
        <div class=\"ec-footerTitle\">
            <div class=\"ec-footerTitle__logo\">
                <a href=\"";
        // line 29
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "</a>
            </div>
            <div class=\"ec-footerTitle__copyright\">copyright (c) ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo " all rights reserved.</div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b8e0dc05dec5f4e468ebdf590aef96e2aaa98d5735e6191562659a916a1f0d19";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 31,  63 => 29,  53 => 24,  45 => 21,  37 => 18,  29 => 15,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__b8e0dc05dec5f4e468ebdf590aef96e2aaa98d5735e6191562659a916a1f0d19", "");
    }
}
