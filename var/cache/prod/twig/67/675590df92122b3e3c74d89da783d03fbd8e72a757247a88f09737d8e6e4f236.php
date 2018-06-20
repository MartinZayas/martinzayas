<?php

/* ventas/graficaVentas.html.twig */
class __TwigTemplate_d64ed7395eabd833eb2578252139ed96f444a2fa3738af10c9fddeecf5ecb9cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
    <!-- Custom tabs (Charts with tabs)-->
    <div class=\"nav-tabs-custom\" style=\"cursor: move;\"><!-- Tabs within a box -->
        <ul class=\"nav nav-tabs pull-right ui-sortable-handle\">
            <li class=\"active\">
                <a href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
            </li>
            <li>
                <a href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
            </li>
            <li class=\"pull-left header\">
                <i class=\"fa fa-inbox\"></i> Ventas
            </li>
        </ul>
        <div class=\"tab-content no-padding\"> <!-- Morris chart - Sales -->
            <div class=\"chart tab-pane active\" id=\"revenue-chart\" 
              style=\"position: relative; height: 300px; 
              -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                <svg height=\"300\" version=\"1.1\" width=\"571\" 
                  xmlns=\"http://www.w3.org/2000/svg\" style=\"overflow: hidden; 
                  position: relative; left: -0.999996px; top: -0.210933px;\">
                    <desc style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                        Created with Raphaël 2.1.0</desc>
                    <defs style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                    </defs>
                    <text x=\"49.171875\" y=\"261.25\" text-anchor=\"end\" 
                      font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                      text-anchor: end; font-style: normal; font-variant: normal;
                      font-weight: normal; font-stretch: normal; font-size: 12px; 
                      line-height: normal; font-family: sans-serif;\" 
                      font-size=\"12px\" font-family=\"sans-serif\" 
                      font-weight=\"normal\">
                        <tspan dy=\"4.375\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                            0
                        </tspan>
                    </text>
                    <path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.671875,261.25H546\" 
                        stroke-width=\"0.5\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                    </path>
                    <text x=\"49.171875\" y=\"202.1875\" text-anchor=\"end\" 
                      font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                      text-anchor: end; font-style: normal; font-variant: normal; 
                      font-weight: normal; font-stretch: normal; font-size: 12px;
                      line-height: normal; font-family: sans-serif;\" 
                      font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\">
                        <tspan dy=\"4.375\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                            7,500
                        </tspan>
                    </text>
                    <path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.671875,202.1875H546\"
                        stroke-width=\"0.5\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                    </path>
                    <text x=\"49.171875\" y=\"143.125\" text-anchor=\"end\" 
                      font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\"
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                      text-anchor: end; font-style: normal; font-variant: normal; 
                      font-weight: normal; font-stretch: normal; font-size: 12px; 
                      line-height: normal; font-family: sans-serif;\" font-size=\"12px\" 
                      font-family=\"sans-serif\" font-weight=\"normal\">
                        <tspan dy=\"4.375\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                            15,000
                        </tspan>
                    </text>
                    <path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.671875,143.125H546\" 
                        stroke-width=\"0.5\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                    </path>
                        <text x=\"49.171875\" y=\"84.0625\" text-anchor=\"end\" 
                          font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" 
                          style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                          text-anchor: end; font-style: normal; font-variant: normal; 
                          font-weight: normal; font-stretch: normal; font-size: 12px; 
                          line-height: normal; font-family: sans-serif;\" 
                          font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\">
                            <tspan dy=\"4.375\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                                22,500
                            </tspan>
                        </text>
                    <path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.671875,84.0625H546\" 
                        stroke-width=\"0.5\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                              
                    </path>
                    <text x=\"49.171875\" y=\"25\" text-anchor=\"end\" 
                      font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                      text-anchor: end; font-style: normal; font-variant: normal; 
                      font-weight: normal; font-stretch: normal; font-size: 12px; 
                      line-height: normal; font-family: sans-serif;\" 
                      font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\">
                        <tspan dy=\"4.375\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                            30,000
                        </tspan>
                    </text>
                    <path fill=\"none\" stroke=\"#aaaaaa\" d=\"M61.671875,25H546\" 
                        stroke-width=\"0.5\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </path>
                    <text x=\"457.1378531287971\" y=\"273.75\" text-anchor=\"middle\" 
                      font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                      text-anchor: middle; font-style: normal; font-variant: normal; 
                      font-weight: normal; font-stretch: normal; font-size: 12px; 
                      line-height: normal; font-family: sans-serif;\" 
                      font-size=\"12px\" font-family=\"sans-serif\" 
                      font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\">
                        <tspan dy=\"4.375\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                            2013
                        </tspan>
                    </text>
                    <text x=\"241.75013289793438\" y=\"273.75\" text-anchor=\"middle\" 
                      font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#888888\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                      text-anchor: middle; font-style: normal; font-variant: normal; 
                      font-weight: normal; font-stretch: normal; font-size: 12px; 
                      line-height: normal; font-family: sans-serif;\" 
                      font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" 
                      transform=\"matrix(1,0,0,1,0,6.875)\">
                        <tspan dy=\"4.375\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                            2012
                        </tspan>
                    </text>
                    <path fill=\"#74a5c1\" stroke=\"none\" 
                      d=\"M61.671875,219.2605C75.20716889428918,219.772375,
                      102.27775668286756,222.83279687499999,115.81305057715674,
                      221.308C129.34834447144593,219.783203125,156.4189322600243,
                      209.33064139344262,169.9542261543135,207.062125C183.34239728888213,
                      204.81826639344263,210.11873955801946,205.072703125,
                      223.5069106925881,203.2585C236.89508182715673,
                      201.444296875,263.671424096294,195.09291034836065,
                      277.05959523086267,192.5485C290.5948891251519,
                      189.97612909836064,317.66547691373023,
                      182.684078125,331.20077080801946,
                      182.79137500000002C344.7360647023086,182.89867187500002,
                      371.806652490887,204.370381147541,
                      385.3419463851762,193.406875C398.73011751974485,
                      182.562537397541,425.5064597888821,
                      102.0254620165746,438.8946309234508,
                      95.56C452.1356792982989,89.16558701657459,
                      478.61777604799516,135.25469471153846,
                      491.85882442284327,141.967375C505.39411831713244,
                      148.82922596153847,532.4647061057108,
                      147.8854375,546,
                      149.858125L546,261.25L61.671875,
                      261.25Z\" fill-opacity=\"1\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                        fill-opacity: 1;\">
                          
                    </path>
                    <path fill=\"none\" stroke=\"#3c8dbc\" 
                      d=\"M61.671875,219.2605C75.20716889428918,
                      219.772375,102.27775668286756,
                      222.83279687499999,115.81305057715674,
                      221.308C129.34834447144593,219.783203125,
                      156.4189322600243,209.33064139344262,
                      169.9542261543135,207.062125C183.34239728888213,
                      204.81826639344263,210.11873955801946,
                      205.072703125,223.5069106925881,
                      203.2585C236.89508182715673,201.444296875,
                      263.671424096294,195.09291034836065,
                      277.05959523086267,192.5485C290.5948891251519,
                      189.97612909836064,317.66547691373023,
                      182.684078125,331.20077080801946,
                      182.79137500000002C344.7360647023086,182.89867187500002,
                      371.806652490887,204.370381147541,
                      385.3419463851762,193.406875C398.73011751974485,
                      182.562537397541,425.5064597888821,
                      102.0254620165746,438.8946309234508,
                      95.56C452.1356792982989,89.16558701657459,
                      478.61777604799516,135.25469471153846,
                      491.85882442284327,141.967375C505.39411831713244,
                      148.82922596153847,532.4647061057108,
                      147.8854375,546,149.858125\" stroke-width=\"3\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </path>
                    <circle cx=\"61.671875\" cy=\"219.2605\" r=\"4\" fill=\"#3c8dbc\" 
                      stroke=\"#ffffff\" stroke-width=\"1\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"115.81305057715674\" cy=\"221.308\" r=\"4\" 
                      fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"169.9542261543135\" cy=\"207.062125\" r=\"4\" 
                      fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"223.5069106925881\" cy=\"203.2585\" r=\"4\" 
                      fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"277.05959523086267\" cy=\"192.5485\" r=\"4\" 
                      fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"331.20077080801946\" cy=\"182.79137500000002\" 
                      r=\"4\" fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"385.3419463851762\" cy=\"193.406875\" r=\"4\" 
                      fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"438.8946309234508\" cy=\"95.56\" r=\"4\" 
                      fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"491.85882442284327\" cy=\"141.967375\" r=\"4\" 
                      fill=\"#3c8dbc\" stroke=\"#ffffff\" stroke-width=\"1\"
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"546\" cy=\"149.858125\" r=\"4\" fill=\"#3c8dbc\"
                      stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <path fill=\"#eaf2f5\" stroke=\"none\" 
                      d=\"M61.671875,240.25525C75.20716889428918,
                      240.03474999999997,102.27775668286756,
                      241.58415624999998,115.81305057715674,
                      239.37324999999998C129.34834447144593,237.16234375,
                      156.4189322600243,223.54686680327868,
                      169.9542261543135,222.56799999999998C183.34239728888213,
                      221.59977305327868,210.11873955801946,
                      233.45321875000002,223.5069106925881,
                      231.584875C236.89508182715673,229.71653125,
                      263.671424096294,209.48427920081969,
                      277.05959523086267,207.62125C290.5948891251519,
                      205.73774795081968,317.66547691373023,
                      214.63984374999998,331.20077080801946,
                      216.59875C344.7360647023086,218.55765624999998,
                      371.806652490887,232.59915778688523,
                      385.3419463851762,223.2925C398.73011751974485,
                      214.08700153688523,425.5064597888821,
                      148.35736101519333,438.8946309234508,
                      142.55012499999998C452.1356792982989,136.80670476519336,
                      478.61777604799516,170.62447836538462,
                      491.85882442284327,177.089875C505.39411831713244,
                      183.6989471153846,532.4647061057108,
                      190.40846875,546,
                      194.848L546,261.25L61.671875,
                      261.25Z\" fill-opacity=\"1\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                        fill-opacity: 1;\">
                          
                    </path>
                    <path fill=\"none\" stroke=\"#a0d0e0\" 
                      d=\"M61.671875,240.25525C75.20716889428918,
                      240.03474999999997,102.27775668286756,
                      241.58415624999998,115.81305057715674,
                      239.37324999999998C129.34834447144593,237.16234375,
                      156.4189322600243,223.54686680327868,
                      169.9542261543135,222.56799999999998C183.34239728888213,
                      221.59977305327868,210.11873955801946,
                      233.45321875000002,223.5069106925881,
                      231.584875C236.89508182715673,229.71653125,
                      263.671424096294,209.48427920081969,
                      277.05959523086267,207.62125C290.5948891251519,
                      205.73774795081968,317.66547691373023,
                      214.63984374999998,331.20077080801946,
                      216.59875C344.7360647023086,218.55765624999998,
                      371.806652490887,232.59915778688523,
                      385.3419463851762,223.2925C398.73011751974485,
                      214.08700153688523,425.5064597888821,
                      148.35736101519333,438.8946309234508,
                      142.55012499999998C452.1356792982989,136.80670476519336,
                      478.61777604799516,170.62447836538462,
                      491.85882442284327,177.089875C505.39411831713244,
                      183.6989471153846,532.4647061057108,
                      190.40846875,546,194.848\" stroke-width=\"3\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </path>
                    <circle cx=\"61.671875\" cy=\"240.25525\" r=\"4\" fill=\"#a0d0e0\" 
                      stroke=\"#ffffff\" stroke-width=\"1\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"115.81305057715674\" cy=\"239.37324999999998\" 
                      r=\"4\" fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"169.9542261543135\" cy=\"222.56799999999998\" r=\"4\" 
                      fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"223.5069106925881\" cy=\"231.584875\" r=\"4\" 
                      fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"277.05959523086267\" cy=\"207.62125\" r=\"4\" 
                      fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"331.20077080801946\" cy=\"216.59875\" r=\"4\" 
                      fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"385.3419463851762\" cy=\"223.2925\" r=\"4\" 
                      fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"438.8946309234508\" cy=\"142.55012499999998\" r=\"4\" 
                      fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"491.85882442284327\" cy=\"177.089875\" r=\"4\" 
                      fill=\"#a0d0e0\" stroke=\"#ffffff\" stroke-width=\"1\"
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                    <circle cx=\"546\" cy=\"194.848\" r=\"4\" fill=\"#a0d0e0\" 
                      stroke=\"#ffffff\" stroke-width=\"1\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </circle>
                </svg>
                <div class=\"morris-hover morris-default-style\" 
                  style=\"left: 14.6719px; top: 149px; display: none;\">
                    <div class=\"morris-hover-row-label\">2011 Q1</div>
                    <div class=\"morris-hover-point\" style=\"color: #a0d0e0\">
                        Item 1:
                        2,666
                    </div>
                    <div class=\"morris-hover-point\" style=\"color: #3c8dbc\">
                        Item 2:
                        2,666
                    </div>
                </div>            
            </div>
            <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
                <svg height=\"342\" version=\"1.1\" width=\"512\" 
                  xmlns=\"http://www.w3.org/2000/svg\" style=\"overflow: hidden; 
                  position: relative;\">
                    <desc style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                        Created with Raphaël 2.1.0
                    </desc>
                    <defs style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                        
                    </defs>
                    <path fill=\"none\" stroke=\"#3c8dbc\" 
                      d=\"M300.5,243.33333333333331A93.33333333333333,
                      93.33333333333333,0,0,0,388.7277551949771,
                      180.44625304313007\" stroke-width=\"2\" opacity=\"0\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                        opacity: 0;\">
                          
                    </path>
                    <path fill=\"#3c8dbc\" stroke=\"#ffffff\"
                      d=\"M300.5,246.33333333333331A96.33333333333333,
                      96.33333333333333,0,0,0,391.56364732624417,
                      181.4248826052307L428.1151459070204,194.03833029452744A135,
                      135,0,0,1,300.5,285Z\" stroke-width=\"3\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </path>
                    <path fill=\"none\" stroke=\"#f56954\"
                      d=\"M388.7277551949771,180.44625304313007A93.33333333333333,
                      93.33333333333333,0,0,0,216.78484627831412,
                      108.73398312817662\" stroke-width=\"2\" opacity=\"1\"
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                        opacity: 1;\">
                          
                    </path>
                    <path fill=\"#f56954\" stroke=\"#ffffff\"
                      d=\"M391.56364732624417,181.4248826052307A96.33333333333333,
                      96.33333333333333,0,0,0,214.09400205154566,
                      107.40757544301087L174.92726941747117,
                      88.10097469226493A140,140,0,0,1,432.8416327924656,
                      195.6693795646951Z\" stroke-width=\"3\" 
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </path>
                    <path fill=\"none\" stroke=\"#00a65a\" 
                      d=\"M216.78484627831412,
                      108.73398312817662A93.33333333333333,
                      93.33333333333333,0,0,0,300.47067846904883,
                      243.333328727518\" stroke-width=\"2\" opacity=\"0\" 
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                        opacity: 0;\">
                          
                    </path>
                    <path fill=\"#00a65a\" stroke=\"#ffffff\"
                      d=\"M214.09400205154566,107.40757544301087A96.33333333333333,
                      96.33333333333333,0,0,0,300.46973599126824,
                      246.3333285794739L300.4575884998742,284.9999933380171A135,
                      135,0,0,1,179.4120097954186,90.31165416754118Z\" 
                      stroke-width=\"3\"
                        style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                          
                    </path>
                    <text x=\"300.5\" y=\"140\" text-anchor=\"middle\" 
                      font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\"
                      font-size=\"15px\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                      text-anchor: middle; font-style: normal; 
                      font-variant: normal; font-weight: 800; 
                      font-stretch: normal; font-size: 15px; 
                      line-height: normal; font-family: Arial;\" 
                      font-weight=\"800\" transform=\"matrix(1,0,0,1,0,0)\">
                        <tspan dy=\"140\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                            In-Store Sales
                        </tspan>
                    </text>
                    <text x=\"300.5\" y=\"160\" text-anchor=\"middle\" 
                      font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\"
                      style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
                      text-anchor: middle; font-style: normal;
                      font-variant: normal; font-weight: normal; 
                      font-stretch: normal; font-size: 14px; 
                      line-height: normal; font-family: Arial;\" 
                      font-size=\"14px\" transform=\"matrix(1,0,0,1,0,0)\">
                        <tspan dy=\"160\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">
                            30
                        </tspan>
                    </text>
                </svg>
            </div>
        </div>
    </div> <!-- /.nav-tabs-custom -->
    ";
    }

    public function getTemplateName()
    {
        return "ventas/graficaVentas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ventas/graficaVentas.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/ventas/graficaVentas.html.twig");
    }
}
