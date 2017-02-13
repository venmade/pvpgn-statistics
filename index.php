<html>
    <head>
        <title>
            <?php
            require_once("config.inc.php");
            global $site_name;
            echo $site_name;
            ?> - Ladders</title>
        <style type="text/css">
            a:link {
                color: #cba300;
                text-decoration: none;
            }
            a:visited {
                text-decoration: none;
                color: #cba300;
            }
            a:hover {
                text-decoration: underline;
            }
            a:active {
                text-decoration: none;
            }
        </style>
    </head>
    <body bgcolor="#000000" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
        <meta http-equiv=Content-Type content="text/html; charset=utf-8" />
        <link href="themes/bnet/images/main/war3-human-ie.css" type=text/css rel=stylesheet />
        <link href="themes/bnet/images/main/war3-ladder-ranking.css" type=text/css rel=stylesheet />
        <script>
            function MM_reloadPage(init) {
                if (init == true)
                    with (navigator) {
                        if ((appName == "Netscape") && (parseInt(appVersion) == 4)) {
                            document.MM_pgW = innerWidth;
                            document.MM_pgH = innerHeight;
                            onresize = MM_reloadPage;
                        }
                    }
                else if (innerWidth != document.MM_pgW || innerHeight != document.MM_pgH) {
                    location.reload();
                }
            }
            MM_reloadPage(true);
        </script>
        <style type="text/css">
            .style2 {
                font-size: 8pt;
            }
        </style>
        <script src="themes/bnet/images/main/layerFunctions.js"></script>
        <script src="themes/bnet/images/main/detection2.js"></script>
        <script src="themes/bnet/images/main/detection.js"></script>
        <div id="mouseTrap" style="z-index: 50; visibility: hidden; width: 100%; position: absolute; text-align: center; height: 460px;">
            <a 
                onMouseOver="hideLayer('gatewayMenu');
                hideLayer('gameMenu');
                hideLayer('sectionMenu');
                hideLayer('mouseTrap');" 
                href="<?php echo $ladderroot ?>stats.php?game=&amp;type=">
                <img height="100%" src="themes/bnet/images/main/pixel.gif" width="100%" border="0" />
            </a>
        </div>
        <table class="mainTable" height="100%" cellspacing="0" cellpadding="0" width="100%" border="0">
            <tbody>
                <tr height="75">
                    <td style="background-position: left 50%; background-image: url(themes/bnet/images/main/left-bg.gif); background-repeat: repeat-"valign=top" colspan="3">
                        <table cellspacing="0" cellpadding="0" width="100%" background="themes/bnet/images/main/top-bg.gif" border="0">
                            <tbody>
                                <tr>
                                    <td width="15">
                                        <img height="75" src="themes/bnet/images/main/top-left.gif" width="15" />
                                    </td>
                                    <td align="middle" bordercolor="0">
                                        <table width="0%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td width="436" height="75" background="themes/bnet/images/main/GS_Laddersnew.gif">
                                                    <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0" background="themes/bnet/images/main/GS_Ladders.gif">
                                                        <tr>
                                                            <td height="33" colspan="2">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="65">&nbsp;</td>
                                                            <td>
                                                                <table width="292" height="100%" border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td valign="top" width="111">
                                                                                <div id="gameMenu" style="z-index: 100; visibility: hidden; width: 111px; position: absolute">
                                                                                    <table cellspacing="0" cellpadding="0" width="100%">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class="headerOutline" width="100%" bgcolor="black">
                                                                                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td valign="middle" align="center" class="menuHeader">
                                                                                                                    <small>
                                                                                                                        <strong>
                                                                                                                            <a class="button">
                                                                                                                                <img height="16" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Warcraft II: BNE
                                                                                                                                <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                                            </a>
                                                                                                                        </strong>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=W2BN&type=0">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Normal
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=W2BN&type=1">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Ladder
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td valign="middle" align="center" class="menuHeader">
                                                                                                                    <small>
                                                                                                                        <strong>
                                                                                                                            <a class="button">
                                                                                                                                <img height="16" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Reign of Chaos
                                                                                                                                <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                                            </a>
                                                                                                                        </strong>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=WAR3&type=solo">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Solo
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=WAR3&type=team">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Team
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=WAR3&type=ffa">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />FFA
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td valign="middle" align="center" class="menuHeader">
                                                                                                                    <small>
                                                                                                                        <strong>
                                                                                                                            <a class="button">
                                                                                                                                <img height="16" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Frozen Throne
                                                                                                                                <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                                            </a>
                                                                                                                        </strong>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=W3XP&type=solo">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Solo
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=W3XP&type=team">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Team
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=W3XP&type=ffa">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />FFA
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <table cellspacing="0" cellpadding="7" width="100%" border="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div align="center">
                                                                                                    <small>
                                                                                                        <a onmouseover="showLayer('gameMenu');
                                                                                                                showLayer('mouseTrap');" href="<?php echo $ladderroot ?>stats.php?game=W3XP&type=solo">
                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Warcraft
                                                                                                            <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                        </a>
                                                                                                    </small>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                            <td width="1">
                                                                                <img height="22" src="themes/bnet/images/main/pixel.gif" width="1" />
                                                                            </td>
                                                                            <td valign="top" width="89">
                                                                                <div id="gatewayMenu" style="z-index: 101; visibility: hidden; width: 89px; position: absolute">
                                                                                    <table cellspacing="0" cellpadding="0" width="100%">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class="headerOutline" width="100%" bgcolor="black">
                                                                                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td valign="middle" align="center" class="menuHeader">
                                                                                                                    <small>
                                                                                                                        <strong>
                                                                                                                            <a class="button">
                                                                                                                                <img height="16" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Starcraft
                                                                                                                                <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                                            </a>
                                                                                                                        </strong>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=STAR&type=0">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Normal
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=STAR&type=1">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Ladder
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td valign="middle" align="center" class="menuHeader">
                                                                                                                    <small>
                                                                                                                        <strong>
                                                                                                                            <a class="button">
                                                                                                                                <img height="16" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Broodwar
                                                                                                                                <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                                            </a>
                                                                                                                        </strong>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=SEXP&type=0">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Normal
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=SEXP&type=1">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Ladder
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <table cellspacing="0" cellpadding="7" width="100%" border="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div align="center">
                                                                                                    <small>
                                                                                                        <a onmouseover="showLayer('gatewayMenu');
                                                                                                                showLayer('mouseTrap');" href="<?php echo $ladderroot ?>stats.php?game=SEXP&type=0">
                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Starcraft
                                                                                                            <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                        </a>
                                                                                                    </small>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                            <td width="1">
                                                                                <img height="22" src="themes/bnet/images/main/pixel.gif" width="1" />
                                                                            </td>
                                                                            <td width="105" valign="top" bordercolor="0">
                                                                                <div id="sectionMenu" style="z-index: 100; visibility: hidden; width: 105px; position: absolute">
                                                                                    <table cellspacing="0" cellpadding="0" width="100%">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class="headerOutline" width="100%" bgcolor="black">
                                                                                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td valign="middle" align="center" class="menuHeader">
                                                                                                                    <small>
                                                                                                                        <strong>
                                                                                                                            <a class="button">
                                                                                                                                <img height="16" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Diablo
                                                                                                                                <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                                            </a>
                                                                                                                        </strong>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=DRTL&type=0">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Ladder
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td valign="middle" align="center" class="menuHeader">
                                                                                                                    <small>
                                                                                                                        <strong>
                                                                                                                            <a class="button">
                                                                                                                                <img height="16" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Diablo II
                                                                                                                                <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                                            </a>
                                                                                                                        </strong>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=D2DV&type=SC">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0">Normal
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=D2DV&type=HC">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0">HardCore
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td valign="middle" align="center" class="menuHeader">
                                                                                                                    <small>
                                                                                                                        <strong>
                                                                                                                            <a class="button">
                                                                                                                                <img height="16" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Diablo II: LOD
                                                                                                                                <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                                            </a>
                                                                                                                        </strong>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=D2XP&type=SC">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0">Normal
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="menuHeader" style="text-align: center">
                                                                                                                    <small>
                                                                                                                        <a class="button" href="<?php echo $ladderroot ?>stats.php?game=D2XP&type=HC">
                                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />HardCore
                                                                                                                        </a>
                                                                                                                    </small>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <table cellspacing="0" cellpadding="7" width="100%" border="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div align="center">
                                                                                                    <small>
                                                                                                        <a onmouseover="showLayer('sectionMenu');
                                                                                                                showLayer('mouseTrap');" href="http://gameserver.solo.by/gamestats/pvpgn/D2XP_ladder.php">
                                                                                                            <img height="7" src="themes/bnet/images/main/pixel.gif" width="3" border="0" />Diablo
                                                                                                            <img height="7" src="themes/bnet/images/main/pulldown-arrow.gif" width="11" border="0" />
                                                                                                        </a>
                                                                                                    </small>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="110">
                                                                                <img height="4" src="themes/bnet/images/main/pixel.gif" width="111" />
                                                                            </td>
                                                                            <td width="1">
                                                                                <img height="4" src="themes/bnet/images/main/pixel.gif" width="1" />
                                                                            </td>
                                                                            <td width="89">
                                                                                <img height="4" src="themes/bnet/images/main/pixel.gif" width="89" />
                                                                            </td>
                                                                            <td width="1">
                                                                                <img height="4" src="themes/bnet/images/main/pixel.gif" width="1" />
                                                                            </td>
                                                                            <td width="105" bordercolor="0">
                                                                                <img height="4" src="themes/bnet/images/main/pixel.gif" width="105" />
                                                                            </td>
                                                                        </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="15">
                                        <img src="themes/bnet/images/main/top-right.gif" width="15" height="75" border="0" />
                                    </td>
                                </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="background-position: left 50%; background-image: url(themes/bnet/images/main/left-bg.gif); background-repeat: repeat-y" width="5">
                        <img src="themes/bnet/images/main/pixel.gif" width="5" height="1" border="0" />
                    </td>
                    <td valign="top" align="middle" width="100%">
                        <div align="center">
                            <p>&nbsp;</p>
                            <table width="100%" height="370" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="33%" height="83">
                                        <div align="center">
                                            <a href="<?php echo $ladderroot ?>stats.php?game=W2BN&type=0">
                                                <img src="themes/bnet/images/main/BNE-logo.gif" width="227" height="71" border="0" />
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center"></div>
                                    </td>
                                    <td width="33%">
                                        <div align="center">
                                            <a href="<?php echo $ladderroot ?>stats.php?game=DRTL&type=0">
                                                <img src="themes/bnet/images/main/D1-logo.gif" width="202" height="56" border="0" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33%" rowspan="2">
                                        <div align="center">
                                            <a href="<?php echo $ladderroot ?>stats.php?game=WAR3&type=solo">
                                                <img src="themes/bnet/images/main/W3-logo.gif" width="191" height="94" border="0" />
                                            </a>
                                        </div>
                                    </td>
                                    <td height="72" valign="top">
                                        <div align="center">
                                            <a href="<?php echo $ladderroot ?>stats.php?game=STAR&type=0">
                                                <img src="themes/bnet/images/main/SC-logo.gif" width="235" height="37" border="0" />
                                            </a>
                                        </div>
                                    </td>
                                    <td width="33%" rowspan="2">
                                        <div align="center">
                                            <a href="<?php echo $ladderroot ?>stats.php?game=D2DV&type=SC">
                                                <img src="themes/bnet/images/main/D2-logo.gif" width="184" height="80" border="0" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="bottom">
                                        <div align="center">
                                            <a href="<?php echo $ladderroot ?>stats.php?game=SEXP&type=0">
                                                <img src="themes/bnet/images/main/SCX-logo.gif" width="241" height="59" border="0" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33%" height="108">
                                        <div align="center">
                                            <a href="<?php echo $ladderroot ?>stats.php?game=W3XP&type=solo">
                                                <img src="themes/bnet/images/main/W3X-logo.gif" width="185" height="94" border="0" />
                                            </a>
                                        </div>
                                    </td>
                                    <td><div align="center">
                                        </div>
                                    </td>
                                    <td width="33%">
                                        <div align="center">
                                            <a href="<?php echo $ladderroot ?>stats.php?game=D2XP&type=SC">
                                                <img src="themes/bnet/images/main/D2X-logo.gif" width="183" height="106" border="0" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p>&nbsp;</p>
                        </div>
                    </td>
                    <td width="5" background="themes/bnet/images/main/right-bg.gif">
                        <img src="themes/bnet/images/main/pixel.gif" width="5" height="1" border="0" />
                    </td>
                </tr>
                <tr>
                    <td colspan="3" valign=bottom style="background-position: left 50%; background-image: url(themes/bnet/images/main/left-bg.gif); background-repeat: repeat-y">
                        <div align="center">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
                                <tr>
                                    <td width="50%">
                                        <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="0">
                                            <tr>
                                                <td width="32">
                                                    <a href="<?php echo $homepage ?>">
                                                        <img src="themes/bnet/images/main/arrow-left.gif" width="32" height="52" border="0" />
                                                    </a>
                                                </td>
                                                <td background="themes/bnet/images/main/bot-left-bg.gif">
                                                    <table width="120" height="100%" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="120">
                                                                <small>
                                                                    <br />
                                                                    <a href="<?php echo $homepage ?>">Return to Home Page </a>
                                                                </small>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="90" background="themes/bnet/images/main/left-logo.GIF">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="117" bordercolor="0">
                                        <p>
                                            <a href="http://www.blizzard.com">
                                                <img src="themes/bnet/images/main/blizzlogo.gif" width="117" height="52" border="0" />
                                            </a>
                                        </p>
                                    </td>
                                    <td width="50%" bordercolor="0">
                                        <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="90" background="themes/bnet/images/main/right-logo.gif">&nbsp;</td>
                                                <td background="themes/bnet/images/main/bot-right-bg.gif">&nbsp;</td>
                                                <td width="15">
                                                    <img src="themes/bnet/images/main/bot-right.gif" width="15" height="52" border="0" />
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
